$(".top-box-z").click(function () {
  if (window.confirm("你确定要退出登录吗？")) {
    window.location.href = "http://localhost:8080/phpDemo/page/jump/downdata.php";
    return true;
  } else {
    return false;
  }
});
