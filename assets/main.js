// Подключение Burger Menu //

function burgerMenu() {
  let burger_icon = document.querySelector(".burger_icon");
  let burger_menu = document.getElementById("burger_menu");
  let close_icon = document.getElementById("close_icon");

  burger_icon.addEventListener("click", toggleMenu);
  close_icon.addEventListener("click", toggleMenu);
}

burgerMenu();

function toggleMenu() {
  burger_menu.classList.toggle("burger_menu_active");
}

// Подключение Swiper //

const swiper = new Swiper(".swiper", {
  // Optional parameters
  direction: "horizontal",
  effect: "slide",
  speed: 300,
  autoplay: true,
  loop: true,

  // Navigation buttons
  navigation: {
    prevEl: ".swiper__btn-prev",
    nextEl: ".swiper__btn-next",
  }
});

// Инициализация библиотеки Popup //

$(".test-popup-link").magnificPopup({
  type: "image",

  // other options

  // options for gallery
  gallery: {
    enabled: true,
  },

  // options for image content type
  image: {
    titleSrc: "title",
  }
});

