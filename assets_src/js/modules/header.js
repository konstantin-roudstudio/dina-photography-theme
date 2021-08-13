export default function stickyHeader($) {
    const $wrapper = $('.wrapper');
    let wait = false;
    let lastVal = window.scrollY;
    let actualVal = window.scrollY;
    let isFixed = false;

    function checkScroll(pos) {
        if ($wrapper.hasClass('mobile-menu-opened')) return;

        if (pos > 10) {
            if (isFixed) return;
            $wrapper.addClass('header-fixed');
            isFixed = true;
        } else if (pos <= 10) {
            if (!isFixed) return;
            $wrapper.removeClass('header-fixed');
            isFixed = false;
        }
    }

    document.addEventListener('scroll', function () {
        actualVal = window.scrollY;
        if (wait) return;

        checkScroll(actualVal, lastVal);
        wait = true;

        setTimeout(function () {
            wait = false;

            if (lastVal !== actualVal) {
                checkScroll(actualVal);
            }
        }, 200);

        lastVal = actualVal;
    });
}
