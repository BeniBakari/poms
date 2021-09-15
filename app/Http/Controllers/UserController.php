<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getInfo()
    {
        $districts = DB::select('select district_councilId,districtName from district_councils');
        $divisions = DB::select('select divisionId,divisionTitle from divisions');
        return view("auth.register",['districts' => $districts,'divisions'=>$divisions]);    
    }

     public function deactivate(Request $request)
    {
        return DB::update('update users set status= ? where id=?',['Inactive',4]);
    }

    public function activate(Request $request)
    {
        return DB::update('update users set status= ? where id=?',['Active',$request->id]);
    }

    public function getProfile(Request $request)
    {
        $userProfile = DB::select('select * from users where id=?', [$request->id]);
        if($userProfile != null)
        return $userProfile;
        else
            return "requested user not available";
    }

    public function getUsers()
    {
        $users = DB::select('select *from users');
        $divisions = DB::select('select *from divisions');
        
            return view('Admin.users', ['users' => $users, 'divisions'=> $divisions]);
    }
}
