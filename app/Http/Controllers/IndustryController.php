<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function fetch_industry()
    {

        $view = Industry::all()->where('is_deleted', 'N');

        return view('settings.industry', compact('view'));

        // return view('/functional_area');
    }

    public function add_industry_function(Request $request)
    {
        $role = new Industry;
        $role->industryfunction = request('industry_function');

        $role->status = request('status');
        $role->save();
        $request->session()->flash('roleinster', 'Industry function Created Successflly');
        return redirect('/industry');
    }

    public function edit_industry_function(Request $request, $id)
    {
        $role = Industry::findorfail($id);
        $role->industryfunction = request('industry_function');
        $role->status = request('status');
        $role->save();

        $request->session()->flash('roleinster', 'Industry Function Update Successflly');
        return redirect('/industry');
    }

    public function delete_industry_function(Request $request, $id)
    {
        $role = Industry::findorfail($id);
        $role->is_deleted = "Y";
        $role->save();
        $request->session()->flash('delt', 'Industry Function Delete Successflly');
        return redirect('/industry');
    }

}
