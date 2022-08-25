let options = {
    root: null,
    rootMargin: '5px',
    threshold: 0.5
}

let observer = new IntersectionObserver(function (entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        $('.what .animated').addClass('active')
      }
    })
}, options);
let target = document.querySelector('.home .what')
observer.observe(target);

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