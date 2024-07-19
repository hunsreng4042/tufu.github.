<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function Login(Request $rq){
        //return "test";
        $users = $rq->input('txtuser');
        $password = $rq->input('txtpassword');

        $error = 0;
        if($users ==""){
            $error =1;
        }
        if($password ==""){
            $error =1;
        }

        if($error==0){
            $users = DB::table('users')->where([['username','=',$users],['password','=',$password]])->first();
            if($users){
                $userid = $users->id;
                $name = $users->name;
                $email = $users->email;
                session(['userid'=>$userid ,'name'=>$name,'email'=>$email]);
                return redirect('/dashboard');
                //echo "Success";
            }
            else{
                $rq->session()->flash('status','Invalid user and password!');
                return redirect('/');
                //echo "Invalid user and password";
            }
        }
        else{
            $rq->session()->flash('status','Empty user or password!');
            return redirect('/');
            //echo "Empty user or password!";
        }
    }
}
