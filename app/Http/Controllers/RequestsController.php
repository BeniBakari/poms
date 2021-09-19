<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


use App\Models\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class RequestsController extends Controller
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
            'subject' => ['required','min:20','max:400'],
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
            'userId' => Auth::user()->id,
            'approveStatus' => "pending",
            'startDate' => $data['startDate'],
            'endDate' => $data['endDate'],
            'source' => $data['source'],
            'destination' => $data['destination'],
            'requestType' => $data['requestType'],
            'requestDesc' => $data['subject'],
            'requestStatus' => 1 
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
        // $validate = $this->validator($data);
        // if($validate){
        //     return redirect()->back()->withErrors($validate->errors());
        // }
         if($this->create($data))
        return redirect('request');
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
    public function cancel(Requests $requests)
    {
        if(DB::update('update requests set approveStatus=? where requestId=?',["cancelled",$requests->requestId]))
        {
            return "boom";
        }
        else {
            return $requests->requestId;
        }
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
    public function myRequest()
    {
        //$requests = DB::select('select * from requests where userId=?',[Auth::user()->id]);
        $requests = DB::select('select requestId,requestStatus,approveStatus,userId,startDate,endDate,source,destination,requestType,requestDesc,regionName,districtName,requests.created_at 
        from requests,regions,district_councils,users where userId=? and requests.source = district_councils.district_councilId and userId = users.id
        and regions.regionId =  district_councils.regionId'
        ,[Auth::user()->id]);
        return view('User.myrequests', ['requests' => $requests]);
    }

    public function supervisorRequest()
    {
        $requests = DB::select('select *from requests,users,divisions where userId=id and users.divisionId=divisions.divisionId and users.divisionId =? and requests.requestStatus <=?',[Auth::user()->divisionId,Auth::user()->roleId]);
        return view('Supervisor.approveRequest', ['requests' => $requests]);
    }
}
