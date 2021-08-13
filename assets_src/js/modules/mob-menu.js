import {disablePageScroll, enableScroll} from '../utils/scroll'

export default function mobMenu() {
  const btn = document.querySelector('.menu-btn');
  const mobMenu = document.querySelector('.main-nav');

    btn.addEventListener('click', function(){
      btn.classList.toggle('active');
      mobMenu.classList.toggle('menu-shown');

      if (mobMenu.classList.contains('menu-shown')) {
        disablePageScroll(true);
      } else {
        enableScroll();
      }
    })
}
