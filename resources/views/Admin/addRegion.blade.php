@extends('layouts.app')
@section('content')
<div class="card-body w-50 mx-auto offset-5 card card-body">
<form method="POST" action="/addRegion" class="text-center">
        @csrf
		<div class="card-header">Add New Region</div>
        <div class="card-body ">
				<div class="mb-3 col  row"> 
					<label for="" class="float-left col-md-3" style="margin-right:10%">Region Name</label>    
                	 <input type="text" name="regionName" class="form-control col-md-6 text-center form-inputs"  placeholder="KILIMANJARO" autofocus required>
        		</div>
				@error("regionName")
					<div>
						<span><strong>{{_errorRegionName}}</strong></span>
					</div>
				@enderror
                <div class="form-button text-center">
                    <button type="submit" class="btn btn-primary col-md-4" style="background-color:#013c5c; border-radius:20px;" >Add Region</button>
          		</div>
		</div>
</form>
</div>
@endsection