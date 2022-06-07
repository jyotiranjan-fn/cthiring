<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\ClientContact;
use App\Models\FunctionalArea;
use App\Models\Industry;
use App\Models\Resume;
use App\Models\Position;
use App\Models\Qualification;
use App\Models\User;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function positionshow()
    {
        // dd(session('USER_ID'));
        $crmid = json_encode(session('USER_ID'));
        //dd($crmid);

        $client1 = client::
            whereJsonContains('crm_id', $crmid)
            -> where('is_approve', '=', 1)
            ->get();
        
        //where('is_approve', '=', 1)->get();
        // $client1 = client::all();
        //$c_contactname = ClientContact::all();
        $qualification1 = Qualification::all();
        $function_area1 = FunctionalArea::all();
        $industry1 = Industry::all();

        $requiter = user::
            where('role_id', '=', 8)->get();
        $crm_position = User::
            where('role_id', '=', 1)
            ->orwhere('role_id', '=', 5)
            ->orwhere('role_id', '=', 6)
            ->orwhere('role_id', '=', 7)
            ->where('status','=',1)->get();

        $jobcode = $this->jobcodeshow();
        $year = date("Y");

        return view('positions.position', compact('client1', 'qualification1', 'function_area1', 'industry1', 'requiter', 'crm_position', 'jobcode', 'year'));

    }

    public function jobcodeshow()
    {

        $year = date("Y");
        // $result1 = Position::whereYear('created_at', '=', $year)
        //     ->where('is_deleted', '=', 'N')
        //     ->distinct()
        //     ->get();
        $result1 = Position::select('job_code')
            ->whereYear('created_at', '=', $year)
            ->where('is_deleted', '=', 'N')

            ->distinct()
            ->get();

        $result = count($result1);
        // dd($result);
        $jobcode = sprintf("%02d", $result + 1);
        return $jobcode;

    }

    
    public function position_inserts(Request $request)
    {
        $position = $request->validate([
            'filetype' => 'required|mimes:pdf',
            ]);
        // dd($request);
        $crm = Client::where('id','=',$request->fullname)->get('crm_id');
                //dd($crm[0]->crm_id);
        $data1 = explode(',', $request->technical[0]);
        $data2 = explode(',', $request->behavioural[0]);

        $position_id = Position::distinct('job_code')->count();
        // $result = count($position_id);
        $pos_id = ($position_id + 1);

       
        //file attachment
        $file = rand() . '.' . $request->filetype->extension();
        // dd($imageName);
        $randfile = $request->filetype->move(('document/position/jd'), $file);
        //dd($randfile);

        //dd($role);
        $count = count($request->data);
        //dd($request->data);

        for ($i = 0; $i < $count; $i++) {
            $role = new Position;

            $role->position_id = $pos_id;
            $role->client_name = request('fullname');
            $role->spoc_name = request('client_contanct_name');

            $role->job_title = request('jobname');
            $role->job_location = request('joblocation');
            $role->job_code = request('jobcode');
            $role->min_experience = request('min_experience');
            $role->max_experience = request('max_experience');
            
            $role->annual_ctc_min = request('min_salary') . " " . request('salary_value');
            $role->annual_ctc_max = request('max_salary') . " " . request('salary_value2');

            $role->qualification = request('qualification');
            $role->functional_area = request('functionarea');
            $role->industry = request('industryname');

            $role->age_min = request('min_age');
            $role->age_max = request('max_age');
            $role->technicalskils = json_encode($data1);

            $role->behaviour_skils = json_encode($data2);

            $role->total_opening = request('opening');
            $role->crm = $crm[0]->crm_id;

            
            $role->billable_value = request('bill_value');

            $role->total_billable = request('total_billvalue');

            $role->joining_date = request('joiningdate');

            $role->gender = request('basic_radio');

            $role->resume_contact = request('resume1');

            $role->resume_type = request('resumetype1');

            $role->project_type = request('ptype1');
            $role->publish_website = request('website1');
            $role->job_description_ckediter = request('editor1');
            $role->file_attachment = $file;
            $role->created_by = session('USER_ID');

            $role->recruiters = $request->data[$i]['recruitername'];
            $role->position_no_recruiter = $request->data[$i]['position_no_recruiter'];

            $role->publish_web_responsibility = request('responsibility');
            $role->publish_web_industry = request('industry');
            $role->publish_web_competency = request('competency');

            // dd($role);
            $role->save();

        }

        // $job_title = request('jobname');
        // $job_location = request('joblocation');
        // $total_opening = request('opening');
        // $recruiters = $request->data[$i]['recruitername'];

        // $role = client :: where('id','=',$request->fullname)->get('crm_id');
        // // dd($role,$request->fullname);
        // $array=json_decode($role[0]->crm_id);
        // $createdby= session('USER_ID');        
        // array_push($array,$createdby);
        // $client_name= $role[0]->client_name; 
        // $city_id= $role[0]->city_id; 
        // $remarks= $role[0]->remarks; 
        // $approved_by= $role[0]->approved_by;
        
        
        
        // $user=user::where();
        
        // $data = [ 'created_by' => $createdby ,'job_title' => $job_title, 'job_location' => $job_location ,'total_opening' => $total_opening , 'recruiters' =>$recruiters ,'client_name' =>$client_name];
        // // $this->mail_send( $role->created_by ,$role->job_title ,$role->job_location ,$role->total_opening ,$role->recruiters ,$role->client_name);

        
        // $user['to'] = $smail;
     
        // FacadesMail::send('mail.otppassword', $data, function ($messages) use ($user) {
        //     $messages->to($user['to']);

        //     $messages->subject('CT-HIRING TEMP_PASSWORD');
        // });
        return redirect('/position')->with('message', ' Inserted Successfully');

    }
    

    public function position_approve_page()
    {
        $view = position::distinct('client_name')->get()->unique('position_id');
       
        return view('positions.position_approve', compact('view'));
    }

    public function position_approve_delts($position_id)
    {
        $requiter = user::
            where('role_id', '=', 8)->get();
        //dd($position_id);
        $view = position::findorfail($position_id);
        //dd($view);
        // $member = json_decode($view);
        ;

        return view('positions.position_approvedetails', compact('view','requiter'));
    }

    public function approve_position(Request $request)
    {

     $id = $request->position_id;
        // dd($id);
        $role = position::findorfail($id);
        $role->remarks = request('remarks');
        $role->is_approve = "1";
        $role->status = "1";
        $role->save();
        return redirect('/position_approve');
    }

    public function reject_position(Request $request)
    {

        //dd($request->all());
        $id = $request->position_id;
        $role = position::findorfail($id);
        $role->remarks = request('remarks');
        $role->is_approve = "2";
        $role->save();
        return redirect('/position_approve');

    }

    public function position_viewpage()
    {

      $view = position::distinct('client_name')->get()->unique('position_id');

        //dd($view);
        return view('positions.position_view', compact('view'));

    }

    public function position_view_delts($id)
    {

        //dd($id);
        $requiter = user::
            where('role_id', '=', 8)->get();
            
        $view = position::findorfail($id);
        $resume_delts = Resume::where('position_id', $view->position_id)->get();
        // $member = json_decode($view);

        return view('positions.position_viewdetails', compact('view','resume_delts','requiter'));

        //dd($view);

    }

    public function editposition(Request $request, $id)
    {
        //dd($id);
        //dd($request);

        $view = position::where('position_id',$id)->get();
        $qualification1 = Qualification::all();
        $function_area1 = FunctionalArea::all();
        $industry1 = Industry::all();
        $client_contact = ClientContact::where('id', '=', $view[0]->spoc_name)->get();
        $client1 = client::all();
        $requiter = user::where('role_id', '=', 8)->get();
        $crm_position = User::
            where('role_id', '=', 1)
            ->orwhere('role_id', '=', 5)
            ->orwhere('role_id', '=', 6)
            ->orwhere('role_id', '=', 7)->get();

        $position_techskill_fetch[] = json_decode($view[0]->technicalskils);

        //*position techskill fetch*//
        $length = count($position_techskill_fetch[0]);

        for ($i = 0; $i < $length; $i++) {
            $temp = [];
            foreach ($position_techskill_fetch as $array) {
                $temp[] = $array[$i];
            }

            $edit_result[] = $temp;
        }

        $position_bevrlskill_fetch[] = json_decode($view[0]->behaviour_skils);

        //*position techskill fetch*//
        $length = count($position_bevrlskill_fetch[0]);

        for ($i = 0; $i < $length; $i++) {
            $temp = [];
            foreach ($position_bevrlskill_fetch as $array) {
                $temp[] = $array[$i];
            }

            $edit_bevrl[] = $temp;
        }

        // $role->publish_web_responsibility = request('responsibility');
        //     $role->publish_web_industry = request('industry');
        //     $role->publish_web_competency = request('competency');

        return view('positions.position_edit', compact('view', 'client1', 'function_area1', 'industry1', 'client_contact', 'crm_position', 'requiter','edit_result','edit_bevrl','qualification1'));


    }
    public function updateposition(Request $request, $position_id)
            { 

        //dd($request->all());
            
        //         if ($request->hasfile('file')) {
        
        //             $file = $request->file('file');
        //             $extention = $file->getClientOriginalExtension();
        //             $filename = time() . '.' . $extention;
        //             $file->move('document/position/jd/', $filename);

        //         }
        //    // dd($request->file);
        //         Position::where('position_id',$position_id)->delete();
                
        //         $data1 = explode(',', $request->technical[0]);
        //         $data2 = explode(',', $request->behavioural[0]);
        //         $count = count($request->data);
        //         // dd($count);

        //         for ($i = 0; $i < $count; $i++) {

        //         $position = new Position;
        //         $position->position_id=$position_id;
        //         $position->client_name = request('fullname');
        //         $position->spoc_name = request('client_contanct_name');

        //         $position->job_title = request('jobname');
        //         $position->job_location = request('joblocation');
        //         $position->job_code = request('jobcode');
        //         $position->min_experience = request('min_experience');
        //         $position->max_experience = request('max_experience');

        //         // $position->annual_ctc_min = $request->input('min_salary') . $request->input('salary_value');
        //         // $position->annual_ctc_max = request('max_salary') . request('salary_value2');


        //         $position->annual_ctc_min = $request->input('min_salary') ." " . $request->input('salary_value');
        //         $position->annual_ctc_max = request('max_salary') . " ". request('salary_value2');

        //         $position->qualification = request('qualification');
        //         $position->functional_area = request('functionarea');
        //         $position->industry = request('industryname');

        //         $position->age_min = request('min_age');
        //         $position->age_max = request('max_age');

        //         $position->technicalskils = json_encode($data1);

        //         $position->behaviour_skils = json_encode($data2);

        //         $position->total_opening = request('opening');

        //         $position->crm = request('crm_name');
        //         $position->billable_value = request('bill_value');

        //         $position->total_billable = request('total_billvalue');

        //         $position->joining_date = request('joiningdate');

        //         $position->gender = request('basic_radio');

        //         $position->resume_contact = request('resume1');

        //         $position->resume_type = request('resumetype1');

        //         $position->project_type = request('ptype1');
        //         $position->publish_website = request('website1');
        //         $position->job_description_ckediter = request('editor1');
        //         $position->remarks = request('remarks');
        //         // $position->file_attachment = $file;
        //         $position->created_by = session('USER_ID');
        //         $position->is_approve = 0;

        //         $position->recruiters = $request->data[$i]['recruitername'];
        //         // dd($position->recruiters);
        //         $position->position_no_recruiter = $request->data[$i]['position_no_recruiter'];
        //         $position->file_attachment = $filename;


        //           //dd($position);
        //         $position->save();
                
                
        //         }
        //         return redirect('/positionview')->with('msg', 'Position Updated Successfully.');

        $position = Position::findOrNew($request->position_id);
        
        $data1 = explode(',', $request->technical[0]);
        $data2 = explode(',', $request->behavioural[0]);
        $count = count($request->data);
        // dd($count);

        for ($i = 0; $i < $count; $i++) {

        //$position = new Position;
        //$position->position_id=$position_id;
        $position->client_name = request('fullname');
        $position->spoc_name = request('client_contanct_name');

        $position->job_title = request('jobname');
        $position->job_location = request('joblocation');
        $position->job_code = request('jobcode');
        $position->min_experience = request('min_experience');
        $position->max_experience = request('max_experience');

        // $position->annual_ctc_min = $request->input('min_salary') . $request->input('salary_value');
        // $position->annual_ctc_max = request('max_salary') . request('salary_value2');


        $position->annual_ctc_min = $request->input('min_salary') ." " . $request->input('salary_value');
        $position->annual_ctc_max = request('max_salary') . " ". request('salary_value2');

        $position->qualification = request('qualification');
        $position->functional_area = request('functionarea');
        $position->industry = request('industryname');

        $position->age_min = request('min_age');
        $position->age_max = request('max_age');

        $position->technicalskils = json_encode($data1);

        $position->behaviour_skils = json_encode($data2);

        $position->total_opening = request('opening');

        $position->crm = request('crm');
        $position->billable_value = request('bill_value');

        $position->total_billable = request('total_billvalue');

        $position->joining_date = request('joiningdate');

        $position->gender = request('basic_radio');

        $position->resume_contact = request('resume1');

        $position->resume_type = request('resumetype1');

        $position->project_type = request('ptype1');
        $position->publish_website = request('website1');
        $position->job_description_ckediter = request('editor1');
        $position->remarks = request('remarks');
        $position->created_at = request('created');
        // $position->file_attachment = $file;
        $position->created_by = session('USER_ID');
        $position->is_approve = 0;

        $position->recruiters = $request->data[$i]['recruitername'];
        // dd($position->recruiters);
        $position->position_no_recruiter = $request->data[$i]['position_no_recruiter'];

        // dd($request->file);
        if ($request->hasfile('file')) {
            $request->validate([
            'file' => 'mimes:pdf',
            ]);
            $file = $request->file('file');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('document/position/jd/', $filename);
            $position->file_attachment = $filename;
        }else{
            
            $position->file_attachment = request('file_name');
        }
        
        //   dd($position);
        $position->save();
        
        
        }

        return redirect('/positionview')->with('msg', 'Position Updated Successfully.');   
                }
}