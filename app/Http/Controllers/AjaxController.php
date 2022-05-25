<?php

namespace App\Http\Controllers;

use App\Models\client;
use App\Models\User;
use App\Models\ClientContact;
use App\Models\Position;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function get_contactperson(Request $request)
    {
        
        //dd($request->spoc_id);
        $spoc1['spoc_name'] = ClientContact::where('client_id', $request->spoc_id)->get();
       //dd($spoc1['spoc_name']);
        $crm_array['crm_names'] = Client::where('id', $request->spoc_id)->get();
        
       // dd(json_decode($crm[0]->crm_id));
       
      
       $count=count(json_decode($crm_array['crm_names'][0]->crm_id));
       
     //  dd($count);
       
       for($i=0;$i<$count;$i++){
           
           $crm_name[]=User::where('id',json_decode($crm_array['crm_names'][0]->crm_id)[$i])->get('name');
           
       }
       $namecount=count($crm_name);
       //dd($namecount,$crm_name[1][0]->name);
       for($j=0;$j<$namecount;$j++){
           
           $crm[]=$crm_name[$j][0]->name;
     
       
       }
     //  dd(json_encode($crm));
        //dd(array_chunk($crm[0]['crm_id'], 2);
        // dd(array_chunk($crm[0]->crm_id, 2));
       // $crm_name[]=json_decode($crm[0]->crm_id);
       // return response()->json($spoc1,$crm_name);
        return response()->json([$spoc1,$crm]);

    }
    public function test(Request $request)
    {
        dd($request->all());
    }

    //    cut the code
    public function myplandesign()
    
    {
        $pos_req='';
        return view('myplan.todays_plan',compact('pos_req'));
    }

    public function myplandesign2()
    {
        dd(session('USER_ID'));

        return view('myplan2');

        exit;
    }

    //end

    public function position_recruiter(Request $request)
    {
        //dd($request->clientname);

        $pos_name['positon_name_client'] = Position::where('client_name', $request->clientname)
            ->where('recruiters', session('USER_ID'))
            ->get();
        return response()->json($pos_name);

    }

}