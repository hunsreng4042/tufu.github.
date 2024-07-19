<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function Dashboard(){
        return view('admin.dashboard');
    }
    public function Logout(Request $rq){
        $rq->session()->flush();
        return redirect('/');
    }
    public function InforPC(){
        $result = DB::table('infor_pc')->paginate(20);
        return view('admin.inforpc',['inforpc'=>$result]);
    }
    public function Profile(){
        return view('admin.profile');
    }
    public function Setting(){
        return view('admin.setting');
    }
    public function System(){
        return view('admin.system');
    }
    public function Users(){
        $result = DB::table('users')->paginate(2);
        return view('admin.users',['users'=>$result]);
    }

}
