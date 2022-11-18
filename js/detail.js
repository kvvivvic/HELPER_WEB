$(".detail_link1").on("click", function () {
  $(".detail_link1").css({
    border: "1px solid #484b57",
    borderBottom: "none",
    fontWeight: "bold",
  });
  $(".detail_link2").css({
    borderRight: "1px solid #e4e5ed",
    borderTop: "1px solid #e4e5ed",
    borderLeft: "1px solid #e4e5ed",
    borderBottom: "1px solid #484b57",
    fontWeight: "500",
  });
  $(".detail_link3").css({
    borderRight: "1px solid #e4e5ed",
    borderTop: "1px solid #e4e5ed",
    borderLeft: "1px solid #e4e5ed",
    borderBottom: "1px solid #484b57",
    fontWeight: "500",
  });
  $(".detail_link4").css({
    borderRight: "1px solid #e4e5ed",
    borderTop: "1px solid #e4e5ed",
    borderLeft: "1px solid #e4e5ed",
    borderBottom: "1px solid #484b57",
    fontWeight: "500",
  });
});
$(".detail_link2").on("click", function () {
  $(".detail_link1").css({
    borderRight: "1px solid #e4e5ed",
    borderTop: "1px solid #e4e5ed",
    borderLeft: "1px solid #e4e5ed",
    borderBottom: "1px solid #484b57",
    fontWeight: "500",
  });
  $(".detail_link2").css({
    border: "1px solid #484b57",
    borderBottom: "none",
    fontWeight: "bold",
  });
  $(".detail_link3").css({
    borderRight: "1px solid #e4e5ed",
    borderTop: "1px solid #e4e5ed",
    borderLeft: "1px solid #e4e5ed",
    borderBottom: "1px solid #484b57",
    fontWeight: "500",
  });
  $(".detail_link4").css({
    borderRight: "1px solid #e4e5ed",
    borderTop: "1px solid #e4e5ed",
    borderLeft: "1px solid #e4e5ed",
    borderBottom: "1px solid #484b57",
    fontWeight: "500",
  });
});
$(".detail_link3").on("click", function () {
  $(".detail_link1").css({
    borderRight: "1px solid #e4e5ed",
    borderTop: "1px solid #e4e5ed",
    borderLeft: "1px solid #e4e5ed",
    borderBottom: "1px solid #484b57",
    fontWeight: "500",
  });
  $(".detail_link2").css({
    border: "1px solid #e4e5ed",
    borderBottom: "1px solid #484b57",
    fontWeight: "500",
  });
  $(".detail_link3").css({
    border: "1px solid #484b57",
    borderBottom: "none",
    fontWeight: "bold",
  });
  $(".detail_link4").css({
    border: "1px solid #e4e5ed",
    borderBottom: "1px solid #484b57",
    fontWeight: "500",
  });
});
$(".detail_link4").on("click", function () {
  $(".detail_link1").css({
    borderRight: "1px solid #e4e5ed",
    borderTop: "1px solid #e4e5ed",
    borderLeft: "1px solid #e4e5ed",
    borderBottom: "1px solid #484b57",
    fontWeight: "500",
  });
  $(".detail_link2").css({
    border: "1px solid #e4e5ed",
    borderBottom: "1px solid #484b57",
    fontWeight: "500",
  });
  $(".detail_link3").css({
    border: "1px solid #e4e5ed",
    borderBottom: "1px solid #484b57",
    fontWeight: "500",
  });
  $(".detail_link4").css({
    border: "1px solid #484b57",
    borderBottom: "none",
    fontWeight: "bold",
  });
});

const li = document.getElementsByClassName("scroll");
for (let i = 0; i < li.length; i++) {
  li[i].addEventListener("click", function (e) {
    e.preventDefault();
    document.querySelector(".txt" + (i + 1)).scrollIntoView({
      behavior: "smooth",
      block: "center",
    });
  });
}
