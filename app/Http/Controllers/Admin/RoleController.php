<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\DB;
use \Cache;

class RoleController extends Controller
{
    public function index(){
        // $roles = Role::all();
        // Role::whereNotIn('name', ['role A', 'role B'])->get();
         $roles = Role::whereNotIn('name', ['admin'])->get();
        return view('admin.roles.index', compact('roles'));
    }

    public function create(){
      
        return view('admin.roles.create');
    }
    public function store(Request $request){
      
        $validated = $request->validate(['name' => ['required' , 'min:3']]);
        Role::create($validated);

        // return to_route('admin.roles.index');
        return redirect()->route('admin.roles.index')->with('message', 'Role Created successfully.');
    }
    public function edit(Role $role){
      
        $client=DB::table('permissions')->where('section','Client')->get();
        $position=DB::table('permissions')->where('section','Position')->get();
        $resume=DB::table('permissions')->where('section','Resume')->get();
        $interview=DB::table('permissions')->where('section','Interview')->get();
        $billing=DB::table('permissions')->where('section','Billing')->get();
        $incentive=DB::table('permissions')->where('section','Incentive')->get();
        $leave=DB::table('permissions')->where('section','My Leaves ')->get();
        $plan=DB::table('permissions')->where('section','Todays Plan')->get();
        $event=DB::table('permissions')->where('section','My Events')->get();
        $report=DB::table('permissions')->where('section','Reports')->get();
        $mail=DB::table('permissions')->where('section','Mail BOX')->get();
        $setting=DB::table('permissions')->where('section','Settings')->get();
     


        $permissions = Permission::all();
        return view('admin.roles.edit', compact('role','permissions','client','position','resume','interview','billing','incentive','leave','plan','event','report','mail','setting'));

    }
    public function update(Request $request, Role $role){

      
        $validated = $request->validate(['name' => 'required']);
        $role->update($validated);

        return redirect()->route('admin.roles.index')->with('message', 'Role Updated successfully.');

    }
    public function updated(Request $request, $id){
    // dd($request->vehicle1,$id);
        $count=count($request->vehicle1);
        $users=DB::table('model_has_roles')->where('role_id',$id)->get();
       // dd($users);
        $ur_count=count($users);
   //  dd($users[0]->model_id,$ur_count);

        

        //dd($request->vehicle1[1],$id,$count);


       DB::delete('delete from role_has_permissions where role_id = ?',[$id]);
      // dd('hi');
       //DB::delete('delete from model_has_permissions where model_id = ?',[$request->vehicle1[$per]]);
       for($per=0;$per<$ur_count;$per++){
        DB::delete('delete from model_has_permissions where model_id = ?',[$users[$per]->model_id]);
       }
      // dd('hi');

    //    DB::delete('delete from model_has_permissions where role_id = ?',[$id]);

       //model has permission

      

        for($i=0;$i<$count;$i++){

        $role= DB::table('role_has_permissions')->insert([
            "permission_id"=>$request->vehicle1[$i],
            "role_id"=>$id
        ]);
       
        for($ur=0;$ur<$ur_count;$ur++){
               
        $role= DB::table('model_has_permissions')->insert([
            "permission_id"=>$request->vehicle1[$i],
            "model_id"=>$users[$ur]->model_id
        ]); 
        }
       
        
    }
    // dd('rolehas permisssion');
    Cache::flush();
    return redirect()->back()->with('message', 'Role Updated successfully.');
      
       // $validated = $request->validate(['name' => 'required']);
        // $role->permission_id = $request->input('name');
        // $role->role_id = $request->input('email');
        // $role->course = $request->input('course');
        // $role->section = $request->input('section');
        // $role->update();

        //return redirect()->route('admin.roles.index')->with('message', 'Role Updated successfully.');

    }
    public function destroy(Role $role){
        $role->delete();
        return back()->with('message','Role Deleted');

    }
    public function givePermission(Request $request, Role $role){
        
        if($role->hasPermissionTo($request->permission)){
            return back()->with('message','Permission exits.');
        }
        $role->givePermissionTo($request->permission);
        return back()->with('message','Permission added.');
       

    }
    public function revokePermission(Role $role, Permission $permission){
        
        if($role->hasPermissionTo($permission)){
            $role->revokePermissionTo($permission);
            return back()->with('message','Permission revoke.');
        }
        return back()->with('message','Permission not exits.');
       

    }
    public function role_branch()
    {

        $view = role::all()->where('is_deleted', 'N');

        return view('/role', compact('view'));
    }

    public function add_rolebranch(Request $request)
    {
        $role = new role;
        $role->role_name = request('role_name');
        $role->role_des = request('role_des');
        $role->status = request('status');
        $role->save();
        $request->session()->flash('roleinster', 'Role Inserted Successflly');
        return redirect('/role');
    }

    public function edit_rolebranch(Request $request, $id)
    {
        $role = role::findorfail($id);
        $role->role_name = request('role_name');
        $role->role_des = request('role_des');
        $role->status = request('status');
        $role->save();

        $request->session()->flash('roleinster', 'Role Update Successflly');
        return redirect('/role');
    }
    public function delete_rolebranch(Request $request, $id)
    {
        $role = role::findorfail($id);
        $role->is_deleted = "Y";
        $role->save();
        $request->session()->flash('delt', 'Role Delete Successflly');
        return redirect('/role');
    }

}
