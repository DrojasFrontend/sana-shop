var swiper = new Swiper(".swiper-thumbnails", {
  spaceBetween: 10,
  slidesPerView: 4,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".swiper-full-image", {
  direction: 'vertical',
  slidesPerView: "auto",
  freeMode: true,
  mousewheel: true,
  // allowTouchMove: false,

  // breakpoints: {
  //   1024: {
  //     allowTouchMove: true,
  //   },
  // },

  scrollbar: {
    el: ".swiper-scrollbar",
  },
  
  thumbs: {
    swiper: swiper,
  },
});
