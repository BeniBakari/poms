<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.web_header')
    <script>
        
    </script>
    </head>

    <body onload = "dismiss();" style="font-family: 'Raleway', sans-serif;">
@include('layouts.header')    
@include('layouts.navbar')
@include('flash_message')

      <!--Respective pages-->
      <div class="text-center offset-2 ">
            @yield('content')
        </div>  
    @include('layouts.footer')
   
    </body>

</html>

