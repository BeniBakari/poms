<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'manageUsers';
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'rankId' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' =>['required', 'string','max:10','min:10','unique:users'],
            'district_councilId' => ['required'],
            'rankId'=>['required'],
            'divisionId' => ['required'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        
        return User::create([
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'roleId' => 4,
            'rankId' => $data['rankId'],
            'status' => "Active",
            'phone' => $data['phone'],
            'district_councilId' => $data['district_councilId'],
            'divisionId' =>$data['divisionId'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $validate = $this ->validator();
        if(!$validate->errors()->isEmpty())
        {
            return redirect()->back()->withErrors($validate->errors())->with('error','Failed to register new user');
        }
        else if($this->create($data)){
            return redirect('users')->with('success','New User Successfuly registered');
        }
        else {
            {
                return redirect()->back()->with('information','Something went wrong');
            }
        }
    }
    
}
