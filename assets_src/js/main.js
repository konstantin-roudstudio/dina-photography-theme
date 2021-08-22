import 'regenerator-runtime/runtime.js';
import animations from './utils/animations';
import fixVhOnResize from './utils/fixVhOnResize';
import testimonials from './modules/testimonials'
import mobMenu from './modules/mob-menu';
import windowWidthResize from './utils/windowWidthResize';
import stickyHeader from './modules/header';
/*import disablePageScroll from './utils/scroll';*/


(function ($) {
  const initMethods = [
    // fixVhOnResize,
    windowWidthResize,
    testimonials,
    animations,
    /*disablePageScroll,*/
    mobMenu,
    stickyHeader
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
