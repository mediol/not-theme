$('.companies__slider').slick({
    mobileFirst: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    autoplay: true,
    infinite: true,
    dots: true,
    speed: 1500,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
        }
      }
    ]
});

$('.companies__list').slick({
    cssEase: 'linear',
    speed: 3000,
    autoplay: true,
    autoplaySpeed: 0,
    infinite: true,
    centerMode: true,
    variableWidth: true,
    arrows: false,
    dots: false,
});