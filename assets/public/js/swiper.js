let swiper = new Swiper(".swiper-thumbnails", {
  spaceBetween: 10,
  slidesPerView: 4,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".swiper-full-image", {
  direction: 'vertical',
  slidesPerView: "auto",
  freeMode: true,
  mousewheel: true,

  scrollbar: {
    el: ".swiper-scrollbar",
  },
  
  thumbs: {
    swiper: swiper,
  },
});

var swiper3 = new Swiper(".swiper-tab-collection", {
  direction: 'horizontal',
  slidesPerView: 1,
  spaceBetween: 10,
  freeMode: true,
  mousewheel: true,
});