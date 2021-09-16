<?php

namespace App\Http\Controllers;

use App\Models\District_council;
use Illuminate\Http\Request;

class District_councilController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
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
        return District_council::create([
            'districtName' => $data['districtName'],
            'regionId' =>$data['regionId']
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
        if($this->create($data))
            return "boom";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\District_council  $district_council
     * @return \Illuminate\Http\Response
     */
    public function show(District_council $district_council)
    {
        //
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
