import Swiper, { Navigation, Lazy } from 'swiper';

export default function feedbackSlider($) {
  const $feedback = $('.feedback--slider');
  // if ($feedback.empty()) return;
  $feedback.each(function () {
    const container = $(this).find('.swiper')[0];
    const $current = $(this).find('.current');
    const $total = $(this).find('.total');
    const $slides = $(this).find('.swiper-slide:not(.swiper-slide-duplicate)');
    const btnNext = $(this).find('.swiper-button-next')[0];
    const btnPrev = $(this).find('.swiper-button-prev')[0];

    Swiper.use([Navigation, Lazy]);

    const swiper = new Swiper(container, {
      slidesPerView: 1,
      preloadImages: false,
      lazy: {
        loadPrevNext: true,
      },
      navigation: {
        nextEl: btnNext,
        prevEl: btnPrev,
      },
      on: {
        init: function (sw) {
          $total.text($slides.length);
          $current.text(sw.realIndex + 1);
        },
        slideChange: function (sw) {
          $current.text(sw.realIndex + 1);
        },
      },
    });
  });
}
