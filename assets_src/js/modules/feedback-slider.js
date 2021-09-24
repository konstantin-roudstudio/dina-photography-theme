import Swiper, { Navigation } from 'swiper';

export default function feedbackSlider($) {
  const $feedback = $('.feedback--slider'); {
    $feedback.each(function() {
      const container = $(this).find('.swiper-container')[0];
      const $current = $(this).find('.current');
      const $total = $(this).find('.total');
      const $slides = $(this).find('.swiper-slide:not(.swiper-slide-duplicate)');
      const btnNext = $(this).find('.swiper-button-next')[0];
      const btnPrev = $(this).find('.swiper-button-prev')[0];

      Swiper.use([Navigation]);

      const swiper = new Swiper(container, {
        slidesPerView: 1,
        navigation: {
          nextEl: btnNext,
          prevEl: btnPrev,
        },
        on: {
          init: function(sw) {
            $total.text($slides.length);
            $current.text(sw.realIndex + 1)
          },
          slideChange: function(sw) {
            $current.text(sw.realIndex + 1)
          },
        },
      });
    })
  }
}
