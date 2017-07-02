  @extends('layouts.admin.app')


@push('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
  
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/data-tables/responsive/css/responsive.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/bootstrap-toggle/css/bootstrap-toggle.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/toastr/css/toastr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/full-loader.css') }}">

<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/bootstrap-datepicker/css/datepicker.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">


<style>



</style>
@endpush


@section('content')


              <!--date picker start-->
      <div class="row">
              <div class="col-md-12">
                  <section class="panel">
                      <header class="panel-heading">
                           @lang('field.filters')
                          <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                        </span>
                      </header>
                      <div class="panel-body" >
                          <form  id="filterForm" action="{{ route('admin.dashboard') }}" method="GET"  class="form-horizontal tasi-form">


                              <div class="form-group">
                                  <label class="control-label col-md-3">@lang('field.daterange')</label>
                                  <div class="col-md-4">
                                      <div class="input-group input-large" data-date-format="mm-dd-yyyy h:m:s">
                                          <input type="text" class="form-control from" name="from" value="{{ $from }}" required>
                                          <span class="help-block errorDp1"></span>
                                          <span class="input-group-addon">@lang('field.to')</span>
                                          <input type="text" class="form-control to" name="to" value="{{ $to }}" required>
                                          <span class="help-block errorDp2"></span>

                                              <div class="input-group-btn">
                                                  <button type="button" id="resetdate" class="btn btn-danger date-reset"><i class="fa fa-times"></i></button>
                                                  <button type="submit" id="filter"  class="btn btn-warning date-set"><i class="fa fa-filter"></i></button>

                                              </div>



                                      </div>


                                  </div>
                              </div>

                          </form>
                      </div>
                  </section>
              </div>



          </div>
              <!--date picker end-->



              <div class="row state-overview">
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-user"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">
                                  {{ $dashboard['users'] }}
                              </h1>
                              <p>@lang('adminTemplate.users')</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="fa fa-tags"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">
                                  {{ $dashboard['publications'] }}
                              </h1>
                              <p>@lang('adminTemplate.publications')</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="fa fa-eye"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">
                                  {{ $dashboard['opinions'] }}
                              </h1>
                              <p>@lang('field.opinions')</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="fa fa-comment"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count4">
                                  {{ $dashboard['comments'] }}
                              </h1>
                              <p>@lang('field.comments')</p>
                          </div>
                      </section>
                  </div>
              </div>
              <!--state overview end-->






              <div class="row">





                 <div class="col-lg-7">
                      <section class="panel">
                          <header class="panel-heading">
                              <p>@lang('field.publicationsbycategory')</p>
                          </header>
                          <div class="panel-body">
                              <div id="pubsCat" style="height: 400px"></div>
                          </div>
                      </section>
                  </div>


                  <div class="col-lg-5">
                      <section class="panel">
                          <header class="panel-heading">
                             @lang('field.pubstatus') 
                          </header>
                          <div class="panel-body">
                             <div id="pubsStatus" style="width: 440px; height: 400px; margin: 0 auto">
                          </div>
                      </section>
                  </div>

                  
                </div>



              <div class="row">
                 


                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              @lang('adminTemplate.publications')
                          </header>
                          <div class="panel-body">
                            <div id="pubsTime" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
                          </div>
                      </section>
                  </div>



                </div>



              <div class="row">
            
            
                   <div class="col-lg-5">
                      <section class="panel">
                          <header class="panel-heading">
                              @lang('field.userstatus') 
                          </header>
                          <div class="panel-body">
                             <div id="usersStatus" style="width: 350px; height: 400px; margin: 0 auto">
                          </div>
                      </section>
                  </div>

                  

                  <div class="col-lg-7">
                      <section class="panel">
                          <header class="panel-heading">
                                @lang('field.publicationsbytype')
                          </header>
                          <div class="panel-body">
                             <div id="pubsType" style="width: 550px; height: 400px; margin: 0 auto">
                          </div>
                      </section>
                 </div>








{{--                    <div class="col-lg-4">
                      <!--user info table start-->
                      <section class="panel">
                          <div class="panel-body">
                              <a href="#" class="task-thumb">
                              <img style="max-width: 100px;" src="{{ asset('storage/'.$bestUser->photo) }}" />
                              </a>&nbsp;&nbsp;&nbsp;
  
                              <div  class="task-thumb-details">
                                  <h1>{{ $bestUser->fname }} {{ $bestUser->lname }}</h1>
                                  <p>@lang('field.bestuser')</p>
                              </div>
                          </div>
                          <table class="table table-hover personal-task">
                              <tbody>
                                <tr>
                                    <td>
                                        <i class=" fa fa-tags"></i>
                                    </td>
                                    <td>@lang('adminTemplate.publications')</td>
                                    <td> {{ $bestUser->publications->count() }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-eye"></i>
                                    </td>
                                    <td>@lang('field.opinions')</td>
                                    <td> {{ $bestUser->opinions->count() }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-comment"></i>
                                    </td>
                                    <td>@lang('field.comments')</td>
                                    <td> {{ $bestUser->comments->count() }}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class=" fa fa-trophy"></i>
                                    </td>
                                    <td>@lang('admintemplate.trophes')</td>
                                    <td> {{ $bestUser->utrophies->count() }}</td>
                                </tr>
                              </tbody>
                          </table>
                      </section>
                      <!--user info table end-->
                  </div>
 --}}


                </div>

           

</div>


@stop


@push('scripts')



<script src="{{ asset('admin/assets/data-tables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/data-tables/js/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('admin/assets/data-tables/responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/assets/data-tables/responsive/js/responsive.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/bootstrap-toggle/js/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('admin/assets/toastr/js/toastr.min.js') }}"></script>


<script src="{{ asset('admin/assets/Highcharts-5.0.12/code/highcharts.js') }}"></script>
<script src="{{ asset('admin/assets/Highcharts-5.0.12/code/highcharts-3d.js') }}"></script>
<script src="{{ asset('admin/assets/Highcharts-5.0.12/code/modules/exporting.js') }}"></script>


<script src="{{ asset('admin/assets/Highcharts-5.0.12/code/highcharts-more.js') }}"></script>
<script src="{{ asset('admin/assets/Highcharts-5.0.12/code/modules/solid-gauge.js') }}"></script>


<script src="{{ asset('admin/assets/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('admin/assets/bootstrap-daterangepicker/daterangepicker.js') }}"></script>


        <script>

     var assetBaseUrl = "{{ asset('src') }}";



    $(function() {




        // disabling dates
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

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



        $("#resetdate").click(function(event) {
          $('.from').val("");
          $('.to').val("");
        });


Highcharts.chart('pubsCat', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    title: {
        text: '@lang('field.publicationsbycategory')'
    },
    plotOptions: {
        pie: {
            innerSize: 100,
            depth: 45
        }
    },
    series: [{
        name: 'Publications',
        data: [
        @foreach ($pubsCat as $item)
           ['{{ $item->{'title_'.config('app.locale')} }}', {{ $item->count }}],
        @endforeach
        ] 
    }]
});


    

Highcharts.chart('pubsType', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: '@lang('field.publicationsbytype')'
    },

    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                style: {
                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                }
            }
        }
    },

    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [
        @foreach ($pubsType as $item)
          {
              name: '{{ $item->{'title_'.config('app.locale')} }}',
              y: {{ $item->count }}
          },
        @endforeach
             

        ]
    }]
});




Highcharts.chart('pubsStatus', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: 'Publications',
        align: 'center',
        verticalAlign: 'middle',
        y: 40
    },

    plotOptions: {
        pie: {
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                distance: -50,
                style: {
                    fontWeight: 'bold',
                    color: 'white'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '75%']
        }
    },
    series: [{
        type: 'pie',
        name: 'Count : ',
        innerSize: '50%',
        data: [
        @foreach ($pubsStatus as $item)
           [getStatusName({{ $item->status }}), {{ $item->count }}],
        @endforeach

        ]
    }]
});


Highcharts.chart('usersStatus', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
    title: {
        text: 'Users',
        align: 'center',
        verticalAlign: 'middle',
        y: 40
    },

    plotOptions: {
        pie: {
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                distance: -50,
                style: {
                    fontWeight: 'bold',
                    color: 'white'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '75%']
        }
    },
    series: [{
        type: 'pie',
        name: 'Count : ',
        innerSize: '50%',
        data: [
        @foreach ($usersStatus as $item)
           [getStatusName({{ $item->status }}), {{ $item->count }}],
        @endforeach

        ]
    }]
});



Highcharts.chart('pubsTime', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Publications - Date'
    },
    xAxis: {
        title: {
            text: 'Mois'
        },
        categories: [
        @foreach ($pubsTime as $item)
           '{{ $item->month }}',
        @endforeach
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Publications (Nombre)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: 
            '<td style="padding:0"><b>{point.y}  publications</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Mois',
        data: 
        [
        @foreach ($pubsTime as $item)
           {{ $item->count }},
        @endforeach
        ],

    }]
});




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




function getStatusName(value)
{
  switch (value) 
  {
    case 0:
      return "Désactivée";
      break;
    case 1:
      return "Active";
      break;
    case 2:
      return "Cloturée";
      break;   
  }
}

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





  
