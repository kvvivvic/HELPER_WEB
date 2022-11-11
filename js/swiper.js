let bgColor = ["#ffd300", "#ffeaa7", "#0984e3"];
const swiper = new Swiper(".main .swiper", {
  // Optional parameters
  loop: true,
  loopAdditionalSlides: 1,
  effect: "fade",
  speed: 2000,
  autoplay: {
    delay: 2000,
  },
  // Navigation arrows
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  on: {
    slideChangeTransitionStart: function () {
      //index 값에따라서 main 백그라운드 색 바꾸기
      console.log(this.activeIndex);
      $(".main").css({
        "background-color": "#ffd300",
      });
      if (this.activeIndex == 2) {
        $(".main").css({
          "background-color": "#ffd300",
        });
      }
      if (this.activeIndex == 3) {
        $(".main").css("background-color", "#747d8c");
      }
      if (this.activeIndex == 4) {
        $(".main").css("background-color", "#0984e3");
      }
      if (this.activeIndex == 1) {
        $(".main").css("background-color", "#0984e3");
      }
    },
  },
});

//바뀌는 값 인덱스를 알아내서 인덱스가 바뀌면 배경색 바뀌게

const rec_swiper = new Swiper(".recommend .swiper", {
  // Optional parameters
  loop: true,
  speed: 500,
  slidesPerView: "5",
  spaceBetween: 16,
  // Navigation arrows
  navigation: {
    nextEl: ".recommend .swiper-button-next",
    prevEl: ".recommend .swiper-button-prev",
  },
});
