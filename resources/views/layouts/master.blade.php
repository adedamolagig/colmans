<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'COLMANS') }}</title>
        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <script type="application/x-javascript"> 
            addEventListener("load", function() { 
                setTimeout(hideURLbar, 0); 
            }, false);
            function hideURLbar(){ window.scrollTo(0,1); } 
        </script>


        <link href="{{ asset ('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
        <link href="{{ asset ('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
        <!-- js -->
        <script type="text/javascript" src="{{ asset ('js/jquery-2.1.4.min.js') }}"></script>

        <!-- //js -->
        <!-- gallery -->
        <link rel="stylesheet" href="{{ asset ('css/lightGallery.css') }}" type="text/css" media="all" />
        <!-- //gallery -->
        <link rel="stylesheet" href="{{ asset ('css/flexslider.css') }}" type="text/css" media="screen" property="" />
        <!-- font-awesome icons -->
        <link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css') }}" />
        <!-- //font-awesome icons -->
        <link href="//fonts.googleapis.com/css?family=Cabin+Condensed:400,500,600,700" rel="stylesheet">
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

        @yield('assets')

        <!-- Styles -->
       
    </head>
    <body> 
    <div id="app"> 
        @yield('body')


        
            @section('bootstrapJS')
                <!-- for bootstrap working -->
                <script src="{{ asset ('js/bootstrap.js') }}"></script>
                <!-- //for bootstrap working -->
            @endsection
    
    
        <div class="" style="padding-bottom: 50px; padding-top: 70px">     
            @include('layouts.footer')
        </div>

    </div>

   

   </body>
   
    <script  src="{{ asset ('js/app.js')}}"></script>

</html>