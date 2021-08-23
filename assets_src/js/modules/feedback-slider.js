import Swiper, { Navigation } from 'swiper';

export default function feedbackSlider($) {
  /*const hero = document.querySelectorAll('.hero-slider'); {
    for (const block of hero) {
      let slide = block.querySelectorAll('.swiper-slide');
      let sliderNumCurrent = block.querySelector('.current');
      let sliderNumTotal = block.querySelector('.total');
    }
  }*/
  Swiper.use([Navigation]);

  const swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    on: {
      init: function(sw) {
        $('.total').text($('.swiper-slide:not(.swiper-slide-duplicate)').length)
        $('.current').text(sw.realIndex + 1)
      },
      slideChange: function(sw) {
        $('.current').text(sw.realIndex + 1)
      },
    },
  });


}
