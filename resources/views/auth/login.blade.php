@include('layouts.web_header')

<style type="text/css">
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
    .header{
        background-color: #013C5C;
        color: white;
        margin-bottom: 10%;
    }
    .form-inputs{
        background-color: white;
        display: block;
        padding: 1%;
        border-bottom-left-radius: 35px;
        border-bottom-right-radius: 35px;
        
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
<div class="card-header header">
    <h2>POM-PORALG</h2>
</div>
<div id="myForm" class="col-md-3 offset-md-5 text-center">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-inputs">
            <h3 style="color:#013C5C" class="offset-md-2">POM-PORALG</h3>
            <div class="mb-3">      
                 <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="exam.example@tamisemi.go.tz" autofocus>
            </div>
          @csrf
          <div class="mb-3">
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
          </div>
            @error('email')
                <strong><span style="color: red; font-size: 80%;">{{$message}}</span></strong><br>
            @enderror
          <!-- <a href="#" style="text-decoration: none; margin-left: 10%; color: #013C5C;float: left;">forgot password?</a> -->
          <br>
        </div>
          <div class="form-button text-center">
            <button type="submit" class="btn btn-primary rounded-pill">Sign in</button>
          </div>
        
</form>
</div>

