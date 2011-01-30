<?php get_header(); ?>
  <div id="content" class="narrowcolumn">

<?php if (have_posts()) : ?>

  <div class="autopagerize_page_element">
    <?php while (have_posts()) : the_post(); ?>

      <?php include (TEMPLATEPATH . '/entry.php'); ?>

    <?php endwhile; ?>
  </div>

  <div class="navigation">
    <div class="align-left"><?php next_posts_link('<< Older posts') ?></div>
    <div class="align-right"><?php previous_posts_link('Newer posts >>') ?></div>
  </div>

  <?php else : ?>

    <h2 class="center">Not Found</h2>
    <p class="center">Sorry, but you are looking for something that isn't here.</p>
    <?php include (TEMPLATEPATH . "/searchform.php"); ?>

  <?php endif; ?>

  </div>

<?php get_footer(); ?>
