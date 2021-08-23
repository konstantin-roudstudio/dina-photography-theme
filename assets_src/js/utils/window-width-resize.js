export default function windowWidthResize() {
  let windowWidth = window.innerWidth;

  window.addEventListener('resize', () => {
    if (windowWidth === window.innerWidth) return;

    windowWidth = window.innerWidth;
    window.dispatchEvent(new CustomEvent('widthResize'));
  });
}
