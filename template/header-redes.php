<div class="ca-search-followers text-right">
  <div class="search"><?php  get_search_form();   ?></div>
  <div class="cuadro-redes text-right">
    <?php
  $argsr = array(
    'theme_location' =>'menu-redes',
    'container' => 'nav',
    'container_id'  => 'sociales',
  	'container_class'=> 'sociales',
    'link_before' => '<span class="sr-text">',
    'link_after' => '</span>',
    'items_wrap' => '<ul id="menu-social" class="menu">%3$s</ul>'
  );
  wp_nav_menu($argsr);

    ?>
  </div>
</div>
