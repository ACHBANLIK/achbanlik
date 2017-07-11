@extends('layouts.user.app')


@push('styles')
    <link href="{{ asset('user/assets/wysija-newsletters/css/validationEngine.jquery-ver=2.7.7.css') }}" rel="stylesheet"  media='all'>
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap-tour.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/singlepost.css') }}">
    <link href="{{ asset('user/assets/toast/css/jquery.toastmessage-min.css') }}" rel="stylesheet"  media='all'>

    <style type="text/css">

      .ajax-load{
        padding: 10px 0px;
        width: 100%;
      }
    </style>



@endpush

@section('content')



<div class="main-content-area single-post-item">
    <div class="container">
        <div class="row">
            <main id="main-content" class="col-md-12 main-content">
                <div class="vb-content">

                        <div id="respond" class="comment-respond">
                            <h4 id="reply-title" class="comment-reply-title">Contactez nous </h4>
                            <form id="contactusform" class="contactus-form" method="post" >

                                <div class="status" style="display: none"></div>
                                
                             
                                <textarea id="message" name="message" placeholder="Message" cols="30" rows="4" aria-required="true"></textarea>
                                <p class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Envoyer" />
                                </p>
                            </form>
                        </div>

                </div>
            </main>


        </div>
    </div>
</div>







@endsection


@push('scripts')

      <script src="{{ asset('user/assets/toast/js/jquery.toastmessage-min.js') }}"></script>
      <script src='{{ asset('user/js/jquery.validate-ver=4.7.5.js') }}'></script>
      <script src='{{ asset('user/js/ajax-login-ver=4.7.5.js') }}'></script>
      <script src='{{ asset('user/js/bootstrap-tour.min.js') }}'></script>
      <script src='{{ asset('user/js/isotope.pkgd.min.js') }}'></script>
      <script src="{{ asset('user/js/functions-ver=1.0.0.js') }}"></script>




<script>




</script>

@endpush