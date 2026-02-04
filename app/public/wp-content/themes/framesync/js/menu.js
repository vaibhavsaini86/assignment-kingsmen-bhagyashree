document.addEventListener("DOMContentLoaded", function () {

  const btn = document.getElementById("menu-btn");
  const menu = document.getElementById("mobile-menu");
  const icon = document.getElementById("menu-icon");
  const overlay = document.getElementById("menu-overlay");
  const links = document.querySelectorAll(".mobile-link");
  const items = document.querySelectorAll(".menu-item");
  const body = document.body;
  const sections = document.querySelectorAll("section[id]");
  const navLinks = document.querySelectorAll(".nav-bar");

  if (!btn || !menu) return; // safety guard

  let open = false;

  btn.addEventListener("click", toggleMenu);
  overlay.addEventListener("click", closeMenu);

  function toggleMenu() {
    open ? closeMenu() : openMenu();
  }

  function openMenu() {
    open = true;

    menu.classList.remove("-translate-x-full", "opacity-0");
    menu.classList.add("translate-x-0", "opacity-100");

    overlay.classList.remove("hidden");
    icon.classList.replace("fa-bars", "fa-xmark");
    body.classList.add("overflow-hidden");

    items.forEach((item, i) => {
      setTimeout(() => {
        item.classList.remove("opacity-0", "translate-x-10");
      }, i * 120);
    });
  }


  function closeMenu() {
    open = false;

    menu.classList.add("-translate-x-full", "opacity-0");
    menu.classList.remove("translate-x-0", "opacity-100");

    overlay.classList.add("hidden");
    icon.classList.replace("fa-xmark", "fa-bars");
    body.classList.remove("overflow-hidden");

    items.forEach(item => {
      item.classList.add("opacity-0", "translate-x-10");
    });
  }

  links.forEach(link => link.addEventListener("click", closeMenu));

    // Smooth scroll with header offset
  const header = document.querySelector("header");
  const headerHeight = header.offsetHeight;

  function smoothScrollTo(targetId) {
    const target = document.querySelector(targetId);
    if (!target) return;

    const targetPosition =
      target.getBoundingClientRect().top + window.pageYOffset;

    window.scrollTo({
      top: targetPosition - headerHeight,
      behavior: "smooth",
    });
  }

  // Desktop + Mobile links
  document.querySelectorAll('a[href^="#"]').forEach(link => {
    link.addEventListener("click", function (e) {
      const targetId = this.getAttribute("href");

      if (targetId.length > 1) {
        e.preventDefault();

        // Close mobile menu first (if open)
        if (open) closeMenu();

        // Small delay so menu animation finishes
        setTimeout(() => {
          smoothScrollTo(targetId);
        }, 300);
      }
    });
  });

  function onScroll() {
    const scrollY = window.pageYOffset;
    const headerHeight = document.querySelector("header").offsetHeight;

    sections.forEach(section => {
      const sectionTop = section.offsetTop - headerHeight - 10;
      const sectionHeight = section.offsetHeight;
      const sectionId = section.getAttribute("id");

      if (
        scrollY >= sectionTop &&
        scrollY < sectionTop + sectionHeight
      ) {
        navLinks.forEach(link => {
          link.classList.remove("active");

          if (link.getAttribute("href") === `#${sectionId}`) {
            link.classList.add("active");
          }
        });
      }
    });
  }

  window.addEventListener("scroll", onScroll);

});
