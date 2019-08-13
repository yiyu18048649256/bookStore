$(".btn_box_login").click(function () {
  var text_form = document.getElementById("text_form");
  var userId = document.getElementById("userId").value;
  var userPsd = document.getElementById("userPsd").value;
  var vCode = $(".input-box-vCode").val();
  var i = 0;
  function showMsg(msg) {
    var id = "#check-text";

    $(id).text(msg);
  }
  if (!userId && !userPsd && !vCode) {
    alert("有选项输入为空!");
    return false;
  } else if (userId.length > 12 || userId.length < 9) {
    showMsg("账号长度9~12之间");
    return false;
  } else if (userPsd.length < 6 || userPsd.length > 20) {
    showMsg("密码长度在6~20之间");
    console.log(vCode);
    return false;
  } else {
    check();
  }

  text_form.submit();
  return true;
});

function checkVCode() {
  var Code;
  Code = document.getElementById("vCode").value;
  var str = "vCode=" + Code;
  //   document.getElementById("check-text").innerHTML = str;
  // 获取 id="numb" 的值
  $.ajax({
    type: "POST",
    url: "../page/jump/check.php",
    data: str,
    success: function (data) {
      console.log(data);
      if (data == 1) {
        document.getElementById("check-text").innerHTML = "验证码输入正确";
      } else document.getElementById("check-text").innerHTML = "验证码输入错误";
    }
  });
}
function check() {
  var Code;
  Code = document.getElementById("vCode").value;
  var str = "vCode=" + Code;
  $.ajax({
    type: "POST",
    url: "../page/jump/check.php",
    data: str,
    success: function (data) {
      console.log(data);
      if (data == 1) {
        document.getElementById("check-text").innerHTML = "验证码输入正确";
      } else {
        alert("验证码输入错误");
        window.location.href = "../page/login.php";
      }
    }
  });
}
