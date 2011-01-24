<form method="get" id="search-form" action="<?php bloginfo('url'); ?>/">
  <div id="search-icon"></div>
  <input id="s" name="s"   type="text"   value="<?php the_search_query(); ?>" />
  <input id="search-submit" type="submit" value="Search" />
</form>
