jQuery(document).ready(function(){
    jQuery('.hamburger.navbar-toggle').on('click',function(){
        jQuery('.site-navbar').toggleClass('open');
        jQuery(this).toggleClass('open');
    });

    jQuery(window).on( 'scroll', function(){
        console.log(jQuery(this).scrollTop());
        console.log(jQuery('.site-header').outerHeight() + 100);
        if( jQuery(this).scrollTop() > jQuery('.site-header').outerHeight() + 100 ){
            jQuery('.site-header').addClass('header-fixed'); 
        }
        if( jQuery(this).scrollTop() < jQuery('.site-header').outerHeight() + 100 ){
            jQuery('.site-header').removeClass('header-fixed');
        }
    } );
})