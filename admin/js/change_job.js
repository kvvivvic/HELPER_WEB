const job_input = $("#job_input");
const job_value = $("#job_input_value");
const job_list = $(".job_list");
let job = $(".job");
job_input.click(function () {
  job_list.slideToggle();
});

job_list.eq(0).click(function () {
  job_value.html("프리랜서");
  job.val("프리랜서");
});
job_list.eq(1).click(function () {
  job_value.html("소상공인");
  job.val("소상공인");
});
job_list.eq(2).click(function () {
  job_value.html("직장인");
  job.val("직장인");
});
job_list.eq(3).click(function () {
  job_value.html("대학(원)생");
  job.val("대학(원)생");
});
job_list.eq(4).click(function () {
  job_value.html("무직");
  job.val("무직");
});
