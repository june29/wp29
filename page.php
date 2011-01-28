<?php get_header(); ?>

  <div id="content" class="narrowcolumn">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
    <h2 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
    <ul class="post-date">
      <li><a href="<?php echo get_option('home'); ?>/<?php the_time('Y') ?>"><?php the_time('Y') ?></a></li>
      <li><a href="<?php echo get_option('home'); ?>/<?php the_time('Y/m') ?>"><?php the_time('m') ?></a></li>
      <li><a href="<?php echo get_option('home'); ?>/<?php the_time('Y/m/d') ?>"><?php the_time('d') ?></a></li>
    </ul>
    <div class="social-services">
      <a href="http://twitter.com/share?url=<?php the_permalink() ?>&via=june29" class="twitter-share-button">Tweet</a>
      <a href="http://b.hatena.ne.jp/entry/<?php the_permalink() ?>" class="hatena-bookmark-button" data-hatena-bookmark-title="<?php the_title(); ?>" data-hatena-bookmark-layout="standard" title="このエントリーをはてなブックマークに追加"><img src="http://b.st-hatena.com/images/entry-button/button-only.gif" alt="このエントリーをはてなブックマークに追加" height="24" width="50" style="border: none;" /></a>
      <iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&layout=standard&show_faces=false&width=400&action=like&colorscheme=light" allowtransparency="true" style="border: medium none; overflow: hidden; width: 400px; height: 24px; margin-left: 20px;" frameborder="0" scrolling="no"></iframe>
    </div>

      <div class="entry-content">
        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
        <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>
    </div>
    <?php endwhile; endif; ?>
  </div>

<?php get_footer(); ?>