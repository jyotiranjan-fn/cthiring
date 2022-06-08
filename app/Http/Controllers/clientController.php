<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\client;
use App\Models\ClientContact;
use App\Models\client_location;
use App\Models\District;
use App\Models\Role;
use App\Models\State;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;
use Illuminate\Http\Request;

class clientController extends Controller
{
    //addclient page

    public function clientshow(Request $request)
    {

       $role_id = role::where('is_crm', '1')->pluck('id')->all();
        //dd($role_id);

        $crm_user = User::
            whereIn('role_id', $role_id)
            ->where('is_deleted', '=', 'N')
            ->get();
        //die;

        $state_name = State::all();
        //$roles = $request->session()->get('CLIENT_FULLNAME');

        return view('client.client', compact('crm_user', 'state_name'));

    }

   
    public function client_insert(Request $request)
    {

        // dd($request->all());

        //dd(json_encode($request->crm));
        $client = $request->validate([
            'clientname' => 'required',
            'phone' => 'numeric|required',
            'doorno' => 'required',
            'streetname' => 'required',
            'area' => 'required',
            'pincode' => 'required|max:999999|integer',
            // 'client_logo'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        
        if($request->client_logo != ''){
        $imageName = time() . '.' . $request->client_logo->extension();
        // dd($imageName);
        $randimg =  $request->client_logo->move(('clients/'), $imageName);
        // dd($randimg);
        }else{
            $imageName = null;
        }
        
        $test = [
            'CLIENT_FULLNAME' => $request->clientname,
            'CLIENT_PHONE' => $request->phone,
            'CLIENT_DRNO' => $request->doorno,
            'CLIENT_STNAME' => $request->streetname,
            'CLIENT_AREA' => $request->area,
            'CLIENT_CITY' => $request->cityname,
            'CLIENT_DIST' => $request->districtname,
            'CLIENT_STATE' => $request->State,
            'CLIENT_PINCODE' => $request->pincode,
            'CLIENT_CRM' => json_encode($request->crm),
            'CLIENT_STATUS' => $request->status,
            'CLIENT_LOGO' => $imageName,

        ];
        $request->session()->put('client', $test);

        //dd(session('client')['CLIENT_CRM']);
        //$request->session()->forget('client');

        return redirect('client_contactpage');
    }

    public function client_contactshow(Request $request)
    {
        $state_name = State::all();
        $district = District::all();
        $city = city::all();

        $client_branch = client_location::all();
        return view('client.client_contact', compact('state_name', 'client_branch', 'district', 'city'));

    }

    public function client_insertpage2(Request $request)
    {
        // dd($request);

        $role = new client;
        $role->client_name = session('client')['CLIENT_FULLNAME'];
        $role->mobile = session('client')['CLIENT_PHONE'];
        $role->door_no = session('client')['CLIENT_DRNO'];
        $role->street_name = session('client')['CLIENT_STNAME'];

        $role->area_name = session('client')['CLIENT_AREA'];
        $role->city_id = session('client')['CLIENT_CITY'];
        $role->district_id = session('client')['CLIENT_DIST'];
        $role->state_id = session('client')['CLIENT_STATE'];

        $role->pincode = session('client')['CLIENT_PINCODE'];
        $role->crm_id = session('client')['CLIENT_CRM'];
        $role->status = session('client')['CLIENT_STATUS'];
        $role->logo = session('client')['CLIENT_LOGO'];
        
        $role->created_by = session('USER_ID');
        // dd($role);
        $role->save();

        $LastInsertId = $role->id;
        // dd($request->repeater_list);
        $count = count($request->data);
        //dd($request->data);

        for ($i = 0; $i < $count; $i++) {
            //dd($count);

            $role1 = new ClientContact;

            $role1->client_id = $LastInsertId;
            $role1->contact_name = $request->data[$i]['contactname'];
            $role1->mobile = $request->data[$i]['contactphone'];
            $role1->email = $request->data[$i]['contactmail'];
            $role1->designation = $request->data[$i]['designation'];
            $role1->client_branch = $request->data[$i]['clientbranch'];

            $role1->door_no = $request->data[$i]['doorno'];
            $role1->street_name = $request->data[$i]['streetname'];

            $role1->area_name = $request->data[$i]['area'];
            $role1->state_id = $request->data[$i]['State'];
            // $role1->state_id = "1";

            $role1->district_id = $request->data[$i]['districtname'];
            // $role1->district_id = "1";

            $role1->city_id = $request->data[$i]['cityname'];

            // $role1->city_id = "1";

            $role1->pincode = $request->data[$i]['pincode'];

            $role1->status = $request->data[$i]['status'];
            $role1->created_by = session('USER_ID');
            
            // dd($role);
            $role1->save();

        }
         $this->mail_send($role1->created_by, $role->client_name, $role1->city_id, $role->crm_id);
         
        $request->session()->forget('client');

        // $request->session()->flash('roleinster', ' Inserted Successflly');
        return redirect('/approveclient')->with('msg', 'Client Inserted successfully.');

    }

     public function mail_send($created,$client_name,$city_id,$crm_id)
    {
        // echo "hyy";
        
        $user = User::where('role_id', '2')->get();
        
        $count = count($user);
        for ($i = 0; $i < $count; $i++) {

        $data = ['createby' => $created, 'nameclient' => $client_name, 'cityname' => $city_id, 'crmid' => $crm_id,'fname' => $user[$i]->fname,'lname' => $user[$i]->lname];
        
        // dd($data);
        $create = client::all('created_by');
        //  dd($create[$i]->created_by);
        $user1 = User::where('id','=',$create[$i]->created_by)->get();

        //  dd($user1[0]->name);
        $clientmail['to'] = $user[$i]->email;

        FacadesMail::send('mail.approvalclientmail', $data, function ($messages) use ($clientmail,$user1) {
            $messages->to($clientmail['to']);

            $messages->subject('CT Hiring - Client created by '.$user1[0]->name);
        });
        }
    }

    //viewclient page

    public function viewclientshow()
    {
        $view = client::all();

        return view('client.viewclient', compact('view'));
    }
    public function view_approv_client()
    {

        $view = client::all();

        return view('client.client_approve', compact('view'));
    }

    public function viewclientshow_details($id)
    {
        //dd('hello');
        $view = client::findorfail($id);
   // dd($view);
        $view2 = ClientContact::where('client_id', '=', $id)->get();
        //dd($view2);

        return view('client.viewclient_details', compact('view', 'view2'));
        //return view('viewclient_details');
    }

    public function approveclient_details($id)
    {
        //dd('hello');
        $view = client::findorfail($id);
        $view2 = ClientContact::where('client_id', '=', $id)->get();

        return view('client.client_approvedetails', compact('view', 'view2'));

    }

    public function appr_clt(Request $request)
    {

        // dd($request->all());
        $id = $request->c_id;
        $role = client::findorfail($id);
        $role->remarks = request('remarks');
        $role->approved_by = session('USER_ID');
        $role->is_approve = "1";
        $role->save();
        


        $role = client :: where('id',"=",$request->c_id)->get();
        $array=json_decode($role[0]->crm_id);
        $client_createdby= $role[0]->created_by;        
        array_push($array,$client_createdby);
        // dd($client_createdby);
        $client_name= $role[0]->client_name; 
        $city_id= $role[0]->city_id; 
        $remarks= $role[0]->remarks; 
        $approved_by= $role[0]->approved_by; 
         
        //dd($role[0]->created_by,json_decode($role[0]->crm_id),$array);

        $user_mail = User::whereIn('id', $array)->pluck('email')->toArray();
        $username = User::whereIn('id',$array)->pluck('name')->toarray();
        // dd($username);
        $count= count($user_mail);
        // dd($user_mail);
        for($i = 0; $i < $count; $i++){

        


        $create = client::all('approved_by');
          //dd($create[$i]->approved_by);
        $user1 = User::where('id','=',$create[0]->approved_by)->get();
         //dd($user1[0]->name);
         $data = ['created_by' => $client_createdby, 'client_name' => $client_name, 'city_id' => $city_id, 'crm_id' => $array[$i],'remarks' => $remarks,'approved_by' => $user1[0]->name,'username' => $username[$i]];
        FacadesMail::send('mail.afterapproval_client', $data, function ($messages) use ($user_mail,$user1) {
            $messages->to($user_mail);

            $messages->subject('CT Hiring - Client approved by '.$user1[0]->name);
        });
    }
        return redirect('/approveclient');

    }

    public function reject_clt(Request $request)
    {

        //dd($request->all());
        $id = $request->c_id;
        $role = client::findorfail($id);
        $role->remarks = request('remarks');
        $role->is_approve = "2";
        $role->save();
        return redirect('/approveclient');

    }

    public function client_edit(Request $request, $id)
    {
        $view = client::findorfail($id);
        // $view2 = ClientContact::findorfail($id);
        $view2 = ClientContact::where('client_id', '=', $id)->get();
        // dd($view2);

        $state_name = State::all();
        $district = District::all();
        $city = city::all();
        $location = client_location::all();
        $role_id = role::where('is_crm', '1')->pluck('id')->all();
        //dd($role_id);
        $crm_user = User::whereIn('role_id', $role_id)->get();
        // dd($crm_user);
        //dd($view);
        return view('client.editclient', compact('view', 'state_name', 'crm_user', 'view2','district','city','location'));

    }
    
    public function client_update(Request $request,$id)
    {
        // $client = $request->validate([
        //     'clientname' => 'required',
        //     'phone' => 'numeric|required|min:10|max:10',
        //     'doorno' => 'required',
        //     'streetname' => 'required',
        //     'area' => 'required',
        //     'pincode' => 'required|max:999999|integer',
        //     'client_logo'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
        // ]);
        //  dd($request->all());
        $role = client::findorfail($id);
        $role->client_name = $request->fullname;
        $role->mobile = $request->phone;
        $role->door_no = $request->doorno;
        $role->street_name = $request->streetname;

        $role->area_name = $request->area;
        $role->city_id = $request->cityname;
        $role->district_id = $request->districtname;
        $role->state_id = $request->State;

        $role->pincode = $request->pincode;
        $role->crm_id = json_encode($request->crm);
        $role->status = $request->status;
        
        $role->created_by = session('USER_ID');
        $role->is_approve = 0;
         if ($request->hasfile('client_logo')) 
         {
            $destination = 'clients/' . $role->logo;
            if (File::exists($destination)) {
            File::delete($destination);
              }
            $file = $request->file('client_logo');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('clients/', $filename);
            $role->logo = $filename;
                    
        }
        $role->save();
        
        $LastInsertId = $role->id;
        //  dd($LastInsertId);
        
        //client contact update 
        $count = count($request->data);
        // dd($count);
        
    for ($i = 0; $i < $count; $i++) {
            //dd($count);

            // $role1 = ClientContact::findorfail($LastInsertId);
            
            $role1 = ClientContact::where('client_id',$LastInsertId)->update([
            
            'client_id'=> $LastInsertId,
            'contact_name' => $request->data[$i]['contactname'],
            'mobile' => $request->data[$i]['contactphone'],
            'email' => $request->data[$i]['contactmail'],
            'designation' => $request->data[$i]['designation'],
            'client_branch' => $request->data[$i]['client_branch'],

            'door_no' => $request->data[$i]['doorno'],
            'street_name' => $request->data[$i]['streetname'],

            'area_name' => $request->data[$i]['area'],
            'state_id' => $request->data[$i]['State'],
            // $role1->state_id = "1";

            'district_id' => $request->data[$i]['districtname'],
            // $role1->district_id = "1";

            'city_id' => $request->data[$i]['cityname'],

            // $role1->city_id = "1";

            'pincode' => $request->data[$i]['pincode'],

            'status' => $request->data[$i]['status'],
            'created_by' => session('USER_ID'),
            
            
            ]);
        
        }
        return redirect('/viewclient')->with('msg', 'Client Updated successfully.');
    }

}