$(document).ready(function() {

/* --- SCROLL TO NAVIGATION --- */
    $('#scrollToTop').click(function() {
        $('html, body').animate({
            scrollTop: $("header").offset().top
        }, 1000);
    });
    $('.toHome').click(function() {
        $('html, body').animate({
            scrollTop: $("header").offset().top
        }, 1000);
    });
    $('.toServices, .banner-btn').click(function() {
        $('html, body').animate({
            scrollTop: $("#services").offset().top
        }, 1000);
    });
    $('.toPortfolio').click(function() {
        $('html, body').animate({
            scrollTop: $("#portfolioTop").offset().top
        }, 1000);
    });
    $('.toAbout').click(function() {
        $('html, body').animate({
            scrollTop: $("#about").offset().top
        }, 1000);
    });
    $('.toContact').click(function() {
        $('html, body').animate({
            scrollTop: $("#contact").offset().top
        }, 1000);
    });
    
/* --- HEADER EFFECT --- */
    window.onscroll = function() {stickyNav()};
    var navbar = document.getElementById("navpos");
    var fixed = navbar.offsetTop;
    var topFix = document.getElementById("top-fix");
    var fixMobile = document.getElementById("menu-fix")
    function stickyNav() {
      if (window.pageYOffset >= fixed) {
        navbar.classList.add("fixed");
        topFix.classList.add("fix-margin");
        fixMobile.classList.add("menu-margin-fix");
      } else {
        navbar.classList.remove("fixed");
        topFix.classList.remove("fix-margin");
        fixMobile.classList.remove("menu-margin-fix");
      }
    }
    
/* --- MOBILE MENU --- */
    $('#toggle-menu, li a').click(function(){
        $('nav').toggleClass('active');
        $('nav ul li').toggleClass('visible');
    });

/* --- FANCYBOX GALLERY SCRIPT --- */
    
    // http://localhost/lukas-html
    $('#gallery1').click(function(){
        $.fancybox.open([
            {
                src  : 'https://hedragris.github.io/VCS-projektas/images/gallery/gal01-01.jpg',
                opts : {caption : 'First caption'}
            },
            {
                src  : 'https://hedragris.github.io/VCS-projektas/images/gallery/gal02-02.jpg',
                opts : {caption : 'Second caption'}
            },
        ], 
        {
            loop: true,
            buttons: [
                "close",
            ],
            protect: true,
            animationEffect: "zoom",
            transitionEffect: "slide",
            animationDuration: 600    
        });
    });
    $('#gallery2').click(function(){
        $.fancybox.open([
            {
                src  : 'https://hedragris.github.io/VCS-projektas/images/gallery/gal02-01.jpg',
                opts : {caption : 'First caption'}
            },
            {
                src  : 'https://hedragris.github.io/VCS-projektas/images/gallery/gal02-02.jpg',
                opts : {caption : 'Second caption'}
            },
        ], 
        {
            loop: true,
            buttons: [
                "close",
            ],
            protect: true,
            animationEffect: "zoom",
            transitionEffect: "slide",
            animationDuration: 600    
        });
    });
    $('#gallery3').click(function(){
        $.fancybox.open([
            {
                src  : 'https://hedragris.github.io/VCS-projektas/images/gallery/gal03-01.jpg',
                opts : {caption : 'First caption'}
            },
            {
                src  : 'https://hedragris.github.io/VCS-projektas/images/gallery/gal03-02.jpg',
                opts : {caption : 'Second caption'}
            },
        ], 
        {
            loop: true,
            buttons: [
                "close",
            ],
            protect: true,
            animationEffect: "zoom",
            transitionEffect: "slide",
            animationDuration: 600    
        });
    });
    $('#gallery4').click(function(){
        $.fancybox.open([
            {
                src  : 'https://hedragris.github.io/VCS-projektas/images/gallery/gal04-01.jpg',
                opts : {caption : 'First caption'}
            },
            {
                src  : 'https://hedragris.github.io/VCS-projektas/images/gallery/gal04-02.jpg',
                opts : {caption : 'Second caption'}
            },
        ], 
        {
            loop: true,
            buttons: [
                "close",
            ],
            protect: true,
            animationEffect: "zoom",
            transitionEffect: "slide",
            animationDuration: 600    
        });
    });
    $('#gallery5').click(function(){
        $.fancybox.open([
            {
                src  : 'https://hedragris.github.io/VCS-projektas/images/gallery/gal05-01.jpg',
                opts : {caption : 'First caption'}
            },
            {
                src  : 'https://hedragris.github.io/VCS-projektas/images/gallery/gal05-02.jpg',
                opts : {caption : 'Second caption'}
            },
        ], 
        {
            loop: true,
            buttons: [
                "close",
            ],
            protect: true,
            animationEffect: "zoom",
            transitionEffect: "slide",
            animationDuration: 600    
        });
    });
    $('#gallery6').click(function(){
        $.fancybox.open([
            {
                src  : 'https://hedragris.github.io/VCS-projektas/images/gallery/gal06-01.jpg',
                opts : {caption : 'First caption'}
            },
            {
                src  : 'https://hedragris.github.io/VCS-projektas/images/gallery/gal06-02.jpg',
                opts : {caption : 'Second caption'}
            },
        ], 
        {
            loop: true,
            buttons: [
                "close",
            ],
            protect: true,
            animationEffect: "zoom",
            transitionEffect: "slide",
            animationDuration: 600    
        });
    });
});