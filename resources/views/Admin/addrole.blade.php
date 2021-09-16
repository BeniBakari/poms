@extends('layouts.app')
@section('content')
<div class="card-body w-50 mx-auto offset-5 card card-body">
<form method="POST" action="/addRole" class="">
 @csrf

        <div>
            <div>
                <div class="mb-3"> 
                    <div class="row">
                        <label for="" class="float-left col-md-2" style="margin-right:10%">Role Title</label>
                	 <input type="text" name="roleTitle" class="form-control col-md-4 form-inputs"  placeholder="Admin" autofocus required>
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
                    <div class="row text-center">
                        <textarea class="form-control" name="roleDesc" id="exampleFormControlTextarea1" rows="3" required></textarea>
                    </div><br>
				@error("roleDesc")
					<div>
						<span><strong>{{_errorroleDesc}}</strong></span>
					</div>
				@enderror
            </div>
				
                <div class="form-button text-center">
                    <button type="submit" class="btn btn-primary col-md-2" style="background-color:#013c5c; border-radius:20px;" >Save</button>
          		</div>
		</div>
</form>
</div>
       
@endsection