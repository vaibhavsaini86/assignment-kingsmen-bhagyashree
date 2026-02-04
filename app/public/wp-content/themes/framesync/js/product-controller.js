document.addEventListener('DOMContentLoaded', function () {

  const splide = new Splide('.main-products-splide', {
    type: 'fade',
    rewind: true,
    pagination: true,
    arrows: false,
    autoplay: true,
    interval: 3000,
    pauseOnHover: true,
    pauseOnFocus: false,
  });

  splide.mount();

  const overlayBtn = document.getElementById('image-overlay-btn');
  const buttons = document.querySelectorAll('.control-btn');

  // ✅ ONLY changes button background (manual clicks)
  function setActiveButton(index) {
    buttons.forEach(btn => btn.classList.remove('is-active'));
    if (buttons[index]) {
      buttons[index].classList.add('is-active');
    }
  }

  // ✅ ONLY changes left image button text
  function updateOverlayText(index) {
    if (buttons[index]) {
      overlayBtn.innerText = buttons[index].innerText;
    }
  }

  // ✅ On page load
  setActiveButton(0);
  updateOverlayText(0);

  // ✅ Right-side button click (manual control)
  buttons.forEach(btn => {
    btn.addEventListener('click', function () {
      const index = parseInt(this.dataset.index);
      splide.go(index);
      setActiveButton(index);      // background change
      updateOverlayText(index);    // text change
    });
  });

  // ✅ Autoplay / dots / swipe
  splide.on('move', function (newIndex) {
    updateOverlayText(newIndex);   // ❗ text only
  });

});
