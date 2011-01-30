<?php get_header(); ?>

  <div id="content" class="narrowcolumn">

    <?php if (have_posts()) : ?>

    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a category archive */ if (is_category()) { ?>
      <h2 class="page-title">Entries in category "<?php single_cat_title(); ?>"</h2>
    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
      <h2 class="page-title">Entries tagged with "<?php single_tag_title(); ?>"</h2>
    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
      <h2 class="page-title">Entries in <?php the_time('Y'); ?>/<?php the_time('m'); ?>/<?php the_time('d'); ?>/</h2>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
      <h2 class="page-title">Entries in <?php the_time('Y'); ?>/<?php the_time('m'); ?></h2>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
      <h2 class="page-title">Entries in <?php the_time('Y'); ?></h2>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
      <h2 class="page-title">Author Archive</h2>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
      <h2 class="page-title">Blog Archives</h2>
    <?php } ?>

    <div class="navigation">
      <div class="align-left"><?php next_posts_link('<< Older posts') ?></div>
      <div class="align-right"><?php previous_posts_link('Newer posts') ?></div>
    </div>

    <?php while (have_posts()) : the_post(); ?>

      <?php include (TEMPLATEPATH . '/entry.php'); ?>

    <?php endwhile; ?>

    <div class="navigation">
      <div class="align-left"><?php next_posts_link('<< Older posts') ?></div>
      <div class="align-right"><?php previous_posts_link('Newer posts') ?></div>
    </div>

    <?php else : ?>

    <h2 class="center">Not Found</h2>
    <?php include (TEMPLATEPATH . '/searchform.php'); ?>
    <?php endif; ?>
  </div>

<?php get_footer(); ?>
