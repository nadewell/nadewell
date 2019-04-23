jQuery(document).ready(function(){
    jQuery('.hamburger.navbar-toggle').on('click',function(){
        jQuery('.site-navbar').toggleClass('open');
        jQuery(this).toggleClass('open');
    });
})