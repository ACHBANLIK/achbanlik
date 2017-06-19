(function($){
    'use strict';
    jQuery( document ).ready(function() {
        var posts_per_page = infiniteload.posts_per_page
        var dataClear = $('#loader #loading').data( "clearValue" );
        var dataClearfix = $('#loader #loading').data( "clearfixValue" );
        jQuery("#loader #loading").hide();
        jQuery("#loader #full-masonary-loading").hide();
        jQuery("#loader #container-masonary-loading").hide();
        var pageNumber = 2;
        var max_num_pages = postload.max_num_pages;
        jQuery("#load-more").live("click",function(event){
            event.preventDefault();
            var post_type = 'post';
            var end_message = postload.end_message;
            jQuery.ajax({
                url : postload.ajax_url,
                type : 'post',
                data : {
                    action : 'vast_buzz_load_post',
                    page: pageNumber,
                    post_type: post_type,                
                    posts_per_page: posts_per_page,
                    post_col: postload.posts_col,
                    post_style: postload.post_style,
                    is_excerpt: postload.is_excerpt,
                    is_sharecount: postload.is_sharecount,
                    is_meta: postload.is_meta,
                    excerpt_limit: postload.excerpt_limit,
                    post_thumb: postload.post_thumb,
                    vb_fw_fp: postload.vb_fw_fp,
                    clear: dataClear,
                    clearfix: dataClearfix
                },
                beforeSend: function() {
                    jQuery('#loader #load-more').hide();
                    jQuery('#loader #loading').show();
                },
                success : function( html ) {
                    jQuery('#loader #loading').hide();
                    jQuery('#main').append( html );
                    pageNumber++;
                    dataClear = +dataClear + +posts_per_page;
                    if(max_num_pages > pageNumber){
                        jQuery('#loader #load-more').show();
                    } else {
                        jQuery('#loader').append('<div class="post-load-end">'+end_message+'</div>');                    
                    }                                                        
                }
            });
        });   
    });
}(jQuery));
