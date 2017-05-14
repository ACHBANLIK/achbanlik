@extends('layouts.admin.app')


@push('styles')


<link rel="stylesheet" type="text/css" href="{{ asset('assets/data-tables/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/data-tables/responsive/css/responsive.bootstrap.min.css') }}">



@endpush


@section('content')



  <!-- page start-->
  <section class="panel">
                          <header class="panel-heading">
                              Dynamic Table
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                          <table id="admins-table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                      <thead>
                                      <tr>
                                          <th>Id</th>
                                          <th>First Name</th>
                                          <th>Last Name</th>
                                          <th>Email</th>
                                          <th>Status</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                      </tbody>
                          </table>
                                </div>
                          </div>
                      </section>
              <!-- page end-->



@stop


@push('scripts')



<script src="{{ asset('assets/data-tables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/data-tables/js/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('assets/data-tables/responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/data-tables/responsive/js/responsive.bootstrap.min.js') }}"></script>





<script type="text/javascript" src=""></script>
        <script>
    /*$(function() {
    $('#admins-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ route('admin.getadmins') }}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'fname', name: 'fname' },
            { data: 'lname', name: 'lname' },
            { data: 'email', name: 'email' },
            { data: 'statu's, render: function(data, type, row)
                 {
                    switch(data) 
                    {
                       case '1' : return 'On'; break;
                       case '0' : return 'Off'; break; 
                       default : return 'On'; break;
                     }
                  }
            }
        ]
    });
});*/




function format ( d ) {
    return 'Full name: '+d.first_name+' '+d.last_name+'<br>'+
        'Salary: '+d.salary+'<br>'+
        'The child row can contain any data you wish, including links, images, inner tables etc.';
}
 
$(document).ready(function() {
    var dt = $('#admins-table').DataTable( {
        "processing": true,
        "serverSide": true,
        "ajax": "scripts/ids-objects.php",
        "columns": [
            {
                "class":          "details-control",
                "orderable":      false,
                "data":           null,
                "defaultContent": ""
            },
            { data: 'id', name: 'id' },
            { data: 'fname', name: 'fname' },
            { data: 'lname', name: 'lname' },
            { data: 'email', name: 'email' },
            { data: 'status', name: 'status' },

        ],
        "order": [[1, 'asc']]
    } );
 
    // Array to track the ids of the details displayed rows
    var detailRows = [];
 
    $('#admins-table tbody').on( 'click', 'tr td.details-control', function () {
        var tr = $(this).closest('tr');
        var row = dt.row( tr );
        var idx = $.inArray( tr.attr('id'), detailRows );
 
        if ( row.child.isShown() ) {
            tr.removeClass( 'details' );
            row.child.hide();
 
            // Remove from the 'open' array
            detailRows.splice( idx, 1 );
        }
        else {
            tr.addClass( 'details' );
            row.child( format( row.data() ) ).show();
 
            // Add to the 'open' array
            if ( idx === -1 ) {
                detailRows.push( tr.attr('id') );
            }
        }
    } );
 
    // On each draw, loop over the `detailRows` array and show any child rows
    dt.on( 'draw', function () {
        $.each( detailRows, function ( i, id ) {
            $('#'+id+' td.details-control').trigger( 'click' );
        } );
    } );
} );


            </script>
@endpush





