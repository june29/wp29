$(document).ready(function() {
  var READY = 120;

  setTimeout(function() {
    var body = $(document.body);
    var notification = $('<div />').attr('id', 'notification')
                                   .text('アクセスから' + READY + '秒が経過しました。揺れます。');

    var style = $('<style />').text('img, canvas, video, a, iframe { -moz-transform: rotate(0deg); }').appendTo(body);

    var offset = {};
    window.addEventListener("MozOrientation", function(data) {
      if (!document.getElementById('notification')) {
        notification.hide().appendTo(body).slideDown(3000);
      }

      if (!offset.x) offset.x = data.x;
      if (!offset.y) offset.y = data.y;
      if (!offset.z) offset.z = data.z;
      var radian = -1 * (data.x - offset.x) * 90;

      style.get(0).sheet.cssRules[0].style.MozTransform = 'rotate(' + radian + 'deg)';
    }, true);
  }, READY * 1000);
});
