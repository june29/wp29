<!DOCTYPE html>
<html lang="ja"
      xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <title><?php
if(is_404()): echo 'Not Found - '; endif;
if(is_category()): echo single_cat_title('Entries in category : '); endif;
if(is_tag()): echo single_tag_title('Entries tagged with : '); endif;
if(is_year()): echo 'Entries in '.get_the_time('Y'); endif;
if(is_month()): echo 'Entries in '.get_the_time('Y/m'); endif;
if(is_day()): echo 'Entries in '.get_the_time('Y/m/d'); endif;
if(is_search()): echo 'Search results for '.$s; endif;
if(is_single()): echo wp_title('', false); endif;
if(is_page()): echo wp_title('', false); endif;
if(wp_title('', false)) echo ' - ';
bloginfo('name'); ?></title>

    <meta name="viewport" content="width=480" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/basic.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/stylesheets/mobile.css" type="text/css" media="only screen and (max-device-width:480px)" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if(is_single()): echo '
    <meta property="og:title" content="'; the_title(); echo '" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="'; the_permalink(); echo '" />';
    else: echo '
    <meta property="og:title" content="準二級.jp" />
    <meta property="og:type" content="blog" />
    <meta property="og:description" content="One of implementations of june29" />
    <meta property="og:url" content="http://june29.jp/" />';
    endif; ?>

    <meta property="og:site_name" content="準二級.jp" />
    <meta property="og:image" content="http://june29.jp/wp-content/themes/wp29/images/face.jpg" />
    <meta property="fb:admins" content="june29.jp" />

    <?php wp_head(); ?>

    <script type="text/javascript" src="http://s.hatena.ne.jp/js/HatenaStar.js"></script>
    <script type="text/javascript">
      Hatena.Star.SiteConfig = {
        entryNodes: {
          'div.hentry': {
            uri: 'h2.entry-title a',
            title: 'h2.entry-title',
            container: 'p.social-services'
          }
        }
      };
    </script>
    <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
    <script type="text/javascript" src="http://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/javascripts/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/javascripts/playground.js"></script>
  </head>

  <body>
    <div id="wrapper">
      <div id="header">
        <img id="face" src="<?php bloginfo('template_directory'); ?>/images/face.jpg" width="128" height="128" alt="Face" />
        <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
        <div id="description">One of implementations of june29, <a href="/about/" title="About">and more detail...</a></div>
        <?php include (TEMPLATEPATH . '/searchform.php'); ?>
        <ul id="social-links">
          <li id="social-link-twitter"   class="social-link"><a href="http://twitter.com/june29"           title="">Twitter</a></li>
          <li id="social-link-tumblr"    class="social-link"><a href="http://june29.tumblr.com/"           title="">Tumblr</a></li>
          <li id="social-link-facebook"  class="social-link"><a href="http://www.facebook.com/june29.jp"   title="">Facebook</a></li>
          <li id="social-link-flickr"    class="social-link"><a href="http://www.flickr.com/photos/june29" title="">Flickr</a></li>
          <li id="social-link-delicious" class="social-link"><a href="http://delicious.com/june29"         title="">Delicious</a></li>
          <li id="social-link-github"    class="social-link"><a href="http://github.com/june29"            title="">GitHub</a></li>
          <li id="social-link-lastfm"    class="social-link"><a href="http://www.last.fm/user/june29"      title="">Last.fm</a></li>
        </ul>
      </div>
