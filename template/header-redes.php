<div class="ca-search-followers">
  <div class="search"><?php  get_search_form();   ?></div>
  <div class="cuadro-redes">
    <?php
  $argsr = array(
    'theme_location' =>'menu-redes',
    'container' => 'div',
    'container_id'  => 'reeeeedes',
  	'container_class'=> 'riosp',
    'items_wrap' => '<ul id="ver" class="okk">%3$s</ul>'    
  );
  wp_nav_menu($argsr);

    ?>

    <a class="icon-facebook fb fa fa-facebook" href="https://www.facebook.com/masportusprendas/"></a>
    <a class="icon-twitter tw fa fa-twitter" href="#"></a>
    <a class="icon-youtube2 yt fa fa-youtube" href="#"></a>
  </div>
</div>
