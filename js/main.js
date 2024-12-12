const swiper = new Swiper(".swiper", {
  speed: 400,
  slidesPerView: 4,
  loop: false,
  navigation: {
    nextEl: ".slider-button-next",
    prevEl: ".slider-button-prev",
  },
  breakpoints: {
    1: {
      loop: true,
      slidesPerView: 1.2,
    },
    500: {
      loop: true,
      slidesPerView: 2.2,
    },
    760: {
      loop: true,
      slidesPerView: 3,
    },
    1182: {
      slidesPerView: 4,
      loop: false,
    },
  },
});
