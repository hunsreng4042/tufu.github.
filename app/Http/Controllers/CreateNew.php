<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CreateNew extends Controller
{
    public function CreateUsers(){
        return view('admin.createusers');
    }
    public function CreateUser(Request $rq){
        $username = $rq->input('txtusername');
        $firstname =$rq->input('txtfirstname');
        $lastname =$rq->input('txtlastname');
        $name =$rq->input('txtname');
        $email = $rq->input('txtemail');
        $phone = $rq->input('txtphone');
        $password =$rq->input('txtpassword');

        //echo $user."".$firstname;

        DB::table('users')->insert([
            'username'=> $username,
            'firstname'=> $firstname,
            'lastname'=> $lastname,
            'name'=> $name,
            'email'=> $email,
            'phone'=>$phone,
            'password'=> $password
        ]);

        return redirect('/users');
    }
    public function CreatePC(){
        return view('admin.createpc');
    }
    public function CreatePCNew(Request $rp){
            $usernamepc = $rp->input('username');
            $devicetype =$rp->input('devicetype');
            $model =$rp->input('model');
            $gpu =$rp->input('gpu');
            $devicename = $rp->input('devicename');
            $macaddrees = $rp->input('macaddrees');
            $ram =$rp->input('ram');
            $serialnumber = $rp->input('serialnumber');
            $ipaddrees =$rp->input('ipaddrees');
            $hdd =$rp->input('hdd');
            $os =$rp->input('os');
            $department = $rp->input('department');
            $brand = $rp->input('brand');
            $upgrade =$rp->input('upgrade');
            $location =$rp->input('location');

            //echo $user."".$firstname;

            DB::table('infor_pc')->insert([
                'username'=> $usernamepc,
                'device_type'=> $devicetype,
                'model'=> $model,
                'cpu'=> $gpu,
                'device_name'=> $devicename,
                'mac_address'=>$macaddrees,
                'ram'=> $ram,
                'serail_number'=> $serialnumber,
                'ip_addrees'=> $ipaddrees,
                'hdd'=> $hdd,
                'os'=> $os,
                'office_department'=>$department,
                'building_brand'=> $brand,
                'part_upgrade'=> $upgrade,
                'location'=> $location
            ]);

            return redirect('/inforpc');


    }
}
