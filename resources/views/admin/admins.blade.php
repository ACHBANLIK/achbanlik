@extends('layouts.admin.app')


@push('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
  
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/data-tables/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/data-tables/responsive/css/responsive.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/bootstrap-toggle/css/bootstrap-toggle.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/toastr/css/toastr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/full-loader.css') }}">


<style>
  #loader-wrapper .loader-section {
    position: fixed;
    top: 0;
    width: 51%;
    height: 100%;
    background: #222222;
    z-index: 1000;
}
 
#loader-wrapper .loader-section.section-left {
    left: 0;
}
 
#loader-wrapper .loader-section.section-right {
    right: 0;
}
</style>
@endpush


@section('content')


  <!-- page start-->

    <section class="panel">

                          <header class="panel-heading">
                              @lang('adminTemplate.admins')
                          </header>
                          <div class="panel-body">
                            <div class="adv-table">
                              <table id="admins-table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>@lang('field.id')</th>
                                                <th>@lang('field.fname')</th>
                                                <th>@lang('field.lname')</th>
                                                <th>@lang('field.email')</th>
                                                <th>@lang('field.active')</th>
                                                <th>@lang('field.action')</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                              </table>
                            </div>


                          
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                              <span class="glyphicon glyphicon-plus"></span> @lang('field.new')
                            </button> 



                          </div>
                         

    

   </section>


 <!-- page end-->
  




<!-- Add Modal -->
<div class="modal fade " id="addModal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                  @lang('field.new')
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form  id="addForm" role="form" method="POST" enctype="multipart/form-data">
    
                  <div class="form-group">
                    <label for="fname">@lang('field.fname')</label>
                      <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" required autofocus>
                      <span class="help-block errorFname"></span>
                  </div>


                  <div class="form-group">
                    <label for="lname">@lang('field.lname')</label>
                      <input id="lname" type="text" class="form-control" name="lname" value="{{ old('fname') }}" required autofocus>
                      <span class="help-block errorLname"></span>
                  </div>


                  <div class="form-group">
                    <label for="email">@lang('field.email')</label>
                      <input id="email" type="email" class="form-control" name="email" password="{{ old('email') }}" required autofocus>
                      <span class="help-block errorEmail"></span>
                  </div>


                  <div class="form-group">
                      <label for="image">@lang('field.image')</label>
                      <input type="file" id="photo" name="photo">
                      <span class="help-block errorPhoto"></span>
                      <br>
                      <img src="{{ asset('admin/img/placeholder.svg') }}" id="showimage" style="max-width:100px;max-height:100px;"/>
                      
                  </div>


                  <div class="clearfix">
                    <button type="button" id="submit" class="btn btn-primary btn-lg" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Opération en cours">@lang('field.validate')</button>
                  </div>

                </form>
                
                
            </div>

        </div>
    </div>
</div>
<!-- Add Modal -->



<!-- Edit Modal -->
<div class="modal fade " id="editModal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    @lang('crud.edit')
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form  id="editForm" role="form" enctype="multipart/form-data">
    
                  

                  <input type="hidden" name="id" id="id" value="">



                  <div class="form-group">
                    <label for="fname">@lang('field.fname')</label>
                      <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" required autofocus>
                      <span class="help-block errorFname"></span>
                  </div>


                  <div class="form-group">
                    <label for="lname">@lang('field.lname')</label>
                      <input id="lname" type="text" class="form-control" name="lname" value="{{ old('fname') }}" required autofocus>
                      <span class="help-block errorLname"></span>
                  </div>


  

                  <div class="form-group">
                      <label for="photo">@lang('field.image')</label>
                      <input type="file" id="photo" name="photo">
                      <span class="help-block errorPhoto"></span>
                      <br>
                      <img src="{{ asset('admin/img/placeholder.svg') }}" id="showimage" style="max-width:100px;max-height:100px;"/>
                      
                  </div>


                  <div class="clearfix">
                    <button type="button" id="submit" class="btn btn-primary btn-lg" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Opération en cours">@lang('field.validate')</button>
                  </div>

                </form>
                
                
            </div>

        </div>
    </div>
</div>
<!-- Edit Modal -->


<!-- Show Modal -->
<div class="modal fade" id="showModal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                   @lang('field.admin')
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
              <!--widget start-->
              <aside class="profile-nav alt green-border">
                  <section class="panel">
                      <div class="user-heading alt green-bg">
                          <a href="#">
                              <img alt="" id="showimage">
                          </a>
                          <h1><span id="fname"></span>  <span id="lname"></span></h1>
                          <p>
                            <span id="email"></span> <br>
                          </p>
                      </div>


                  </section>
              </aside>
              <!--widget end-->
                
                
            </div>

        </div>
    </div>
</div>
<!-- Show Modal -->



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
                   @lang('field.deleteoperation') <span id="fname"></span>&nbsp;<span id="lname"></span>?
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


@stop


@push('scripts')



<script src="{{ asset('admin/assets/data-tables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/data-tables/js/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('admin/assets/data-tables/responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/assets/data-tables/responsive/js/responsive.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/bootstrap-toggle/js/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('admin/assets/toastr/js/toastr.min.js') }}"></script>




        <script>

     var assetBaseUrl = "{{ asset('src') }}";



    $(function() {


    //$("#addModal").modal("show"); 


    $('#editModal').on("show.bs.modal", function (e) {
         $("#editModal #fname").val($(e.relatedTarget).data('fname'));
         $("#editModal #lname").val($(e.relatedTarget).data('lname'));
         $("#editModal #email").val($(e.relatedTarget).data('email'));
         $("#editModal #id").val($(e.relatedTarget).data('id'));
         var pic = "storage/"+$(e.relatedTarget).data("photo");
         $("#editModal #showimage").attr('src', assetBaseUrl.replace('src' , pic));
    });


    $('#deleteModal').on("show.bs.modal", function (e) {
         $("#deleteModal #fname").html($(e.relatedTarget).data('fname'));
         $("#deleteModal #lname").html($(e.relatedTarget).data('lname'));
         $("#deleteModal #id").val($(e.relatedTarget).data('id'));
    });


    $('#showModal').on("show.bs.modal", function (e) {
         $("#showModal #fname").html($(e.relatedTarget).data('fname'));
         $("#showModal #lname").html($(e.relatedTarget).data('lname'));
         $("#showModal #email").html($(e.relatedTarget).data('email'));
         var pic = "storage/"+$(e.relatedTarget).data("photo");
         $("#showModal #showimage").attr('src', assetBaseUrl.replace('src' , pic));
      });


$("#addModal #photo").change(function () { 
  readURL(this , "#addModal");
});


$("#editModal #photo").change(function () { 
  readURL(this , "#editModal");
});



$("#addModal #submit").click(function(e)
{


$("#addModal #submit").button('loading');


  $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});

  $.ajax({
                type: 'POST',
                url: 'admins',
                processData: false,
                contentType: false,
                cache: false,
                data: new FormData($('#addForm')[0]),

                    success: function(data) {
                    
                     $("#addModal #submit").button('reset');

                    $('.form-group').removeClass('has-error');
                    $('.help-block').html("");

                    if ((data.errors)) {
                        setTimeout(function () {
                            toastr.error('Validation error!', 'Error Alert', {timeOut: 5000});
                        }, 500);

                        if (data.errors.fname) {
                            $('#addForm #fname').parent(".form-group").addClass('has-error');
                            $('#addForm .errorFname').html("<strong>"+data.errors.fname+"<strong>");
                        }
                        if (data.errors.lname) {
                            $('#addForm #lname').parent(".form-group").addClass('has-error');
                            $('#addForm .errorLname').html("<strong>"+data.errors.lname+"<strong>");
                        }
                        if (data.errors.email) {
                            $('#addForm #email').parent(".form-group").addClass('has-error');
                            $('#addForm .errorEmail').html("<strong>"+data.errors.email+"<strong>");
                        }   
                        if (data.errors.photo) {
                            $('#addForm #photo').parent(".form-group").addClass('has-error');
                            $('#addForm .errorPhoto').html("<strong>"+data.errors.photo+"<strong>");
                        }                                
                    } else {
                        $("#addModal").modal("hide"); 
                        $("#addForm").trigger('reset');  
                        $('#admins-table').DataTable().draw(false)
                        toastr.success('@lang('field.successfullycreatedadmin')','@lang('field.successalert')', {timeOut: 5000});
                    }
                },
                  error:function()
                  {
                     $("#addModal #submit").button('reset');
                  }
            });




});





$("#editModal #submit").click(function(e)
{


$("#editModal #submit").button('loading');


var formData  = new FormData($('#editForm')[0])
  formData.append('_method', 'PUT');  


  $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});





  $.ajax({
                type: 'post',
                url: 'admins/'+$("#editModal #id").val(),             
                data: formData,
                cache: false,
                contentType: false,
                processData: false,

                    success: function(data) {
                      $("#editModal #submit").button('reset');

                    $('.form-group').removeClass('has-error');
                    $('.help-block').html("");

                    if ((data.errors)) {
                        setTimeout(function () {
                            toastr.error('Validation error!', 'edit Alert', {timeOut: 5000});
                        }, 500);

                        if (data.errors.fname) {
                            $('#editForm #fname').parent(".form-group").addClass('has-error');
                            $('#editForm .errorFname').html("<strong>"+data.errors.fname+"<strong>");
                        }
                        if (data.errors.lname) {
                            $('#editForm #lname').parent(".form-group").addClass('has-error');
                            $('#editForm .errorLname').html("<strong>"+data.errors.lname+"<strong>");
                        }
                        if (data.errors.photo) {
                            $('#editForm #photo').parent(".form-group").addClass('has-error');
                            $('#editForm .errorPhoto').html("<strong>"+data.errors.photo+"<strong>");
                        }                                
                    } else {
                        $("#editModal").modal("hide"); 
                        $("#editForm").trigger('reset');  
                        $('#admins-table').DataTable().draw(false)
                        toastr.success('@lang('field.successfullyeditedadmin')','@lang('field.successalert')', {timeOut: 5000});
                    }
                },
                  error:function()
                  {
                    $("#editModal #submit").button('reset');
                  }

            });        

});






$("#deleteModal #submit").click(function(e)
{
     $("#deleteModal #submit").button('loading');
  $.ajax({
      type: 'DELETE',
      url: 'admins/' + $("#deleteModal #id").val(),
      data: 
      {
        '_token': $('input[name=_token]').val(),
      },
      success: function(data) {
      
        $("#deleteModal #submit").button('reset');
        $("#deleteModal").modal("hide");   

        $('#admins-table').DataTable().draw(false)
        toastr.success('@lang('field.successfullydeletedadmin')','@lang('field.successalert')', {timeOut: 5000});
      },
       error:function()
       {
      $("#deleteModal #submit").button('reset');
        }
    });
});



    var table  =  $('#admins-table').DataTable({

              "language": {
            "url": "{{ asset('admin/assets/data-tables/lang/datatable.'.config('app.locale').'.json') }}"
        },
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin.getadmins') }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'fname', name: 'fname' },
            { data: 'lname', name: 'lname' },
            { data: 'email', name: 'email' },
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
                        actions += '<a data-toggle="modal"  data-id=":id" data-fname=":fname" data-lname=":lname" data-email=":email" data-status=":status"  data-photo=":photo" data-target="#showModal"><span class="glyphicon glyphicon-eye-open"></span></a>';

                        actions += '|<a data-toggle="modal"  data-id=":id" data-fname=":fname" data-lname=":lname" data-email=":email" data-status=":status" data-photo=":photo"  data-target="#editModal"><span class="glyphicon glyphicon-edit"></span></a>';

                        actions += '|<a data-toggle="modal"  data-id=":id" data-fname=":fname" data-lname=":lname" data-mail=":mail" data-status=":status"  data-target="#deleteModal"><span class="glyphicon glyphicon-trash"></span></a>';

                        return actions.replace(/:id/g, data.id).replace(/:fname/g, data.fname).replace(/:lname/g, data.lname).replace(/:email/g, data.email).replace(/:status/g, data.status).replace(/:photo/g, data.photo);
                    }
            }

                        ]
    });




});

function isActive(value)
{
  if (value == 1)
    return "checked";
  else
    return "";
}


function readURL(input , id) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) 
    {
      $(id+' #showimage').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
   



function changeStatus(id)
{


        $.ajax({
          type: 'POST',
          url: "{{ URL::route('admin.changeAdminstatus') }}",
          data: {
          '_token': $('input[name=_token]').val(),
          'id': id
          },
          success: function(data) {

            if(data.msg)
            {
              toastr.error('Error!', 'Error Alert', {timeOut: 5000});
            }else
            {
              toastr.success('@lang('field.successfullyeditedadmin')','@lang('field.successalert')', {timeOut: 5000});
            }

          },
        });                
}


            </script>


@endpush





  
