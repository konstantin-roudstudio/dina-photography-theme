import Swiper, { Navigation, Pagination } from 'swiper';

export default function portfolioSlider() {

  Swiper.use([Navigation, Pagination]);

  const swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    breakpoints: {
        767: {
          slidesPerView: 2,
        },
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