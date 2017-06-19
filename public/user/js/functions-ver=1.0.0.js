

(function($){

/*    'use strict';
    jQuery(window).load(function() {
        jQuery('.massonry-post-area').isotope({
            itemSelector: '.massonry-post-item',
            percentPosition: true,
            masonry: {
              columnWidth: '.massonry-post-sizer',
              gutter: 30
            }
        });
        jQuery('.massonry-image-post-area').isotope({
            itemSelector: '.image-post',
            percentPosition: true,            
        });
    });*/




    // sticky sider bar
    $(document).ready(function() {


$(".loggedbtn").click(function()
{
    document.getElementById("myLogged").classList.toggle("show");
});


$(window).click(function(event)
{


    if (event.target.id != 'loggedbtni') {
        var dropdowns = document.getElementsByClassName("logged-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
    }
});



        jQuery(".menu-toggle").click(function() {  
            jQuery('body').addClass("open-mobile-menu");      
          });
          jQuery(".mobile-menu-close").click(function() {  
            jQuery('body').removeClass("open-mobile-menu");      
        });

        var $iW = jQuery(window).innerWidth();
        if ($iW <= 990){
           jQuery('.main-content-v3').insertBefore('.sidebar-left');
           jQuery('.main-content-v3').insertBefore('sidebar-style3');           
        }
        if ( $iW <= 980 && $iW >= 760) {
            $('.three-col-post').each(function(){  
                var highestBox = 0;
                $(this).find('.post-col').each(function(){
                    if($(this).height() > highestBox){  
                        highestBox = $(this).height();  
                    }
                });
                $(this).find('.post-col').height(highestBox);
            }); 
        }
        jQuery(".ps-button.go-login").click(function() {
            $('#create-post-modal').modal('hide');
            setTimeout(function () {
                $('#loginModal').modal('show');
                $('#loginModal').css('padding-right','17px');
            }, 500);                                    
        });
    });
}(jQuery));










