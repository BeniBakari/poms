@extends('layouts.app')
@section('content')
<form method="POST" action="/addRegion" class="card text-center">
        @csrf
        <div class="card-body ">
				<div class="mb-3 col-md-4 offset-4">      
                	 <input type="text" name="regionName" class="form-control text-center"  placeholder="KILIMANJARO" autofocus required>
        		</div>
				@error("regionName")
					<div>
						<span><strong>{{_errorRegionName}}</strong></span>
					</div>
				@enderror
                <div class="form-button text-center">
           			 <button type="submit" class="btn btn-primary rounded-pill">Add Region</button>
          		</div>
		</div>
</form
@endsection