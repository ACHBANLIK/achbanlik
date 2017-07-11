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
                              @include('user.friend' , ['id' => $user->id , 'friends' => $friends])
                          @endif



                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">

                      <section class="panel">

                      <div class="row state-overview">
                          <div class="col-lg-3 col-sm-6">
                              <section class="panel">
                                  <div class="symbol terques">
                                      <i class="fa fa-user"></i>
                                  </div>
                                  <div class="value">
                                      <h1 class="count" id="fcount">
                                          {{  $friends }}
                                      </h1>
                                      <p>Amis</p>
                                  </div>
                              </section>
                          </div>
                          <div class="col-lg-3 col-sm-6">
                              <section class="panel">
                                  <div class="symbol red">
                                      <i class="fa fa-tags"></i>
                                  </div>
                                  <div class="value">
                                      <h1 class=" count2">
                                          {{ $user->publications->count() }}
                                      </h1>
                                      <p>Publications</p>
                                  </div>
                              </section>
                          </div>
                          <div class="col-lg-3 col-sm-6">
                              <section class="panel">
                                  <div class="symbol yellow">
                                      <i class="fa fa-eye"></i>
                                  </div>
                                  <div class="value">
                                      <h1 class=" count3">
                                          {{ $user->opinions->count() }}
                                      </h1>
                                      <p>Opinions</p>
                                  </div>
                              </section>
                          </div>
                          <div class="col-lg-3 col-sm-6">
                              <section class="panel">
                                  <div class="symbol blue">
                                      <i class="fa fa-comment"></i>
                                  </div>
                                  <div class="value">
                                      <h1 class=" count4">
                                          {{ $user->comments->count() }}
                                      </h1>
                                      <p>Commentaires</p>
                                  </div>
                              </section>
                          </div>
                      </div>


                          <div class="panel-body bio-graph-info">
                              <h1 style="">Information</h1>
                              <div class="row">
                                  <div class="bio-row">
                                      <p><span>Prénom </span>: {{ $user->fname}}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Nom </span>: {{ $user->lname}}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Pays </span>: {{ $user->country->name}}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Birthday</span>: {{ Carbon\Carbon::parse($user->birthday)->diff(Carbon\Carbon::now())->format('%y ans, %m mois') }}</p>
                                  </div>
                                @if(Auth::user()->id == $user->id)
                                  <div class="bio-row">
                                      <p><span>Email </span>: {{ $user->email}}</p>
                                  </div>
                                  <div class="bio-row">
                                      <p><span>Inscription </span>: {{  Carbon\Carbon::parse($user->created_at)->diffForHumans() }} </p>
                                  </div>
                                @endif

                              </div>
                          </div>
                      </section>
                      <section class="panel">
                          <div class="panel-body bio-graph-info">
                              <h1 style="">Trophées</h1>
                              <div class="row">

                                 @php
                                    $utrophies =$user->utrophies;
                                 @endphp

                                 @foreach ($utrophies as $utrophy)
                                    <div class="col-lg-3 bio-badge" >
                                          <p><img  src="{{ asset('storage/'.$utrophy->trophy->photo) }}" /></p>
                                          <p><span>{{ $utrophy->trophy->name }}</span></p>
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



    });

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