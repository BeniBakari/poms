<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;


use App\Models\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class RequestsController extends Controller
{

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
            'requestType' => ['required'],
            'source' =>['required'],
            'destination' => ['required'],
            'subject' => ['required','min:200','max:400'],
            'startDate' => ['required'],
            'endDate' => ['required']
        ]);
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        return Requests::create([
            'userId' => 7,
            'approveStatus' => 1,
            'startDate' => $data['startDate'],
            'endDate' => $data['endDate'],
            'source' => $data['source'],
            'destination' => $data['destination'],
            'requestType' => $data['requestType'],
            'requestDesc' => $data['subject'],
            'requestStatus' => 1,
            
        ]);


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validate = $this->validator($data);
        if($validate){
            return redirect()->back()->withErrors($validate->errors());
        }
        else if($this->create($data))
        return "Boom";
        else 
            return "something went wrong";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function show(Requests $requests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function edit(Requests $requests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requests $requests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Requests  $requests
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requests $requests)
    {
        //
    }
    public function getReqInfo()
    {
        $reqInfos = DB::select('select district_councilId, districtName from district_councils');
        return view('User.request', ['reqInfos' => $reqInfos]);
    }
    public function getUserId()
    {
        return Auth::user()->id;
    }
}
