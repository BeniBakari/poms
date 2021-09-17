<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <!--  end of bootstrap link -->
 <style>
     .form-inputs input{
        color: #3D3A3A;
		border: none;
		border-bottom: 2px solid #013C5C;
     }
 </style>
</head>
<body>
    @include('layouts.web_header')
    @include('layouts.header')
    

    {{-- @include('layouts.navibar') --}}
   

    <h5 class="mx-auto " style="width: 150px; " >Edit User</h5>

    <div class="card card-body mx-auto mb-2" style="width: 60%; border-radius:10px;">
      
      @foreach ($user as $user)  
        <form>
            @csrf
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
    @include('layouts.footer')

</body>
</html>


