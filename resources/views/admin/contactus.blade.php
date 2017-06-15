@extends('layouts.admin.app')


@push('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
  
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/data-tables/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/data-tables/responsive/css/responsive.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/bootstrap-toggle/css/bootstrap-toggle.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/toastr/css/toastr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/full-loader.css') }}">


<style>

table td {
  word-wrap: break-word;
  max-width: 150px;
}
#contactus-table td {
  white-space:inherit;
}

</style>
@endpush


@section('content')


  <!-- page start-->

    <section class="panel">

                          <header class="panel-heading">
                              Contact User
                          </header>
                          <div class="panel-body">
                            <div class="adv-table">
                              <table id="contactus-table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>User</th>
                                                <th>Title</th>
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
  




<!-- Add Modal -->

 <!-- Modal Header -->
         
            
<!-- Add Modal -->



<!-- Edit Modal -->

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
                    Contact User 
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form  id="showForm" role="form">


                <center>
          
                </center>
      
                  <div class="form-group">
                    <label for="id">Id</label>
                      <input id="id" type="text" class="form-control" name="id" value="{{ old('id') }}" disabled="disabled">
                  </div>



                  <div class="form-group">
                    <label for="full_name">User</label>
                      <input id="full_name" type="text" class="form-control" name="full_name" value="{{ old('full_name') }}" disabled="disabled">                  
                  </div>


                  <div class="form-group">
                    <label for="full_name">Title</label>
                      <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" disabled="disabled">                  
                  </div>




                  <div class="form-group">
                    <label for="mesage">Message</label>
                      <textarea id="message" class="form-control" name="message" disabled="disabled">{{ old('message') }}</textarea>
                  </div>




                </form>
                
                
            </div>

        </div>
    </div>
</div>
<!-- Show Modal -->





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







    $('#showModal').on("show.bs.modal", function (e) {
         $("#showModal #title").val($(e.relatedTarget).data('title'));
         $("#showModal #full_name").val($(e.relatedTarget).data('full_name'));
         $("#showModal #message").html($(e.relatedTarget).data('message'));
         $("#showModal #id").val($(e.relatedTarget).data('id'));
      });







    var table  =  $('#contactus-table').DataTable({
      
        "language": {
            "url": "{{ asset('admin/assets/data-tables/lang/datatable.'.config('app.locale').'.json') }}"
        },
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin.getcontactus') }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'full_name', name: 'full_name' },
            { data: 'title', name: 'title'},
            {
                    name: 'actions',
                    data: null,
                    sortable: false,
                    searchable: false,
                    render: function (data) {
                        var actions = '';
                        actions += '<a data-toggle="modal"  data-id=":id" data-title=":title" data-message=":message" data-full_name=":full_name"  data-target="#showModal"><span class="glyphicon glyphicon-eye-open"></span></a>';


                        return actions.replace(/:id/g, data.id).replace(/:title/g, data.title).replace(/:message/g, data.message).replace(/:full_name/g, data.full_name);
                    }
            }

                        ]
    });




});





            </script>


@endpush





  
