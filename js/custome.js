$('.team-text-left').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.team-left'
  });
  $('.team-left').slick({
    slidesToShow: 3,
    vertical: true,
    slidesToScroll: 1,
    asNavFor: '.team-text-left',
    dots: true,
    focusOnSelect: true
  });