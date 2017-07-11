@extends('layouts.user.app')


@push('styles')
    <link href="{{ asset('user/assets/wysija-newsletters/css/validationEngine.jquery-ver=2.7.7.css') }}" rel="stylesheet"  media='all'>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/data-tables/css/dataTables.bootstrap.min.css') }}">

    <link href="{{ asset('user/css/profile.css') }}" rel="stylesheet">

<style>



table td {
  word-wrap: break-word;
  max-width: 150px;
}
#publications-table td {
  white-space:inherit;
}


</style>


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
                              <a href="#">
                                  <img src="{{ asset('/storage/'.Auth::user()->photo ) }}" alt="">
                              </a>
                              <h1>{{ Auth::user()->fname.' '.Auth::user()->lname }}</h1>
                              <p></p>
                          </div>


                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{ route('user.profile') }}"> <i class="fa fa-user"></i> Profile</a></li>
                                <li><a href="{{ route('user.editprofile') }}"><i class="fa fa-edit"></i> Modifier</a></li>
                                <li><a href="{{ route('user.mespublications') }}"> <i class="fa fa-tags"></i> Publications</a></li>
                                <li class="active"><a href="{{ route('user.myfriends') }}"> <i class="fa fa-users"></i> Amis</a></li>
                             </ul>





                      </section>
                  </aside>



                  <aside class="profile-info col-lg-9">


                      <section class="panel">

                          <header class="panel-heading">
                              Mes Amis
                          </header>
                          <div class="panel-body">
                              <div class="row myfriends" >


                                 @foreach ($friends as $friend)

                                 @if($friend->user1->id==Auth::user()->id)

                                  <div class="col-lg-3 bio-friends" id="{{ $friend->user2->id }}">
                                      <a target="_blank" href="{{ route('user.user' , $friend->user2->id) }}">
                                          <img src="{{ asset('/storage/'.$friend->user2->photo ) }}" alt="">
                                      </a>
                                      <p>
                                        <span>{{ $friend->user2->fname.' '.$friend->user2->lname }}</span>
                                        <br>
                                        <a class="action deleteFriend"  ><i class="fa fa-remove"></i>Supprimer</a>
                                      </p>
                                  </div>

                                 @else

                                  <div class="col-lg-3 bio-friends" id="{{ $friend->user1->id }}">
                                      <a target="_blank" href="{{ route('user.user' , $friend->user1->id) }}">
                                          <img src="{{ asset('/storage/'.$friend->user1->photo ) }}" alt="">
                                      </a>
                                      <p>
                                        <span>{{ $friend->user1->fname.' '.$friend->user1->lname }}</span>
                                        <br>
                                        <a class="action deleteFriend" ><i class="fa fa-remove"></i>Supprimer</a>
                                      </p>
                                  </div>

                                 @endif

                                 @endforeach

                              </div>

                          </div>


                      </section>



                      <section class="panel">

                          <header class="panel-heading">
                              Demandes envoyées
                          </header>
                          <div class="panel-body">
                              <div class="row" >


                                 @foreach ($sent as $friend)
                                  <div class="col-lg-3 bio-friends" id="{{ $friend->user2->id }}">
                                      <a target="_blank" href="{{ route('user.user' , $friend->user2->id) }}">
                                          <img src="{{ asset('/storage/'.$friend->user2->photo ) }}" alt="">
                                      </a>
                                      <p>
                                        <span>{{ $friend->user2->fname.' '.$friend->user2->lname }}</span>
                                        <br>
                                        <a class="action cancelFriend" ><i class="fa fa-remove"></i>Annuler</a>
                                      </p>
                                  </div>

                                 @endforeach

                              </div>

                          </div>


                      </section>


                      <section class="panel">

                          <header class="panel-heading">
                              Demandes Reçus
                          </header>
                          <div class="panel-body">
                              <div class="row" >


                                 @foreach ($recieved as $friend)
                                  <div class="col-lg-3 bio-friends" id="{{ $friend->user1->id }}" >
                                      <a target="_blank" href="{{ route('user.user' , $friend->user1->id) }}">
                                          <img src="{{ asset('/storage/'.$friend->user1->photo ) }}" alt="">
                                      </a>
                                      <p>
                                        <span>{{ $friend->user1->fname.' '.$friend->user1->lname }}</span>
                                        <br>
                                        <a class="action acceptFriend" ><i class="fa fa-remove"></i>Accepter</a>
                                        <a class="action declineFriend"  ><i class="fa fa-remove"></i>Refuser</a>
                                      </p>
                                  </div>

                                 @endforeach

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

      <script>
          $(document).ready(function() {


          $(document).on("click", ".deleteFriend", function(event) {
                  id = $(this).parents(".bio-friends").attr('id');
                  Friend('/deletefriend/mesamis/all/'+id , "Ami(e) supprimé(e)." , id);   
          });


          $(document).on("click", ".cancelFriend", function(event) {
                  id = $(this).parents(".bio-friends").attr('id');
                  Friend('/cancelfriend/mesamis/all/'+id , "Demande annulée." , id);     
          });


          $(document).on("click", ".declineFriend", function(event) {
                  id = $(this).parents(".bio-friends").attr('id');
                  Friend('/declinefriend/mesamis/all/'+id , "Demande Refusée." , id);     
          });


          $(document).on("click", ".acceptFriend", function(event) {
                  id = $(this).parents(".bio-friends").attr('id');

                  $.ajax({
                        type: 'get',
                        url: '/acceptfriend/mesamis/all/'+id,

                    error: function(data) {
                            toastr.error('Une erreur est survenu.', {timeOut: 3000});
                    },
                    success: function(data) {
                        if (data.success == true) {
                            toastr.success("Demande acceptée.", {timeOut: 3000});
                             var $newItems = $(data.html);
                              $( "#"+id ).remove();
                              $(".myfriends").append($newItems);

                        } else{
                            toastr.error('Une erreur est survenu.', {timeOut: 3000});
                        }
                    }
                });
          });



          });

        function Friend($link  , $message , $id)
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
                              $( "#"+$id ).remove();
                        } else{
                            toastr.error('Une erreur est survenu.', {timeOut: 3000});
                        }
                    }
                });
        }
      </script>
@endpush