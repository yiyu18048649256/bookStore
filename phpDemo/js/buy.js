
$("#buy-car").click(function () {
    getMsg();
});
function aa() {
    document.getElementById("buy").value++;
}
function bb() {
    x = document.getElementById("buy").value;
    if (x > 0)
        document.getElementById("buy").value--;
}
function getMsg() {
    var bname, num, bid, bprice;
    bname = document.getElementById("bname").innerText;
    num = document.getElementById('buy').value;
    bprice = document.getElementById('bprice').innerText;
    let url, name;
    url = location.search;
    if (url.indexOf("?") != -1) {    //判断是否有参数
        var str = url.substr(1); //从第一个字符开始 因为第0个是?号 获取所有除问号的所有符串
        strs = str.split("&");   //用等号进行分隔 （因为知道只有一个参数 所以直接用等号进分隔 如果有多个参数 要用&号分隔 再用等号进行分隔）
        //直接弹出第一个参数 （如果有多个参数 还要进行循环的）
        var id = strs[1].split("=");
        bid = decodeURI(id[1]);
    }
    console.log(bid);
    console.log(num);
    if (num != 0) {
        $.ajax({
            type: "POST",
            url: "../page/jump/buyCar.php",
            data: { bname, bid, num, bprice },
            success: function (data) {
                console.log(data);
                if (data == 1) {
                    alert("加入成功！");
                } else {
                    alert("加入失败！");
                }
            }
        });
    } else {
        alert("数量不能为0");
    }


}