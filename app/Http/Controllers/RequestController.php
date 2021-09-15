<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

use DB;

class RequestController extends Controller
{
    // public function validate(array $data)
    // {
    //     return Validator::make($data, [
    //         'requestDesc' => ['required', 'string', 'min:100','max:500'],
    //         'source' => ['required'],
    //         'destination' => ['required'],
    //         'startDate' => ['required'],
    //         'endDate' => ['required'],
    //         'requestType' => ['required']
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\MakeRequests
     */

    public function makeRequest(array $data)
    {
        return Request::create([
            'userId' => $data['userId'],
            'startDate' => $data['startDate'],
            'endDate' => $data['endDate'],
            'phone' => $data['phone'],
            'source' => $data['source'],
            'destination' =>$data['destination'],
            'requestType' => $data['requestType'],
            'requestDesc' => $data['requestDesc'],
            'requestStatus' => 1,
            'approveStatus' => "pending"
        ]);
    }
    public function getReqInfo()
    {
        $reqInfos = DB::select('select district_councilId, districtName from district_councils');
        return view('User.request', ['reqInfos' => $reqInfos]);
    }
}
