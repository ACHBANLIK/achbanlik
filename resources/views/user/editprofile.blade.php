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
                                  <img id="pic" src="{{ asset('/storage/'.Auth::user()->photo ) }}" alt="">
                              </a>
                              <h1 id="fullname">{{ Auth::user()->fname.' '.Auth::user()->lname }}</h1>
                          </div>


                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="{{ route('user.profile') }}"> <i class="fa fa-user"></i> Profile</a></li>

                                <li class="active"><a href="{{ route('user.editprofile') }}"><i class="fa fa-edit"></i> Modifier</a></li>

                                <li><a href="{{ route('user.mespublications')}}"> <i class="fa fa-tags"></i> Mes publications</a></li>

                                <li><a href="{{ route('user.myfriends') }}"> <i class="fa fa-users"></i> Amis</a></li>

                             </ul>

  

                      </section>
                  </aside>

                  <aside class="profile-info col-lg-9">
                      <section class="panel">
                          <div class="panel-body bio-graph-info">
                              <h1>Informations</h1>
                              <form class="form-horizontal" id="infosForm" role="form">


                                  <div class="form-group">
                                      <label  class="col-lg-2 -label">Prénom</label>
                                      <div class="col-lg-6">control
                                          <input type="text" class="form-control" id="fname" name="fname" placeholder=" " value="{{ Auth::user()->fname }}"  />
                                           <span class="help-block errorFname"></span>
                                      </div>
                                  </div>


                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Nom</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" id="lname" name="lname" placeholder=" " value="{{ Auth::user()->lname }}" />
                                           <span class="help-block errorLname"></span>
                                      </div>
                                  </div>


                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Date de naissance</label>
                                      <div class="col-lg-6">
                                          <input class="form-control form-control-inline input-medium default-date-picker" id="birthday" name="birthday" size="16" type="text" value="{{ Carbon\Carbon::parse(Auth::user()->birthday)->format('d-m-Y') }}" required />
                                           <span class="help-block errorBirthday"></span>
                                      </div>
                                  </div>



                                  <div class="form-group">
                                      <label  class="col-lg-2 control-label">Pays</label>
                                      <div class="col-lg-6">
                                          <select id="country" name="country">
                                            
                                              @foreach (\App\Country::all() as $country)
                                              <option value="{{ $country->id }}"  {{ ($country->id == Auth::user()->idCountry)? "selected" : "" }} >{{$country->name}}</option>
                                              @endforeach 
                                          
                                          </select>

                                      </div>
                                  </div>


                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="button" id="submit" class="btn btn-success" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Opération en cours">Enregistrer</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </section>

                      <section>
                          <div class="panel panel-primary">
                              <div class="panel-heading">Mot de passe</div>
                              <div class="panel-body">
                              <form class="form-horizontal" id="passForm" role="form">
            
                                      <div class="form-group">
                                          <label  class="col-lg-2 control-label">Nouveau mot de passe</label>
                                          <div class="col-lg-6">
                                              <input type="password" class="form-control" id="new_password" name="new_password" placeholder=" " required />
                                              <span class="help-block errorNew_password"></span>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <label  class="col-lg-2 control-label">Confirmation</label>
                                          <div class="col-lg-6">
                                              <input type="password" class="form-control" id="confirm_new_password" name="confirm_new_password" placeholder=" " required />
                                              <span class="help-block errorConfirm_new_password"></span>
                                          </div>
                                      </div>

                      

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                          <button type="button" id="submit" class="btn btn-primary" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Opération en cours">Enregistrer</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </section>

                      <section>
                          <div class="panel panel-primary">
                              <div class="panel-heading">Avatar</div>
                              <div class="panel-body">
                              <form class="form-horizontal" id="avatarForm" role="form" enctype="multipart/form-data">

                                      <div class="form-group">
                                          <label  class="col-lg-2 control-label">Avatar</label>
                                          <div class="col-lg-6">
                                              <input type="file" class="file-pos" id="photo" name="photo">
                                              <span class="help-block errorPhoto"></span>
                                          </div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                          <button type="button" id="submit" class="btn btn-primary" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Opération en cours">Enregistrer</button>
                                          </div>
                                      </div>
                                  </form>
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

      <script src='{{ asset('user/js/jquery.validate-ver=4.7.5.js') }}'></script>
      <script src='{{ asset('user/js/ajax-login-ver=4.7.5.js') }}'></script>

      <script>


     var assetBaseUrl = "{{ asset('src') }}";



      $(function()
      {
          $('.default-date-picker').datepicker({
              format: 'dd-mm-yyyy'
          });


$("#infosForm #submit").click(function(e)
{


$("#infosForm #submit").button('loading');


var formData  = new FormData($('#infosForm')[0])
  formData.append('_method', 'post');  


  $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

  $.ajax({
                type: 'post',
                url: 'editprofile/infos',             
                data: formData,
                cache: false,
                contentType: false,
                processData: false,

                    success: function(data) {
                    $("#infosForm #submit").button('reset');

                    $('.form-group').removeClass('has-error');
                    $('.help-block').html("");

                    if ((data.errors)) {
                        setTimeout(function () {
                            toastr.error('Erreur de validation.', {timeOut: 3000});
                        }, 500);

                        if (data.errors.fname) {
                            $('#infosForm #fname').parents(".form-group").addClass('has-error');
                            $('#infosForm .errorFname').html("<strong>"+data.errors.fname+"<strong>");
                        }
                        if (data.errors.lname) {
                            $('#infosForm #lname').parents(".form-group").addClass('has-error');
                            $('#infosForm .errorLname').html("<strong>"+data.errors.lname+"<strong>");
                        }
                        if (data.errors.photo) {
                            $('#infosForm #birthday').parents(".form-group").addClass('has-error');
                            $('#infosForm .errorBirthday').html("<strong>"+data.errors.photo+"<strong>");
                        }                                
                    } else {
                            toastr.success('Mise à jour avec succès.', {timeOut: 3000});
                            $("#fullname").text($("#fname").val()+" "+$("#lname").val());
                    }
                },
                  error:function()
                  {
                            $("#infosForm #submit").button('reset');
                            toastr.error('Erreur de serveur.', {timeOut: 3000});
                  }

            });        

});



$("#passForm #submit").click(function(e)
{


$("#passForm #submit").button('loading');


var formData  = new FormData($('#passForm')[0])
  formData.append('_method', 'post');  


  $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

  $.ajax({
                type: 'post',
                url: 'editprofile/pass',             
                data: formData,
                cache: false,
                contentType: false,
                processData: false,

                    success: function(data) {
                    $("#passForm #submit").button('reset');

                    $('.form-group').removeClass('has-error');
                    $('.help-block').html("");

                    if ((data.errors)) {
                        setTimeout(function () {
                            toastr.error('Erreur de validation.', {timeOut: 3000});
                        }, 500);
                        if (data.errors.new_password) {
                            $('#passForm #new_password').parents(".form-group").addClass('has-error');
                            $('#passForm .errorNew_password').html("<strong>"+data.errors.new_password+"<strong>");
                        }
                        if (data.errors.confirm_new_password) {
                            $('#passForm #confirm_new_password').parents(".form-group").addClass('has-error');
                            $('#passForm .errorConfirm_new_password').html("<strong>"+data.errors.confirm_new_password+"<strong>");
                        }   
                        if (data.errors.photo) {
                            $('#passForm #photo').parents(".form-group").addClass('has-error');
                            $('#passForm .errorPhoto').html("<strong>"+data.errors.photo+"<strong>");
                        }                            
                    } else {
                            toastr.success('Mise à jour avec succès.', {timeOut: 3000});
                            $("#passForm").trigger('reset');  
                    }
                },
                  error:function()
                  {
                            $("#passForm #submit").button('reset');
                            toastr.error('Erreur de serveur.', {timeOut: 3000});
                  }

            });        

});



$("#avatarForm #submit").click(function(e)
{


$("#avatarForm #submit").button('loading');


var formData  = new FormData($('#avatarForm')[0])
  formData.append('_method', 'post');  


  $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

  $.ajax({
                type: 'post',
                url: 'editprofile/avatar',             
                data: formData,
                cache: false,
                contentType: false,
                processData: false,

                    success: function(data) {
                    $("#avatarForm #submit").button('reset');

                    $('.form-group').removeClass('has-error');
                    $('.help-block').html("");

                    if ((data.errors)) {
                        setTimeout(function () {
                            toastr.error('Erreur de validation.', {timeOut: 3000});
                        }, 500);
 
                        if (data.errors.photo) {
                            $('#passForm #photo').parents(".form-group").addClass('has-error');
                            $('#passForm .errorPhoto').html("<strong>"+data.errors.photo+"<strong>");
                        }                            
                    } else {
                            toastr.success('Mise à jour avec succès.', {timeOut: 3000});
                            $("#avatarForm").trigger('reset');  
                            $("#pic").attr('src', assetBaseUrl.replace('src' , 'storage/'+data.pic));
                    }
                },
                  error:function()
                  {
                            $("#avatarForm #submit").button('reset');
                            toastr.error('Erreur de serveur.', {timeOut: 3000});
                  }

            });        

});




       });

      </script>

      <script src="{{ asset('user/js/functions-ver=1.0.0.js') }}"></script>

@endpush