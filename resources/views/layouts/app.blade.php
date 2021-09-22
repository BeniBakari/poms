<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>POMS-PORALG</title>
        <!--Meta tag to disable user manual resizing-->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="navbar.css">
        <!--Link for the icons used-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        @include('layouts.web_header')
    </head>
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
    top: 0;
    background: #013c5c;
    line-height: 80px;
    z-index: 100;
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
    /* position: fixed; */
    width: 100%;
    padding-top: 85px;
}

/*Text beside icons Styling*/
.icons label{
    line-height: 30px;
    font-size: 30px;
    font-weight: 100;
    /* margin-left: 50px; */
   
}

/*Individual icon Styling*/
.icons #bars{
    cursor: pointer;
    opacity: 0;
    padding: 15px 0px 0px 5px;
    color: black;
}

/*Individual icon Styling*/
.icons #logout{
    cursor: pointer;
    color: black;
    padding: 15px 10px 0px 0px;
}

/*Respective Page Styling*/
.page{
    margin-left: 20%;
    /* position: absolute; */
    /* margin-top: 200px; */
  }

/*Sidenav Styling*/
.side-menu{
    position: fixed;
    background: #013c5c;
    width: 185px;
    height: 100%;
    border-top-right-radius: 12px;
    /* margin-top: 9px; */
    z-index: 99;
}

/*Sidenav block styling*/
.side-menu a{
    display: block;
    line-height: 60px; 
    transition: 0.5s;
}

/*Sidenav block hover styling*/
.side-menu a:hover{
    text-decoration: none;
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
        line-height: 50px;
        display: block;
    }

    .side-menu .Logout{

        display: block;
    }

    .icons #bars{
        opacity: 1;
    } 
    
    .icons #logout{
        display: none;
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
    z-index: 100;
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
        .rows{
            width: 100%;
        }
        </style>
   
    <body >
      
      <!--Checkbox hack to mimic onclick event-->
      <input type="checkbox" id="menu">

      <!--Navbar-->
      <nav>

          <label>POM-PORALG</label>
          
          <!--Logo img-->
          <ul>
                <a href="/request">
                    <img src="{{ asset('tamisemi_logo.png') }}" alt="">
                </a>
              
          </ul>

      </nav> 

      <!--Icons for sidenav and logout-->
      <!-- <div class="icons">
        <label for="menu">
          
          <i class="fa fa-bars" id="bars"></i>
          <i class="fa fa-power-off" id="logout"><span></span></i>
        </label>
      </div> -->
      <div class="icons">
          <label for="menu" class=" row rows">
              <i class="fa fa-bars col offset-1 w-100 " id="bars"></i>
              <a class="col-sm-1 text-white"  onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                  <i class="fa fa-power-off col-sm-1 " id="logout"></i>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </label>  
      </div>
      
      
      <!--Sidenav-->
      <div class="side-menu ">

        <a href="profile?id={{Auth::user()->id}}" class="text-white"><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg></i><span>Profile</span></a>
        <a href="/request" ><i class="fa fa-home "></i><span>Home</span></a>
        <a href="/makeRequest"><i class="fa fa-envelope"></i><span>Make Request</span></a>
        @if(Auth::user()->roleId == 1) 
        <a href="/manageUsers"><i class="fa fa-users" aria-hidden="true"></i><span>Manage User</span></a>
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
                             document.getElementById('logout-form').submit();"><i class="fa fa-power-off " id="logout"></i>
                   <span>{{ __('Logout') }}</span>
        </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

      </div>

      <!--Respective pages-->
      <div class="page">
            @yield('content')
        </div>
      
      <!--Footer-->
      <footer class="text-center">
        <span style="font-size: 80%;"><i>Copyright by PORALG 2021</i></span>
      </footer>

    </body>

</html>

