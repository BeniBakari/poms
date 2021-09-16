<?php

namespace App\Http\Controllers;

use App\Models\Regions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use DB;

class RegionsController extends Controller
{
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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'regionName' => ['required', 'string', 'max:30' ,'min:5','unique:regions'],      
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
        return Regions::create([
            'regionName' => $data['regionName']
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
        return "Boom";
        else 
            return "something went wrong";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //$regions = DB::table('regions')->pluck('regionId','regionName')->get('all');
        $regions =DB::select('select regionId,regionName from regions');
        return view('Admin.addDistrict',['regions'=>$regions]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function edit(Regions $regions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regions $regions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Regions  $regions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regions $regions)
    {
        //
    }
}
