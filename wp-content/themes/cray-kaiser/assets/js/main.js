jQuery(document).ready(function($){

  /* START Subpixel Rounding Error Design Fixes */

  // About Parent Menu Item
  if ( $('.menu-about-parent').hasClass('current-menu-item') ) {
    $('.main-navigation').css('background', '#CC9935');
  }

  if ( $('.menu-about-parent').hasClass('current_page_item') ) {
    $('.main-navigation').css('background', '#CC9935');
  }

  $('.menu-about-parent').hover(
    function(){ $('.main-navigation').css('background', '#CC9935') },
    function(){ $('.main-navigation').css('background', '#DDE0E8') }
  );

  // Services Sub-Nav Menu Item  
  $('.menu-services.last').hover(
       function(){ $(this).closest('.sub-menu').css('background', '#CC9935') },
       function(){ $(this).closest('.sub-menu').css('background', 'transparent') }
  );
  $('.menu-services.current_page_item.last').hover(
       function(){ $(this).closest('.sub-menu').css('background', '#CC9935') },
       function(){ $(this).closest('.sub-menu').css('background', '#CC9935') }
  );
  $('.menu-services.current_page_item.last').closest('.sub-menu').css('background', '#CC9935');

  // Family Business Services Sub-Nav Menu Item  
  $('.menu-family.last').hover(
       function(){ $(this).closest('.sub-menu').css('background', '#334b97') },
       function(){ $(this).closest('.sub-menu').css('background', 'transparent') }
  );
  $('.menu-family.current_page_item.last').hover(
       function(){ $(this).closest('.sub-menu').css('background', '#334b97') },
       function(){ $(this).closest('.sub-menu').css('background', '#334b97') }
  );
  $('.menu-family.current_page_item.last').closest('.sub-menu').css('background', '#334b97');

  
  // Resources Sub-Nav Menu Item  
  $('.menu-resources.last').hover(
       function(){ $(this).closest('.sub-menu').css('background', '#578575') },
       function(){ $(this).closest('.sub-menu').css('background', 'transparent') }
  );
  $('.menu-resources.current_page_item.last').hover(
       function(){ $(this).closest('.sub-menu').css('background', '#578575') },
       function(){ $(this).closest('.sub-menu').css('background', '#578575') }
  );
  $('.menu-resources.current_page_item.last').closest('.sub-menu').css('background', '#578575');


  // About Sub-Nav Menu Item  
  $('.menu-about.last').hover(
       function(){ $(this).closest('.sub-menu').css('background', '#CC9935') },
       function(){ $(this).closest('.sub-menu').css('background', 'transparent') }
  );
  $('.menu-about.current_page_item.last').hover(
       function(){ $(this).closest('.sub-menu').css('background', '#CC9935') },
       function(){ $(this).closest('.sub-menu').css('background', '#CC9935') }
  );
  $('.menu-about.current_page_item.last').closest('.sub-menu').css('background', '#CC9935');

  /* END Subpixel Rounding Error Design Fixes */

});