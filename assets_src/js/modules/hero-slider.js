import Swiper, {Navigation} from 'swiper';

export default function heroSlider($) {
    Swiper.use([Navigation]);

    const swiper = new Swiper('.hero-slider .swiper-container', {
        slidesPerView: 1,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
    });
}
