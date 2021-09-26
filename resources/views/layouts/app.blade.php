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

    <body onload = "dismiss();">
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

