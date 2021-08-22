import { disablePageScroll, enableScroll } from '../utils/scroll'

export default function mobMenu($) {
  const $btn = $('.menu-btn');
  const $mobMenu = $('.main-nav');
  const $hasChildren = $('.menu-item-has-children');

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

  $('.sub-menu__container').hide();

  $hasChildren.each(function() {
    $(this).click(function(event) {
      event.preventDefault();
      if (window.width > 1200) return;

      if ($(this).hasClass('visible')) {
        $(this).find('.sub-menu__container').hide(300);
      } else {
        $(this).find('.sub-menu__container').show(300);
      }
      $(this).toggleClass('visible');
    })
  })
}
