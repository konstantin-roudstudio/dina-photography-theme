import { disablePageScroll, enableScroll } from '../utils/scroll';

export default function mobMenu($) {
  const $wrapper = $('.wrapper');
  const $btn = $('.menu-btn');
  const $mobMenu = $('.main-nav');
  const $hasChildren = $('.menu-item-has-children');
  let windowWidth = window.innerWidth;

  $btn.click(function(event) {
    event.preventDefault();
    // $btn.toggleClass('active');
    $wrapper.toggleClass('menu-shown');

    if ($wrapper.hasClass('menu-shown')) {
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
    const $this = $(this);
    const $link = $this.find('> a');

    $link.click(function(event) {
      event.preventDefault();
      if (window.width >= 1200) return;

      if ($this.hasClass('visible')) {
        $this.find('.sub-menu__container').hide(300);
        console.log('HIDE');
      } else {
        $this.find('.sub-menu__container').show(300);
        console.log('SHOW');
      }
      $this.toggleClass('visible');
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
