<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeRequests extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function validate(array $data)
    {
        return Validator::make($data[

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\MakeRequests
     */

    public function makeRequest(array $data)
    {
        return MakeRequests::create([
            'userId' => $data['userId'],
            'startDate' => $data['startDate'],
            'endDate' => $data['endDate'],
            'phone' => $data['phone'],
            'source' => $data['source'],
            'destination' =>$data['destination'],
            'requestType' => $data['requestType'],
            'requestDesc' => $data['requestDesc'],
            'requestStatus' => $data['requestStatus'],
            'approveStatus' => $data['approveStatus']
        ]);
    }
    public function getReqInfo()
    {
        $reqInfos = DB::select('select district_councilId, districtName from district_councils');
        return view('User.request', ['reqInfos' => $reqInfos]);
    }
}
