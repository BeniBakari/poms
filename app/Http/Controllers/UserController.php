<?php

namespace App\Http\Controllers;


use DB;

use Illuminate\Http\Request;


class UserController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getInfo()
    {
        $districts = DB::select('select district_councilId,districtName from district_councils');
        $ranks = DB::select('select rankId, rankName from ranks');
        $divisions = DB::select('select divisionId,divisionTitle from divisions');
        return view("auth.register",['districts' => $districts,'divisions'=>$divisions,'ranks' =>$ranks]);    
    }

     public function deactivate(Request $request)
    {
        if(DB::update('update users set status= ? where id=?',['Inactive',$request->id]))
            return redirect('users');
    }

    public function activate(Request $request)
    {
         if(DB::update('update users set status= ? where id=?',['Active',$request->id]))
           return redirect('users');
    }

    public function getProfile(Request $request)
    {
        $user = DB::select('select id,users.rankId,rankName,firstName,lastName,email,gender,phone,status,password,district_councilId,users.divisionId,divisions.divisionTitle, users.roleId,roles.roleTitle
        from users,divisions,ranks,roles  where 
        users.roleId=roles.roleId and users.rankId = ranks.rankId and users.divisionId=divisions.divisionId and id=?', [$request->id]);
        $divisions  = DB::select('select divisionId,divisionTitle from divisions');
        $ranks = DB::select('select rankId, rankName from ranks');
        $roles = DB::select('select roleId, roleTitle from roles');
        $profileId = $request -> id;
        if($user != null)
        return view('User.editUser', ['user' =>$user, 'divisions' => $divisions,'ranks' => $ranks, 'roles' => $roles, 'profileId' => $profileId]);
        else
            return "requested user not available";
    }

    public function getUsers(Request $request)
    {
        
            // $users = DB::select('select *from users,ranks where users.rankId = ranks.rankId');
        
        $divisions = DB::select('select *from divisions');

        return view('Admin.users',  [
            'users' => DB::table('users')
                           ->join('ranks', 'users.rankId', '=', 'ranks.rankId')->paginate(1),'divisions'=> $divisions 
            
        ]);
        
            // return view('Admin.users', ['users' => $users, 'divisions'=> $divisions]);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $update = DB::update('update users set firstName=?, lastName=?, roleId=?, rankId=?, divisionId=?,phone=? where email=?', [$data['firstName'],$data['lastName'],$data['roleId'],$data['rankId'],$data['divisionId'],$data['phone'],$data['email']]);
        if($update)
        {
            return redirect('users');
        }
        else {
            return redirect('users');
        }
        
    }
    
}
