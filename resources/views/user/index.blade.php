@extends('layouts.user.app')


@push('styles')
    <link href="{{ asset('user/assets/wysija-newsletters/css/validationEngine.jquery-ver=2.7.7.css') }}" rel="stylesheet"  media='all'>
    <link rel="stylesheet" type="text/css" href="{{ asset('user/assets/toastr/css/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('user/css/bootstrap-tour.min.css') }}">

    <style type="text/css">
      .ajax-load{
        background: #e1e1e1;
        padding: 10px 0px;
        width: 100%;
      }
    </style>



@endpush

@section('content')

<!--  Start Main Content Area -->
<div class="main-content-area vb-full-width-massonry">
    <div class="vb-full-massonry-content">


        <div id="massonry-post-area2" class="massonry-post-area massonry-post-area2">        
            <div class="massonry-post-sizer massonry-post-sizer2"></div>            


@include('user.data')


        </div>


   <!-- <div class="ajax-load text-center" style="display:none">
  <p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
</div>
 -->      
    </div>

</div>






          @include('layouts.user.footer')

      

@endsection


@push('scripts')

      <script src='{{ asset('user/js/jquery.validate-ver=4.7.5.js') }}'></script>
      <script src='{{ asset('user/js/ajax-login-ver=4.7.5.js') }}'></script>
      <script src="{{ asset('user/assets/toastr/js/toastr.min.js') }}"></script>
      <script src='{{ asset('user/js/bootstrap-tour.min.js') }}'></script>
      <script src='{{ asset('user/js/isotope.pkgd.min.js') }}'></script>

<script>

/*    var page = 1;

  $(window).scroll(function() {

    console.log($(window).scrollTop() + $(window).height() );
    console.log($(document).height());
      if($(window).scrollTop() + $(window).height() >= $(document).height()) {
          page++;
          loadMoreData(page);
      }
  });*/



  function loadMoreData(page){

    $.ajax(
          {
              url: ' ?page=' + page,
              type: "get",
              beforeSend: function()
              {
                  $('.ajax-load').show();
              }
          })
          .done(function(data)
          {
              if(data.html == " "){
                  $('.ajax-load').html("No more records found");
                  return;
              }
              $('.ajax-load').hide();

              var $newItems = $(data.html);
              $('.massonry-post-area').isotope( 'insert', $newItems );

          })
          .fail(function(jqXHR, ajaxOptions, thrownError)
          {
                alert('server not responding...');
          });
  }


jQuery(
  function($)
  {
    $('body').bind('scroll', function()
                              {
                                if($(this).scrollTop() + $(this).innerHeight()>=$(this)[0].scrollHeight)
                                {
                                  alert('end reached');
                                }
                              })
  }
);


   $(document).ready(function($) 
       {  


          $('body').on('scroll', function() {
              if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
                  alert('end reached');
              }
          })


    // init isotope
    $('.massonry-post-area').isotope({
        itemSelector: '.massonry-post-item',
        percentPosition: true,
        masonry: 
          {
            columnWidth: '.massonry-post-sizer',
            gutter: 30
          }
    });
 
       });



</script>

<script>

    if(window.location.hash) {
      var hash = window.location.hash.substring(1); //Puts hash in variable, and removes the # character
      if(hash=="demo")
      {
             var d = new Date();
             var n = d.getTime();

            var tour = new Tour({
                name: n.toString()
          });

        // Add your steps. Not too many, you don't really want to get your users sleepy
        tour.addSteps([
        {
          element: ".one", // string (jQuery selector) - html element next to which the step popover should be shown
          title: "Compte crée", // string - title of the popover
          content: "En cliquant ici , vous pouvez gérer votre profile." // string - content of the popover
        },
        {
          element: ".two", // string (jQuery selector) - html element next to which the step popover should be shown
          title: "Demander de l'aide", // string - title of the popover
          content: "En cliquant ici , vous pouvez créer une nouvelle publication." // string - content of the popover
        },
        {
          element: ".three", // string (jQuery selector) - html element next to which the step popover should be shown
          title: "Catégorie", // string - title of the popover
          content: "Cliquer sur la catégorie que vous préferez pour raffiner les publications." // string - content of the popover
        },
        {
          element: ".four", // string (jQuery selector) - html element next to which the step popover should be shown
          title: "Publications", // string - title of the popover
          content: "Aidez cet utilisateur à prendre une décision" // string - content of the popover
        },
        {
          element: ".five", // string (jQuery selector) - html element next to which the step popover should be shown
          title: "Publication", // string - title of the popover
          content: "Cliquez ici pour voir plus de détails" // string - content of the popover
        },
        ]);

        // Initialize the tour
        tour.init();

        // Start the tour
        tour.start();
      }
      // hash found
      }
      </script>

      <script src="{{ asset('user/js/functions-ver=1.0.0.js') }}"></script>


@endpush