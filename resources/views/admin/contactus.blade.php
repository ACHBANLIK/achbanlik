@extends('layouts.admin.app')


@push('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
  
<link rel="stylesheet" type="text/css" href="{{ asset('assets/data-tables/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/data-tables/responsive/css/responsive.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-toggle/css/bootstrap-toggle.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/toastr/css/toastr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/full-loader.css') }}">


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
                              Contact User
                          </header>
                          <div class="panel-body">
                            <div class="adv-table">
                              <table id="admins-table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
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
                    <label for="title">Title</label>
                      <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" disabled="disabled">                  
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



<script src="{{ asset('assets/data-tables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/data-tables/js/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/data-tables/responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/data-tables/responsive/js/responsive.bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap-toggle/js/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('assets/toastr/js/toastr.min.js') }}"></script>




        <script>

     var assetBaseUrl = "{{ asset('src') }}";



    $(function() {


    //$("#addModal").modal("show"); 







    $('#showModal').on("show.bs.modal", function (e) {
         $("#showModal #title").val($(e.relatedTarget).data('title'));
         $("#showModal #message").val($(e.relatedTarget).data('message'));
         $("#showModal #id").val($(e.relatedTarget).data('id'));
      });







    var table  =  $('#admins-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin.getcontactus') }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            { data: 'message', name: 'message' },

            {
                    name: 'actions',
                    data: null,
                    sortable: false,
                    searchable: false,
                    render: function (data) {
                        var actions = '';
                        actions += '<a data-toggle="modal"  data-id=":id" data-title=":title" data-message=":message"  data-target="#showModal"><span class="glyphicon glyphicon-eye-open"></span></a>';


                        return actions.replace(/:id/g, data.id).replace(/:title/g, data.title).replace(/:message/g, data.message);
                    }
            }

                        ]
    });




});





            </script>


@endpush





  
