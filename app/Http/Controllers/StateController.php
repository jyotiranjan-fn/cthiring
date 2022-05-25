<?php

namespace App\Http\Controllers;

use App\Models\city;
use App\Models\District;
use Illuminate\Http\Request;

class StateController extends Controller
{
    public function getdistrict(Request $request)
    {
        // dd($request->sta_id);

        $dist['district'] = District::where('state_id', $request->sta_id)->get();

        //dd($dist);
        return response()->json($dist);
    }
    public function getcity(Request $request)
    {
        //dd($request->dis_id);

        $city['city'] = city::where('districtid', $request->dis_id)->get();

        return response()->json($city);
    }
    //   clientcontact district

    public function getdistrict_clientcontact(Request $request)
    {

        //   dd('hi');
        $dist1['district_contact'] = District::where('state_id', $request->sta_id_contact)->get();
        return response()->json($dist1);

    }

    public function getcity_clientcontact(Request $request)
    {

        //   dd('hi');
        $city1['city_contact'] = city::where('districtid', $request->dis_id_cont)->get();

        return response()->json($city1);

    }
}