function showMsg(x, msg) {
  var id = "#checkBox" + "-" + x;

  $(id).text(msg);
}
$(".btn_zhuce").click(function () {
  var text_form = document.getElementById("text_form");
  var userId = document.getElementById("userId").value;
  var userPhone = document.getElementById("userPhone").value;
  var userPsd = document.getElementById("userPsd").value;
  var reUserPsd = document.getElementById("reUserPsd").value;
  var reg = /^[1][3,4,5,7,8][0-9]{9}$/;

  if (userId == "") {
    showMsg("userId", "账号不能为空");
    // $("#checkBox-userId").text("账号不能为空");
    return false;
  } else if (userId.length > 12 || userId.length < 9) {
    showMsg("userId", "账号长度9~12之间");
    return false;
  }
  if (userPhone == "") {
    showMsg("userPhone", "手机号不能为空");
    return false;
  } else if (!reg.test(userPhone)) {
    showMsg("userPhone", "号码格式不正确");
    return false;
  }

  if (userPsd == "") {
    showMsg("userPsd", "密码不能为空");
    return false;
  }
  if (userPsd.length < 6 || userPsd.length > 20) {
    showMsg("userPsd", "密码长度在6~20之间");
    return false;
  }
  if (reUserPsd !== userPsd) {
    showMsg("userPsd", "2次密码不同");
    showMsg("reUserPsd", "2次密码不同");
    return false;
  } else {
    text_form.submit();

    return true;
  }
});
