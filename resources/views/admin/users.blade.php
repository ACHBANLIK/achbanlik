@extends('layouts.admin.app')


@push('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
  
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/data-tables/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/data-tables/responsive/css/responsive.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/bootstrap-toggle/css/bootstrap-toggle.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/toastr/css/toastr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/full-loader.css') }}">


<style>


.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}


.mycontent{display: none;}


</style>
@endpush


@section('content')


  <!-- page start-->

    <section class="panel">

                          <header class="panel-heading">
                              Utilisateurs
                          </header>
                          <div class="panel-body">
                            <div class="adv-table">
                              <table id="admins-table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Points</th>
                                                <th>Active</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                              </table>
                            </div>





                          </div>
                         

    

   </section>


 <!-- page end-->
  





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
                    User
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
            <center>
              <img class="myloading" src="{{ asset('admin/img/cube.svg') }}" />
            </center> 

          <div class="mycontent">
                      <!--widget start-->
                      <aside class="profile-nav alt green-border">
                          <section class="panel">
                              <div class="user-heading alt green-bg">
                                  <a href="#">
                                      <img alt="" id="showimage">
                                  </a>
                                  <h1 id="name"></h1>
                                  <p>
                                    <span id="email"></span> <br>
                                    <span id="country"></span> <i class="glyphicon glyphicon-map-marker"></i> 
                                  </p>
                              </div>

                              <ul class="nav nav-pills nav-stacked">
                                  <li><a href="javascript:;"> <i class="fa fa-file-image-o"></i> Publications <span id="publications" class="label label-primary pull-right r-activity"></span></a></li>
                                  <li><a href="javascript:;"> <i class="fa fa-comments"></i> Votes <span id="votes" class="label label-info pull-right r-activity"></span></a></li>
                                  <li><a href="javascript:;"> <i class="fa fa-comments"></i> Comments <span id="comments" class="label label-info pull-right r-activity"></span></a></li>                                  
                                  <li><a href="javascript:;"> <i class="fa fa-trophy"></i> Trophies <span id="trophies" class="label label-warning pull-right r-activity"></span></a></li>
     
                              </ul>

                          </section>
                      </aside>
                      <!--widget end-->
          </div>
            

            </div>

        </div>
    </div>
</div>
<!-- Show Modal -->




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



    $('#showModal').on("show.bs.modal", function (e) {

        $.ajax({
          type: 'GET',
          url: 'users/'+$(e.relatedTarget).data('id'),
          data: {
          '_token': $('input[name=_token]').val(),
              },
          success: function(data) {



          if(data.msg)
            {
              toastr.error('Error!', 'Error Alert', {timeOut: 5000});
              $("#showModal").modal('show');
            }else
            {
               $(".myloading").hide();
               $(".mycontent").show(); 
               $('#showModal #name').html(data.user.fname +" "+data.user.lname);
               $('#showModal #email').html(data.user.email);
               $('#showModal #birthday').html(data.user.birthday);
               $('#showModal #country').html(data.country);
               $('#showModal #comments').html(("0" + data.user.comments).slice(-2));
               $('#showModal #trophies').html(("0" + data.user.trophies).slice(-2));
               $('#showModal #votes').html(("0" + data.votes).slice(-2));
               $('#showModal #publications').html(("0" + data.publications).slice(-2));

               var pic = "storage/"+data.user.photo;
               $("#showModal #showimage").attr('src', assetBaseUrl.replace('src' , pic));
            }

          },
        });  

      });



    var table  =  $('#admins-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin.getusers') }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'fname', name: 'fname' },
            { data: 'lname', name: 'lname' },
            { data: 'points', name: 'points' },
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
                        actions += '<a data-toggle="modal"  data-id=":id" data-target="#showModal"><span class="glyphicon glyphicon-eye-open"></span></a>';


                        return actions.replace(/:id/g, data.id).replace(/:fname/g, data.fname).replace(/:lname/g, data.lname).replace(/:points/g, data.points).replace(/:status/g, data.status);
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
          url: "{{ URL::route('admin.changeUserStatus') }}",
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
              toastr.success('Successfully edited admin!', 'Success Alert', {timeOut: 5000});
            }

          },
        });                
}


            </script>


@endpush





  
