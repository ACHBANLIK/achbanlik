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


        <!-- start page-header-section -->
    <div class="page-title-section single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">                        
                        <div class="page-header-text">
                                                
                            <ul id="breadcrumbs" class="breadcrumb ">
                              <li class="item-home"><a class="bread-link bread-home" href="/" title="Home">ACHBANLIK</a></li>
                              <li class="item-cat"><a target="_blank" href="/cat/{{ $publication->category->id }}" class="cat">{{ $publication->category->{'title_'.config('app.locale')} }}</a></li>
                              <li class="item-current"><span class="bread-current">{{ $publication->title }}</span></li>
                            </ul>                        
                         </div>
                        
                    </div><!-- /.catagory-header -->
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div>
    <!-- end page-header-section -->



<div class="main-content-area single-post-item">
    <div class="container">
        <div class="row">
            <main id="main-content" class="col-md-12 main-content">
                <div class="vb-content">
                    <article  class="">
                        <header class="entry-header">
                            <div class="cat-share">

                                <div class="post-view-comment pull-right">

                                    <span><i class="fa fa-comment"></i>{{ $publication->comments->count() }}</span>
                                    <span><i class="fa fa-calendar"></i>{{ ( $publication->isEnded() ? 'Cloturée': Carbon\Carbon::parse($publication->willend_at)->diffForHumans() ) }}</span>
                                </div>
                            </div>
                            <h1 class="entry-title">{{ $publication->title }}</h1>
                            <p>Délai restant  :  {{ ( $publication->isEnded() ? 'Cloturée': Carbon\Carbon::parse($publication->willend_at)->diffForHumans() ) }}</p>

                            <div class="post-meta">
                                <div class="post-info">
                                    <img alt='' src="{{ asset('/storage/'.$publication->user->photo) }}"  height='32' width='32' /><span> par <span class="author"><a target="_blank" class="url fn n" href="{{ route('user.user' , $publication->user->id) }}">{{  $publication->user->fname.' '.$publication->user->lname }}</a></span></span> <a href="index.html"><span class="posted-on">{{ $publication->created_at->diffForHumans() }}</span></a> </div>
                            </div>
                            <!-- .entry-meta -->
                            <div class="clearfix"></div>
                        </header>
                        <!-- .entry-header -->
                        <div class="entry-content" id="{{ $publication->id }}">
 

                            @include('user.publications')

          
                            @if(Auth::user() && !$publication->doesUserSignaled())
                              <a style="cursor: pointer;" class="signal" id="{{ $publication->id }}"  >Signaler un abus</a>
                            @else
                              <a style="cursor: pointer;" class="vb-nav-login" data-toggle="modal" data-target="#loginModal"  >Signaler un abus</a>
                            @endif

                            <div class="vp-clearfix"></div>
                            <div class="row vp_after_content"></div>
                            <div class="vp-clearfix"></div>
                            <style>
                            .vp_after_content_row a,
                            .vp_after_content_row button {
                                white-space: normal !important;
                            }
                            </style>
                        </div>
                        <!-- .entry-content -->

                    </article>



                    @if(Auth::user())


                        <div id="respond" class="comment-respond">
                            <h4 id="reply-title" class="comment-reply-title">Laisser un commentaire </h4>
                            <form id="commentform" class="comment-form" novalidate>

                                <div class="status" style="display: none"></div>
                                
                                <input type="hidden"  name="id" value="{{ $publication->id }}">
                                <textarea id="comment" name="comment" placeholder="Commentaire" cols="30" rows="4" aria-required="true"></textarea>
                                <p class="form-submit">
                                    <input name="submit" type="submit" id="submit" class="submit" value="Publier" />
                                </p>
                            </form>
                        </div>
                    @else
                        <div id="respond" class="comment-respond">
                              <h4 id="reply-title" class="comment-reply-title">Laisser un commentaire </h4>
                              <form  class="comment-form" novalidate>

                                  <div class="status" style="display: none"></div>
                                  
                                  <input type="hidden"  name="id" value="{{ $publication->id }}">
                                  <textarea id="comment" name="comment" placeholder="Commentaire" cols="30" rows="4" aria-required="true"></textarea>
                                  <p class="form-submit">
                                      <input name="submit" type="button" id="submit" class="submit" value="Publier" data-toggle="modal" data-target="#loginModal" />
                                  </p>
                              </form>
                          </div>
                    @endif


                    
                    

                    <div id="comments" class="comment-section">
                        @if($publication->comments->count() >0)
                            <h3 class="comments-title">Commentaires </h3>
                        @else
                            <h3 class="comments-title">Pas de commentaire </h3>
                        @endif
                        <ul class="comment-list">
                            @include('user.comments')
                        </ul>
                    </div>

        


                </div>
            </main>


                    <div class="ajax-load text-center" style="display:none;">
                     <p> <img src="{{ asset('user/img/loader.gif') }}" /></p>
                    </div>


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


$(document).ready(function() {

$(".ended").click(function(event) {
        $().toastmessage('showNoticeToast', "Cette publication est clotûrée");
});


$(document).on("click", ".upvote", function(event) {
        id = $(this).parents('.entry-content').attr('id');
        Opinion('/upvote/one/'+id , "Opinion enregistré.");   
});

$(document).on("click", ".downvote", function(event) {
        id = $(this).parents('.entry-content').attr('id');
        Opinion('/downvote/one/'+id , "Opinion enregistré.");   
});


$(document).on("click", ".deletevotes", function(event) {
        id = $(this).parents('.entry-content').attr('id');
        Opinion('/deletevotes/one/'+id , "Opinion supprimé.");     
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
                      $( ".vp-entry" ).replaceWith( $newItems );;
                } else{
                    toastr.error('Une erreur est survenu.', {timeOut: 3000});
                }
            }
        });
}





  
  $(".signal").click(function(event) {


    id = $(this).attr('id');

    $.ajax(
          {
              url: '/signalpubliciation/'+id,
              type: "get",
          })
          .done(function(data)
          {
              if(data.success == true){
                toastr.success("Opération effectuée avec succées.", {timeOut: 3000});
                $(".signal").hide();
              }else
              {
                toastr.error('Une erreur est survenu.', {timeOut: 3000});
              }

          })
          .fail(function(jqXHR, ajaxOptions, thrownError)
          {
                toastr.error('Une erreur est survenu.', {timeOut: 3000});
          });

  });

});


  var page = 1;
  $(window).scroll(function() {
      if($(window).scrollTop() + $(window).height() >= $(document).height()) {
          page++;
          loadMoreData(page);
      }
  });



  function loadMoreData(page){

//

    $.ajax(
          {
              url: '/publication/'+{{ $publication->id }}+'?page=' + page,
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
                  return;
              }
              $('.ajax-load').hide();

              var $newItems = $(data.html);

            $('.comment-list').append( $newItems )

          })
          .fail(function(jqXHR, ajaxOptions, thrownError)
          {
                alert('server not responding...');
          });
  }
 


</script>

@endpush