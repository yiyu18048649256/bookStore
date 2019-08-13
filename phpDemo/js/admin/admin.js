$(".btn_box_login").click(function () {
    var text_form = document.getElementById("text_form");
    var userId = document.getElementById("userId").value;
    var userPsd = document.getElementById("userPsd").value;

    if (!userId && !userPsd) {
        alert("有选项输入为空!");
        return false;
    } else if (userId.length > 12 || userId.length < 9) {
        alert("账号长度9~12之间");
        return false;
    } else if (userPsd.length < 6 || userPsd.length > 20) {
        alert("密码长度在6~20之间");
        return false;
    }
    text_form.submit();
    return true;
});

