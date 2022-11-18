function form_check() {
  var u_name = document.getElementById("u_name");
  var name_leng = u_name.value.length;
  var u_id = document.getElementById("u_id");
  var id_value = u_id.value;
  var regExp =
    /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
  var idExp = /^[ㄱ-ㅎ가-힣]/;
  var u_pw = document.getElementById("u_pw");
  var re_pw = document.getElementById("re_pw");
  var terms = document.getElementById("terms");
  var age = document.getElementById("age");

  if (u_name.value == "") {
    var txt = document.getElementById("err_name");
    txt.innerHTML = "* 이름을 입력하세요.";
    u_name.focus();
    return false;
  }

  if (name_leng < 3) {
    var txt = document.getElementById("err_name");
    txt.innerHTML = "* 3글자 이상 입력해주세요.";
    u_name.focus();
    return false;
  }
  if (!idExp.test(u_name.value)) {
    var txt = document.getElementById("err_name");
    txt.innerHTML = "* 한글로 입력해주세요.";
    u_name.focus();
    return false;
  }
  if (u_id.value == "") {
    var txt = document.getElementById("err_id");
    txt.innerHTML = "* 이메일을 입력하세요.";
    u_id.focus();
    return false;
  }
  if (!regExp.test(id_value)) {
    var txt = document.getElementById("err_id");
    txt.innerHTML = "* 이메일 형식으로 작성해주세요.";
    u_id.focus();
    return false;
  }
  if (u_pw.value == "") {
    var err_pw = document.getElementById("err_pw");
    err_pw.innerHTML = "* 비밀번호를 입력해주세요";
    u_pw.focus();
    return false;
  }
  var pw_len = u_pw.value.length;
  if (pw_len < 8 || pw_len > 16) {
    var txt = document.getElementById("err_pw");
    txt.textContent = "* 비밀번호를 8 - 16 자리 이상으로 입력해주세요.";
    u_pw.focus();
    return false;
  }
  if (u_pw.value != re_pw.value) {
    var txt = document.getElementById("err_re_pw");
    txt.innerHTML = "* 비밀번호가 다릅니다.";
    re_pw.focus();
    return false;
  }
  var checked = $("#terms").prop("checked");
  if (!checked) {
    var txt = document.getElementById("err_terms");
    txt.innerHTML = "* 필수 체크";
    terms.focus();
    return false;
  }
  var checked_age = $("#age").prop("checked");
  if (!checked_age) {
    var txt = document.getElementById("err_age");
    txt.innerHTML = "* 필수 체크";
    age.focus();
    return false;
  }
}

const job_input = $("#job_input");
const job_value = $("#job_input_value");
const job_list = $(".job_list");
const bs_input = $("#bs_input");
const bs_value = $("#bs_input_value");
const bs_list = $(".bs_list");
let job = $(".job");
let bs = $(".business");
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
