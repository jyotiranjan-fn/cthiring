<?php

namespace App\Http\Controllers;

use App\Models\FunctionalArea;
use Illuminate\Http\Request;

class FunctionalAreaController extends Controller
{

    public function fetch_functionalarea()
    {

        $view = FunctionalArea::all()->where('is_deleted', 'N');

        return view('settings.functional_area', compact('view'));

        // return view('/functional_area');
    }

    public function add_functional(Request $request)
    {
        $role = new FunctionalArea;
        $role->function = request('function_area');

        $role->status = request('status');
        $role->save();
        $request->session()->flash('roleinster', 'FunctionalArea Created Successflly');
        return redirect('/functionalarea');
    }

    public function edit_functional(Request $request, $id)
    {
        $role = FunctionalArea::findorfail($id);
        $role->function = request('functional');
        $role->status = request('status');
        $role->save();

        $request->session()->flash('roleinster', 'FunctionalArea Update Successflly');
        return redirect('/functionalarea');
    }

    public function delete_functional_area(Request $request, $id)
    {
        $role = FunctionalArea::findorfail($id);
        $role->is_deleted = "Y";
        $role->save();
        $request->session()->flash('delt', 'FunctionalArea Delete Successflly');
        return redirect('/functionalarea');
    }

}
