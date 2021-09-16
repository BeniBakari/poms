@extends('layouts.app')
@section('content')
<div class="card-body w-50 mx-auto offset-5 card card-body">
<form method="POST" action="/addDivision" class="">
        @csrf
        <div class="card-header mb-3 text-center">Add Division</div>
        <div>
            <div>
                <div class="mb-3"> 
                    <div class="row text-center">
                        <label for="" class="col-md-4">Role Title</label>
                	 <input type="text" name="divisionTitle" class="form-control text-center col-md-6 form-inputs" value="{{ old('divisionTitle') }}"  placeholder="eg. DICT" autofocus>
                     @error('divisionTitle')
                         <strong><span style="color: red; font-size: 80%;">{{$message}}</span></strong><br>
                     @enderror
                    </div>     
        		</div>
				
            </div>
            <div>
                    <span class="text-center">Description</span>
                    <div class="row mb-2 text-center">
                        <textarea class="form-control col" name="divisionDesc" id="exampleFormControlTextarea1" rows="3" required value="{{ old('divisionDesc') }}"></textarea>
                        @error('divisionDesc')
                            <strong><span style="color: red; font-size: 80%;">{{$message}}</span></strong>
                        @enderror
                    </div><br>
				
            </div>
				
                <div class="form-button text-center">
                    <button type="submit" class="btn btn-primary col-md-4" style="background-color:#013c5c; border-radius:20px;" >Add Division</button>
          		</div>
		</div>
</form>
</div>
@endsection