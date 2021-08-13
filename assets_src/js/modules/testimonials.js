import Swiper, {Navigation, Pagination} from 'swiper';

export default function Testimonials($) {
    Swiper.use([Navigation, Pagination]);

    const swiper = new Swiper('.testimonials__items', {
        slidesPerView: 1,

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {

            768: {
                slidesPerView: 2,
                spaceBetween: 20,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

                pagination: {
                    el: ".swiper-pagination",
                }
            },

            1200: {
                slidesPerView: 2,
                spaceBetween: 45,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },

                pagination: {
                    el: ".swiper-pagination",
                }
            }
        }
    });
}
