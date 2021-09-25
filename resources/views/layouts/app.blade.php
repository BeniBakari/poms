<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.web_header')
    <script>
        function dismiss()
        {
            setTimeout(() => {
                document.getElementById('message').style.display = "none";
            }, 3000);
        }
    </script>
    </head>
<<<<<<< HEAD
    <body onload = "dismiss();">
@include('layouts.header')    
@include('layouts.navbar')
@include('flash_message')
=======
<<<<<<< HEAD
        <style>
            *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
    font-family: 'Nunito', sans-serif;
}

/*Header Styling*/
nav{
    background: #013c5c;
    line-height: 80px;
    
    position: fixed;
    width: 100%;
}

/*Header Text Styling*/
nav label{
    line-height: 20px;
    font-size: 30px;
    color: white;
    font-weight: 200;
    margin-left: 50px;
    cursor: pointer;
}

/*Header logo Styling*/
nav ul{
    float: right;
    margin-right: 20px;
}

/*Icons styling*/
.icons{
    background: #002f4b;
    width: 100%;
    margin-top: 7%;
    /* padding-top: 85px; */
    display: inline-block;
}

/*Text beside icons Styling*/
.icons label{
    line-height: 50px;
    font-size: 30px;
    color: white;
    font-weight: 100;
    margin-left: 50px;
   
}

/*Individual icon Styling*/
.icons #bars{
    cursor: pointer;
    float: left;
    padding: 10px 0px 0px 10px;
}

/*Individual icon Styling*/
.icons #logout{
    cursor: pointer;
    float: right;
    padding: 10px 10px 0px 0px;
}

/*Respective Page Styling*/
.page{
    margin-left: auto;
}

/*Change Password Page Styling*/
.page{
    max-width: 80%;
    width: 100%;
      
    
  }

/*Sidenav Styling*/
.side-menu{
    position: fixed;
    background: #013c5c;
    width: 185px;
    height: 100.4%;
    margin-top: 0px;
}

/*Sidenav block styling*/
.side-menu a{
    display: block;
    line-height: 60px; 
    transition: 0.5s;
}

/*Sidenav block hover styling*/
.side-menu a:hover{
    background: rgb(20,54,165);
    padding-left: 20px;
}

/*Sidenav text styling*/
.side-menu span{
    
    margin-left: 10px;
    color: white;
}

/*Sidenav icon styling*/
.side-menu i{
    font-size: 100%;
    margin-left: 5px;
    color: white;
}

/*Checkbox Hack Styling*/
#menu{
    display: none;
}

/*Sidenav logout btn styling*/
.side-menu .Logout{
    display: none;
}

/*Resizing and responsivity of the sidenav below 1160px*/
@media (max-width:1160px){

    .side-menu a span{
        display: none;
    }

    .side-menu{
        width: 100px;
    }

    .side-menu a i{
        display: block;
        line-height: 80px;
        text-align: center;
        margin-left: 0;
        font-size: 35px;
    }

    .page{
        display: block;
    }
}

/*Resizing and responsivity of the sidenav below 700px*/
@media (max-width:700px){

    .side-menu{

        width: 100%;
        text-align: center;
        left:100%;
        background-color: #013c5c;
        transition: all 0.5s;
    }

    .side-menu a i{

        display: none;
    }

    .side-menu a span{

        display: block;
    }

    .side-menu .Logout{

        display: block;
    }


    nav .menu-bar{

        display: block;
    }
}

/*Check box hack for sidenav below 700px*/
#menu:checked ~ .side-menu{
    left:0;
}

/*Footer Styling*/
footer{
    color:white;
    
    
    font-weight: 300;
    background-color: #1C1B1B; 
    display: block; 
    bottom: 0; 
    position: fixed; 
    width: 100%;
}

/*Resizing and responsivity of the change password form below 700px*/
@media (max-width:425px) {
    .page .form .inputfield{
      flex-direction: column;
      align-items: flex-start;
    }
    .page .form .inputfield label{
      margin-bottom: 5px;
    }
    .page .form .inputfield.terms{
      flex-direction: row;
    }
  }

  .form-inputs input{
        color: #3D3A3A;
        border: none;
        border-bottom: 2px solid #013C5C;   
    }
    .bg-color{
        backgroud-color: #013C5C;
    }
     .form-control:focus {
                    box-shadow: none;
                }
        </style>
   
    <body onload="getUsers(1)">
      
      <!--Checkbox hack to mimic onclick event-->
      <input type="checkbox" id="menu">

      <!--Navbar-->
      <nav>

          <label>POM-PORALG</label>
          
          <!--Logo img-->
          <ul>
              <img src="#">Logo
          </ul>

      </nav> 

      <!--Icons for sidenav and logout-->
      <div class="icons">
        <label for="menu">
          <!--Icons-->
          <i class="fa fa-bars" id="bars"></i>
          <i class="fa fa-power-off" id="logout"><span></span></i>
        </label>
      </div>
      
      
      <!--Sidenav-->
      <div class="side-menu">

        <a href="profile?id={{Auth::user()->id}}"><i class="fa fa-user-circle-o"></i><span>Profile</span></a>
        <a href="/request"><i class="fa fa-home"></i><span>Home</span></a>
        <a href="/makeRequest"><i class="fa fa-envelope"></i><span>Make Request</span></a>
        @if(Auth::user()->roleId == 1) 
        <a href="/manageUsers"><i class="fa fa-drivers-license"></i><span>Manage User</span></a>
        <a href="/roles"><i class="fa fa-drivers-license"></i><span>Manage Roles</span></a>
        <a href="/regions"><i class="fa fa-drivers-license"></i><span>Manage Regions</span></a>
        <a href="/districts"><i class="fa fa-drivers-license"></i><span>Manage Districts</span></a>
        @endif

        @if(Auth::user()->roleId == 2 || Auth::user() -> roleId == 3)
                <a href="/supervisor"><i class="fa fa-drivers-license"></i><span>Requests</span></a>
        @endif

        <a href="/changepassword"><i class="fa fa-edit"></i><span>Change password</span></a>

        <a class="Logo" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                   <span>{{ __('Logout') }}</span>
        </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

      </div>

=======
    <body >
@include('layouts.header')    
@include('layouts.navbar')
>>>>>>> ea50deae2c0e2db32f2abeea9769f2be2a604993
>>>>>>> 1beb709e9e3e6796bb8aae704ee5a7a414a5e51d
      <!--Respective pages-->
      <div class="page">
            @yield('content')
        </div>  
    @include('layouts.footer')
   
    </body>

</html>

