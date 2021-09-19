<?php

namespace App\Http\Controllers;


use DB;

use Illuminate\Http\Request;

class UserController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function getInfo()
    {
        $districts = DB::select('select district_councilId,districtName from district_councils');
        $divisions = DB::select('select divisionId,divisionTitle from divisions');
        return view("auth.register",['districts' => $districts,'divisions'=>$divisions]);    
    }

     public function deactivate(Request $request)
    {
        if(DB::update('update users set status= ? where id=?',['Inactive',$request->id]))
            return "boom";
    }

    public function activate(Request $request)
    {
         if(DB::update('update users set status= ? where id=?',['Active',$request->id]))
           return "boom";
    }

    public function getProfile(Request $request)
    {
        $user = DB::select('select id,firstName,lastName,email,gender,phone,status,password,roleId,district_councilId,users.divisionId,divisions.divisionTitle from users,divisions where users.divisionId=divisions.divisionId and id=?', [$request->id]);
        $divisions  = DB::select('select divisionId,divisionTitle from divisions');
        if($user != null)
        return view('User.editUser', ['user' =>$user, 'divisions' => $divisions]);
        else
            return "requested user not available";
    }

    public function getUsers()
    {
        $users = DB::select('select *from users');
        $divisions = DB::select('select *from divisions');
        
            return view('Admin.users', ['users' => $users, 'divisions'=> $divisions]);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        if(DB::update('update users set firstName=?, lastName=?, divisionId=?,phone=? where email=?', [$data['firstName'],$data['lastName'],$data['divisionId'],$data['phone'],$data['email']]))
        {
            return redirect('users');
        }
        else {
            return "nothing changed";
        }
        //return $data; 
    }
}
