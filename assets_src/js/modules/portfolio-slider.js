import Swiper, { Navigation, Pagination } from 'swiper';

export default function portfolioSlider() {

  Swiper.use([Navigation, Pagination]);

  const swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
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