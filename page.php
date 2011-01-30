<?php get_header(); ?>

  <div id="content" class="narrowcolumn">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <?php include (TEMPLATEPATH . '/entry.php'); ?>

    <?php endwhile; endif; ?>
  </div>

<?php get_footer(); ?>