(function($){
    'use strict';
    jQuery(document).ready(function($) {
        jQuery(".like").stop().click(function(){
            var rel = $(this).attr("rel");

            var data = {
                data: rel,
                action: 'vast_buzz_like_callback'
            }
            jQuery.ajax({
                action: "vast_buzz_like_callback",
                type: "GET",
                dataType: "json",
                url: likepost.ajax_url,
                data: data,
                success: function(data){
                    console.log(data.likes);
                    console.log(data.status);

                    if(data.status == true){
                        jQuery(".like[rel="+rel+"]").html('<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> ' + data.likes).addClass("liked");
                    }else {
                        jQuery(".like[rel="+rel+"]").html('<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> ' + data.likes).removeClass("liked");
                    }
                }
            });

        });

    });
}(jQuery));