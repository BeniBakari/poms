@extends('layouts.app')
@section('content')

<span class="p-5"></span>
    <div class="card card-body mx-auto" style="border-radius:10px;">
            @foreach($user as $user)     
        <form method="post" action="/edit">
        @csrf

    <h5 class="mx-auto " style="width: 150px; " >
      @if(Auth::user()->roleId == 1 && Auth::user()->id != $profileId)
        Edit User
      @else
        My Profile
      
      @endif
  </h5>

            <div class="form-group row">
              <label for="inputFirstName" class="col col-form-label mx-3 ">First Name</label>
              <div class="col-md-8 form-inputs">
                <input type="text" name="firstName" class="form-control text-center" id="inputFirstName" placeholder="First Name" value="{{$user->firstName}}" required <?php if(Auth::user()->roleId != 1) {?> readonly=true <?php } ?>>


              </div>
            </div>
            <div class="form-group row">
              <label for="inputLastName" class="col col-form-label mx-3 ">Last Name</label>
              <div class="col-md-8 form-inputs">

                <input type="text" name="lastName" class="form-control text-center" id="inputLastName" placeholder="Last Name" value="{{$user->lastName}}" required <?php if(Auth::user()->roleId != 1) {?> readonly=true <?php } ?>>

              </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col col-form-label mx-3 ">Email</label>
                <div class="col-md-8 form-inputs">

                  <input type="email" name="email" class="form-control text-center" id="inputEmail3" placeholder="Email" value="{{$user->email}}" readonly=true>
                </div>
              </div>

              <div class="form-group row">
                <label for="inputDivision" class="col col-form-label mx-3 ">Role</label>
                <div class="col-sm-8 form-inputs">
                  <select name="roleId"   class="form-control form-select text-center" @if(Auth::user()->roleId != 1)?> disabled @endif >
                  <option value="{{$user -> roleId}}" selected>{{$user->roleTitle}}</option>
                                    @foreach($roles as $role)
                                        <option value = "{{$role -> roleId}}"> {{$role -> roleTitle}}</option>
                                    @endforeach
                </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="inputDivision" class="col col-form-label mx-3 ">Rank</label>
                <div class="col-sm-8 form-inputs">
                  <select name="rankId" class="form-control form-select text-center" @if(Auth::user()->roleId != 1)  disabled @endif >
                  <option value="{{$user -> rankId}}" selected>{{$user->rankName}}</option>
                                    @foreach($ranks as $rank)
                                        <option value = "{{$rank -> rankId}}"> {{$rank -> rankName}}</option>
                                    @endforeach
                </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputDivision" class="col col-form-label mx-3 ">Division</label>
                <div class="col-sm-8 form-inputs">
                  <select name="divisionId" class="form-control form-select text-center" @if(Auth::user()->roleId != 1)  disabled @endif >
                  <option value="{{$user -> divisionId}}" selected>{{$user->divisionTitle}}</option>
                    @foreach($divisions as $division)
                    <option value="{{$division -> divisionId}}" required>{{$division -> divisionTitle}}</option>
                    @endforeach
                </select>

                </div>
              </div>
              <div class="form-group row">
                <label for="inputPhoneNo" class="col col-form-label mx-3 ">Phone No</label>
                <div class="col-sm-8 form-inputs text-center">

                  <input type="text" name="phone" class="form-control text-center" id="inputPhoneNo" placeholder="Phone Number" value="{{$user->phone}}" required>

                </div>
              </div>
              <div class="row rows justify-content-center">
                  <button type="submit" class="btn btn-primary col-md-2  badge-pill" style="margin-top: 30px; background-color:#013c5c; width:80px;" >Save</button> 
                  @if(Auth::user()->roleId == 1 && Auth::user()->id != $profileId)      
                      <button type="button" class="btn btn-info col-md-4 offset-2 rounded-pill" style="margin-top: 30px;" data-toggle="modal" data-target="#resetpassword">Reset Password</button> 
                  @endif
              </div>
                 
        </form>
        @endforeach
    </div>
    <div class="modal fade" id="resetpassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form method="POST" action="/reset?email={{$user->email}}" class="form-inputs">
        @csrf
				<div class="mb-3 col  row"> 
					<label for="" class="float-left col-md-3" style="margin-right:10%"> Password</label>    
                	 <input type="text" name="password" class="form-control col-md-6 text-center form-inputs" autocomplete="off" autofocus required>
					 @error('password')
                         <strong><span style="color: red; font-size: 80%;">{{$message}}</span></strong><br>
            @enderror 
        		</div>

            <div class="mb-3 col  row"> 
					<label for="" class="float-left col-md-3" style="margin-right:10%"> Confirm</label>    
                	 <input type="text" name="password_confirmation" class="form-control col-md-6 text-center form-inputs" autocomplete="off" autofocus required>
					 @error('password-confirm')
                         <strong><span style="color: red; font-size: 80%;">{{$message}}</span></strong><br>
            @enderror 
        		</div>
				
                <div class="form-button text-center">
                    <button type="submit" class="btn btn-primary col-md-4" style="background-color:#013c5c; border-radius:20px;" >Reset</button>
          		</div>
    
        </form><button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection


