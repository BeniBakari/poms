@extends('layouts.app')
@section('content')
<span class="p-5"></span>

   

    <div class="card card-body mx-auto" style="border-radius:10px; width: 60%;">
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
                <input type="text" name="firstName" required class="form-control text-center" id="inputFirstName" placeholder="First Name" value="{{$user->firstName}}" @if(Auth::user()->roleId != 1 || Auth::user()->id != $profileId) readonly=true @endif>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputLastName" class="col col-form-label mx-3 ">Last Name</label>
              <div class="col-md-8 form-inputs">

                <input type="text" name="lastName" required  class="form-control text-center" id="inputLastName" placeholder="Last Name" value="{{$user->lastName}}"  @if(Auth::user()->roleId != 1 || Auth::user()->id != $profileId) readonly=true @endif>

              </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col col-form-label mx-3 ">Email</label>
                <div class="col-md-8 form-inputs">

                  <input type="email" name="email" required  class="form-control text-center" id="inputEmail3" placeholder="Email" value="{{$user->email}}" @if(Auth::user()->roleId != 1 || Auth::user()->id != $profileId) readonly=true @endif>
                </div>
              </div>

              <div class="form-group row">
                <label for="inputDivision" class="col col-form-label mx-3 ">Role</label>
                <div class="col-sm-8 form-inputs">
                  <select name="roleId"   class="form-control form-select text-center" @if(Auth::user()->roleId != 1) disabled @endif >
                  <option value="{{$user -> roleId}}" selected>{{$user->roleTitle}}</option>
                                    @foreach($roles as $role)
                                        <option value = "{{$role -> roleId}}"> {{$role -> roleTitle}}</option>
                                    @endforeach
                </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="inputDivision" class="col col-form-label mx-3 ">Designation</label>
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

                 <button type="submit" class="btn btn-primary offset-5 badge-pill" style="margin-top: 30px; background-color:#013c5c; width:80px;" >Save</button>       
       
            </form>
        @endforeach
        
    </div>
  
   
   
@endsection


