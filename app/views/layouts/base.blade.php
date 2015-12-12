<!DOCTYPE html>
<html>
    
    <head>

        @include('layouts.header')

    </head>
    

    <body>

        @include('layouts.navigation')

        @yield('content')

        @include('layouts.footer')
        
  </body>
</html>
