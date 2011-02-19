function getHatenaProfileImageUrl(username) {
  return "http://www.st-hatena.com/users/" + username[0] + username[1] + "/" + username + "/profile.gif";
}

function hundleHatenaBookmarkComments(data) {
  $(document).ready(function() {
    if (!data) return;

    if (data.bookmarks.length > 0) {
      var box = $("#hatena-bookmark-comments");
      $("<h3/>").text("Hatena Bookmark").appendTo(box);

      var withComment    = $("<ul/>").attr("id", "with-comment").appendTo(box);
      var withoutComment = $("<ul/>").attr("id", "without-comment").appendTo(box);

      for (var i = 0; i < data.bookmarks.length; i++) {
        var b = data.bookmarks[i];

        if (b.comment) {
          $("<li/>").addClass("hatena-bookmark").addClass("with-comment")
            .append($("<img/>").attr("src", getHatenaProfileImageUrl(b.user)).width(32).height(32))
            .append($("<a/>").attr("href", "http://b.hatena.ne.jp/" + b.user).text(b.user))
            .append($("<span/>").text(b.comment))
          .appendTo(withComment);
        }
        else {
          $("<li/>").addClass("hatena-bookmark").addClass("without-comment")
            .append($("<img/>").attr("src", getHatenaProfileImageUrl(b.user)).width(32).height(32))
            .append($("<a/>").attr("href", "http://b.hatena.ne.jp/" + b.user).text(b.user))
          .appendTo(withoutComment);
        }
      }
    }
  });
}

function hundleTweets(data) {
  $(document).ready(function() {
    if (!data) return;
    if (!data.response) return;

    var response = data.response;

    if (response.list.length > 0) {
      var box = $("#tweets");
      $("<h3/>").text("Twitter").appendTo(box);

      var ul = $("<ul/>").appendTo(box);

      for (var i = 0; i < response.list.length; i++) {
        var t = response.list[i];

        if (t.permalink_url) {
          $("<li/>").addClass("tweet")
            .append($("<img/>").attr("src", t.author.photo_url).width(32).height(32))
            .append($("<a/>").attr("href", t.permalink_url).text(t.author.nick))
            .append($("<span/>").html(t.highlight))
          .appendTo(ul);
        }
        else if (t.author && t.author.nick) {
          $("<li/>").addClass("tweet")
            .append($("<img/>").attr("src", t.author.photo_url).width(32).height(32))
            .append($("<a/>").attr("href", "http://twitter.com/" + t.author.nick).text(t.author.nick))
            .append($("<span/>").html(t.highlight))
          .appendTo(ul);
        }
      }
    }
  });
}
