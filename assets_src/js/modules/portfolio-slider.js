import Swiper, { Navigation, Pagination } from 'swiper';

export default function portfolioSlider($) {
  const $portSlider = $('.portfolio-slider');

  $portSlider.each(function () {
    const container = $(this).find('.swiper-container')[0];
    const btnNext = $(this).find('.swiper-button-next')[0];
    const btnPrev = $(this).find('.swiper-button-prev')[0];
    const pagination = $(this).find('.swiper-pagination')[0];

    Swiper.use([Navigation, Pagination]);

    const swiper = new Swiper(container, {
      slidesPerView: 1,
      spaceBetween: 24,
      loop: true,
      threshold: 5,
      breakpoints: {
        768: {
          spaceBetween: 60,
        },
        999: {
          slidesPerView: 2,
          spaceBetween: 60,
        },
        1200: {
          slidesPerView: 2,
          spaceBetween: 98,
        }
      },
      navigation: {
        nextEl: btnNext,
        prevEl: btnPrev,
      },
      pagination: {
        el: pagination,
        type: 'bullets',
        clickable: true,
      },
    });

    // $(container)
    //     .on('click', '.swiper-button-prev', function() {
    //       swiper.slidePrev();
    //     })
    //     .on('click', '.swiper-button-next', function() {
    //       swiper.slideNext();
    //     });

  });
}
