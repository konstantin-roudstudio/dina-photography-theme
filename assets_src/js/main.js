import 'regenerator-runtime/runtime.js';
// import animations from './utils/animations';
import fixVhOnResize from './utils/fixVhOnResize';
import mobMenu from './modules/mob-menu';
import stickyHeader from './modules/header';
import heroSlider from './modules/hero-slider'
/*import disablePageScroll from './utils/scroll';*/


(function ($) {
  const initMethods = [
    fixVhOnResize,
    windowWidthResize,
    // animations,
    /*disablePageScroll,*/
    mobMenu,
    stickyHeader,
    heroSlider
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
