const gap = 100;

const carousel = document.getElementById('carousel'),
  content = document.getElementById('paket'),
  next = document.getElementById('next'),
  prev = document.getElementById('prev');

next.addEventListener('click', (e) => {
  carousel.scrollBy(width + gap, 0);
  if (carousel.scrollWidth !== 0) {
    prev.style.display = 'flex';
  }
});
prev.addEventListener('click', (e) => {
  carousel.scrollBy(-(width + gap), 0);
  if (!content.scrollWidth - width - gap <= carousel.scrollLeft + width) {
    next.style.display = 'flex';
  }
});

let width = carousel.offsetWidth;
window.addEventListener('resize', (e) => (width = carousel.offsetWidth));
