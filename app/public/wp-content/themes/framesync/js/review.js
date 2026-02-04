document.addEventListener('DOMContentLoaded', function () {

  if (!document.querySelector('.testimonial-splide')) return;

  var reviewSplide = new Splide('.testimonial-splide', {
    type: 'loop',
    perPage: 1,
    perMove: 1,
    arrows: false,
    pagination: false,
    autoplay: true,
    interval: 4000,
    pauseOnHover: true,
    speed: 800,
  });

  reviewSplide.mount();

  const prevBtn = document.querySelector('.review-prev');
  const nextBtn = document.querySelector('.review-next');

  if (prevBtn && nextBtn) {
    prevBtn.addEventListener('click', () => reviewSplide.go('<'));
    nextBtn.addEventListener('click', () => reviewSplide.go('>'));
  }

});
