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
            'subject' => ['required','min:10','max:400'],
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
            'requestStatus' => 3 
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
        if(!$validate->errors()->isEmpty()){
            return redirect()->back ()->withErrors($validate->errors());
        }
        else if($this->create($data))
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
    
     * @return \Illuminate\Http\Response
     */
    public function cancel(Request $request)
    {   
        $cancel = DB::update('update requests set approveStatus=? where requestId=?',["cancelled",$request->requestId]);
        if($cancel)
        { 
            return redirect('request');
        }
        else {
            return "something went wrong";
        }
    }

    public function approve(Request $request)
    {   if(Auth::user()->roleId == 2)
        {
                    $approve = DB::update('update requests set approveStatus=? where requestId=?',["approved",$request->requestId]);
        }
      
        else {
            // return "humu";
            $approve = DB::update('update requests set requestStatus = ? where requestId = ?',["2", $request -> requestId]);
        }
        if($approve)
        { 
            return redirect('supervisor');
        }
        else {
            return "something went wrong";
        }
    }

    public function disapprove(Request $request)
    {   
        $disapprove = DB::update('update requests set approveStatus=? where requestId=?',["disapproved",$request->requestId]);
        if($disapprove)
        { 
            return redirect('supervisor');
        }
        else {
            return "something went wrong";
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
        $requests = DB::select('select requestId, source, roleTitle, requestDesc, destination, userId, requestType,startDate,endDate,requestStatus, approveStatus, users.roleId = roles.roleId from requests,users,roles where userId = ? and userId = users.id and requestStatus = roles.roleId',[Auth::user()->id]);
        // $requests = DB::select('select requestId,requestStatus,approveStatus,userId,startDate,endDate,source,destination,requestType,requestDesc,regionName,districtName,requests.created_at, roleTitle 
        // from requests,regions,district_councils,users,roles where userId=?  and userId = users.id and requestStatus = roles.roleId
        // and regions.regionId =  district_councils.regionId'
        // ,[Auth::user()->id]);
        //return $requests;
        return view('User.myrequests', ['requests' => $requests]);
    }

    public function supervisorRequest()
    {
        $requests = DB::select('select *from requests,users,divisions,roles where userId=id and users.divisionId=divisions.divisionId and users.divisionId =? and requests.requestStatus <=? and requestStatus = roles.roleId',[Auth::user()->divisionId,Auth::user()->roleId]);
        return view('Supervisor.approveRequest', ['requests' => $requests]);
    }
}
