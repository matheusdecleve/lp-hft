jQuery(document).ready(function(){

    new WOW().init();

    // Navbar 
    jQuery('.mainNavbar__hamburguer').on('click', function(){
        jQuery('.mainNavbar__nav--mobile').toggleClass('opened');
    })
    jQuery('.mainNavbar__nav--mobile li').on('click', function(){
        jQuery('.mainNavbar__nav--mobile').toggleClass('opened');
    })
    
    // Scroll to section
    jQuery('.scroll-to-section').on('click', function (e) {
        e.preventDefault();
        var navbarSelector = jQuery('.navbar');
        var target = jQuery(this).attr('href');

        jQuery('html, body').animate({
            scrollTop: jQuery(target).offset().top - 80
        });
    });

    // Header hero carousel
    jQuery('.owl-header-hero').owlCarousel({
        loop:false,
        margin:0,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

});

