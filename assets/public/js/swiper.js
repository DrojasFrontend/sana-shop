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

var swiper2 = new Swiper(".swiper-full-image-mobile", {
  direction: 'horizontal',
  slidesPerView: 1,
  spaceBetween: 10,
  freeMode: true,
  mousewheel: true,

  pagination: {
    el: ".swiper-pagination",
    type: 'bullets',
    clickable: true,
  },

  thumbs: {
    swiper: swiper,
  },
});
