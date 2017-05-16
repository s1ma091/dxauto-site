$(document).ready(function(){
  $('.response-slider-wrap').slick({
    appendArrows: $('.response-slider-wrap'),
    prevArrow: '<div class="slide-prev slider-btn"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
    nextArrow: '<div class="slide-next slider-btn"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    responsive: [
      {
        breakpoint: 920,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          dots: true,
          arrows: false
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          arrows: false
        }
      }
    ]
  });



  $('.order-call--input').mask("Введіть Ваш номер телефону (999) 999-99-99");

  $('nav').on('click', function(){
      $('nav').toggleClass('extended');
  });

  $('.design-slider').slick({
    appendArrows: $('.design-slider'),
    prevArrow: '<div class="slide-prev slider-btn"><i class="fa fa-angle-left" aria-hidden="true"></i></div>',
    nextArrow: '<div class="slide-next slider-btn"><i class="fa fa-angle-right" aria-hidden="true"></i></div>',
    slidesToShow: 5,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          slidesToShow: 1
        }
      }
    ]
  });

  $('.design-slider').on('afterChange', function() {
    $('.slick-active').eq(0).css("transform","scale(0.7)");
    $('.slick-active').eq(1).css("transform","scale(0.9)");
    $('.slick-active').eq(2).css("transform","scale(1)");
    $('.slick-active').eq(3).css("transform","scale(0.9)");
    $('.slick-active').eq(4).css("transform","scale(0.7)");
  });

  $('.design-slider').on('beforeChange', function() {

    $('.slick-active').css("transform","scale(0.7)");
  });




    $('.design-slider .slick-active').eq(0).css("transform","scale(0.7)");
    $('.design-slider .slick-active').eq(1).css("transform","scale(0.9)");
    $('.design-slider .slick-active').eq(2).css("transform","scale(1)");
    $('.design-slider .slick-active').eq(3).css("transform","scale(0.9)");
    $('.design-slider .slick-active').eq(4).css("transform","scale(0.7)");








});

