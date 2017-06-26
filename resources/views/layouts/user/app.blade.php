<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GADGET STORE') }}</title>

    <!-- Styles -->




    <link href="{{ asset('user/assets/viralpress/assets/css/viralpress.min-ver=3.5.0.css') }}" rel="stylesheet"  media='all'>
    <link href="{{ asset('user/style-ver=4.7.5.css') }}" rel="stylesheet"  media='all' >
    <link href="{{ asset('user/css/bootstrap.min-ver=4.7.5.css') }}" rel="stylesheet"  media='all' >
    <link href="{{ asset('user/css/font-awesome.min.css') }}" rel="stylesheet"  media='all' >
    <link href="{{ asset('user/css/style-ver=4.7.5.css') }}" rel="stylesheet"  media='all' >
    <link href="{{ asset('user/css/responsive-ver=4.7.5.css') }}" rel="stylesheet"  media='all' >
    <link href="{{ asset('user/css/custom-style-ver=4.7.5.css') }}" rel="stylesheet"  media='all' >
    <link href="{{ asset('user/css/mystyle.css') }}" rel="stylesheet"  media='all' >

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/toastr/css/toastr.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/bootstrap-datepicker/css/datepicker.css') }}">


     @stack('styles')



   <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="{{ asset('admin/js/html5shiv.js') }}"></script>
      <script src="{{ asset('admin/js/respond.min.js') }}"></script>
    <![endif]-->


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>


      <script type='text/javascript' data-cfasync="false" src='{{ asset('user/js/jquery.js') }}'></script>
      <script type='text/javascript' data-cfasync="false" src='{{ asset('user/js/jquery/jquery-migrate.min-ver=1.4.1.js') }}'></script>

      <script type='text/javascript' data-cfasync="false" src='{{ asset('user/js/plugins-ver=1.0.0.js') }}'></script>

      <script src="{{ asset('admin/assets/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
      <script src="{{ asset('admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
      <script src="{{ asset('admin/assets/toastr/js/toastr.min.js') }}"></script>

      <script src="{{ asset('user/js/createpublications.js') }}"></script>



      <link rel="icon" href="{{ asset('user/img/cropped-fevicon-32x32.png') }}" sizes="32x32" />
      <link rel="icon" href="{{ asset('user/img/cropped-fevicon-192x192.png') }}" sizes="192x192" />
      <link rel="apple-touch-icon-precomposed" href="{{ asset('user/img/cropped-fevicon-180x180.png') }}" />

      <meta name="msapplication-TileImage" content="{{ asset('user/img/cropped-fevicon-270x270.png') }}" />
  



</head>

<body class="home blog white-bg" >
          
          @include('layouts.user.header')


                @yield('content')



          @include('layouts.user.modals')


{{--           @include('layouts.user.footer')
 --}}

    <!-- js placed at the end of the document so the pages load faster -->

    
     @stack('scripts')


</body>
</html>
