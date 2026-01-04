 


const btn = document.getElementById("menu-btn");
const menu = document.getElementById("mobile-menu");
const icon = document.getElementById("menu-icon");
const links = document.querySelectorAll(".mobile-link");
const body = document.body;

let open = false;

btn.addEventListener("click", () => {
  open = !open;

  if (open) {
    menu.classList.remove("translate-x-full", "opacity-0");
    menu.classList.add("translate-x-0", "opacity-100");

    icon.classList.replace("fa-bars", "fa-xmark");
    body.classList.add("overflow-hidden");
  } else {
    closeMenu();
  }
});

function closeMenu() {
  menu.classList.add("translate-x-full", "opacity-0");
  menu.classList.remove("translate-x-0", "opacity-100");

  icon.classList.replace("fa-xmark", "fa-bars");
  body.classList.remove("overflow-hidden");

  open = false;
}

links.forEach(link => {
  link.addEventListener("click", closeMenu);
});

