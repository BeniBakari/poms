@extends('layouts.app')
@section('content')

<form method="POST" action="/addDistrict" class="card">
@csrf
        <div>
            District Council of <input type = "text" name= "districtName" required>
        </div>
        <div>
             Select region 
             <select name="regionId" class="form-select"> region
                        <option>Select region</option>
                        @foreach($regions as $region)
                        <option value="{{$region -> regionId}}" >{{$region->regionName}}</option>
                        @endforeach
            </select>    
        </div>
        <div class="form-button text-center">
           	 <button type="submit" class="btn btn-primary rounded-pill">Add District</button>
        </div>
</form>
@endsection