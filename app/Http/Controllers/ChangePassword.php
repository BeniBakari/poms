<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class ChangePassword extends Controller
{
    public function __construct()
    {
      $this->middleware('auth'); 
    }
    
    public function validator(array $data)
    {
        return Validator::make($data,[
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    public function update($pass)
    {
        return DB::update('update users set password=? where id=?',[Hash::make($pass),Auth::user()->id]);
    }
    public function change(Request $request){
        $currentpassword = Hash::make($request -> currentpassword); 
        $password = Hash::make($request -> newpassword); 
        
        $validate = $this->validator($request->all());
        if($validate)
        {
           // return $validate->errors();
            return redirect()->back()->withErrors($validate->errors());
        }
        else 
        if(\Hash::check($request->currentpassword,Auth::user()->password))
        {
            
            if(!\Hash::check($request->password,Auth::user()->password))
            {
                if($this->update($request -> password))
                {
                    session()->flash('message','password updated successfully');
                    return redirect('request');
                }
                else {
                    session()->flash('message','failed to change password!');
                    return redirect()->bakc();
                }
            }
        }
        else {
            return "Old";
                session()->flash('message','Incorrect current password!');
                return redirect()->bakc();  
        }
    }
}
