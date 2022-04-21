<form class="search-form" action="<?php get_template_directory_uri() ?>" method="get">
  <input 
  class="search-field" 
  type="text" 
  name="s" 
  id="s" 
  value="<?php the_search_query(); ?>"
  placeholder="Search">

  <input 
  class="search-submit" 
  type="submit" 
  value="Search"
  required
  >
</form>