jQuery(document).ready(function(){

    // Background noise animation
    function bgNoise() {
        var e = document.querySelector("#bg-noise")
        , t = gsap.timeline({
            repeat: -1
        });
        gsap.set(e, {
            yPercent: -50,
            xPercent: -50
        }),
        t.to(e, {
            x: "10vw",
            y: "-10vh",
            duration: .01,
            ease: "linear"
        }),
        t.to(e, {
            x: "1vw",
            y: "9vh",
            duration: .01,
            ease: "linear"
        }),
        t.to(e, {
            x: "-9vw",
            y: "-6vh",
            duration: .01,
            ease: "linear"
        }),
        t.to(e, {
            x: "8vw",
            y: "10vh",
            duration: .01,
            ease: "linear"
        })
    }
    bgNoise();

    new WOW().init();

    // Para <img>:
    HTMLImageElement.prototype.hasOwnProperty('loading');

    // Para <iframe>:
    HTMLIFrameElement.prototype.hasOwnProperty('loading');
   
    // Scroll to section
    jQuery('.scroll-to-section').on('click', function (e) {
        e.preventDefault();
        var target = jQuery(this).attr('href');

        jQuery('html, body').animate({
            scrollTop: jQuery(target).offset().top - 80
        });
    });

    gsap.to(".dolar", {
        duration:1.5,
        ease: "none",
        y: -300,
        scrollTrigger: {
            trigger: ".trigger-dolar",
            scrub: 1,
        }, 
    });

    // FAQ accordion
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