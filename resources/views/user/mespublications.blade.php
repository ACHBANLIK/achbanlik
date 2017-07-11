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
                                <li class="active"><a href="{{ route('user.mespublications') }}"> <i class="fa fa-tags"></i> Publications</a></li>
                                <li><a href="{{ route('user.myfriends') }}"> <i class="fa fa-users"></i> Amis</a></li>
                             </ul>





                      </section>
                  </aside>
                  <aside class="profile-info col-lg-9">

                      <section class="panel">

                          <header class="panel-heading">
                              @lang('adminTemplate.publications')
                          </header>
                          <div class="panel-body">
                            <div class="adv-table">
                              <table id="publications-table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>@lang('field.title')</th>
                                                <th>@lang('field.categorie')</th>
                                                <th>@lang('field.type')</th>
                                                <th>Privée</th>
                                                <th>@lang('field.signals')</th>
                                                <th>Active?</th>
                                                <th>@lang('field.action')</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                              </table>
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




<!-- Confirmation Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true"> 
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">@lang('field.close')</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                   @lang('field.deleteoperation') cette publication.
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form role="form" id="confirmForm" method="POST">

                  <input type="hidden" name="id" id="id" value="">
                  
                  <center>
                    <button  type="button" data-dismiss="modal"  class="btn btn-danger btn-lg btn-bloc">@lang('field.no')</button>
                    <button id="submit" type="button" class="btn btn-primary btn-lg btn-bloc" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Opération en cours" >@lang('field.yes')</button>

                  </center>

                </form>
                
                
            </div>

        </div>
    </div>
</div>

<!-- Edit Modal -->



          @include('layouts.user.footer')

      

@endsection


@push('scripts')


      <script src="{{ asset('user/js/functions-ver=1.0.0.js') }}"></script>

      <script src='{{ asset('user/js/ajax-login-ver=4.7.5.js') }}'></script>
      <script src="{{ asset('admin/assets/data-tables/js/jquery.dataTables.min.js') }}"></script>
      <script src="{{ asset('admin/assets/data-tables/js/dataTables.bootstrap.min.js') }}"></script>

      <script>



    $('#deleteModal').on("show.bs.modal", function (e) {
         $("#deleteModal #id").val($(e.relatedTarget).data('id'));
    });



    var table  =  $('#publications-table').DataTable({

        "language": {
            "url": "{{ asset('admin/assets/data-tables/lang/datatable.'.config('app.locale').'.json') }}"
        },
         processing: true,
        serverSide: true,
        ajax: {
            url: '{{ route('user.getmypublications') }}'
        },

        columns: [
            { data: 'title', name: 'title' },
            { data: 'c_title', name: 'c_title', searchable:false},
            { data: 'type', name: 'type', searchable:false },
            { data: null,name: 'privacy' , searchable: false,render: function(data)
                 {
                    var actions = '';

                        actions += '<input type="checkbox" class="privacy" onclick="changePrivacy(:id)" id="" data-id=":id" '+ isActive(data.privacy) +'>';

                        return actions.replace(/:id/g, data.id);
                  
                  }
            },            { data: 'signals', name: 'signals' },

            { data: null,name: 'status' , searchable: false,render: function(data)
                 {
                    var actions = '';

                        actions += '<input type="checkbox" class="status" onclick="changeStatus(:id)" id="" data-id=":id" '+ isActive(data.status) +'>';

                        return actions.replace(/:id/g, data.id);
                  
                  }
            },

            {
                    name: 'actions',
                    data: null,
                    sortable: false,
                    searchable: false,
                    render: function (data) {
                        var actions = '';
                        actions += '<a target="_blank"   href="publication/:id"><span class="glyphicon glyphicon-eye-open"></span></a>';
                        actions += ' | <a data-toggle="modal"  data-id=":id" data-target="#deleteModal"><span class="glyphicon glyphicon-trash"></span></a>';


                        return actions.replace(/:id/g, data.id);
                    }
            }

                        ]
    });




$("#deleteModal #submit").click(function(e)
{
     $("#deleteModal #submit").button('loading');
  $.ajax({
      type: 'DELETE',
      url: 'deletepublication/' + $("#deleteModal #id").val(),
      data: 
      {
        '_token': $('input[name=_token]').val(),
      },
      success: function(data) {
      
        $("#deleteModal #submit").button('reset');
        $("#deleteModal").modal("hide");   

        $('#publications-table').DataTable().draw(false)
        toastr.success('Publication supprimée avec sucées.', {timeOut: 3000});
      },
       error:function()
       {
        $("#deleteModal #submit").button('reset');
        }
    });
});


function isActive(value)
{
  if (value == 1)
    return "checked";
  else
    return "";
}



function changeStatus(id)
{


        $.ajax({
          type: 'POST',
          url: "{{ URL::route('user.changePublicationStatus') }}",
          data: {
          '_token': $('input[name=_token]').val(),
          'id': id
          },
          success: function(data) {

            if(data.msg)
            {
              toastr.error('Error!', 'Error Alert', {timeOut: 3000});
            }else
            {
              toastr.success('Mise à jour avec succès.', {timeOut: 3000});
            }

          },
        });                
}


function changePrivacy(id)
{


        $.ajax({
          type: 'POST',
          url: "{{ URL::route('user.changePublicationStatus') }}",
          data: {
          '_token': $('input[name=_token]').val(),
          'id': id
          },
          success: function(data) {

            if(data.msg)
            {
              toastr.error('Error!', 'Error Alert', {timeOut: 3000});
            }else
            {
              toastr.success('Mise à jour avec succès.', {timeOut: 3000});
            }

          },
        });                
}


      </script>
@endpush