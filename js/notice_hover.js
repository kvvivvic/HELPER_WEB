$(".notice_list a").hover(
  function () {
    $(this).children(".list1").css("color", "#fff");
    console.log("ju");
  },
  function () {
    $(this).children(".list1").css("color", "#ffd300");
  }
);
