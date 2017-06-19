@extends('layouts.user.app')


@push('styles')
    <link href="{{ asset('user/assets/wysija-newsletters/css/validationEngine.jquery-ver=2.7.7.css') }}" rel="stylesheet"  media='all'>
@endpush


@section('content')

      <div class="main-content-area vb-full-width-massonry">
         <div class="vb-full-massonry-content">

   
profile page





         </div>
      </div>




          @include('layouts.user.footer')

      

@endsection


@push('scripts')

      <script src='{{ asset('user/js/jquery.validate-ver=4.7.5.js') }}'></script>
      <script src='{{ asset('user/js/ajax-login-ver=4.7.5.js') }}'></script>

      <script>

      </script>
@endpush