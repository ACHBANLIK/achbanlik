$(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
});




$(document).ready(function() 
{



    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

    $('.default-date-picker').datepicker({ 
        minDate: today
    });

    $("#type-1").modal('show');


    $('.pubModal').on("show.bs.modal", function (e) {
         $('#create-post-modal').modal('hide')
    });





    $(".formModal #submit").click(function(e)
    {

        $id  = $(this).parents(".login-form").attr('id');

        $("#"+$id+" #submit").button('loading');


          var formData  = new FormData($("#"+$id)[0])
          formData.append('_method', 'post');  


          $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });

        $.ajax
        ({
                        type: 'post',
                        url: 'createpost',             
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,

                            success: function(data) {
                            $("#"+$id+" #submit").button('reset');

                            $('.form-group').removeClass('has-error');
                            $('.help-block').html("");




                            if ((data.errors)) {
                                setTimeout(function () {
                                    toastr.error('Erreur de validation.', {timeOut: 3000});
                                }, 500);
                      
                                if (data.errors.title) {
                                    $('#'+$id+' #title').parents(".form-group").addClass('has-error');
                                    $('#'+$id+' .errorTitle').html("<strong>"+data.errors.title+"<strong>");
                                }
                      
                                if (data.errors.deadline) {
                                    $('#'+$id+' #deadline').parents(".form-group").addClass('has-error');
                                    $('#'+$id+' .errorDeadline').html("<strong>"+data.errors.deadline+"<strong>");
                                }

                      
                                if (data.errors.description) {
                                    $('#'+$id+' #description').parents(".form-group").addClass('has-error');
                                    $('#'+$id+' .errorDescription').html("<strong>"+data.errors.description+"<strong>");
                                }

                                if (data.errors.description1) {
                                    $('#'+$id+' #description1').parents(".form-group").addClass('has-error');
                                    $('#'+$id+' .errorDescription1').html("<strong>"+data.errors.description1+"<strong>");
                                }

                                if (data.errors.description2) {
                                    $('#'+$id+' #description2').parents(".form-group").addClass('has-error');
                                    $('#'+$id+' .errorDescription2').html("<strong>"+data.errors.description2+"<strong>");
                                }

                                if (data.errors.photo) {
                                    $('#'+$id+' #photo').parents(".form-group").addClass('has-error');
                                    $('#'+$id+' .errorPhoto').html("<strong>"+data.errors.photo+"<strong>");
                                }


                                if (data.errors.photo1) {
                                    $('#'+$id+' #photo1').parents(".form-group").addClass('has-error');
                                    $('#'+$id+' .errorPhoto1').html("<strong>"+data.errors.photo1+"<strong>");
                                }

                                if (data.errors.photo2) {
                                    $('#'+$id+' #photo2').parents(".form-group").addClass('has-error');
                                    $('#'+$id+' .errorPhoto2').html("<strong>"+data.errors.photo2+"<strong>");
                                }




                            } else {
                                    toastr.success('Publication crée avec succès.', {timeOut: 1000});
                                    $('.formModal').modal('hide')
                                    setTimeout(function()
                                    {
                                            window.location.href = "/publication/"+data.publication;
                                    } , 1000);
                            }
                        },
                          error:function()
                          {
                                    $('#'+$id+' #submit').button('reset');
                                    toastr.error('Erreur de serveur.', {timeOut: 3000});
                          }

        });        

    });





});











