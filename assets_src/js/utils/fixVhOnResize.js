import throttle from 'lodash/throttle';

let windowHeight = window.innerHeight;
let windowWidth = window.innerWidth;

export default function fixVhOnResize() {
  window.addEventListener('resize', throttle(() => {
    if (Math.abs(window.innerHeight - windowHeight) < 100 && windowWidth === window.innerWidth) return;
    windowHeight = window.innerHeight;
    windowWidth = window.innerWidth;
    window.fixVh();
  }, 200));
}
