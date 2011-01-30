<div class="post hentry" id="post-<?php the_ID(); ?>">
  <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  <ul class="post-date">
    <li><a href="<?php echo get_option('home'); ?>/<?php the_time('Y') ?>"><?php the_time('Y') ?></a></li>
    <li><a href="<?php echo get_option('home'); ?>/<?php the_time('Y/m') ?>"><?php the_time('m') ?></a></li>
    <li><a href="<?php echo get_option('home'); ?>/<?php the_time('Y/m/d') ?>"><?php the_time('d') ?></a></li>
  </ul>
  <p class="social-services">
    <a href="http://twitter.com/share?url=<?php the_permalink() ?>&via=june29" class="twitter-share-button">Tweet</a>
    <a href="http://b.hatena.ne.jp/entry/<?php the_permalink() ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?>" data-hatena-bookmark-layout="standard" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" height="24" width="50" style="border: none;" /></a>
   <?php if(is_single()): echo '<iframe src="http://www.facebook.com/plugins/like.php?href='; the_permalink(); echo '&layout=standard&show_faces=false&width=400&action=like&colorscheme=light" allowtransparency="true" style="border: medium none; overflow: hidden; width: 400px; height: 24px;" frameborder="0" scrolling="no"></iframe>'; endif; ?>
  </p>

  <div class="entry-content">
    <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
  </div>

  <div class="post-metadata">
    <span class="label">Category</span> <?php the_category(' ') ?>
    <?php the_tags('<span class="label">Tags</span> ', ' ', ''); ?>
  </div>
</div>
