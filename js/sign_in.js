function form_check() {
  var u_name = document.getElementById("u_name");
  var u_id = document.getElementById("u_id");
  var name_value = u_name.value;
  var id_value = u_id.value;
  var regExp =
    /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
  var idExp = /^[ㄱ-ㅎ|가-힣]+$/;
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
  if (!idExp.test(name_value)) {
    var txt = document.getElementById("err_name");
    txt.innerHTML = "* 한글로만 입력해주세요.";
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
    txt.innerHTML = "* 이메일 형식으로 입력해주세요.";
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
    txt.innerHTML = "비밀번호가 다릅니다.";
    re_pw.focus();
    return false;
  }
  var checked = $("#terms").prop("checked");
  if (!checked) {
    var txt = document.getElementById("err_terms");
    txt.innerHTML = "* 필수 체크 항목입니다.";
    terms.focus();
    return false;
  }
  var checked_age = $("#age").prop("checked");
  if (!checked_age) {
    var txt = document.getElementById("err_age");
    txt.innerHTML = "* 필수 체크 항목입니다.";
    age.focus();
    return false;
  }
}
