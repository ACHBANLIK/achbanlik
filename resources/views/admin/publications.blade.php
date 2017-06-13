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
                              Publications
                          </header>
                          <div class="panel-body">
                            <div class="adv-table">
                              <table id="publication-table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Titre</th>
                                                <th>User</th>
                                                <th>Category</th>
                                                <th>Type</th>
                                                <th>Approved</th>
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
                <h4 class="modal-title" id="title">
                    Publication
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <center>
                  <img class="myloading" src="{{ asset('admin/img/cube.svg') }}" />
                </center> 

                <div class="well well-sm mycontent">
                  <div class="row">
                      <div class="col-sm-6 col-md-4">
                          <img alt="" class="img-rounded img-responsive" id="showimage" />
                      </div>
                      <div class="col-sm-6 col-md-8">

                          <p id="email"><i class="glyphicon glyphicon-gift"></i></p>

                          <p id="birthday"><i class="glyphicon glyphicon-envelope"></i></p>

                          <button data-toggle="button" class="btn btn-white">
                            <i class="fa fa-thumbs-up text-info"></i>
                                     <span id="points"></span>
                          </button>
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



<script src="{{ asset('admin/assets/data-tables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/data-tables/js/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('admin/assets/data-tables/responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/assets/data-tables/responsive/js/responsive.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/bootstrap-toggle/js/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('admin/assets/toastr/js/toastr.min.js') }}"></script>




        <script>

     var assetBaseUrl = "{{ asset('src') }}";



    $(function() {







    var table  =  $('#publication-table').DataTable({


         processing: true,
        serverSide: true,
        ajax: '{{ route('admin.getpublications') }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            { data: 'full_name', name: 'full_name' },
            { data: 'c_title', name: 'c_title' },
            { data: 'type', name: 'type' },
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
                        actions += '<a target="_blank"   href="publications/:id"><span class="glyphicon glyphicon-eye-open"></span></a>';


                        return actions.replace(/:id/g, data.id);
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
          url: "{{ URL::route('admin.changePublicationStatus') }}",
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





  
