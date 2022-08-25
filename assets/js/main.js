document.addEventListener("DOMContentLoaded", () => {

  // document ready init
  $(document).ready(function() {
    new WOW().init()
    $('select').niceSelect();
    $('.menu-btn').click(function (e) {
      $(this).toggleClass('active');
      $('.menu-sidebar').toggleClass('active');
      $('body').toggleClass('no-scroll');
    });
  });

  // select on change
  $('.state').change(function(){
    let state_id = $(this).val()
    $('.cat_locations').css('display', 'none')
    $('#loc_cat_' + state_id).next().css('display', 'block')
  })
  $('.cat_locations').change(function(){
    let loc_url = $(this).val()
    $('.loc_link').attr('href', loc_url)
  })



  // FAQ accordeon
  $('.faq-item__title').click(function() {
    $('.faq-item__text').removeClass('active')
    $(this).next().addClass('active')
  })



  // smuth scroll
  let $page = $('html, body');
  $('a[href*="#"]').click(function() {
      $page.animate({
          scrollTop: $($.attr(this, 'href')).offset().top
      }, 400);
      return false;
  });



  // OPEN WIDGET
  $('.open-widget').click( function () {
    $('.widget_wrap').fadeIn()
    $('body').addClass('no-scroll')
  })

  // step 1 to 2
  $('.state_item').click( function() {

    let target = $(this).data('state')
    $('.states, .locations, .point, .step_title').removeClass('active')
    $('.step_title:nth-child(2)').addClass('active')
    $('.point:nth-child(2)').addClass('active')
    $('[id='+target+']').addClass('active')

  })

  // step 2 to 3
  $('.location_item').click( function() {

    $('.location_item').addClass('hidden')
    $(this).children('h2').addClass('hidden')
    $(this).addClass('active')
    $(this).children('.loc_offers').addClass('active')
    $('.point, .step_title').removeClass('active')
    $('.step_title:nth-child(3)').addClass('active')
    $('.point:last-child').addClass('active')

  })

  // back to 1 step
  $('.back').click( function() {

    $('.locations, .point, .location_item, .loc_offers').removeClass('active')
    $('.location_item').children('h2').removeClass('hidden')
    $('.location_item').removeClass('hidden')
    $('.point:first-child').addClass('active')
    $('.states').addClass('active')

  })

  // close widget
  $('.close_btn').click( function() {

    $('body').removeClass('no-scroll')
    $('.widget_wrap').fadeOut()

  })

  // by window click
  jQuery(function($){
    $(document).mouseup(function (e){
      if (!$(".widget").is(e.target) &&
        $('.widget_wrap').has(e.target).length === 0) {
        $('.widget_wrap').fadeOut();
        $('body').removeClass('no-scroll')
      }
    });
  });

})