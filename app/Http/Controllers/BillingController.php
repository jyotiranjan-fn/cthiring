<?php

namespace App\Http\Controllers;
use App\Models\Resume;
use App\Models\JobOffer;

use Illuminate\Http\Request;

class BillingController extends Controller
{
   public function show_billing($id)
    { 
        $resume_id= Resume::where('id' , $id)->get();
        //dd($resume_id);
        $candidate_name = $resume_id[0]->name;
        $position_id = $resume_id[0]->position_id;
        $client_id = $resume_id[0]->client_id;

        $job_offers_joined =  JobOffer:: where('candidate_id' , $id)->get();
        dd($job_offers_joined[1]->job_joined_date);
        
        //dd($resume_id[0]->client_id);

        return view('performance.add_billing');
    }
}
