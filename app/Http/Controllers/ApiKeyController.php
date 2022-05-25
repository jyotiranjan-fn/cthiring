<?php

namespace App\Http\Controllers;
use App\Models\Msg;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class ApiKeyController extends Controller
{
    public function api_key()
    {
        $view = Msg::all();
        return view('settings.apikey',compact('view'));
    }

    public function update_msg(Request $request, $id)
    {
        //dd($request);
        
        $authkey=$request->post('authkey');
        $flowid=$request->post('flowid');
        $senderid=$request->post('senderid');
        //dd($senderid);
        $post=DB::select("UPDATE `msgs` SET `authkey`='$authkey',`flowid`='$flowid',`senderid`='$senderid' WHERE `id`=$id");
        
        return redirect()->back()->with('message', 'Key Updated successfully.');
        
    }
}
