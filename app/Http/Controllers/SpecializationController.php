<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use App\Models\Degree;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch_specialization()
    {
        $result = Specialization::all()->where('is_deleted', 'N');
        $degree = Degree::all()->where('is_deleted', 'N');
        // dd($result);

        return view('settings.specialization', compact('result','degree'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_specialization(Request $request)
    {
        $role = new Specialization;
        $role->specialization_name = request('specialization');        
        $role->degree_id = request('degree');
        $role->status = request('status');
        $role->save();
        $request->session()->flash('roleinster', 'Specialization Created Successflly');

        return redirect('/specialization');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit_specialization(Request $request,$id)
    {
        $role = Specialization::findorfail($id);
        $role->specialization_name = request('specialization');        
        $role->degree_id = request('degree');
        $role->status = request('status');
        $role->save();

        $request->session()->flash('roleinster', 'Specialization Update Successflly');
        return redirect('/specialization');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Specialization  $specialization
     * @return \Illuminate\Http\Response
     */
    public function delete_specialization(Request $request , $id)
    {
        $role = Specialization::findorfail($id);
        $role->is_deleted = "Y";
        $role->save();
        $request->session()->flash('delt', 'Specialization Deleted Successflly');
        return redirect('/specialization');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Specialization  $specialization
     * @return \Illuminate\Http\Response
     */
    public function edit(Specialization $specialization)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Specialization  $specialization
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Specialization $specialization)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Specialization  $specialization
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialization $specialization)
    {
        //
    }
}
