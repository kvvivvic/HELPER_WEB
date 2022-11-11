$(".login_id").click(function () {
  $(this).css("background-color", "#FFF");
  $(this).attr("placeholder", "");
});
$(".login_id").focusout(function () {
  $(this).css("background-color", "#f6f6f6");
  $(this).attr("placeholder", "이메일을 입력하세요.");
});
$(".login_pw").click(function () {
  $(this).css("background-color", "#FFF");
  $(this).attr("placeholder", "");
});
$(".login_pw").focusout(function () {
  $(this).css("background-color", "#f6f6f6");
  $(this).attr("placeholder", "비밀번호를 입력하세요.");
});

function form_check() {
  var u_id = document.getElementById("u_id");
  var pwd = document.getElementById("pwd");
  var id_value = u_id.value;
  var regExp =
    /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;

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
  if (pwd.value == "") {
    var err_pwd = document.getElementById("err_pwd");
    err_pwd.innerHTML = "* 비밀번호를 입력해주세요";
    pwd.focus();
    return false;
  }
  var pwd_len = pwd.value.length;
  // if (pwd_len < 8 || pwd_len > 16) {
  //   var txt = document.getElementById("err_pwd");
  //   txt.textContent = "* 비밀번호를 8 - 16 자리 이상으로 입력해주세요.";
  //   pwd.focus();
  //   return false;
  // }
}
