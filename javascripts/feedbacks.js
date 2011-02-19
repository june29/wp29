function getHatenaProfileImageUrl(username) {
  return "http://www.st-hatena.com/users/" + username[0] + username[1] + "/" + username + "/profile.gif";
}

function hundleHatenaBookmarkComments(data) {
  $(document).ready(function() {
    if (data.count > 0) {
      var box = $("#hatena-bookmark-comments");
      $("<h3/>").text("Hatena Bookmark").appendTo(box);

      var withComment    = $("<ul/>").attr("id", "with-comment").appendTo(box);
      var withoutComment = $("<ul/>").attr("id", "without-comment").appendTo(box);

      for (var i = 0; i < data.bookmarks.length; i++) {
        var b = data.bookmarks[i];

        if (b.comment) {
          $("<li/>").addClass("hatena-bookmark").addClass("with-comment")
            .append($("<img/>").attr("src", getHatenaProfileImageUrl(b.user)).width(24).height(24))
            .append($("<a/>").attr("href", "http://b.hatena.ne.jp/" + b.user).text(b.user))
            .append($("<span/>").text(b.comment))
          .appendTo(withComment);
        }
        else {
          $("<li/>").addClass("hatena-bookmark").addClass("without-comment")
            .append($("<img/>").attr("src", getHatenaProfileImageUrl(b.user)).width(24).height(24))
            .append($("<a/>").attr("href", "http://b.hatena.ne.jp/" + b.user).text(b.user))
          .appendTo(withoutComment);
        }
      }
    }
  });
}
