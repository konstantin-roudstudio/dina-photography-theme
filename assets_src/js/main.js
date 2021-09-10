import 'regenerator-runtime/runtime.js';
// import animations from './utils/animations';
import mobMenu from './modules/mob-menu';
import stickyHeader from './modules/header';
import portfolioSlider from './modules/portfolio-slider';
import heroSlider from './modules/hero-slider'
import blogSlider from './modules/blog-slider'
import heroSlider from './modules/hero-slider';
import form from './modules/form';
/*import disablePageScroll from './utils/scroll';*/


(function ($) {
  const initMethods = [
    // animations,
    /*disablePageScroll,*/
    mobMenu,
    stickyHeader,
    heroSlider,
    portfolioSlider,
    blogSlider
    form
  ];

  $(() => {
    requestAnimationFrame(() => {
      for (let i = 0; i < initMethods.length; i += 1) {
        try {
          initMethods[i]($);
        } catch (error) {
          console.error(error);
        }
      }
    });
  });
}(window.jQuery));
