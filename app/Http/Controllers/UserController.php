<?php

namespace App\Http\Controllers;


use DB;

use Illuminate\Support\Facades\Auth;

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
            return redirect('users')->with('success','User Deactivated');
    }

    public function activate(Request $request)
    {
         if(DB::update('update users set status= ? where id=?',['Active',$request->id]))
           return redirect('users')->with('success','User Activated');
    }

    public function getProfile(Request $request)
    {
        $user = DB::select('select id,users.rankId,rankName,firstName,lastName,email,gender,phone,status,password,district_councilId,users.divisionId,divisions.divisionTitle, users.roleId,roles.roleTitle
        from users,divisions,ranks,roles  where 
        users.roleId=roles.roleId and users.rankId = ranks.rankId and users.divisionId=divisions.divisionId and id=?', [$request->id]);
        $divisions  = DB::select('select divisionId,divisionTitle from divisions where divisionId!=?',[$user[0]->divisionId]);
        
        $ranks = DB::select('select rankId, rankName from ranks where rankId!=? ',[$user[0]->rankId]);
        $roles = DB::select('select roleId, roleTitle from roles where roleId!=?',[$user[0]->roleId]);
        $profileId = $request -> id;
        if($user != null)
        return view('User.editUser', ['user' =>$user, 'divisions' => $divisions,'ranks' => $ranks, 'roles' => $roles, 'profileId' => $profileId]);
        else
            return "requested user not available";
    }

    public function getUsers(Request $request)
    {
        $users=DB::table('users')
        ->join('ranks', 'users.rankId', '=', 'ranks.rankId')->paginate(5);

        $divisions = DB::select('select *from divisions');

        return view('Admin.users',  [
                'users'=> $users       
            ,'divisions'=> $divisions                         
        ]);

         // $users = DB::select('select *from users,ranks where users.rankId = ranks.rankId');
              // 'users' => DB::table('users')
            //                ->join('ranks', 'users.rankId', '=', 'ranks.rankId')->paginate(1)
            // return view('Admin.users', ['users' => $users, 'divisions'=> $divisions]);
    }

    public function filteredUser(Request $request)
    {
        //return $request->value;
        $email = $request->value;
        // $users = DB::select('select *from users,ranks where
        //  ranks.rankId = users.rankId and  email LIKE ? or lastName LIKE ? or divisionId = ?',
        //  ['%'.$email.'%','%'.$request->value.'%',substr($request->value,8)])->paginate(2);
        $users=DB::table('users')
        ->where('email','LIKE','%'.$request->value.'%')
        ->orwhere('lastName','LIKE','%'.$request->value.'%')
        ->orwhere('divisionId','=',substr($request->value,8))
        ->join('ranks', 'users.rankId', '=', 'ranks.rankId')->paginate(2);
        return view('User.list',[
            'users' => $users,
            'request' => $request->value
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        if(Auth::user()->roleId != 1)
        {
            $update = DB::update('update users set phone = ? where email = ?',[$data['phone'],$data['email']]);
            if($update)
        {
            return redirect('request');
        }
        else {
            return redirect('request');
        }
        }
        else {
            $update = DB::update('update users set firstName=?, lastName=?, roleId=?, rankId=?, divisionId=?,phone=? where email=?', [$data['firstName'],$data['lastName'],$data['roleId'],$data['rankId'],$data['divisionId'],$data['phone'],$data['email']]);   
            if($update)
        {
            return redirect('users')->with('success','Succesfully User Information  Updated');
        }
        else {
            return redirect('users')->with('information','No information Updated');
        }  
        }
        
        
    }
    
}
