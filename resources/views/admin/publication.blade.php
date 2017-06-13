@extends('layouts.admin.app')


@push('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
  
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/data-tables/css/dataTables.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/data-tables/responsive/css/responsive.bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/bootstrap-toggle/css/bootstrap-toggle.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/toastr/css/toastr.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/full-loader.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css') }}"  media="screen">



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

                          <input type="hidden" id="idPub" name="idPub" value="{{ $publication->id }}">

                          <div class="weather-bg">
                              <div class="panel-body">
                                  <div class="row">
                                      <div class="col-xs-12">
                                        <div class="title">
                                          {{ title_case($publication->title) }}
                                        </div>
                                      </div>
                                       
                                  </div>
                              </div>
                          </div>


                          <footer class="weather-category">
                              <ul>
                                  <li class="active">
                                    <i class="fa fa-user"></i><br>
                                       {{ title_case($publication->user->fname) }}  {{ title_case($publication->user->lname) }}
                                  </li>
                                  <li>
                                      <i class="fa fa-list"></i><br>
                                       {{ title_case($publication->category->title) }} 
                                  </li>
                                  <li>
                                      <i class="fa fa-user-secret"></i><br>
                                      {{ ($publication->privacy ? 'Public' : 'Privé') }}
                                  </li>
                                  <li>
                                      <i class="fa fa-comment"></i><br>
                                      {{ $publication->comments->count() }}
                                  </li>
                                  <li>
                                    <i class="fa fa-calendar-times-o"></i><br>
                                    {{ date('d F, Y', strtotime($publication->date_fin)) }}
                                  </li>

                              </ul>

                              
                          </footer>



                      </section>



                      <section>





                      @if ($publication->idType === 1)


                      <div class="row product-list">
                          <div class="col-md-4 product-list col-md-offset-4">
                              <section class="panel">

                                  <div class="panel-body text-center">

                                      <div class="adtocartnoimage">
                                          <i class="{{ $publication->type->icone }} "></i>
                                      </div>

                                      <h4>
                                          <span href="#" class="pro-title">
                                              {{ title_case($publication->text1) }} 
                                          </span>
                                      </h4>

                                      <span class="price"><i class="glyphicon glyphicon-arrow-up"></i>{{ $publication->opinions->where('choice' , '=' , '1')->count() }}</span>
                                      <span class="price"><i class="glyphicon glyphicon-arrow-down"></i>{{ $publication->opinions->where('choice' , '=' , '2')->count() }}</span>
                                  </div>
                              </section>
                          </div>

                      </div>


                      @elseif ($publication->idType === 2)


                      <div class="row product-list">
                          <div class="col-md-3 product-list col-md-offset-4">
                              <section class="panel">

                                  <div class="panel-body text-center">

                                      <div class="pro-img-box">
                                          <img src="{{ ($publication->image1 == '') ? '/storage/all/publication.png' : $publication->image1 }}" alt=""/>
                                      </div>

                                      <span class="price"><i class="glyphicon glyphicon-arrow-up"></i>{{ $publication->opinions->where('choice' , '=' , '1')->count() }}</span>
                                      <span class="price"><i class="glyphicon glyphicon-arrow-down"></i>{{ $publication->opinions->where('choice' , '=' , '2')->count() }}</span>
                                  </div>
                              </section>
                          </div>

                      </div>

                      @elseif ($publication->idType === 3)


                      <div class="row product-list">
                          <div class="col-md-3 product-list col-md-offset-4">
                              <section class="panel">
                                  <div class="panel-body text-center">

                                      <div class="pro-img-box">
                                          <img src="{{ ($publication->image1 == '') ? '/storage/all/publication.png' : $publication->image1 }}" alt=""/>
                                      </div>

                                      <h4>
                                          <a href="#" class="pro-title">
                                               {{ title_case($publication->text1) }} 
                                          </a>
                                      </h4>

                                      <span class="price"><i class="glyphicon glyphicon-arrow-up"></i>{{ $publication->opinions->where('choice' , '=' , '1')->count() }}</span>
                                      <span class="price"><i class="glyphicon glyphicon-arrow-down"></i>{{ $publication->opinions->where('choice' , '=' , '2')->count() }}</span>

                                  </div>
                              </section>
                          </div>

                      </div>


                      @elseif($publication->idType === 4)


                      <div class="row product-list">


                          <div class="col-md-4 product-list col-md-offset-1">
                              <section class="panel">

                                  <div class="panel-body text-center">

                                      <div class="easy-pie-chart">
                                          <div class="percentage" data-percent="{{ ($publication->opinions->count() == 0 ? '0' : $publication->opinions->where('choice' , '=' , '1')->count() / $publication->opinions->count()) }}"><span>{{ ($publication->opinions->count() == 0 ? '0' : $publication->opinions->where('choice' , '=' , '1')->count() / $publication->opinions->count()) }}</span>%</div>
                                      </div>  

                                      <h4>
                                          <span href="#" class="pro-title">
                                              {{ title_case($publication->text1) }} 
                                          </span>
                                      </h4>


                                  </div>



                              </section>
                          </div>


                          <div class="col-md-4 product-list col-md-offset-1">
                              <section class="panel">

                                  <div class="panel-body text-center">

                                      <div class="easy-pie-chart">
                                          <div class="percentage" data-percent="{{ ($publication->opinions->count() == 0 ? '0' : $publication->opinions->where('choice' , '=' , '2')->count() / $publication->opinions->count()) }}"><span>{{ ($publication->opinions->count() == 0 ? '0' : $publication->opinions->where('choice' , '=' , '2')->count() / $publication->opinions->count()) }}</span>%</div>
                                      </div>  

                                      <h4>
                                          <span href="#" class="pro-title">
                                              {{ title_case($publication->text2) }} 
                                          </span>
                                      </h4>


                                  </div>



                              </section>
                          </div>
                          

                      </div>
  


                      @elseif ($publication->idType === 5)


                      <div class="row product-list">


                          <div class="col-md-3 product-list col-md-offset-2">
                              <section class="panel">

                                  <div class="panel-body text-center">

                                      <div class="pro-img-box">
                                          <img src="{{ ($publication->image1 == '') ? '/storage/all/publication.png' : $publication->image1 }}" alt=""/>
                                      </div>

                                      <span class="badge bg-primary">{{ ($publication->opinions->count() == 0 ? '0' : $publication->opinions->where('choice' , '=' , '1')->count() / $publication->opinions->count()) }}%</span>
                                  </div>
                              </section>
                          </div>


                          <div class="col-md-3 product-list col-md-offset-2">
                              <section class="panel">

                                  <div class="panel-body text-center">

                                      <div class="pro-img-box">
                                          <img src="{{ ($publication->image2 == '') ? '/storage/all/publication.png' : $publication->image1 }}" alt=""/>
                                      </div>

                                      <span class="badge bg-primary">{{ ($publication->opinions->count() == 0 ? '0' : $publication->opinions->where('choice' , '=' , '2')->count() / $publication->opinions->count()) }}%</span>
                                  </div>
                              </section>
                          </div>



                      </div>

                      @elseif ($publication->idType === 6)


                      <div class="row product-list">
                          <div class="col-md-3 product-list col-md-offset-2">
                              <section class="panel">
                                  <div class="panel-body text-center">

                                      <div class="pro-img-box">
                                          <img src="{{ ($publication->image1 == '') ? '/storage/all/publication.png' : $publication->image1 }}" alt=""/>
                                      </div>

                                      <h4>
                                          <a href="#" class="pro-title">
                                               {{ title_case($publication->text1) }} 
                                          </a>
                                      </h4>

                                      <span class="badge bg-primary">{{ ($publication->opinions->count() == 0 ? '0' : $publication->opinions->where('choice' , '=' , '1')->count() / $publication->opinions->count()) }}%</span>

                                  </div>
                              </section>
                          </div>

                          <div class="col-md-3 product-list col-md-offset-2">
                              <section class="panel">
                                  <div class="panel-body text-center">

                                      <div class="pro-img-box">
                                          <img src="{{ ($publication->image2 == '') ? '/storage/all/publication.png' : $publication->image1 }}" alt=""/>
                                      </div>

                                      <h4>
                                          <a href="#" class="pro-title">
                                               {{ title_case($publication->text2) }} 
                                          </a>
                                      </h4>

                                      <span class="badge bg-primary">{{ ($publication->opinions->count() == 0 ? '0' : $publication->opinions->where('choice' , '=' , '2')->count() / $publication->opinions->count()) }}%</span>

                                  </div>
                              </section>
                          </div>

                      </div>

                      @endif

                      </section>



    <section class="panel">

                          <header class="panel-heading">
                              Comments  
                          </header>
                          <div class="panel-body">
                            <div class="adv-table">
                              <table id="comments-table" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                            <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>User</th>
                                                <th>Commentaire</th>
                                                <th>Status</th>
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
                    Commentaire 
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form  id="showForm" role="form">


                <center>
                  <div class="form-group">
                      <img  id="showimage" style="max-width:200px;max-height:200px;"/>
                  </div>
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
                    <label for="description">Commentaire</label>
                      <textarea id="text" class="form-control" name="text" required autofocus>{{ old('text') }}</textarea>
                  </div>

                </form>
                
                
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
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                    Are you sure you want to delete <span id="text"></span>of<span id="full_name"></span>?
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                
                <form role="form" id="confirmForm" method="POST">

                  <input type="hidden" name="id" id="id" value="">
                  
                  <center>
                    <button  type="button" data-dismiss="modal"  class="btn btn-danger btn-lg btn-bloc">Non</button>
                    <button id="submit" type="button" class="btn btn-primary btn-lg btn-bloc" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Opération en cours" >Oui</button>

                  </center>

                </form>
                
                
            </div>

        </div>
    </div>
</div>

<!-- Confirmation Modal -->






@stop


@push('scripts')



<script src="{{ asset('admin/assets/data-tables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/assets/data-tables/js/dataTables.bootstrap.min.js') }}"></script>

<script src="{{ asset('admin/assets/data-tables/responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/assets/data-tables/responsive/js/responsive.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/bootstrap-toggle/js/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('admin/assets/toastr/js/toastr.min.js') }}"></script>
<script src="{{ asset('admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>




               <script>



$('.percentage').easyPieChart({
  animate: 1000,
  lineWidth: 4,
  onStep: function(value) {
    this.$el.find('span').text(Math.round(value));
  }
});

     var assetBaseUrl = "{{ asset('src') }}";



    $(function() {


    //$("#addModal").modal("show"); 



    $('#deleteModal').on("show.bs.modal", function (e) {
         $("#deleteModal #text").html($(e.relatedTarget).data('text'));
         $("#deleteModal #full_name").html($(e.relatedTarget).data('full_name')); 
         $("#deleteModal #id").val($(e.relatedTarget).data('id'));
    });


    $('#showModal').on("show.bs.modal", function (e) {
         $("#showModal #full_name").val($(e.relatedTarget).data('full_name'));
         $("#showModal #text").val($(e.relatedTarget).data('text'));
         $("#showModal #id").val($(e.relatedTarget).data('id'));
         if($(e.relatedTarget).data("image") != "")
          {
           var pic = "storage/"+$(e.relatedTarget).data("image");
           $("#showModal #showimage").attr('src', assetBaseUrl.replace('src' , pic));
          }
          else
          {
            $("#showModal #showimage").hide();
          }

      });
   
});



$("#deleteModal #submit").click(function(e)
{
     $("#deleteModal #submit").button('loading');
  $.ajax({
      type: 'DELETE',
      url: 'comments/' + $("#deleteModal #id").val(),
      data: 
      {
        '_token': $('input[name=_token]').val(),
      },
      success: function(data) {
      
        $("#deleteModal #submit").button('reset');
        $("#deleteModal").modal("hide");   

        $('#admins-table').DataTable().draw(false)
        toastr.success('Successfully deleted Comment!', 'Success Alert', {timeOut: 5000});
      },
       error:function()
       {
      $("#deleteModal #submit").button('reset');
        }
    });
});



    var table  =  $('#comments-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
        "url": '/admin/getcomments/'+$("#idPub").val(),
        "type": 'GET'
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'full_name', name: 'full_name' },
            { data: 'text', name: 'text' },
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
                        actions += '<a data-toggle="modal"  data-id=":id" data-full_name=":full_name" data-text=":text"  data-status=":status"  data-image=":image" data-target="#showModal"><span class="glyphicon glyphicon-eye-open"></span></a>';

                        actions += '|<a data-toggle="modal"  data-id=":id" data-full_name=":full_name" data-text=":text"  data-status=":status"  data-target="#deleteModal"><span class="glyphicon glyphicon-trash"></span></a>';

                        return actions.replace(/:id/g, data.id).replace(/:full_name/g, data.full_name).replace(/:text/g, data.text).replace(/:status/g, data.status).replace(/:image/g, data.image);
                    }
            }

                        ]
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
          url: "{{ URL::route('admin.changeCommentStatus') }}",
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
              toastr.success('Successfully edited Comment!', 'Success Alert', {timeOut: 5000});
            }

          },
        });                
}


            </script>


@endpush
