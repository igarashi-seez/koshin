var mql = window.matchMedia('screen and (max-width: 767px)');
  function checkBreakPoint(mql) {
    if (mql.matches) {
      // スマホ向け（767px以下のとき）
      $('.js-flowBox__slider').not('.slick-initialized').slick({
        //スライドさせる
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        arrows: true,
        appendDots: $('.js-sliderIndex'),
        dots: true,
        customPaging: function(slider, i) {
          return $('<button type="button" />').text(`0${i + 1}`);
        },
        prevArrow: '<button type="button" class="js-sliderArrow wk-sliderArrow wk-sliderArrow--prev"></button>',
        nextArrow: '<button type="button" class="js-sliderArrow wk-sliderArrow wk-sliderArrow--next"></button>',
      });
    } else {
      // PC向け
      $('.js-flowBox__slider.slick-initialized').slick('unslick');
    }
  }

  // ブレイクポイントの瞬間に発火
  mql.addListener(checkBreakPoint);

  // 初回チェック
  checkBreakPoint(mql);

  $('.js-sliderIndex').on('click', function() {
    var currentSlide = $('.js-flowBox__slider').slick('slickCurrentSlide');
    if ( currentSlide > 3) {
      $('.wk-sliderArrow').addClass('wk-sliderArrow--black');
    } else {
      $('.wk-sliderArrow').removeClass('wk-sliderArrow--black');
    }
  });

  $('.js-sliderArrow').on('click', function() {
    var currentSlide = $('.js-flowBox__slider').slick('slickCurrentSlide');
    if ( currentSlide > 3) {
      $('.wk-sliderArrow').addClass('wk-sliderArrow--black');
    } else {
      $('.wk-sliderArrow').removeClass('wk-sliderArrow--black');
    }
  });