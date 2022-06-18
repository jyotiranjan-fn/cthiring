<?php

namespace App\Http\Controllers;
use App\Models\Resume;
use App\Models\JobOffer;
use App\Models\client;
use App\Models\Position;
use App\Models\Billing;


use Illuminate\Http\Request;

class BillingController extends Controller
{
   public function show_billing($id)
    { 
        $resume_id= Resume::where('id' , $id)->get();
        $resu_id=$resume_id[0]->id;
        //dd($resume_id[0]->name);
        $candidate_name = $resume_id[0]->name;
        $position_id = $resume_id[0]->position_id;
        $client_id = $resume_id[0]->client_id;

        $position_name =Position::where('position_id', $position_id)->first('job_title');
        $client_name=client::where('id',$client_id)->first('client_name');
      

        $job_offers_joined = JobOffer::where('candidate_id' , $id)->get();
        //$job_joined= 
       // $count = count($job_offers_joined);
        //dd($job_offers_joined[0]->job_joined_date,$count);




        // $job_offers_joined = JobOffer::where('candidate_id' , $id)->pluck('job_joined_date')->toArray();
        // //dd($job_offers_joined);

        // $colorsNoEmptyOrNull = array_filter($job_offers_joined, function($v){ 
        // return !is_null($v) && $v !== ''; 
        // });

        // $date=$colorsNoEmptyOrNull;



        //dd($date);


        return view('performance.add_billing',compact('candidate_name','position_name','client_name','job_offers_joined','position_id','client_id','resu_id'));
        //return view('performance.add_billing');
    }

   public function insert_billing_candidate(Request $request)
    {


        $role = new Billing;

        $role->position_id = request('position_id');
        $role->client_id = request('client_id');
        $role->resume_id = request('resume_id');
        $role->candidate_name = request('candidate_name');
        $role->position_name = request('position_name');
        $role->client_name = request('client_name'); 
        $role->joining_date = request('joining_date');
        $role->ctc_offer = request('ctc_offer');
        $role->designation_offer = request('designation_offer');



        $role->bill_percentage = request('bill_percentage');
        $role->billing_amount = request('billing_amount');
        $role->billing_date = request('billing_date');
        $role->sur_name = request('sur_name');
        $role->designation = request('designation');

        $role->add_doorno = request('add_doorno');
        $role->address_1 = request('address_1');
        $role->address_2 = request('address_2');

        $role->state = request('state');
        $role->city = request('city');
        $role->pincode = request('pincode');
        $role->door_name_courier = request('door_name_courier');
        $role->address_1_courier = request('address_1_courier');
        $role->address_2_courier = request('address_2_courier');
        $role->state_courire = request('state_courire');
        $role->city_courier = request('city_courier');
        $role->pincode_courier = request('pincode_courier');
        $role->gstn_courier = request('gstn_courier');
        $role->remarks = request('remarks');

        $role->save();
        //$request->session()->flash('roleinster', 'Qualification Created Successflly');
        return redirect()->back()->with('message', ' Inserted Successfully');

        //dd($request->all());



    }


    public function billing_one()
    {
        return view('performance.view_billing_details');
    }

    
    public function billing_two()
    {
        return view('performance.view_billing');
    }

}
