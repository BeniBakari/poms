      <!--Checkbox hack to mimic onclick event-->
      <input type="checkbox" id="menu">

      <!--Navbar-->
      <nav class="navi">

          <label>POM-PORALG</label>
        
          
          <!--Logo img-->
          <ul class="logo" id="logo">
                <a href="/request">
                    <img src="{{ asset('tamisemi_logo.png') }}" alt="logo" height="50" width="50">
                </a>  
          </ul>

      </nav> 

      <div class="icons mt-5">
          <label for="menu" class=" row rows fixed-top mt-5">
              <span class="mt-5"></span>
              <i class="fa fa-bars col offset-1 w-100 " id="bars"></i>
              <a class="col-sm-1 text-white"  onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                  <i class="fa fa-power-off col-sm-1 " id="logout"><span style="font-size:70%">logout</span></i>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </label>  
      </div>
