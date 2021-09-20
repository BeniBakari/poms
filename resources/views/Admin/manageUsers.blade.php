@extends('layouts.app')
@section('content')
<span class="p-5"></span>
    <div class="row col-md-8 justify-content-center">
        <div class="col-md-4 d-block text-center  bg-color" style="background-color:#013C5C;">
             <a href="/users?value=1" class="justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="white" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                </svg><br>
                    <span class="text-decoration-none  text-white">Manage Users</span>
             </a>
        </div>
        <div class="col-md-4 d-block text-center offset-4  bg-color" style="background-color:#013C5C;">
             <a href="/addUser" class="justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="white" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
  <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
</svg><br>
                    <span class="text-decoration-none  text-white">Add User</span>
             </a>
        </div>
    </div>
@endsection