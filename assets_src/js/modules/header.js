export default function stickyHeader($) {
  const $wrapper = $('.wrapper');
  const $subMenus = $('.sub-menu');
  let wait = false;
  let lastVal = window.scrollY;
  let actualVal = window.scrollY;
  let isFixed = false;

  function checkScroll(pos, lastPos) {
    if ($wrapper.hasClass('mobile-menu-opened')) return;

    if (pos > 10) {
      if (pos > lastPos) {
        $wrapper.removeClass('header-shown');
      } else {
        $wrapper.addClass('header-shown');
      }

      if (isFixed) return;
      $wrapper.addClass('header-fixed');
      isFixed = true;

    } else if (pos <= 10) {
      if (!isFixed) return;
      $wrapper.removeClass('header-fixed header-shown');
      isFixed = false;
    }
  }

  $subMenus.each(function () {
    const $items = $(this).find('>.menu-item');
    if ($items.length > 5) $(this).addClass('sub-menu--multiline');
  });

  document.addEventListener('scroll', function () {
    actualVal = window.scrollY;
    if (wait) return;

    checkScroll(actualVal, lastVal);
    wait = true;

    setTimeout(function () {
      wait = false;

      if (lastVal !== actualVal) {
        checkScroll(actualVal, lastVal);
      }
    }, 200);

    lastVal = actualVal;
  });

  checkScroll(actualVal, lastVal);
}
