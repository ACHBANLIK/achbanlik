$( document ).ready(function() {


    // Display form from link inside a popup
    $('#pop_signup').live('click', function(e) {
        e.preventDefault();
        $(':input', '#login')
            .not(':button, :submit, :reset, :hidden')
            .val('')
            .removeAttr('checked')
            .removeAttr('selected');
        $('form#login').hide();

        $('form#register').show();
    });
    
    $('#pop_login').live('click', function(e) {
        e.preventDefault();
        $(':input', '#register')
            .not(':button, :submit, :reset, :hidden')
            .val('')
            .removeAttr('checked')
            .removeAttr('selected');
        $('form#register').hide();

        $('form#login').show();
    });


    // Perform AJAX login on form submit
    $('form#login').on('submit', function(e) {

        if (!$(this).valid()) return false;
        $('form#login .status').show().html("connexion en cours");

        email = $('form#login #email').val();
        password = $('form#login #password').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
                type: 'post',
                url: '/ajaxlogin',
                processData: false,
                contentType: false,
                cache: false,
                data: new FormData($('form#login')[0])
            ,
            error: function(data) {
                $('.status').html("error");
                $('.status').addClass('error');
            },
            success: function(data) {
                console.log(data.loggedin);
                if (data.loggedin == true) {
                    location.reload();
                } else if (data.loggedin == false) {

                    $('form#login .status').html("");
                    $('form#login .status  , form#register .status p').addClass('error');
                    $( "<p>Email ou mot de passe erroné.</p>" ).appendTo( $( "form#login .status" ) );
                    $('form#login #password').val("");
                }
            }
        });
        e.preventDefault();
    });



        // Perform AJAX register on form submit
    $('form#register').on('submit', function(e) {

        if (!$(this).valid()) return false;
        $('form#register .status').show().text("opération en cours");
        fname = $('form#register #fname').val();
        lname = $('form#register #lname').val();
        email = $('form#register #email').val();
        password = $('form#register #password').val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
                type: 'post',
                url: '/ajaxregister',
                processData: false,
                contentType: false,
                cache: false,
                data: new FormData($('form#register')[0])
            ,
            error: function(data) {
                $('.status').html("error");
            },
            success: function(data) {

                    if (data.done) {
                       window.location = "/demo";
                    }
                    else
                    {
                        $('form#register .status').html("");
                        $('form#register .status  , form#register .status p').addClass('error');

                        if(data.errors.email)
                        {
                            $( "<p>"+data.errors.email+"</p>" ).appendTo( $( "form#register .status" ) );
                            $('form#register #email').val("");
                        }


                        if(data.errors.fname)
                        {
                            $( "<p>"+data.errors.fname+"</p>" ).appendTo( $( "form#register .status" ) );
                            $('form#register #fname').val("");
                        }
                        if(data.errors.lname)
                        {
                            $( "<p>"+data.errors.lname+"</p>" ).appendTo( $( "form#register .status" ) );
                            $('form#register #lname').val("");
                        }

                    }


            }
        });
        e.preventDefault();
    });



    // Perform AJAX login on form submit
    $('form#commentform').on('submit', function(e) {


            $('form#commentform .status').show().html("Opération en cours");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                    type: 'post',
                    url: '/addcomment',
                    processData: false,
                    contentType: false,
                    cache: false,
                    data: new FormData($('form#commentform')[0])
                ,

                error: function(data) {
                    $('form#commentform .status').hide();
                        toastr.error('Une erreur est survenu.', {timeOut: 3000});
                },
                success: function(data) {
                    $('form#commentform .status').hide();
                    if (data.success == true) {
                     $('form#comment').val("");
                        var $newItems = $(data.html);
                        $('.comment-list').prepend( $newItems )
                        toastr.success('Commentaire ajouté avec sucées.', {timeOut: 3000});
                        $("form#commentform").trigger('reset');
                    } else{
                        toastr.error('Une erreur est survenu.', {timeOut: 3000});
                    }
                }
            });
            e.preventDefault();
    });





    // Client side form validation
    if (jQuery("#register").length)
        jQuery("#register").validate({
            rules: {
                password: {
                    minlength: 6,
                    equalTo: '#password2'
                    }
            }
        });


    else if (jQuery("#login").length)
        jQuery("#login").validate(
            {
                rules : 
                {
                password: {
                    minlength: 6
                    }
                }
            });




});


