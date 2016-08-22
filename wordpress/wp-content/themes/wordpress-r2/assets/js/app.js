//Footer Bot Fixed
$(window).on("load", function(){
    diferenca = $( window ).height() - $("#content").offset().top - $("#footer").height();
    $("#content").css("min-height", diferenca);
});

//Loading
$(window).on("load", function() {
    // weave your magic here.
    $(".loading").fadeOut("slow");
    $("body").addClass("loaded");
});

// Menu Active
$(document).ready(function(){
    $('a').each(function(index) {
        if(this.href.trim() == window.location)
            $(this).addClass("active");
    });
});

//Sub menu open on click (Mobile)
$(".menu-item-has-children").click(function(){
    if(!$(this).hasClass("opened")) {
        $(this).addClass("opened");
    } else {
        $(this).removeClass("opened");
    }
});

//Scroll Fluid to #div
$('a[href^="#"]').on('click',function (e) {
    e.preventDefault();

    var target = this.hash,
    $target = $(target);

    // Adiciona Data ao Body pra dizer qual menu está ativo (ONE PAGE)
    // $("body").attr("data-active",target.replace('#',''));

    $('html, body').stop().animate({
        'scrollTop': $target.offset().top
    }, 900, 'swing', function () {
        window.location.hash = target;
    });
});

// Animate on Scroll
$(document).ready(function() {
    $('.animate').addClass('animate-onload');
});
$(document).click(function() {
    $('.animate').addClass('animate-onclick');
});
$(window).scroll(function(d,h) {
    var janela = this;
    var screenHeight = $( window ).height();
    $('.animate').each(function(i) {
        if (jQuery(janela).scrollTop() >= ($(this).offset().top) - (screenHeight/100)*100 ) {
            $(this).addClass('animate-onscroll');
        }
    });
});

// Gmaps Scroll Fix
$('.map-fix').click(function() {
    $(this).css('display','none');
});

// Replace all SVG images with inline SVG
jQuery('img.svg').each(function(){
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');
    jQuery.get(imgURL, function(data) {
        var $svg = jQuery(data).find('svg');
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }
        $svg = $svg.removeAttr('xmlns:a');
        $img.replaceWith($svg);
    }, 'xml');
});

// Preload Images
// function preload(arrayOfImages) {
//     $(arrayOfImages).each(function(){
//         $('<img/>')[0].src = this;
//     });
// }
// preload([
//     'img1.jpg',
//     'img2.jpg'
// ]);

// SVG Fix
// if (!Modernizr.svg) {
//     $('img[src$=".svg"]').each(function() {
//         $(this).attr('src', $(this).attr('src').replace('.svg', '.png'));
//     });
// }
