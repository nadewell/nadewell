jQuery(document).ready(function(){
    jQuery('button.hamburger').on('click',function(){
        jQuery('.site-navbar').toggleClass('open');
        jQuery('.hamburger').toggleClass('open');
    });
})