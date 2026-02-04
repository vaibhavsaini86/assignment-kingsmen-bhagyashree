document.addEventListener('DOMContentLoaded', function () {
  new Splide('.shade-card-splide', {
    type: 'loop',

    perPage: 3,        // 👈 FORCE 3 cards
    perMove: 1,
    gap: '24px',

    arrows: true,
    pagination: false,

    autoplay: true,
    interval: 2500,
    pauseOnHover: true,

    breakpoints: {
      1024: {
        perPage: 2,   // tablets → 2 cards
      },
      640: {
        perPage: 1,   // mobile → 1 card
      },
    },
  }).mount();
});