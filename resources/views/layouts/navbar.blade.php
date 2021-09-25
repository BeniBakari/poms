      <!--Sidenav-->
      <div class="side-menu ">

        <a href="profile?id={{Auth::user()->id}}" class="text-white"  style="border-top-right-radius: 12px;" ><i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg></i><span>Profile</span></a>
            
        <a href="/request" ><i class="fa fa-home " ></i><span>Home</span></a>
        @if(Auth::user()->roleId == 4)
            <a href="/makeRequest"><i class="fa fa-envelope"></i><span>Make Request</span></a>
        @endif
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
        <a class="Logout" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();"><i class="fa fa-power-off " id="logout"></i>
                   <span>{{ __('Logout') }}</span>
        </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

      </div>