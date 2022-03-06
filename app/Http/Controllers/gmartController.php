<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
class gmartController extends Controller
{
    public function show(){
        return view ('backend.layouts.login');
    }    

    public function dash(){
        return view ('backend.layouts.dashboard');
    }    

    public function submit_login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required'

        ]);

        $userCheck=admin::where(['username'=>$request->username,'password'=>$request->password])->count();
        if($userCheck > 0){
            return redirect('dashboard');
        }else{
            return redirect('
            login')->with('error','Invalid username/password');
        }
    }
    
}
