@extends('layouts.admin.app')


@push('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
  
<link rel="stylesheet" type="text/css" href="{{ asset('assets/data-tables/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/data-tables/responsive/css/responsive.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-toggle/css/bootstrap-toggle.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/toastr/css/toastr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/full-loader.css') }}">


<style>


.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}


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
 <img class="loading" src="{{ asset('img/cube.svg') }}" />
</center> 
 <div class="well well-sm content">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img alt="" class="img-rounded img-responsive" id="showimage" />
                    </div>
                    <div class="col-sm-6 col-md-8">


                        <h4 id="name">Bhaumik Patel</h4>

                        <small><cite  id="country">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                        </i></cite></small>


                        <p id="email"><i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>

                        <p id="birthday"><i class="glyphicon glyphicon-envelope"></i>email@example.com</p>


                    </div>
                </div>
            </div>

            

            </div>

        </div>
    </div>
</div>
<!-- Show Modal -->




@stop


@push('scripts')



<script src="{{ asset('assets/data-tables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/data-tables/js/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/data-tables/responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/data-tables/responsive/js/responsive.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap-toggle/js/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('assets/toastr/js/toastr.min.js') }}"></script>




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
               $('#showModal #name').html(data.fname +" "+data.lname);
               $('#showModal #country').html(data.country);
               var pic = "storage/"+$(e.relatedTarget).data("photo");
               $("#showModal #showimage").attr('src', assetBaseUrl.replace('src' , pic));
            }

          },
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
        toastr.success('Successfully deleted Admin!', 'Success Alert', {timeOut: 5000});
      },
       error:function()
       {
      $("#deleteModal #submit").button('reset');
        }
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
          url: "{{ URL::route('changeStatus') }}",
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





  
