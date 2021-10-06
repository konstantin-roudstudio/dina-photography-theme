export default function feedback() {
  const feedbackSections = document.querySelectorAll('.feedback:not(.feedback--slider)');

  for (const [i, section] of feedbackSections.entries()) {
    let pos = section.getBoundingClientRect();
    let lastPos = section.getBoundingClientRect();
    const numOfItems = feedbackSections.length;

    section.classList.add('fixed', 'initialized'); // .initialized may be unnecessary
    section.setAttribute('style', `z-index: ${10 + (numOfItems - i)};`);

    document.addEventListener('scroll', () => {
      pos = section.getBoundingClientRect();
      if (Math.abs(pos - lastPos) < 5) return;

      if (pos.top <= 0) {
        section.classList.remove('fixed');
      } else {
        section.classList.add('fixed');
      }
      lastPos = pos;
    });
  }
}
