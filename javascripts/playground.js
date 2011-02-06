$(document).ready(function() {
  setTimeout(function() {
    var style = document.createElement('style');
    document.body.appendChild(style);
    style.textContent = "img, canvas, video {\n" + "-moz-transform: rotate(0deg);\n" + "  }";

    var offset = {};
    window.addEventListener("MozOrientation", function(data) {

      if (!offset.x) offset.x = data.x;
      if (!offset.y) offset.y = data.y;
      if (!offset.z) offset.z = data.z;
      var radian = -1 * (data.x - offset.x) * 90;

      style.sheet.cssRules[0].style.MozTransform = 'rotate(' + radian + 'deg)';
    }, true);
  }, 90 * 1000);
});
