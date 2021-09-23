@extends('layouts.app')

@section('content')
<style>
    	body{
		font-family: raleway;
	}
	#myForm{
		border: 1px solid grey;
		border-bottom-left-radius: 5%;
		border-bottom-right-radius: 5%;
		padding: 0;
		background-color: #013C5C;
		box-shadow: 2px   solid black;
	}

	.form-inputs{
		background-color: white;
		display: block;
		padding: 1%;
		border-bottom-left-radius: 35px;
		border-bottom-right-radius: 35px;
		/*margin-bottom: 30px;*/
	}	
	.form-button{
		height: 100px;
		
	}
	.btn{
		margin-top: 8%;
		background-color: white;
		color: black;
		width: 50%;
	}
	
	.form-inputs{
		padding-left: 10%;
		padding-right: 10%;
	}
	.form-inputs>h3{
		margin-bottom: 40px;

	}
	.form-inputs input{
		color: #3D3A3A;
		border: none;
		border-bottom: 2px solid #013C5C;	
	}
	 .form-control:focus {
  					box-shadow: none;
				}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    <div class="row justify-content-center mb-2">
                        <h3 class="col-md-6">Register New User</h3>
                    </div>
                    <form method="POST" action="{{ route('register') }}" class="form-inputs">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" required autocomplete="firstName" autofocus>

                                @error('firstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>

                                @error('lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="email">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            <div class="form-group row">
                            <label for="divisionId" class="col-md-4 col-form-label text-md-right">{{ __('Rank') }}</label>

                            <div class="col-md-6">
                                <select name="rankId"  class="form-select"> Select Rank
                                   <option value=" ">Select Rank</option>
                                    @foreach($ranks as $rank)
                                        <option value = "{{$rank -> rankId}}"> {{$rank -> rankName}}</option>
                                    @endforeach
                                </select>
                                @error('rankId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="divisionId" class="col-md-4 col-form-label text-md-right">{{ __('Division') }}</label>

                            <div class="col-md-6">
                                <select name="divisionId"  class="form-select"> Select Division
                                   <option value=" ">Select Division</option>
                                    @foreach($divisions as $division)
                                        <option value = "{{$division -> divisionId}}"> {{$division -> divisionTitle}}</option>
                                    @endforeach
                                </select>
                                @error('divisionId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="divisionId" class="col-md-4 col-form-label text-md-right">{{ __('District Council') }}</label>

                            <div class="col-md-6">
                                <select name="district_councilId"  class="form-select"> Select Division
                                    <option value=" ">Select ditrict</option>
                                    @foreach($districts as $district)
                                        <option value = "{{$district -> district_councilId}}"> {{$district -> districtName}}</option>
                                    @endforeach
                                </select>
                                @error('divisionId')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                Male
                                <input id="gender" type="radio" class=" @error('gender') is-invalid @enderror" name="gender" value="Male" required>
                                Female
                                <input id="gender" type="radio" class=" @error('gender') is-invalid @enderror" name="gender" value="Female" required>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-button text-center text-white">
                    <button type="submit" class="btn btn-primary col-md-4 text-white" style="background-color:#013c5c; border-radius:20px;" >Register</button>
          		</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
