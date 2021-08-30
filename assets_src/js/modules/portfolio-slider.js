import Swiper, { Navigation, Pagination } from 'swiper';

export default function portfolioSlider() {
  const portSlider = document.querySelectorAll('.portfolio-slider');

  for (const block of portSlider) {
    const portfolioContainer = block.querySelector('.swiper-container');

    Swiper.use([Navigation, Pagination]);

    const swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 24,
      breakpoints: {
        767: {
          slidesPerView: 3,
          /*slidesPerGroup: 2,*/
        },
        999: {
          slidesPerView: 2,    
          spaceBetween: 98,
        }
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true,
      },
    });

  }
}
