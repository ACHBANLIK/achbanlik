@extends('layouts.admin.app')


@push('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
  
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/data-tables/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/data-tables/responsive/css/responsive.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/bootstrap-toggle/css/bootstrap-toggle.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/toastr/css/toastr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/full-loader.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/bootstrap-datepicker/css/datepicker.css') }}">


<!-- filter -->
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/jquery-ui/jquery-ui-1.10.1.custom.min.css') }}">
 --}}<!-- filter -->


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




              <!-- filter -->
              <div class="row">
              <div class="col-md-12">
                  <section class="panel ">
                      <header class="panel-heading">
                          @lang('field.filter')
                          <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                        </span>
                      </header>
                      <div class="panel-body">
                          <form method="POST" id="filterForm" class="form-horizontal tasi-form">



                              <div class="form-group">


                                  <label class="control-label col-md-2">@lang('field.user')</label>
                                  <div class="col-md-3">
                                   <input id="user" type="text" class="form-control" name="user">
                                  </div>



                                  <label class="control-label col-md-2">@lang('field.daterange')</label>
                                  <div class="col-md-4">
                                      <div class="input-group input-large" data-date="13-07-2013" data-date-format="mm-dd-yyyy">
                                          <input type="text" class="form-control from" name="from">
                                          <span class="input-group-addon">@lang('field.to')</span>
                                          <input type="text" class="form-control to" name="to">
                                          <div class="input-group-btn">
                                              <button type="button" id="resetDate" class="btn btn-danger date-reset"><i class="fa fa-times"></i></button>
                                          </div>

                                      </div>
                                      <span class="help-block">@lang('field.selectdaterange')</span>
                                  </div>




                                                        

                              </div>



                              <div class="form-group sliders">
                                  <label class="control-label col-md-3">@lang('field.numberofsignals')</label>
                                  <div class="col-md-6">
                                          <div id="slider-signals" class="slider"></div>
                                          <div class="slider-info"> 
                                              @lang('field.signals') : 
                                              <span class="slider-info" id="slider-signals-show"></span>
                                          </div>
                                  </div>
                              </div>


                           
                              <div class="form-group">

                                  <label class="control-label col-md-2">@lang('field.status')</label>
                                  <div class="col-md-2">
                                          <select name="status" id="status" class="form-control bound-s">
                                              <option value="-1">@lang('field.all')</option>
                                              <option value="0">@lang('field.disabled')</option>
                                              <option value="1">@lang('field.active')</option>
                                              <option value="2">@lang('field.fenced')</option>
                                          </select>
                                  </div>


                                  <label class="control-label col-md-2">@lang('field.categorie')</label>
                                  <div class="col-md-2">
                                          <select name="cat" id="cat" class="form-control bound-s">
                                              <option value="-1">@lang('field.all')</option>
                                              @foreach ($categories as $item)
                                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                              @endforeach
                                          </select>
                                  </div>


                                  <label class="control-label col-md-2">@lang('field.type')</label>
                                  <div class="col-md-2">
                                          <select name="type" id="type" class="form-control bound-s">
                                              <option value="-1">@lang('field.all')</option>
                                              @foreach ($types as $item)
                                                <option value="{{ $item->id }}">{{ $item->title }}</option>
                                              @endforeach
                                          </select>
                                  </div>

                              </div>





                              <button type="submit" class="btn btn-primary">
                                 <i class="fa fa-filter"></i>
                                  @lang('field.refine')
                              </button>
          


                          </form>
                      </div>
                  </section>
              </div>
          </div>
              <!-- filter -->


  <!-- page start-->

    <section class="panel">

                          <header class="panel-heading">
                              @lang('adminTemplate.publications')
                          </header>
                          <div class="panel-body">
                            <div class="adv-table">
                              <table id="publications-table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>@lang('field.id')</th>
                                                <th>@lang('field.title')</th>
                                                <th>@lang('field.user')</th>
                                                <th>@lang('field.categorie')</th>
                                                <th>@lang('field.type')</th>
                                                <th>@lang('field.signals')</th>
                                                <th>@lang('field.approved')</th>
                                                <th>@lang('field.action')</th>
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
                       <span class="sr-only">@lang('field.close')</span>
                </button>
                <h4 class="modal-title" id="title">
                    @lang('field.publication')
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


<!-- filter -->


<script src="{{ asset('admin/assets/jquery-ui/jquery-ui-1.10.1.custom.min.js') }}"></script>
<script src="{{ asset('admin/js/jquery.ui.touch-punch.min.js') }}"></script>

<script src="{{ asset('admin/assets/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>


<!-- filter -->


        <script>

     var assetBaseUrl = "{{ asset('src') }}";


    $(function() {




    // filter



    $("#slider-signals").slider({
        range: true,
        min: 0,
        max: 100,
        values: [0, 0],
        slide: function (event, ui) {
            $("#slider-signals-show").text(ui.values[0] + " - " + ui.values[1]);
        }
    });

    $("#slider-signals-show").text($("#slider-signals").slider("values", 0) + " - " + $("#slider-signals").slider("values", 1));



  $("#resetDate").click(function(e)
  {
    $(".to").val("");
    $(".to").val("");
  });

  var checkin = $('.from').datepicker({
              onRender: function(date) {
                  return date.valueOf() < now.valueOf() ? 'disabled' : '';
              }
          }).on('changeDate', function(ev) {
                  if (ev.date.valueOf() > checkout.date.valueOf()) {
                      var newDate = new Date(ev.date)
                      newDate.setDate(newDate.getDate() + 1);
                      checkout.setValue(newDate);
                  }
                  checkin.hide();
                  $('.to')[0].focus();
              }).data('datepicker');
          var checkout = $('.to').datepicker({
              onRender: function(date) {
                  return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
              }
          }).on('changeDate', function(ev) {
                  checkout.hide();
              }).data('datepicker');

    // end filter


    var table  =  $('#publications-table').DataTable({

        "language": {
            "url": "{{ asset('admin/assets/data-tables/lang/datatable.'.config('app.locale').'.json') }}"
        },
         processing: true,
        serverSide: true,
        ajax: {
            url: '{{ route('admin.getpublications') }}',
            data: function (d) {
                d.from = $('input[name=from]').val();
                d.to = $('input[name=to]').val();
                d.user = $('input[name=user]').val();
                d.signals1 = $("#slider-signals").slider("values", 0)
                d.signals2 = $("#slider-signals").slider("values", 1)
                d.cat = $( "#cat" ).val();
                d.type = $( "#type" ).val();
                d.status = $( "#status" ).val();
            }
        },

        columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            { data: 'full_name', name: 'full_name'  , searchable:false },
            { data: 'c_title', name: 'c_title', searchable:false},
            { data: 'type', name: 'type', searchable:false },
            { data: 'signals', name: 'signals' },
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


    $('#filterForm').on('submit', function(e) {
        table.draw();
        e.preventDefault();
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





  
