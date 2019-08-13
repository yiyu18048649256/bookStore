(function(doc, win) {
  var doc = doc.documentElement;
  doc.addEventListener("DOMContentLoaded", Resize, false);

  win.addEventListener("resize", Resize, false);

  function Resize() {
    doc.style.fontSize = doc.clientWidth / 120 + "px";
  }
})(document, window);
