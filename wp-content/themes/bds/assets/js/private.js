
$(document).ready(function(){

    $('.clc-scroll').click(function(e){
      e.preventDefault();
      $('.btn-bar-menu a').click();
      var target = $($(this).attr('href'));
      if(target.length){
        var scrollTo = target.offset().top - 50;
        $('body, html').animate({scrollTop: scrollTo+'px'}, 800);
      }
      $('.clc-scroll').removeClass("active");
      $(this).addClass("active");
    });

    setTimeout(function(){
      $('.clc-popup-time').click();
    }, 1500); 
 
	$('.slide-banner').slick({
        autoplay:true,
        arrow:true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        prevArrow: '', 
        nextArrow: '', 

    });
	$('.slide-for').slick({ 
        autoplay:true,
        arrow:false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        prevArrow: '', 
        nextArrow: '', 
        asNavFor: '.slide-nav',
    });
	$('.slide-nav').slick({
        autoplay:true,
        arrow:false,
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        prevArrow: '', 
        nextArrow: '', 
        asNavFor: '.slide-for',
        focusOnSelect: true,
    });

	$('.slide-rooms').slick({
        autoplay:true,
        arrow:false,
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        prevArrow: '', 
        nextArrow: '', 
        responsive: [
            {
                breakpoint: 1023, 
                settings: {
                    slidesToShow: 2,
                    infinite: true,
                } 
            },
            {
                breakpoint: 768,
                settings: { 
                    slidesToShow: 2,
                    infinite: true,
                }
            },
            { 
                breakpoint: 575, 
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }
        ],
    });

    $('.btn-bar-menu a').click(function(event) {
        $(this).toggleClass('active');
        $('body, .nav-menu').toggleClass('open_nav');
    });
})