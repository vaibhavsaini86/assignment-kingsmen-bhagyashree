document.addEventListener('DOMContentLoaded', function () {

  const counters = document.querySelectorAll('.counter');
  let hasAnimated = false;

  function startCounter() {
    if (hasAnimated) return;

    counters.forEach(counter => {
      const target = +counter.dataset.target;
      const duration = 2000; // all counters run for same time
      let startTime = null;

      function updateCounter(timestamp) {
        if (!startTime) startTime = timestamp;

        const progress = timestamp - startTime;
        const progressRatio = Math.min(progress / duration, 1);

        const current = Math.floor(progressRatio * target);

        counter.textContent = current.toLocaleString() + '+';

        if (progress < duration) {
          requestAnimationFrame(updateCounter);
        } else {
          counter.textContent = target.toLocaleString() + '+';
        }
      }

      requestAnimationFrame(updateCounter);
    });

    hasAnimated = true;
  }

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        startCounter();
      }
    });
  }, { threshold: 0.4 });

  counters.forEach(counter => observer.observe(counter));
});
