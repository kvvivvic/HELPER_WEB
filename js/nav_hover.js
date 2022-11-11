//전체메뉴 호버했을때 depth 띄우기
$(".menu_list1 , .all_menu1").hover(
  function () {
    $(".all_menu1").show();
  },
  function () {
    $(".all_menu1").hide();
  }
);
$(".menu_list1 , .depth1").hover(
  function () {
    $(this).find(".all_menu2").show();
  },
  function () {
    $(this).find(".all_menu2").hide();
  }
);
$(".depth2").hover(
  function () {
    $(this).find(".all_menu3").show();
  },
  function () {
    $(this).find(".all_menu3").hide();
  }
);
//
$(".notice_list").hover(
  function () {
    $(this).children(".list1").css("color", "#fff");
  },
  function () {
    $(this).children(".list1").css("color", "#ffd300");
  }
);
