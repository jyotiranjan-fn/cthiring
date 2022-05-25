<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\location;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail as FacadesMail;

use Cache;
use Mail;

class UserController extends Controller
{
    
    
    public function index(){
        
         $users = User::all();
        return view('admin.users.index', compact('users'));
    }
    public function show(User $user)
    {
        $roles = Role::all();
        $permissions = Permission::all();

        return view('admin.users.role', compact('user', 'roles', 'permissions'));
    }

    public function assignRole(Request $request, User $user)
    {
        if ($user->hasRole($request->role)) {
            return back()->with('message', 'Role exists.');
        }

        $user->assignRole($request->role);
        return back()->with('message', 'Role assigned.');
    }

    public function removeRole(User $user, Role $role)
    {
        if ($user->hasRole($role)) {
            $user->removeRole($role);
            return back()->with('message', 'Role removed.');
        }

        return back()->with('message', 'Role not exists.');
    }

    public function givePermission(Request $request, User $user)
    {
        if ($user->hasPermissionTo($request->permission)) {
            return back()->with('message', 'Permission exists.');
        }
        $user->givePermissionTo($request->permission);
        return back()->with('message', 'Permission added.');
    }

    public function revokePermission(User $user, Permission $permission)
    {
        if ($user->hasPermissionTo($permission)) {
            $user->revokePermissionTo($permission);
            return back()->with('message', 'Permission revoked.');
        }
        return back()->with('message', 'Permission does not exists.');
    }

    public function destroy(User $user)
    {
        if ($user->hasRole('admin')) {
            return back()->with('message', 'you are admin.');
        }
        $user->delete();

        return back()->with('message', 'User deleted.');
    }








    public function user_insert(Request $request)
    {
        // $created_by = session('USER_ID');
    //     // dd($request);
    //     $user = $request->validate([
    //         'fname' => 'required',
    // 		'lname' => 'required',
    // 		'email' => 'required',
    //         'mobile' => 'numeric|required|min:10|max:10',
    //         'gender' => 'required',
    //         'designation' => 'required',
    //         'role' => 'required',
    // 		'user_location' => 'required',
    // 		'label_1' => 'required',
    // 		'label_2' => 'required',
    // 		'status' => 'required',
    //         'editer' => 'required ',
    //         'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
    //     ]);
        //image
        $imageName = time() . '.' . $request->image->extension();
        // dd($imageName);

        $randimg = $request->image->move(('images/'), $imageName);

        $role = new user;
        $role->fname = request('fname');
        $role->lname = request('lname');
        //$role->username =  request('fname')  . " " . request('lname');
        $role->name= request('fname') . " " . request('lname');
        $randompassword=Str::random(10);
        $role->temp_password = $this->attributes['password'] = Hash::make($randompassword);
        $role->email = request('email');
        $role->mobile = request('mobile');
        $role->gender = request('gender');
        $role->designation = request('designation');
        $role->role_id = request('role');
        $role->location_id = request('user_location');
        $role->level_1 = request('label_1');
        $role->level_2 = request('label_2');
        $role->status = request('status');
        $role->images = $imageName;
        $role->signature = request('editor');
        $role->created_by = session('USER_ID');
        $role->save();
        $this->mail_send( $randompassword ,$role->email ,$username,'abinash889@gmail.com'); 

        $last_user_id=$role->id;



        //insert data into model has role 

        $model=DB::table('model_has_roles')->insert(
            ['role_id'=>request('role'),'model_id'=>$last_user_id]
        );
        

        $permission=DB::table('role_has_permissions')->select('permission_id')->where('role_id',request('role'))->get();

        $count=count($permission);
       // dd($permission[1]->permission_id,$count,$last_user_id,request('role'));

       for($i=0;$i<$count;$i++){

        $model=DB::table('model_has_permissions')->insert(
            ['permission_id'=>$permission[$i]->permission_id,'model_id'=>$last_user_id]
        );


       }


 Cache::flush();

        // $request->session()->flash('roleinster', 'User Inserted Successflly');
         return redirect()->back()->with('msg', 'User Inserted Successflly');
        // return redirect('admin/user');
    }
    
     public function mail_send($temp_pass,$email ,$username)
    {
        // echo "hyy";
             $data = [ 'temp_pass' => $temp_pass , 'email' => $email ,'username' => $username];
 
        // $data = ['name' => $fname, 'password' => $password];
         $smail = $email;
        $user['to'] = $smail;
     
        FacadesMail::send('mail.otppassword', $data, function ($messages) use ($user) {
            $messages->to($user['to']);

            $messages->subject('CT-HIRING TEMP_PASSWORD');
        });
    }


    public function userfetch()
    {
        $role = role::all();

        $location3 = location::all()->where('is_deleted', 'N');

        // $whereData = array(array('role_id', '=', '1'), array('role_id', '=', '5'), array('role_id', '=', '6'), array('role_id', '=', '7'));
        // role wise user show in this query ,which is inserted by 1,5,6,7
        $l1 = user::
            where('is_deleted','=','N')
            ->where(function($q){
                $q->where('role_id', '=', 5)
                ->orwhere('role_id', '=', 1)
                   ->orwhere('role_id', '=', 6)
                   ->orwhere('role_id', '=', 7);
            })
        
            ->get();
            
            
  

        // dd($l1);

        $l2 = user::
             where('is_deleted','=','N')
            ->where(function($q){
                $q->where('role_id', '=', 5)
                ->orwhere('role_id', '=', 1)
                   ->orwhere('role_id', '=', 6)
                   ->orwhere('role_id', '=', 7);
            })
        
            ->get();

        $view = user::all()->where('is_deleted', 'N');

        return view('admin.users.index', compact('view', 'location3', 'role', 'l1', 'l2'));

    }


                    public function edit_user(Request $request, $id)
                    {
                        //     $user = $request->validate([
                        //         'fname' => 'required',
                        // 		'lname' => 'required',
                        // 		'email' => 'required',
                        //         'mobile' => 'numeric|required|min:10|max:10',
                        //         'gender' => 'required',
                        //         'designation' => 'required',
                        //         'role' => 'required',
                        // 		'user_location' => 'required',
                        // 		'label_1' => 'required',
                        // 		'label_2' => 'required',
                        // 		'status' => 'required',
                        //         'editer' => 'required ',
                        //         'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg',
                        //     ]);
                    
                    $role = user::findorfail($id);
                    $role->fname = request('fname');
                    $role->lname = request('lname');
                    $role->email = request('email');
                    $role->mobile = request('mobile');
                    $role->gender = request('gender');
                    $role->designation = request('designation');
                    $role->role_id = request('role');
                    $role->location_id = request('user_location');
                    $role->level_1 = request('label_1');
                    $role->level_2 = request('label_2');
                    $role->signature = request('editor');
                    $role->status = request('status');
                    
                    
                    $role->modified_by = session('USER_ID');
                    if ($request->hasfile('image')) {
                    $destination = 'images/' . $role->images;
                    if (File::exists($destination)) {
                    File::delete($destination);
                    }
                    $file = $request->file('image');
                    $extention = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extention;
                    $file->move('images/', $filename);
                    $role->images = $filename;
                    
                    }
                    $role->save();
                    
                    
                    DB::table('model_has_permissions')->where('model_id', $id)->delete();
                    
                    
                    DB::update('update model_has_roles set role_id = ? where model_id = ?', [request('role') , $id]);
                    $role_has_permision=DB::table('role_has_permissions')->where('role_id',request('role'))->get();
                    $permision_count=count($role_has_permision);
                    
                    
                    
                    for($i=0;$i<$permision_count;$i++){ $role=DB::table('model_has_permissions')->insert([
                        "permission_id"=>json_decode($role_has_permision)[$i]->permission_id,
                        "model_id"=>$id
                        ]);
                        }
                    
                        $request->session()->flash('roleinster', 'User Update Successfully');
                        return redirect('/user');
                        }
                        
                        public function delete_user(Request $request, $id)
                        {
                            $role = user::findorfail($id);
                            $role->is_deleted = "Y";
                            $role->deleted_by = session('USER_ID');
                    
                            $role->save();
                            $request->session()->flash('delt', 'User Delete Successflly');
                            return redirect('/user');
                        }
                        
                        
                        


   



}
