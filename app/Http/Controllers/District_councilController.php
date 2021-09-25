<?php

namespace App\Http\Controllers;

use App\Models\District_council;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
class District_councilController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'districtName' => ['required', 'string','min:4', 'max:40','unique:district_councils'],
            'region' => ['required']
        ]);
    }
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
        return District_council::create([
            'districtName' => $data['districtName'],
            'regionId' =>$data['region']
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
            //return $validate->errors();
            return redirect()->back()->withErrors($validate->errors());
        }
        else if($this->create($data))
            return redirect('districts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\District_council  $district_council
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $regions = DB::select('select *from regions');
        $districts = DB::select('select *from district_councils, regions where regions.regionId = district_councils.regionId');
        return view('Admin.districts',['districts' => $districts,'regions'=>$regions])->with('success', 'Successfuly');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\District_council  $district_council
     * @return \Illuminate\Http\Response
     */
    public function edit(District_council $district_council)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\District_council  $district_council
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, District_council $district_council)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\District_council  $district_council
     * @return \Illuminate\Http\Response
     */
    public function destroy(District_council $district_council)
    {
        //
    }
}
