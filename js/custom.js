const header_menu = document.querySelector(".header__menu");
const menu_btn = document.querySelector(".header__menu-btn");
const body = document.body;
const html = document.documentElement;

function toggleNav() {
  header_menu.classList.toggle("active");
  menu_btn.classList.toggle("active");
  body.classList.toggle("scroll-disabled");
  html.classList.toggle("scroll-disabled");
}

menu_btn.addEventListener("click", toggleNav);
