<!DOCTYPE html>
<html>
    
    <head>

        @include('layouts.header')

    </head>
    

    <body class="skin-red layout-top-nav">
        
        <div class="wrapper">

            @include('layouts.navigation')

            <div class="content-wrapper">

                <div class="container">

                    @yield('content')

                </div>
            
            </div>
          
            @include('layouts.footer')
    
        </div>
        
        {{ HTML::script("dist/js/app.min.js") }}
  </body>
</html>
