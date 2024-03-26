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

    gsap.to(".circle1", {
        duration:2.5,
        ease: "none",
        y: -250,
        scrollTrigger: {
            trigger: ".trigger-circle",
            scrub: 1,
        }, 
    });
    gsap.to(".circle2", {
        duration:2.5,
        ease: "none",
        y: -80,
        scrollTrigger: {
            trigger: ".trigger-circle",
            scrub: 1,
        }, 
    });
    gsap.to(".circle3", {
        duration:2.5,
        ease: "none",
        y: -350,
        scrollTrigger: {
            trigger: ".trigger-circle",
            scrub: 1,
        }, 
    });
    gsap.to(".circle4", {
        duration:2.5,
        ease: "none",
        y: -60,
        scrollTrigger: {
            trigger: ".trigger-circle",
            scrub: 1,
        }, 
    });


    // Header hero carousel
    jQuery('.owl-for-who').owlCarousel({
        loop:false,
        margin:16,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:2
            },
            768:{
                items:2
            },
            1000:{
                items:2
            }
        }
    })

    // Testimonials carousel
    jQuery('.owl-testimonials').owlCarousel({
        loop:false,
        margin:16,
        nav:false,
        dots:true,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:1
            },
            1000:{
                items:2
            }
        }
    })

    // FAQ Carousel
    jQuery('.openText').on('click', function(){
        jQuery('.openContent').addClass('invisible')
        jQuery('.openContent').removeClass('visible')
        jQuery('.openContent').prev('a').removeClass('text-primary')

        let thisId = jQuery(this).attr('id')
        
        jQuery('.openContent' + thisId).removeClass('invisible')
        jQuery('.openContent' + thisId).addClass('visible')
        jQuery('.openContent' + thisId).prev('a').addClass('text-primary')
    })
});
