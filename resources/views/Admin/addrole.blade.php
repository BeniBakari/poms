@extends('layouts.app')
@section('content')
<div class="card-body w-50 mx-auto offset-5 card card-body">
<form method="POST" action="/addRole" class="">
 @csrf

        <div>
            <div>
                <div class="mb-3"> 
                    <div class="row text-center">
                        <label for="" class="float-left col-md-2" style="margin-right:10%">Role Title</label>
                	 <input type="text" name="roleTitle" class="form-control col-md-4 form-inputs"  placeholder="Admin" autofocus required>
                     @error('roleTitle')
                         <strong><span style="color: red; font-size: 80%;">{{$message}}</span></strong><br>
                     @enderror  
                    </div>
                     
        		</div>
				
            </div>
            <div>
                    <span class="text-center">Description</span>
                    <div class="row text-center">
                        <textarea class="form-control" name="roleDescription" id="exampleFormControlTextarea1" rows="3" required></textarea>
                        @error('roleDescription')
                         <strong><span style="color: red; font-size: 80%;">{{$message}}</span></strong><br>
                        @enderror 
                    </div><br>
			
            </div>
				
                <div class="form-button text-center">
                    <button type="submit" class="btn btn-primary col-md-2" style="background-color:#013c5c; border-radius:20px;" >Save</button>
          		</div>
		</div>
</form>
</div>
       
@endsection