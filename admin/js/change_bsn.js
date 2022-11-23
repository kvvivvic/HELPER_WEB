const bs_input = $("#bs_input");
const bs_value = $("#bs_input_value");
const bs_list = $(".bs_list");
let bs = $(".business");
bs_input.click(function () {
  bs_list.slideToggle();
});

bs_list.eq(0).click(function () {
  bs_value.html("쇼핑몰");
  bs.val("쇼핑몰");
});
bs_list.eq(1).click(function () {
  bs_value.html("IT 개발");
  bs.val("IT 개발");
});
bs_list.eq(2).click(function () {
  bs_value.html("예술·스포츠·여가");
  bs.val("예술·스포츠·여가");
});
bs_list.eq(3).click(function () {
  bs_value.html("학원·교육");
  bs.val("학원·교육");
});
