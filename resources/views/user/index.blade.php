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





        <div id="massonry-post-area2" class="massonry-post-area massonry-post-area2">        
            <div class="massonry-post-sizer massonry-post-sizer2"></div>            
              @include('user.publications')
        </div>
    </div>
</div>


<div class="ajax-load text-center" style="display:none">
 <p> <img src="{{ asset('user/img/loader.gif') }}" /></p>
</div>



      

@endsection


@push('scripts')

      <script src='{{ asset('user/js/jquery.validate-ver=4.7.5.js') }}'></script>
      <script src="{{ asset('user/assets/toast/js/jquery.toastmessage-min.js') }}"></script>
      <script src='{{ asset('user/js/ajax-login-ver=4.7.5.js') }}'></script>
      <script src='{{ asset('user/js/bootstrap-tour.min.js') }}'></script>
      <script src='{{ asset('user/js/isotope.pkgd.min.js') }}'></script>

<script>


$(document).ready(function() {




$(".ended").click(function(event) {
        toastr.info('Cette publication est clotûrée.', {timeOut: 3000});
});

$(document).on("click", ".upvote", function(event) {
        id = $(this).parents('.post-item').attr('id');
        Opinion('/upvote/all/'+id , "Opinion enregistré.");   
});

$(document).on("click", ".downvote", function(event) {
        id = $(this).parents('.post-item').attr('id');
        Opinion('/downvote/all/'+id , "Opinion enregistré.");   
});


$(document).on("click", ".deletevotes", function(event) {
        id = $(this).parents('.post-item').attr('id');
        Opinion('/deletevotes/all/'+id , "Opinion supprimé.");     
});



});

  var page = 1;
  $(window).scroll(function() {
      if($(window).scrollTop() + $(window).height() >= $(document).height()) {
          page++;
          loadMoreData(page);
      }
  });


function Opinion($link  , $message)
{
          $.ajax({
                type: 'get',
                url: $link,

            error: function(data) {
                    toastr.error('Une erreur est survenu.', {timeOut: 3000});
            },
            success: function(data) {
                if (data.success == true) {
                    toastr.success($message, {timeOut: 3000});
                     var $newItems = $(data.html);
                      $( "div#"+id ).replaceWith( $newItems );
                } else{
                    toastr.error('Une erreur est survenu.', {timeOut: 3000});
                }
            }
        });
}


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
              if(data.html == ""){
                  $('.ajax-load').html("Fin de liste.");
                  reloadIso();
                  return;
              }
              $('.ajax-load').hide();

              var $newItems = $(data.html);

$('.massonry-post-area').isotope()
  .append( $newItems )
  .isotope( 'appended', $newItems )
  .isotope('layout');



          })
          .fail(function(jqXHR, ajaxOptions, thrownError)
          {
                alert('server not responding...');
          });
  }



$(window).resize(function(){


    $('.massonry-post-area').isotope
    ({
        itemSelector: '.massonry-post-item',
        percentPosition: true,
        masonry: 
          {
            columnWidth: '.massonry-post-sizer',
            gutter: 20,
          }
    });


 });








$(window).load(function(){
    

    $('.massonry-post-area').isotope
    ({
        itemSelector: '.massonry-post-item',
        percentPosition: true,
        masonry: 
          {
            columnWidth: '.massonry-post-sizer',
            gutter: 20,
          }
    });


 });






function reloadIso()
{
  $('.massonry-post-area').isotope
                  ({
                      itemSelector: '.massonry-post-item',
                      percentPosition: true,
                      masonry: 
                        {
                          columnWidth: '.massonry-post-sizer',
                          gutter: 20,
                        }
                  });
}



</script>





      <script src="{{ asset('user/js/functions-ver=1.0.0.js') }}"></script>


@endpush