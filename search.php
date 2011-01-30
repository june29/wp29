<?php get_header(); ?>

  <div id="content" class="narrowcolumn">

  <?php if (have_posts()) : ?>

    <h2 class="page-title">Search results for "<?php echo $s; ?>"</h2>

    <div class="navigation">
      <div class="align-left"><?php next_posts_link('<< Older posts') ?></div>
      <div class="align-right"><?php previous_posts_link('Newer posts >>') ?></div>
    </div>

    <?php while (have_posts()) : the_post(); ?>

      <?php include (TEMPLATEPATH . '/entry.php'); ?>

    <?php endwhile; ?>

    <div class="navigation">
      <div class="align-left"><?php next_posts_link('<< Older posts') ?></div>
      <div class="align-right"><?php previous_posts_link('Newer posts >>') ?></div>
    </div>

  <?php else : ?>

    <div class="page-title">There is no results for "<?php echo $s; ?>".</div>
    <div class="no-result">Please try other word.</div>

  <?php endif; ?>

  </div>

<?php get_footer(); ?>