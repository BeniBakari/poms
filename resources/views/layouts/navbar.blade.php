<div class="side-menu">

        <a href="#"><i class="fa fa-user-circle-o"></i><span>Profile</span></a>
        <a href="#"><i class="fa fa-home"></i><span>Home</span></a>
        <a href="#"><i class="fa fa-envelope"></i><span>Make Request</span></a>
        <a href="#"><i class="fa fa-drivers-license"></i><span>Manage User</span></a>
        <a href="#"><i class="fa fa-edit"></i><span>Change password</span></a>
        <a class="Logout" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
          </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
      </div>