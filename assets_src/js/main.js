import 'regenerator-runtime/runtime';
import mobMenu from './modules/mob-menu';
import stickyHeader from './modules/header';
import portfolioSlider from './modules/portfolio-slider';
import blogSlider from './modules/blog-slider';
import heroSlider from './modules/hero-slider';
import form from './modules/form';
import feedbackSlider from './modules/feedback-slider';
import animations from './modules/animations';
import feedback from './modules/feedback';
import faq from './modules/faq';
/*import disablePageScroll from './utils/scroll';*/

(function ($) {
  const initMethods = [
    /*disablePageScroll,*/
    feedbackSlider,
    mobMenu,
    stickyHeader,
    heroSlider,
    portfolioSlider,
    blogSlider,
    form,
    animations,
    feedback,
    faq
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
