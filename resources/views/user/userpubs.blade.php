@extends('layouts.user.app')


@push('styles')
    <link href="{{ asset('user/assets/wysija-newsletters/css/validationEngine.jquery-ver=2.7.7.css') }}" rel="stylesheet"  media='all'>

    <link href="{{ asset('user/css/profile.css') }}" rel="stylesheet">

@endpush


@section('content')

      <div class="main-content-area vb-full-width-massonry">
         <div class="vb-full-massonry-content">

   
      <section id="main-content" style="margin-left: 0;">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <aside class="profile-nav col-lg-3">
                      <section class="panel">
                          <div class="user-heading round">
                              <a>
                                  <img src="{{ asset('/storage/'.$user->photo ) }}" alt="">
                              </a>
                              <h1>{{ $user->fname.' '.$user->lname }}</h1>
                          </div>

                          @if(Auth::user()->id == $user->id)

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="{{ route('user.profile' , $user->id) }}"> <i class="fa fa-user"></i> Profile</a></li>

                                <li><a href="{{ route('user.editprofile') }}"><i class="fa fa-edit"></i> Modifier</a></li>
                                <li><a href="{{ route('user.mespublications') }}"> <i class="fa fa-tags"></i> Publications</a></li>
                                <li><a href="{{ route('user.myfriends') }}"> <i class="fa fa-users"></i> Amis</a></li>
                             </ul>
 
                          @else
                              @include('user.friend' , ['id' => $user->id , 'source' => 'pub'])
                          @endif



                      </section>
                  </aside>
          
                    <aside class="profile-info col-lg-9">

                     
                      <section class="panel">
                          <div class="panel-body bio-graph-info">
                              <h1 style="">Publications</h1>
                              <div class="row">

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


                              </div>
                          </div>
                      </section>
                  </aside>


              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->




         </div>
      </div>




          @include('layouts.user.footer')

      

@endsection


@push('scripts')

  <script src="{{ asset('user/js/functions-ver=1.0.0.js') }}"></script>

  <script src='{{ asset('user/js/ajax-login-ver=4.7.5.js') }}'></script>

  <script src="{{ asset('user/assets/toast/js/jquery.toastmessage-min.js') }}"></script>
  <script src='{{ asset('user/js/bootstrap-tour.min.js') }}'></script>
  <script src='{{ asset('user/js/isotope.pkgd.min.js') }}'></script>

  <script>

    $(document).ready(function() {



      $(document).on("click", ".addFriend", function(event) {
              id = $(this).attr('id');
              Friend('/addfriend/one/'+id , "Demande envoyée.");   
      });

      $(document).on("click", ".deleteFriend", function(event) {
              id = $(this).attr('id');
              Friend('/deletefriend/one/'+id , "Ami(e) supprimé(e).");   
      });


      $(document).on("click", ".cancelFriend", function(event) {
              id = $(this).attr('id');
              Friend('/cancelfriend/one/'+id , "Demande annulée.");     
      });

      $(document).on("click", ".acceptFriend", function(event) {
              id = $(this).attr('id');
              Friend('/acceptfriend/one/'+id , "Demande acceptée.");     
      });

      $(document).on("click", ".declineFriend", function(event) {
              id = $(this).attr('id');
              Friend('/declinefriend/one/'+id , "Demande Refusée.");     
      });

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




  function Friend($link  , $message)
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
                        $( "div.fra" ).replaceWith( $newItems );
                        $("#fcount").html($( "div.fra" ).attr('id'));

                  } else{
                      toastr.error('Une erreur est survenu.', {timeOut: 3000});
                  }
              }
          });
  }


  </script>
@endpush