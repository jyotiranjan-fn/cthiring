<?php
namespace App\Http\Controllers;

use App\Models\client;
use App\Models\ClientContact;
use App\Models\District;
use App\Models\State;
use App\Models\city;
use App\Models\Degree;
use App\Models\Position;
use App\Models\Qualification;
use App\Models\Interview;
use App\Models\Resume;
use App\Models\JobOffer;
use App\Models\Specialization;
use App\Models\Tempresume;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF as DomPDFPDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use mikehaertl\pdftk\Pdf;
class ResumeController extends Controller
{
    public function showresume()
    {
        //session()->forget(['job_name']);
        $result = Position::where('recruiters', session('USER_ID'))->get()->unique('client_name');

        // dd($result);
        $qualification = Qualification::orderBy('qualification_name', 'ASC')->get();
        $degree = Degree::all();
        $specialization = Specialization::all();

        return view('resume.resume', compact('result', 'specialization', 'degree', 'qualification'));
    }

    public function reset_resume()
    {
        session()->forget('showpopup');
        session()->forget('job_name');
        return response()->json('true');
    }

    public function fetch_position(Request $request)
    {

        $position['position'] = Position::where('client_name', $request->sta_id)->get()->unique('position_id');
        // dd( $position['position']);

        return response()->json($position);
    }
    public function resume_submit(Request $request)
    {

        $validated = $request->validate([
            'client' => 'required',
            'position' => 'required',
            'resume' => 'required',
        ], [
            'client.required' => 'Name required',

        ]);

        $ResumeName = rand() . '.' . $request->resume->extension();
        $randimg = $request->resume->move(('document/temp'), $ResumeName);
        $post = new Tempresume;
        $post->client_id = $request->client;
        $post->position_id = $request->position;
        $post->resumes = $ResumeName;
        $post->save();
        $last_id = $post->id;

        $request->session()->put('resume', $last_id);

        $resume_posi = $request->session()->get('resume');

        $pos_name = Tempresume::where('id', $resume_posi)->get();
        $client = $pos_name[0]['position_id'];

        //for position name
        $position_name = Position::where('position_id', $client)->distinct()->get('job_title');
        $request->session()->put('job_name', $position_name[0]->job_title);

        //for technical skil
        $position_tech = Position::where('position_id', $client)->get('technicalskils');
        $request->session()->put('position_tech', $position_tech[0]->technicalskils);
        //dd($position_tech);

        //for behaviour skil
        $position_behav = Position::where('position_id', $client)->get('behaviour_skils');
        $request->session()->put('position_behaviour', $position_behav[0]->behaviour_skils);
        //dd(session('position_behaviour'));
        $request->session()->put('showpopup', true);

        // dd(session('showpopup'));
        return redirect('/add/resume')->with('randimg', 'last_id', 'job_name', 'position_tech', 'position_behaviour');
    }
    public function insert_resume(Request $request)
    {
        $tech_count = count($request->technical);
        $beha_count = count($request->behavioural);
        //  dd($tech_count,$beha_count,$request->all());

        for ($i = 0; $i < $tech_count; $i++) {
            $technicalskills[] = $request->input('star_' . $i)[0];
        }
        // dd($request->input('bstar_50'));
        for ($j = 50; $j < $beha_count + 50; $j++) {
            $behavskills[] = $request->input('bstar_' . $j)[0];
        }
        $rand_pass_resume = Str::random(20);
        $totaldata = Resume::all();
        $result = count($totaldata);
        $resumecode = sprintf("%02d", $result + 1);
        $res_name = Tempresume::where('id', session('resume'))->get();

        File::move(public_path('document/temp/' . $res_name[0]->resumes), public_path('document/position/resume/' . $res_name[0]->resumes));


        $count = count($request->data);
        for ($i = 0; $i < $count; $i++) {
            $re_qualification_id1[] = $request->data[$i]['qualification'];
            $re_degree_id1[] = $request->data[$i]['degree'];
            $re_specialization_id1[] = $request->data[$i]['specialization'];
            $college_name1[] = $request->data[$i]['college'];

            $mark1[] = $request->data[$i]['marks'];
            $coursetype1[] = $request->data[$i]['coursetype'];
            $yr_passing1[] = $request->data[$i]['year'];
            $university1[] = $request->data[$i]['university'];
        }

        $count = count($request->data1);
        for ($i = 0; $i < $count; $i++) {
            $c_name1[] = $request->data1[$i]['c_name'];
            $designation1[] = $request->data1[$i]['designation'];
            $employmentperiod_from1[] = $request->data1[$i]['employmentperiod_from'];
            $employmentperiod_to1[] = $request->data1[$i]['employmentperiod_to'];
            $specialization1[] = $request->data1[$i]['specialization'];
            $certification1[] = $request->data1[$i]['certification'];
            $location1[] = $request->data1[$i]['location'];
            $vital_information1[] = $request->data1[$i]['vital_information'];
            $reporting1[] = $request->data1[$i]['reporting'];
        }

        //dd($request);
        $role = new Resume;

        $role->client_id = $res_name[0]->client_id;
        $role->position_id = $res_name[0]->position_id;
        $role->resume_file = $res_name[0]->resumes;
        $role->created_by = session('USER_ID');

        //dd($role);

        //1st form data
        $role->position_name = request('position');
        $role->name = request('candidatename');
        $role->email = request('email');
        $role->mobile = request('mobile');

        $role->dob = request('dob');
        $role->current_designation = request('designation');
        $role->year_experience = request('year');
        $role->month_experience = request('month');
        $role->notice_period = request('notice');
        $role->ctc_min = request('min_salary') . " " . request('salary_value');
        $role->ctc_max = request('max_salary') . " " . request('salary_value2');
        $role->gender = request('gender1');

        $role->marital_status = request('website2');
        $role->family_dependent = request('dependents');
        $role->present_location = request('present');
        $role->native_location = request('native');

        //2nd tab form data
        $role->re_qualification_id = json_encode($re_qualification_id1);
        $role->re_degree_id = json_encode($re_degree_id1);
        $role->re_specialization_id = json_encode($re_specialization_id1);
        $role->college_name = json_encode($college_name1);
        $role->mark = json_encode($mark1);
        $role->course_type = json_encode($coursetype1);
        $role->yr_passing = json_encode($yr_passing1);
        $role->university = json_encode($university1);

        //3rd tab form data

        $role->companyname = json_encode($c_name1);
        $role->designation = json_encode($designation1);
        $role->emp_period_form = json_encode($employmentperiod_from1);
        $role->emp_period_to = json_encode($employmentperiod_to1);
        $role->specialization = json_encode($specialization1);
        $role->certification = json_encode($certification1);
        $role->location = json_encode($location1);
        $role->vital_info = json_encode($vital_information1);
        $role->reporting = json_encode($reporting1);

        //4th tab form data
        $role->technical_rating = json_encode($request->technical);
        $role->behavioural_rating = json_encode($request->behavioural);

        $role->technical_star_rating = json_encode($technicalskills);
        $role->behavioural_star_rating = json_encode($behavskills);

        $role->assessment = request('consul_assessment');
        $role->other_inputs = request('other_input');
        $role->interview_availability = request('interview_availability');

        $role->resume_code = "CH" . $resumecode;

        $role->rand_password_pdf = $rand_pass_resume;



        $role->save();
        return redirect('position_view_details/' . $res_name[0]->position_id);
    }

    public function resum_view()
    {

        $view = Resume::all();
        return view('resume.resume_view', compact('view'));
    }

    public function resume_view_detail($id)
    {
        $view = Resume::findorfail($id);

        // $r = Resume::where('id', $id)->get('re_specialization_id');
        // $r1 = Resume::where('id', $id)->get('re_degree_id');

        //**resume details qualification tab fetch**//
        $resume_quali_fetch[] = json_decode($view->re_qualification_id);
        $resume_quali_fetch[] = json_decode($view->re_degree_id);
        $resume_quali_fetch[] = json_decode($view->re_specialization_id);
        $resume_quali_fetch[] = json_decode($view->college_name);
        $resume_quali_fetch[] = json_decode($view->mark);
        $resume_quali_fetch[] = json_decode($view->course_type);

        //**resume details Experience tab fetch**//
        $resume_experience[] = json_decode($view->designation);
        $resume_experience[] = json_decode($view->emp_period_form);
        $resume_experience[] = json_decode($view->emp_period_to);
        $resume_experience[] = json_decode($view->location);
        $resume_experience[] = json_decode($view->companyname);
        $resume_experience[] = json_decode($view->certification);
        $resume_experience[] = json_decode($view->specialization);
        $resume_experience[] = json_decode($view->vital_info);

        //**resume details qualification tab fetch**//
        $length = count($resume_quali_fetch[0]);
        //dd($resume_quali_fetch[0]);
        $result = [];
        for ($i = 0; $i < $length; $i++) {
            $temp = [];
            foreach ($resume_quali_fetch as $array) {
                $temp[] = $array[$i];
            }

            $result[] = $temp;
        }

        //**resume details Experience tab fetch**//
        $length1 = count($resume_experience[0]);
        $result1 = [];
        for ($i = 0; $i < $length1; $i++) {
            $temp1 = [];
            foreach ($resume_experience as $array) {
                $temp1[] = $array[$i];
            }

            $res[] = $temp1;
        }
        return view('resume.resume_viewdetails', compact('view', 'result', 'res'));
    }

    public function resume_pdf_candidate($id)
    {

        $view = Resume::findorfail($id);

        //**in dom_pfd qualification row fetch from thiscode**//
        $pdf_resume[] = json_decode($view->college_name);
        $pdf_resume[] = json_decode($view->re_degree_id);
        $pdf_resume[] = json_decode($view->re_specialization_id);
        $pdf_resume[] = json_decode($view->yr_passing);
        $pdf_resume[] = json_decode($view->mark);

        //**in dom_pfd career graph row fetch from thiscode**//
        $pdf_resume_career[] = json_decode($view->emp_period_form);
        $pdf_resume_career[] = json_decode($view->emp_period_to);
        $pdf_resume_career[] = json_decode($view->companyname);
        $pdf_resume_career[] = json_decode($view->designation);
        $pdf_resume_career[] = json_decode($view->location);

        //**in dom_pfd  areas of expertise row fetch from thiscode**//
        $pdf_resum[] = json_decode($view->specialization);

        //dd($pdf_resume);
        //$view = Resume::all();

        //**in pfd qualification row fetch from thiscode**//
        $length = count($pdf_resume[0]);
        $result = [];

        for ($i = 0; $i < $length; $i++) {
            $temp_pdf = [];
            foreach ($pdf_resume as $array) {
                $temp_pdf[] = $array[$i];
            }

            $result_pdf[] = $temp_pdf;
        }
        //dd($result_pdf);

        //**in pfd career graph row fetch from thiscode**//

        $length_pdf = count($pdf_resume_career[0]);
        $result = [];

        for ($i = 0; $i < $length_pdf; $i++) {
            $temp_pdf_career = [];
            foreach ($pdf_resume_career as $array) {
                $temp_pdf_career[] = $array[$i];
            }

            $result_pdf_car[] = $temp_pdf_career;
        }

        $count_pdf = count($pdf_resum[0]);
        $result = [];

        for ($i = 0; $i < $count_pdf; $i++) {
            $temp_pdfs = [];
            foreach ($pdf_resum as $array) {
                $temp_pdfs[] = $array[$i];
            }

            $res_pdf[] = $temp_pdfs;
        }

        $data = [
            'view' => $view,
            'result_pdf' => $result_pdf,
            'result_pdf_car' => $result_pdf_car,
            'res_pdf' => $res_pdf
        ];
        $pdf = FacadePdf::loadView('resume.resume_pdf', $data);
        return $pdf->download('invoice.pdf');

        //return view('resume.resume_pdf', compact('view', 'result_pdf', 'result_pdf_car', 'res_pdf'));
    }

    public function index(Request $request)
    {
        $user = Resume::latest()->paginate(5);

        if ($request->has('download')) {
            $pdf = FacadePdf::loadView('resume.index', compact('user'));
            return $pdf->download('pdfview.pdf');
        }

        return view('resume.index', compact('user'));
    }

 

    public function send_resume_individual($id)
    {
        // dd($id);
        $cv_send = Resume::find($id);
        $cv_send->cv_status = 1;

        $cv_send->cv_send_date = date('Y-m-d');

        $cv_send->save();
        return redirect()->back()->with('message', 'CV was successfully sent to the client');
    }
    public function screening_status_shortlist(Request $request, $id)
    {
        //dd($candidate_id, $pos_id, $client_id);

        $cv_send = Resume::find($id);
        $cv_send->cv_status = 2;
        $cv_send->save();

        $insert_interview = new Interview;
        $insert_interview->candidate_id = request('candidate_id');
        $insert_interview->position_id = request('pos_id');

        $insert_interview->client_id = request('client_id');

        $insert_interview->candidate_name = request('resume_candidate_name');
        $insert_interview->remark = request('remarks');
        $insert_interview->save();
        return redirect()->back()->with('msg', 'Candidate Shortlisted');
    }
    public function screening_status_rejected(Request $request, $id)
    {

        $cv_send = Resume::find($id);
        $cv_send->cv_status = 3;
        $cv_send->save();

        $insert_interview = new Interview;
        $insert_interview->candidate_id = request('candidate_id');
        $insert_interview->position_id = request('pos_id');

        $insert_interview->client_id = request('client_id');

        $insert_interview->candidate_name = request('resume_candidate_name');
        $insert_interview->screening_rejected_reason = request('reject_reson');
        $insert_interview->remark = request('remarks');

        $insert_interview->save();

        $request->session()->flash('delt', 'Candidate Rejected');
        return redirect()->back();
    }

    public function resume_edit_view($id)
    {

        $view = Resume::findorfail($id);
        $qualification = Qualification::orderBy('qualification_name', 'ASC')->get();
        $degree = Degree::all();
        $specialization = Specialization::all();

        // **resume details qualification tab fetch**//
        $resume_quali_fetch[] = json_decode($view->re_qualification_id);
        $resume_quali_fetch[] = json_decode($view->re_degree_id);
        $resume_quali_fetch[] = json_decode($view->re_specialization_id);
        $resume_quali_fetch[] = json_decode($view->college_name);
        $resume_quali_fetch[] = json_decode($view->mark);
        $resume_quali_fetch[] = json_decode($view->course_type);
        $resume_quali_fetch[] = json_decode($view->yr_passing);
        $resume_quali_fetch[] = json_decode($view->university);

        //**resume details Experience tab fetch**//
        $resume_experience[] = json_decode($view->companyname);
        $resume_experience[] = json_decode($view->designation);
        $resume_experience[] = json_decode($view->emp_period_form);
        $resume_experience[] = json_decode($view->emp_period_to);
        $resume_experience[] = json_decode($view->specialization);
        $resume_experience[] = json_decode($view->certification);

        $resume_experience[] = json_decode($view->location);

        $resume_experience[] = json_decode($view->vital_info);
        $resume_experience[] = json_decode($view->reporting);

        //**resume details qualification tab fetch**//
        $length = count($resume_quali_fetch[0]);
        //dd($resume_quali_fetch[0]);
        $result = [];
        for ($i = 0; $i < $length; $i++) {
            $temp = [];
            foreach ($resume_quali_fetch as $array) {
                $temp[] = $array[$i];
            }

            $edit_result[] = $temp;
        }

        //**resume details Experience tab fetch**//
        $length1 = count($resume_experience[0]);
        $result1 = [];
        for ($i = 0; $i < $length1; $i++) {
            $temp1 = [];
            foreach ($resume_experience as $array) {
                $temp1[] = $array[$i];
            }

            $edit_res[] = $temp1;
        }

        //dd($result1);
        //dd(json_decode($view->technical_star_rating));
        return view('resume.resume_edit', compact('view', 'edit_result', 'edit_res', 'qualification', 'degree', 'specialization'));
    }
    public function resume_edit_data(Request $request, $id)
    {

        //dd($request->all());

        $tech_count = count($request->technical);
        $beha_count = count($request->behavioural);
        //  dd($tech_count,$beha_count,$request->all());

        for ($i = 0; $i < $tech_count; $i++) {
            $technicalskills[] = $request->input('star_' . $i)[0];
        }
        // dd($request->input('bstar_50'));
        for ($j = 50; $j < $beha_count + 50; $j++) {
            $behavskills[] = $request->input('bstar_' . $j)[0];
        }

        $role = Resume::findorfail($id);

        // dd($request->all());

        $rand_pass_resume = Str::random(20);
        //dd($rand_pass_resume);

        $totaldata = Resume::all();
        //dd($res);

        $result = count($totaldata);

        // $resumecode = $result + 1;
        $resumecode = sprintf("%02d", $result + 1);

        //dd($resumecode);

        $count = count($request->data);
        for ($i = 0; $i < $count; $i++) {
            $re_qualification_id1[] = $request->data[$i]['qualification'];
            $re_degree_id1[] = $request->data[$i]['degree'];
            $re_specialization_id1[] = $request->data[$i]['specialization'];
            $college_name1[] = $request->data[$i]['college'];

            $mark1[] = $request->data[$i]['marks'];
            $coursetype1[] = $request->data[$i]['coursetype'];
            $yr_passing1[] = $request->data[$i]['year'];
            $university1[] = $request->data[$i]['university'];
        }

        $count = count($request->data1);
        for ($i = 0; $i < $count; $i++) {
            $c_name1[] = $request->data1[$i]['c_name'];
            $designation1[] = $request->data1[$i]['designation'];
            $employmentperiod_from1[] = $request->data1[$i]['employmentperiod_from'];
            $employmentperiod_to1[] = $request->data1[$i]['employmentperiod_to'];
            $specialization1[] = $request->data1[$i]['specialization'];
            $certification1[] = $request->data1[$i]['certification'];
            $location1[] = $request->data1[$i]['location'];
            $vital_information1[] = $request->data1[$i]['vital_information'];
            $reporting1[] = $request->data1[$i]['reporting'];
        }

        //dd($request);
        $role = new Resume;

        //$role->client_id = $res_name[0]->client_id;
        // $role->position_id = $res_name[0]->position_id;
        //$role->resume_file = $res_name[0]->resumes;
        $role->created_by = session('USER_ID');

        //dd($role);

        //1st form data
        $role->position_name = request('position');
        $role->name = request('candidatename');
        $role->email = request('email');
        $role->mobile = request('mobile');

        $role->dob = request('dob');
        $role->current_designation = request('designation');
        $role->year_experience = request('year');
        $role->month_experience = request('month');
        $role->notice_period = request('notice');
        $role->ctc_min = request('min_salary') . " " . request('salary_value');
        $role->ctc_max = request('max_salary') . " " . request('salary_value2');
        $role->gender = request('gender1');

        $role->marital_status = request('website2');
        $role->family_dependent = request('dependents');
        $role->present_location = request('present');
        $role->native_location = request('native');

        //2nd tab form data
        $role->re_qualification_id = json_encode($re_qualification_id1);
        $role->re_degree_id = json_encode($re_degree_id1);
        $role->re_specialization_id = json_encode($re_specialization_id1);
        $role->college_name = json_encode($college_name1);
        $role->mark = json_encode($mark1);
        $role->course_type = json_encode($coursetype1);
        $role->yr_passing = json_encode($yr_passing1);
        $role->university = json_encode($university1);

        //3rd tab form data

        $role->companyname = json_encode($c_name1);
        $role->designation = json_encode($designation1);
        $role->emp_period_form = json_encode($employmentperiod_from1);
        $role->emp_period_to = json_encode($employmentperiod_to1);
        $role->specialization = json_encode($specialization1);
        $role->certification = json_encode($certification1);
        $role->location = json_encode($location1);
        $role->vital_info = json_encode($vital_information1);
        $role->reporting = json_encode($reporting1);

        //4th tab form data
        $role->technical_rating = json_encode($request->technical);
        $role->behavioural_rating = json_encode($request->behavioural);

        $role->technical_star_rating = json_encode($technicalskills);
        $role->behavioural_star_rating = json_encode($behavskills);

        $role->assessment = request('consul_assessment');
        $role->other_inputs = request('other_input');
        $role->interview_availability = request('interview_availability');

        $role->resume_code = "CH" . $resumecode;

        $role->rand_password_pdf = $rand_pass_resume;

        if ($request->hasfile('resume')) {
            $destination = 'document/position/resume/' . $role->resume_file;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('resume');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('document/position/resume/', $filename);
            $role->resume_file = $filename;
        }

        // dd($role);

        $role->save();
        return redirect('/resumeview')->with('message', 'Resume Updated Successfully.');
    }

    public function approve_cv($id)
    {

        //  dd($id);
        $position_id = Resume::where('id', $id)->get('position_id');


        $cv_approve = Resume::where('id', $id)->update(['crm_status' => 1]);

        return redirect('/position_view_details/' . $position_id[0]->position_id)->with('message', 'Resume Approved Successfully.');
    }

    public function reject_cv_crm(Request $request, $id)
    {


        $position_id = Resume::where('id', $id)->get('position_id');
        $cv_rejected = Resume::where('id', $id)->update([
            'crm_status' => 2,
            'cv_rejected_remarks' => $request->reject_cvremark
        ]);

        $request->session()->flash('delt', 'Resume Rejected');
        return redirect('/position_view_details/' . $position_id[0]->position_id);
    }





    public function schedule_interview(Request $request,$id){
       //  dd($request->all(),$id,$request->interview_level);

        $schedule_interview = Resume::find($id);
       // dd($id);

        if ($request->interview_level == 1) {
            $interview_status = 4;
        } elseif ($request->interview_level == 2) {
            $interview_status = 8;
        } elseif ($request->interview_level == 3) {
            $interview_status = 12;
        } elseif ($request->interview_level == 4) {
            $interview_status = 16;
        } elseif ($request->interview_level == 5) {
            $interview_status = 20;
        }

        $schedule_interview->cv_status = $interview_status;
        $schedule_interview->save();


        $interview_level_data = new Interview;
        $interview_level_data->candidate_id = request('candidate_id');
        $interview_level_data->position_id = request('pos_id');
        $interview_level_data->client_id = request('client_id');


        $interview_level_data->candidate_name = request('cand_name_interview');
        $interview_level_data->interview_level = request('interview_level');
        $interview_level_data->interview_mode = request('interview_mode');
        $interview_level_data->interview_venue_adrs = request('interview_venue_adrs');
        $interview_level_data->interview_date = request('interview_date');
        $interview_level_data->interview_timeperiod = request('interview_time_period');
        $interview_level_data->interview_venue = request('interview_venue');

        $interview_level_data->interview_spoc = request('spoc_interview');
        $interview_level_data->client_contact_name = request('client_contact_name');
        $interview_level_data->client_contact_number  = request('client_contact_number');
        $interview_level_data->addition_info = request('additional_info');


         $interview_level_data->save();

        return redirect('/position_view_details/'.$request->pos_id)->with('message', ' Interview Scheduled.');
 
 
        
    }


    public function reschedule_interview(Request $request,$id)
    {
        //dd($request->all(),$id,$request->interview_level);
 
         $re_schedule_interview = Resume::find($id);
         //dd($schedule_interview);
 
            if($request->reschedule_interview_level==1)
           
             {
                 $interview_status=5;
             }
             elseif($request->reschedule_interview_level==2)
             {
                 $interview_status=9;
             }
             elseif($request->reschedule_interview_level==3)
             {
                 $interview_status=13;
             }
             elseif($request->reschedule_interview_level==4)
             {
                 $interview_status=17;
 
             }
             elseif($request->reschedule_interview_level==5)
             {
                 $interview_status=21;
             }
        
         $re_schedule_interview->cv_status = $interview_status;
         $re_schedule_interview->save();
 
 
         $re_interview_level_data = new Interview;
         $re_interview_level_data->candidate_id = request('re_candidate_id');
         $re_interview_level_data->position_id = request('re_pos_id');
         $re_interview_level_data->client_id = request('re_client_id');
 
 
         $re_interview_level_data->candidate_name = request('re_cand_name_interview');
         $re_interview_level_data->reschedule_reason = request('reschedule_reason');
         $re_interview_level_data->interview_level = request('reschedule_interview_level');
         $re_interview_level_data->interview_mode = request('re_interview_mode');
         $re_interview_level_data->interview_venue_adrs = request('re_interview_venue_adrs');
         $re_interview_level_data->interview_date = request('re_interview_date');
         $re_interview_level_data->interview_timeperiod = request('re_interview_time_period');
         $re_interview_level_data->interview_venue = request('re_interview_venue');
 
         $re_interview_level_data->interview_spoc = request('re_spoc_interview');
         $re_interview_level_data->client_contact_name = request('re_client_contact_name');
         $re_interview_level_data->client_contact_number  = request('re_client_contact_number');
         $re_interview_level_data->addition_info = request('re_additional_info');
         

          $re_interview_level_data->save();
          return redirect('/position_view_details/'.$request->re_pos_id)->with('message', 'Interview Reschedule Successfully');
 
 
        
    }


    public function select_interview(Request $request,$id)
    {
       // dd($request->interview_selected);

        $interview_select = Resume::find($id);
        if($request->net_interview_decision == 'applicable')
        {
           
          if($request->interview_selected==4 || $request->interview_selected==5)

            {
                
                $interview_status=6;
            }
            elseif($request->interview_selected==8 || $request->interview_selected==9)
            {
               
                $interview_status=10;
            }

            elseif($request->interview_selected==12 || $request->interview_selected==13)
            {
                
                $interview_status=14;
            }
            elseif($request->interview_selected==16 || $request->interview_selected==17)
            {
                $interview_status=18;
            }
            elseif($request->interview_selected== 20 || $request->interview_selected==21)
            {
               $interview_status=22; 
            }
        }
            else
            {
                $interview_status=22; 
            }

             $interview_select->cv_status = $interview_status;
             $interview_select->save();

             $interview_level_cv_status= Resume::where('id',$id)->get('cv_status');
             //dd($interview_level_cv_status[0]->cv_status);

             $interview_level_select = new Interview;

            $interview_level_select->candidate_id = request('candidate_id');
            $interview_level_select->position_id = request('pos_id');
            $interview_level_select->client_id = request('client_id');
 


             $interview_level_select->candidate_name = $request->candidate_name;
             $interview_level_select->remark =$request->remarks;
             $interview_level_select->net_interview_decision =$request->net_interview_decision;
             $interview_level_select->interview_status=1;
             
             
           if($interview_level_cv_status[0]->cv_status==6)

            {
                $interview_stage= "First Interview";
            }
            elseif($interview_level_cv_status[0]->cv_status== 10)
            {
                $interview_stage= "second Interview";
            }

            elseif($interview_level_cv_status[0]->cv_status== 14)
            {
                $interview_stage= "Third Interview";
            }
            elseif($interview_level_cv_status[0]->cv_status== 18)
            {
                $interview_stage="Four Interview";
            }
            elseif($interview_level_cv_status[0]->cv_status== 22)
            {
               $interview_stage= "Final Interview "; 
            }
            $interview_level_select->interview_stage=$interview_stage;
            $interview_level_select->save();
            return redirect('/position_view_details/'.$request->pos_id)->with('message', 'Interview Selected');


    } 

    public function reject_interview(Request $request,$id)
    { 

        $interview_reject= Resume::find($id);
        
        if($request->interview_rejected==4 || $request->interview_rejected==5)
        {
            $interview_result=7;
        }
        elseif($request->interview_rejected==8 || $request->interview_rejected==9)
        { 
            $interview_result=11;

        }
        elseif($request->interview_rejected==12 || $request->interview_rejected==13)
        {
            $interview_result=15;
        }
        elseif($request->interview_rejected==16 || $request->interview_rejected==17)
        {
            $interview_result=19;
        }
        elseif ($request->interview_rejected==20 || $request->interview_rejected==21) 
        {
           $interview_result=23;
        }

        $interview_reject->cv_status=$interview_result;
        $interview_reject->save();

        $interview_level_cv_status_reject= Resume::where('id',$id)->get('cv_status');
        

        $interview_level_reject = new Interview;
        $interview_level_reject->candidate_id = request('candidate_id');
        $interview_level_reject->position_id = request('pos_id');
        $interview_level_reject->client_id = request('client_id');

        $interview_level_reject->candidate_name = $request->candidate_name;
        $interview_level_reject->reject_interview_resn =$request->reject_interview_reason;
        $interview_level_reject->reject_interview_resn =$request->remarks;
        $interview_level_reject->interview_status=2;

         if($interview_level_cv_status_reject[0]->cv_status==7)

            {
                $interview_stage= "First Interview";
            }
            elseif($interview_level_cv_status_reject[0]->cv_status== 11)
            {
                $interview_stage= "second Interview";
            }

            elseif($interview_level_cv_status_reject[0]->cv_status== 15)
            {
                $interview_stage= "Third Interview";
            }
            elseif($interview_level_cv_status_reject[0]->cv_status== 19)
            {
                $interview_stage="Four Interview";
            }
            elseif($interview_level_cv_status_reject[0]->cv_status== 23)
            {
               $interview_stage= "Final Interview "; 
            }
            $interview_level_reject->interview_stage=$interview_stage;
            $interview_level_reject->save();
            return redirect('/position_view_details/'.$request->pos_id)->with('delt', 'Interview Rejected');

    }

    public function offer_accepted(Request $request,$id)
    {   //dd($request->all());
         $offer_accepted= Resume::find($id);

         if($request->offer_accept==22)
        {
            $interview_status=24;
        }

        $offer_accepted->cv_status=$interview_status;
        $offer_accepted->save();


        $offer_decission= Resume::where('id',$id)->get('cv_status');
        $job_offer_status = new JobOffer;

        $job_offer_status->candidate_id = request('candidate_id');
        $job_offer_status->position_id = request('pos_id');
        $job_offer_status->client_id = request('client_id');

        $job_offer_status-> candidate_name = $request->candidate_name;
        $job_offer_status-> job_offer_date =$request->offer_date;
        $job_offer_status-> offer_ctc =$request->offer_ctc;
        $job_offer_status-> offer_remark =$request->remarks;
        // $job_offer_status->interview_status=26;

        if($offer_decission[0]->cv_status==24)

            {
                $offer= "Offer Accepted";
            }

        $job_offer_status-> offer_decission =$offer;

        $job_offer_status->save();
        return redirect('/position_view_details/'.$request->pos_id)->with('message', 'Offer Accepted');
    }


    public function offer_rejected(Request $request,$id)
    {   //dd($request->all());
         $offer_rejected= Resume::find($id);

         if($request->offer_rejected==22)
        {
            $interview_status=25;
        }

        $offer_rejected->cv_status=$interview_status;
        $offer_rejected->save();


        $offer_decission_reject= Resume::where('id',$id)->get('cv_status');

        $job_offer_status = new JobOffer;

        $job_offer_status->candidate_id = request('candidate_id');
        $job_offer_status->position_id = request('pos_id');
        $job_offer_status->client_id = request('client_id');

        $job_offer_status-> candidate_name = $request->candidate_name;
        $job_offer_status-> offer_rejected_reason =$request->offer_rejected_reason;
        
        $job_offer_status-> offer_remark =$request->offer_rejected_remarks;
        
        if($offer_decission_reject[0]->cv_status==25)

            {
                $offer= "Offer Rejected";
            }

        $job_offer_status-> offer_decission =$offer;

        $job_offer_status->save();
        return redirect('/position_view_details/'.$request->pos_id)->with('delt', 'Offer Rejected');
    }


    public function job_joined(Request $request,$id)
    {   //dd($request->all());

         $joined= Resume::find($id);

         if($request->joined==24 || $request->joined==28)
        {
            $interview_status=26;
        }

        $joined->cv_status=$interview_status;
        $joined->save();

        $job_joined= Resume::where('id',$id)->get('cv_status');

        $job_joined_status = new JobOffer;

        $job_joined_status->candidate_id = request('candidate_id');
        $job_joined_status->position_id = request('pos_id');
        $job_joined_status->client_id = request('client_id');

        $job_joined_status-> candidate_name = $request->candidate_name;
        $job_joined_status-> job_joined_date =$request->job_joined_date;
        $job_joined_status-> job_joined_remark =$request->job_joined_remark;

            if($job_joined[0]->cv_status==26)

            {
                $job_offer= "Joined";
            }

        $job_joined_status-> joined_decission =$job_offer;

        $job_joined_status->save();
        return redirect('/position_view_details/'.$request->pos_id)->with('message', 'Joined');
    }

    public function job_not_joined(Request $request,$id)
    {
        $not_joined= Resume::find($id);

         if($request->not_joined_candidate==24 || $request->not_joined_candidate==28)
        {
            $interview_status=27;
        }

        $not_joined->cv_status=$interview_status;
        $not_joined->save();

        $not_joined_job= Resume::where('id',$id)->get('cv_status');
        $job_status = new JobOffer;

        $job_status->candidate_id = request('candidate_id');
        $job_status->position_id = request('pos_id');
        $job_status->client_id = request('client_id');

        $job_status-> candidate_name = $request->candidate_name;
        $job_status-> not_joined_reason =$request->candidate_not_joined_reason;
        $job_status-> job_joined_remark =$request->not_joined_remarks;

        if($not_joined_job[0]->cv_status==27)

            {
                $job_offer= "Not Joined";
            }

        $job_status-> joined_decission =$job_offer;

        $job_status->save();
        return redirect('/position_view_details/'.$request->pos_id)->with('delt', 'Not Joined');

    }

    public function job_defered(Request $request,$id)
    {
         $difered= Resume::find($id);

         if($request->candidate_defered==24)
        {
            $interview_status=28;
        }

        $difered->cv_status=$interview_status;
        $difered->save();

        $differed_job= Resume::where('id',$id)->get('cv_status');
        $job_status = new JobOffer;

        $job_status->candidate_id = request('candidate_id');
        $job_status->position_id = request('pos_id');
        $job_status->client_id = request('client_id');

        $job_status-> candidate_name = $request->candidate_name;
        $job_status-> defered_new_joining_date =$request->new_joiningdate;
        $job_status-> defered_reason =$request->defered_reason;
        $job_status-> defered_remarks =$request->defered_remarks;

        
        if($differed_job[0]->cv_status==28)

            {
                $job_offer= "Defered";
            }

        $job_status-> joined_decission =$job_offer;

        $job_status->save();
        return redirect('/position_view_details/'.$request->pos_id)->with('delt', 'Defered');


    }







  





    public function getaddtess(Request $request)
    {

        $client_id = Resume::where('id', $request->resume_id)->get('client_id');
        // dd($client_id[0]->client_id);
        $get_address = client::where('id', $client_id[0]->client_id)->get(['door_no', 'street_name', 'pincode', 'area_name', 'state_id', 'city_id', 'district_id', 'client_name']);
        // dd($get_address);
        $get_city = city::where('id', $get_address[0]->city_id)->get('name');
        //dd($get_city);
        $get_district = District::where('id', $get_address[0]->district_id)->get('district_title');
        $get_state = State::where('state_id', $get_address[0]->state_id)->get('state_title');
        return response()->json([$get_address, $get_city, $get_district, $get_state]);
    }

    public function getspoc(Request $request)
    {
        //dd($request->all());
        $spoc_details = ClientContact::where('id', $request->id)->get();
        //dd($spoc_details);
        return response()->json($spoc_details);
    }
}
