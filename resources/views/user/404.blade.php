@extends('layouts.user.app')


@push('styles')
    <link href="{{ asset('user/assets/wysija-newsletters/css/validationEngine.jquery-ver=2.7.7.css') }}" rel="stylesheet"  media='all'>
    <link href="{{ asset('user/assets/toast/css/jquery.toastmessage-min.css') }}" rel="stylesheet"  media='all'>

    <style type="text/css">
      .ajax-load{
        padding: 10px 0px;
        width: 100%;
      }
    </style>



@endpush

@section('content')

@isset ($category)

    <div class="page-title-section single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">                        
                        <div class="page-header-text">
                                                
                            <ul id="breadcrumbs" class="breadcrumb ">
                              <li class="item-home"><a class="bread-link bread-home" href="/" title="Home">ACHBANLIK</a></li>
                              <li class="item-cat">{{ $category }}</li>

                            </ul>                        
                         </div>
                        
                    </div><!-- /.catagory-header -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end page-header-section -->
    
@endisset



<div class="main-content-area vb-full-width-massonry">
    <div class="vb-full-massonry-content">

    
    <!-- start error-section -->
    <div class="error-section">
            <div class="container">
                    <div class="row">
                        <div class="vb-content">
                            <div class="error">
                                <img src="{{ asset('user/img/404.gif') }}" alt="error">
                                    <h1>Page introuvable.</h1>                                    
                                    <a href="{{ route('user.index') }}" class="custom-btn">Page d'acceuil</a>
                            </div><!-- /.error -->
                        </div><!-- /.vb-content -->
                    </div><!-- /.row -->
            </div><!-- /.container -->
    </div>
    <!-- end error-section -->  



    </div>
</div>




      

@endsection


@push('scripts')

      <script src='{{ asset('user/js/jquery.validate-ver=4.7.5.js') }}'></script>
      <script src='{{ asset('user/js/ajax-login-ver=4.7.5.js') }}'></script>

<script>




</script>





      <script src="{{ asset('user/js/functions-ver=1.0.0.js') }}"></script>


@endpush