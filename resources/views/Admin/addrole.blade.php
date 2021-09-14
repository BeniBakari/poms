@extends('layouts.app')
@section('content')
<form method="POST" action="/addRole" class="card">
        @csrf
        <div class="card-header mb-3 text-center">Add Roles</div>
        <div>
            <div>
                <div class="mb-3"> 
                    <div class="row">
                        <label for="" class="col-md-2">Role Title</label>
                	 <input type="text" name="roleTitle" class="form-control col-md-4"  placeholder="Admin" autofocus>
                    </div>     
        		</div>
				@error("roleName")
					<div>
						<span><strong>{{_errorroleName}}</strong></span>
					</div>
				@enderror
            </div>
            <div>
                    <span class="text-center">Description</span>
                    <div class="row mb-3 text-center">
                        <textarea class="form-control col-md-4" name="roleDesc" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div><br>
				@error("roleDesc")
					<div>
						<span><strong>{{_errorroleDesc}}</strong></span>
					</div>
				@enderror
            </div>
				
                <div class="form-button text-center mb-3">
           			 <button type="submit" class="btn btn-primary rounded-pill">Add Role</button>
          		</div>
		</div>
</form
@endsection