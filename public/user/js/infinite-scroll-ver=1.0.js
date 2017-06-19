/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
(function($){
    'use strict';
    var button = $('#loader .infinite-scroll');
    var posts_per_page = infiniteload.posts_per_page;
    var dataClear = $('#loader .infinite-scroll').data( "clearValue" );
    var dataClearfix = $('#loader .infinite-scroll').data( "clearfixValue" );
    var pageNumber = 2;
    var max_num_pages = infiniteload.max_num_pages;
    var loading = false;
    var scrollHandling = {
        allow: true,
        reallow: function() {
            scrollHandling.allow = true;
        },
        delay: 400 //(milliseconds) adjust to the highest acceptable value
    };
    jQuery(window).scroll(function(){
        if( ! loading && scrollHandling.allow && button.length) {
            scrollHandling.allow = false;
            setTimeout(scrollHandling.reallow, scrollHandling.delay);
            var offset = jQuery(button).offset().top - jQuery(window).scrollTop();
            if( 2000  > offset ) {
                var post_type = 'post';                
                var end_message = infiniteload.end_message;
                loading = true;
                jQuery.ajax({
                    url : infiniteload.ajax_url,
                    type : 'post',
                    data : {
                        action : 'vast_buzz_ajax_infinite_load',
                        page: pageNumber,
                        post_type: post_type,                
                        posts_per_page: posts_per_page,
                        post_col: infiniteload.posts_col,
                        post_style: infiniteload.post_style,
                        is_excerpt: infiniteload.is_excerpt,
                        is_sharecount: infiniteload.is_sharecount,
                        is_meta: infiniteload.is_meta,
                        excerpt_limit: infiniteload.excerpt_limit,
                        post_thumb: infiniteload.post_thumb,
                        vb_fw_fp: infiniteload.vb_fw_fp,
                        clear: dataClear,
                        clearfix: dataClearfix
                    },
                    beforeSend: function() {
                        if(max_num_pages > pageNumber){
                            $('#loader').append( '<span class="infinite-loading">Post Loading ... </span>' );
                        }                                                
                    },
                    success : function( html ) {
                        jQuery('#loader .infinite-loading').remove();
                        jQuery('#main').append( html );
                        $('#loader').append( button );
                        if(max_num_pages < pageNumber){
                            jQuery('#loader').append('<div class="post-load-end">'+end_message+'</div>');
                            scrollHandling.allow = false;
                        }
                        pageNumber = pageNumber + 1;                        
                        dataClear = +dataClear + +posts_per_page;
                        loading = false;                        
                    }
                });
            };
        };        
    });
}(jQuery));
