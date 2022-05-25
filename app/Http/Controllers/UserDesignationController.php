<?php

namespace App\Http\Controllers;

use App\Models\user_designation;
use Illuminate\Http\Request;

class UserDesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function add_userdesignation(Request $request)
    {
        $role = new user_designation;
        $role->userdesig_name = request('user_name');
        $role->mobile = request('mobile');


        $role->status = request('status');
        $role->save();
        $request->session()->flash('roleinster', 'Designation Created Successflly');
        return redirect('/user_designation');
    }



    public function fetch_userdesignation()
    {

        $view = user_designation::all()->where('is_deleted', 'N');


        return view('settings.user_designation', compact('view'));
    }

    public function edit_userdesignation(Request $request, $id)
    {
        $role = user_designation::findorfail($id);
        $role->userdesig_name = request('user_name');
        $role->mobile = request('mobile');

        $role->status = request('status');
        $role->save();

        $request->session()->flash('roleinster', 'Designation Update Successflly');
        return redirect('/user_designation');
    }

    public function delete_userdesignation(Request $request, $id)
    {
        $role = user_designation::findorfail($id);
        $role->is_deleted = "Y";
        $role->save();
        $request->session()->flash('delt', 'Role Delete Successflly');
        return redirect('/user_designation');
    }
}
