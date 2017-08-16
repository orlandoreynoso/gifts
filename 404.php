<?php 

/*
Template Name: 404
Template Post Type: post, page, product
 */

 get_header();


?>


<section class="con-general">

  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-8 con">
              <?php woocommerce_breadcrumb(); ?>
          <div class="interiores">
            <?php // echo  'estoy en 404';      ?>    
            <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>  
           <div class="contenido">
                  <a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  <div class="date-cat">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 fecha">                        
                            <span class="label1"><i class="icon-date fa fa-calendar"></i><?php the_time('j  '); ?></span>
                            <span class="label2"><?php the_time('F '); ?></span>
                          </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 descripcion_categoria"><i class="icon-file fa fa-file"></i><a class="cat"><?php the_category (' , '); ?></a></div>
                    </div>
                  </div>
                  <div class="thumb">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a>              
                  </div>
                  <div class="info"><?php the_excerpt();  ?></div>
            </div>   

          <?php endwhile; ?>
          <div class="navigation"><?php if(function_exists('pagenavi')) { pagenavi(); } ?></div>
          <?php else : ?>
          <h1>Página no econtrada</h1>    
          <p><?php // _e('Ups!, no hay entradas.'); ?></p>
          <div class="texto">
          <p>CrediEmpeños: Más dinero por tus prendas</p>
          <p>Si deseas nuestros servicios no dudes en escribirnos y un asesor te contactará en la brevedad.</p>
          <p>Puedes llamarnos a los Teléfonos:</p>
          <p> (502) 7755 - 1863 | (502) 5986 - 0818</p>
          </div>          
          <?php endif; ?>
          </div>
       </div>
        <div class="col-xs-12 col-sm-12 col-md-4 side">
          <div class="entradas">
          <div class="titulo_entradas"><h2>síguenos en:</h2></div>
            <div class="recientes">
                    <?php // get_sidebar(); ?>
                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fmasportusprendas&width=292&height=590&colorscheme=light&show_faces=true&header=true&stream=true&show_border=true&appId=165911470135594" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:590px;" allowTransparency="true"></iframe>      
            </div>  
          </div>        
        </div>      
    </div>
  </div>
  
</section>

<?php get_footer();  ?>