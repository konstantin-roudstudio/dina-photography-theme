import { disablePageScroll, enableScroll } from '../utils/scroll';

export default function mobMenu($) {
  const $btn = $('.menu-btn');
  const $mobMenu = $('.main-nav');
  const $hasChildren = $('.menu-item-has-children');
  let windowWidth = window.innerWidth;

  $btn.click(function(event) {
    event.preventDefault();
    $btn.toggleClass('active');
    $mobMenu.toggleClass('menu-shown');

    if ($mobMenu.hasClass('menu-shown')) {
      disablePageScroll(true);
    } else {
      enableScroll();

      setTimeout(function () {
        $('.sub-menu__container').hide();
        $hasChildren.removeClass('visible');
      }, 500)
    }
  });

  $hasChildren.each(function() {
    $(this).click(function(event) {
      event.preventDefault();
      if (window.width >= 1200) return;

      if ($(this).hasClass('visible')) {
        $(this).find('.sub-menu__container').hide(300);
      } else {
        $(this).find('.sub-menu__container').show(300);
      }
      $(this).toggleClass('visible');
    })
  });

  $(window).resize(function () {
    if (windowWidth === window.innerWidth) return;

    if (window.innerWidth >= 1200) {
      $('.sub-menu__container').show(0);
    } else {
      $('.sub-menu__container').hide(0);
    }

    windowWidth = window.innerWidth;
  });

  if (window.innerWidth >= 1200) return;
  $('.sub-menu__container').hide(0);
}
