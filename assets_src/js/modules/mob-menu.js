import { disablePageScroll, enableScroll } from '../utils/scroll'

export default function mobMenu() {
  const btn = document.querySelector('.menu-btn');
  const mobMenu = document.querySelector('.main-nav');
  const hasChildren = document.querySelectorAll('.menu-item-has-children');
  const subMenu = document.querySelectorAll('.sub-menu');

  btn.addEventListener('click', function() {
    btn.classList.toggle('active');
    mobMenu.classList.toggle('menu-shown');

    if (mobMenu.classList.contains('menu-shown')) {
      disablePageScroll(true);
    } else {
      enableScroll();
    }
  })

  for (let i = 0; i < hasChildren.length; i++) {
    hasChildren[i].addEventListener('click', function() {
      subMenu[i].closest('.sub-menu__container').classList.toggle('visible');
      hasChildren[i].classList.toggle('rotate');
    })
  }
}
