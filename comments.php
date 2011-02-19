<?php // Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

  if (!empty($post->post_password)) { // if there's a password
    if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
      ?>

      <p class="nocomments">This post is password protected. Enter the password to view comments.</p>

      <?php
      return;
    }
  }

  /* This variable is for alternating comment background */
  $oddcomment = 'class="odd" ';
?>



<!-- You can start editing here. -->

<div id="feedbacks">
  <div id="hatena-bookmark-comments">
    <script type="text/javascript" src="http://b.hatena.ne.jp/entry/jsonlite/?url=<?php the_permalink() ?>&callback=hundleHatenaBookmarkComments
"></script>
  </div>

  <h3 id="respond">Comments</h3>

  <?php if ($comments) : ?>
  <ol class="comment-list">

  <?php foreach ($comments as $comment) : ?>

    <li <?php echo $oddcomment; ?> id="comment-<?php comment_ID() ?>">
      <div class="comment-metadata">
        <?php echo get_avatar( $comment, 32 ); ?>
        <cite><?php comment_author_link() ?></cite>
        (<a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('Y/m/d') ?> <?php comment_time('H:i:s') ?></a>) <?php edit_comment_link('edit','',''); ?>
      </div>

      <?php if ($comment->comment_approved == '0') : ?>
      <em>Your comment is awaiting moderation.</em>

      <?php endif; ?>

      <?php comment_text() ?>
    </li>

  <?php
    /* Changes every other comment to a different class */
    $oddcomment = ( strcmp($oddcomment, 'class="even" ') == 0 ) ? 'class="odd" ' : 'class="even" ';
  ?>

  <?php endforeach; /* end for each comment */ ?>

  </ol>

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post->comment_status) : ?>
    <!-- If comments are open, but there are no comments. -->

   <?php else : // comments are closed ?>
    <!-- If comments are closed. -->
    <p class="no-comments">Comments are closed.</p>

  <?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

  <?php if ( get_option('comment_registration') && !$user_ID ) : ?>
  <p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
  <?php else : ?>

  <form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment-form">

  <?php if ( $user_ID ) : ?>

  <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out</a></p>

  <?php else : ?>

  <p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
  <label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>

  <p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
  <label for="email"><small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label></p>

  <p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
  <label for="url"><small>Website</small></label></p>

  <?php endif; ?>

  <p><textarea name="comment" id="comment" cols="70" rows="10" tabindex="4"></textarea></p>

  <p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
  <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
  </p>
  <?php do_action('comment_form', $post->ID); ?>

  </form>

  <?php endif; // If registration required and not logged in ?>
  <?php endif; // if you delete this the sky will fall on your head ?>
</div>
