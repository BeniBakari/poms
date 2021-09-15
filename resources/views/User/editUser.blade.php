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

    <div class="card card-body mx-auto" style="width: 60%; border-radius:10px;">
        <form>
            <div class="form-group row">
              <label for="inputFirstName" class="col-sm-auto col-form-label mx-3 ">First Name</label>
              <div class="col-md-8 form-inputs">
                <input type="text" class="form-control" id="inputFirstName" placeholder="First Name">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputLastName" class="col-sm-auto col-form-label mx-3">Last Name</label>
              <div class="col-sm-8 form-inputs">
                <input type="text" class="form-control" id="inputLastName" placeholder="Last Name">
              </div>
            </div>
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-auto col-form-label mx-4">  &ensp; &ensp;Email</label>
                <div class="col-sm-8 form-inputs">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputRank" class="col-sm-auto col-form-label mx-4">  &ensp; &ensp;Rank</label>
                <div class="col-sm-8 form-inputs">
                  <input type="text" class="form-control" id="inputRank" placeholder="Rank">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputDivision" class="col-sm-auto col-form-label mx-3">  &ensp; &ensp;Division</label>
                <div class="col-sm-8 form-inputs">
                  <input type="text" class="form-control" id="inputDivision" placeholder="Division">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPhoneNo" class="col-sm-auto col-form-label mx-3">Phone No</label>
                <div class="col-sm-8 form-inputs">
                  <input type="text" class="form-control" id="inputPhoneNo" placeholder="Phone Number">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-auto col-form-label mx-3">Password</label>
                <div class="col-sm-8 form-inputs">
                  <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
              </div>
              
                <button type="button" class="btn btn-primary col-2 offset-5" style="margin-top: 30px; background-color:#013c5c; border-radius:20px;" >Save</button>
             
             
        </form>
    </div>
    {{-- <div style="background-color: yellow; width:600px; border: solid black; margin-left:500px; padding-left:50px;">
        <h2>Mambo Juju</h2>
       <p>Umependeza na shati lako la damu ya mzee</p>
       <h2>Puttin yupo hapa anaangalia movie</h2>
    </div> --}}
   
</body>
</html>


