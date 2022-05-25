<?php

namespace App\Http\Controllers;

use App\Models\myplan;
use App\Models\client;
use App\Models\User;
use App\Models\tempmyplans;
use App\Models\Position;
use Illuminate\Http\Request;

class MyplanController extends Controller
{
    public function approved()
    {
        
         $student = myplan::all();
         $pos = session('USER_ID');
        //dd($pos);
        $pos_req = Position::where('recruiters', '=', $pos)->get()->unique('client_name');
        
        return view('myplan.approved_plan',compact('student'));
    }
    
     public function approve_plan(Request $request,$id)
    {
   
       
        //dd($request,$id);
        // $id = $request->$id;
    // dd($id);
        
        $role = myplan::find($id);
        $role->remarks = $request->remarks;
        $role->approve_status = "1";
        $role->status = "1";
        $role->save();
     
         return redirect()->back()->with('message', 'Plan Approved Successfully');
    }
    
    
    

    public function reject_plan(Request $request,$id)
    {

        //dd($request->all());
         $role = myplan::find($id);
        $role->remarks = request('remarks');
        $role->approve_status = "2";
        $role->save();
       return redirect()->back()->with('message', 'Plan Rejected Successfully');

    }
    
    public function plan_viewpage()
    {

      $student = myplan::all();
       $pos = session('USER_ID');
        //dd($pos);
        $pos_req = Position::where('recruiters', '=', $pos)->get()->unique('client_name');

        //dd($view)
        return view('myplan.view_work_plan', compact('pos_req','student'));

    }

    

    public function myplan_todays()
    {
        
        $student = myplan::all();
      
        
        
        
        
        $client1 = client::all();
        $position1 = Position::all();
        
        //dd($client1[0]->client_name);

        // $item = ["10", "11"];
        //in_array("100", $marks)

        //  $pos = json_decode(Position::get('recruiters'));
        //dd($pos);
        // $count = count($pos);
        //dd($count);

        // for ($i = 0; $i < $count; $i++) {

        //     $count1 = $pos[$i];
        //     print_r($count1);

        //     print_r(json_decode($pos[$i]));
        // }

        // $posq = Position::where(in_array("201", $pos))->get('recruiters');
        // dd($posq);
        // $pos = DB::table('positions')
        //     ->whereIn('recruiters', [202])
        //     ->get();
        // dd($pos);

        $pos = session('USER_ID');
        //dd($pos);
        $pos_req = Position::where('recruiters', '=', $pos)->get()->unique('client_name');
        //dd($pos_req);
        
      

        return view('myplan.todays_plan', compact('pos_req','student','client1'));
    }

    public function insert_todaysplan(Request $request)
    {
         //dd($request->all());
         
        

        $myplan = new myplan;
        
        $myplan->user_id = session('USER_ID');
        $myplan->created_by = session('USER_ID');
        // $myplan->ctc = NA;
        $myplan->work_plan = request('day_plan');
        $myplan->task_date = request('date');
        $myplan->day_work_name = request('work_time_period');
        $myplan->work_plan_type = request('plantype');
        $myplan->client_name = request('clientname');
        $myplan->position_id = request('positionname');
        $myplan->others_option = request('option');
        $myplan->subject = request('subject');
        // dd($myplan);

        $myplan->save();
         return redirect('/todays_plan')->with('message','Plan Add Successfully');

    }
     
}