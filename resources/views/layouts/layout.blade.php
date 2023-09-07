<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Moat-Registration</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/MoneAdmin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
    <script src="https://kit.fontawesome.com/aaaf18ff64.js" crossorigin="anonymous"></script>
</head>
<style>

</style>
<body class="padTop53 ">

    <!-- MAIN WRAPPER -->
     <div id="wrap">


          <!-- HEADER SECTION -->
         <div id="top">

            @include('layouts.header')

         </div>
         <!-- END HEADER SECTION -->



         <!-- MENU SECTION -->
        <div id="left" >
            @include('layouts.sidebar')

         </div>
         <!--END MENU SECTION -->

         <!--PAGE CONTENT -->
         <div id="content">

                 <div class="inner">
                    @yield('content')



                     </div>




                 </div>
           <!--END PAGE CONTENT -->
         </div>


      <!--END MAIN WRAPPER -->
      @include('layouts.footer')


 </body>
</html>

