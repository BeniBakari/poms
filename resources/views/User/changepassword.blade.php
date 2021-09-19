
@extends('layouts.app')
@section('content')
<span class="p-5"></span>
<div class="card col-md-8 mx-auto p-5" style="
    border-radius: 10px;
    border-style: solid;
    border-width: 3px;
    border-color: #013C5C;
    padding: 30px;">
    
    <div class="mb3 w-100 text-center ">
        <h3>Change Password</h3>
    </div>
    <form action="/changepass" method="post" class="form-inputs">
        @csrf
        <div class="form-group row">
             <label for="currentpassword" class="col-md-4 col-form-label text-md-right">{{ __('Current Password') }}</label>
                 <div class="col-md-6">
                        <input id="currentpassword" type="password" class="text-center form-control @error('currentpassword') is-invalid @enderror" name="currentpassword"  required placeholder="current password">
                        @error('currentpassword')
                            <span class="invalid-feedback text-danger" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                         @enderror
               </div>
        </div>
        
        <div class="form-group row">
             <label for="newpassword" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>
                 <div class="col-md-6">
                        <input id="password" type="password" class="text-center form-control @error('password') is-invalid @enderror" name="password"  required placeholder="new password">
                        @error('password')
                            <span class="invalid-feedback text-danger" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                         @enderror
               </div>
        </div>

        <div class="form-group row">
             <label for="confirmpassword" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                 <div class="col-md-6">
                        <input id="confirmpassword" type="password" class="text-center form-control @error('confirmpassword') is-invalid @enderror" name="password_confirmation"  required placeholder="confirm password">
                        @error('confirmpassword')
                            <span class="invalid-feedback text-danger" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                         @enderror
               </div>
        </div>

        <div class="row justify-content-center mb-2">
            <button class="btn  text-light rounded-pill  col-md-2" style="background-color:#013C5C">Save</button>
        </div>

    </form>
</div>
@endsection