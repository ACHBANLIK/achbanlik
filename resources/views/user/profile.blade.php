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
                              <a href="#">
                                  <img src="{{ asset('/storage/'.$user->photo ) }}" alt="">
                              </a>
                              <h1>{{ $user->fname.' '.$user->lname }}</h1>
                              <p></p>
                          </div>

                          @if(Auth::user()->id == $user->id)

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="{{ route('user.profile' , $user->id) }}"> <i class="fa fa-user"></i> Profile</a></li>

                                <li><a href="{{ route('user.editprofile') }}"><i class="fa fa-edit"></i> Modifier</a></li>
                                <li><a href="{{ route('user.mespublications') }}"> <i class="fa fa-tags"></i> Publications</a></li>
                                <li><a href="{{ route('user.friends') }}"> <i class="fa fa-users"></i> Amis</a></li>
                             </ul>

                          @else

                            <ul class="nav nav-pills nav-stacked">
                                <li class="active"><a href="{{ route('user.profile' , $user->id) }}"> <i class="fa fa-user"></i> Profile</a></li>
                            </ul>

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
                                      <h1 class="count">
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
                      <section>

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

      </script>
@endpush