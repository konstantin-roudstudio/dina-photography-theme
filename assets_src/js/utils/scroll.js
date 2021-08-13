let scrollDisabled = false;
let scrollTop;

export function disablePageScroll(keepScrollPosition = false) {
  if (scrollDisabled) return;
  scrollDisabled = true;
  scrollTop = keepScrollPosition ? document.scrollingElement.scrollTop : null;
  const scrollbarWidth = window.innerWidth - document.documentElement.offsetWidth;
  document.documentElement.style.cssText = `height: 100%; overflow: hidden; position: fixed; width: calc(100% - ${scrollbarWidth}px);`;
  document.documentElement.classList.add('scroll-disabled');
  document.body.style.cssText = 'height: 100%; overflow: hidden;';
  document.querySelector('.root').style.cssText = 'height: 100%; overflow: hidden;';
  if (keepScrollPosition) {
    console.log('ok');
    document.querySelector('.root').scrollTop = scrollTop;
  }
}

export function enableScroll() {
  if (!scrollDisabled) return;
  scrollDisabled = false;
  document.documentElement.style.cssText = '';
  document.documentElement.classList.remove('scroll-disabled');
  document.body.style.cssText = '';
  document.querySelector('.root').style.cssText = '';
  if (scrollTop) {
    console.log('ok2', scrollTop);
    document.scrollingElement.scrollTop = scrollTop;
  }
}
