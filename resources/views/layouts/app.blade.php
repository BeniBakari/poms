<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.web_header')
    </head>
    <body >
@include('layouts.header')    
@include('layouts.navbar')
      <!--Respective pages-->
      <div class="text-center offset-2 ">
            @yield('content')
        </div>  
    @include('layouts.footer')
    </body>

</html>

