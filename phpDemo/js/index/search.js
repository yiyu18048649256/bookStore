$(".search").click(function () {
  let bookName = document.getElementById("bookName").value;
  let url = "page/search.php?search=" + bookName;
  window.location.href = url;
});
$("#bookName").bind("keydown", function (e) {
  // 兼容FF和IE和Opera    
  var theEvent = e || window.event;
  var code = theEvent.keyCode || theEvent.which || theEvent.charCode;
  if (code == 13) {
    //回车执行查询
    let bookName = document.getElementById("bookName").value;
    let url = "page/search.php?search=" + bookName;
    window.location.href = url;
  }
});
