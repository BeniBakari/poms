@extends('layouts.app')
@section('content')
    <div class="card card-body mx-auto" style="width: 60%; border-radius:10px;">
            @foreach($user as $user)     
        <form method="post" action="/edit">
        @csrf

    <h5 class="mx-auto " style="width: 150px; " >Edit User</h5>

            <div class="form-group row">
              <label for="inputFirstName" class="col-sm-auto col-form-label mx-3 ">First Name</label>
              <div class="col-md-8 form-inputs">
                <input type="text" name="firstName" class="form-control" id="inputFirstName" placeholder="First Name" value="{{$user->firstName}}" required>

   
              </div>
            </div>
            <div class="form-group row">
              <label for="inputLastName" class="col-sm-auto col-form-label mx-3">Last Name</label>
              <div class="col-sm-8 form-inputs">

                <input type="text" name="lastName" class="form-control" id="inputLastName" placeholder="Last Name" value="{{$user->lastName}}" required>

              </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-auto col-form-label mx-3">Email</label>
                <div class="col-sm-8 form-inputs">

                  <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="{{$user->email}}" readonly=true>
                </div>
              </div>
              <!-- <div class="form-group row">
                <label for="inputDivision" class="col-sm-auto col-form-label mx-3">  &ensp; &ensp;Rank</label>
                <div class="col-sm-8 form-inputs">
                  <select name="divisionId" class="form-control form-select">
                  <option value="{{$user -> divisionId}}">{{$user->divisionTitle}}</option>
                    @foreach($divisions as $division)
                    <option value="{{$division -> divisionId}}">{{$division -> divisionTitle}}</option>
                    @endforeach
                </select>
                </div> -->
              <div class="form-group row">
                <label for="inputDivision" class="col-sm-auto col-form-label mx-3">  &ensp; &ensp;Division</label>
                <div class="col-sm-8 form-inputs">
                  <select name="divisionId" class="form-control form-select">
                  <option value="{{$user -> divisionId}}">{{$user->divisionTitle}}</option>
                    @foreach($divisions as $division)
                    <option value="{{$division -> divisionId}}" required>{{$division -> divisionTitle}}</option>
                    @endforeach
                </select>

                </div>
              </div>
              <div class="form-group row">
                <label for="inputPhoneNo" class="col-sm-auto col-form-label mx-3">Phone No</label>
                <div class="col-sm-8 form-inputs">

                  <input type="text" name="phone" class="form-control" id="inputPhoneNo" placeholder="Phone Number" value="{{$user->phone}}" required>

                </div>
              </div>
             
              

              <button type="submit" class="btn btn-primary   offset-5" style="margin-top: 30px; background-color:#013c5c; border-radius:19px;" >Save</button>       
        </form>
        @endforeach
    </div>
@endsection


