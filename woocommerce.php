<?php 

/*
  Template Name: Wooo
  Template Post Type: post, page, product
*/

 get_header();

?>


<section class="con-general">

  <div class="container">
     <div class="row">
        <div class="col-xs-12 col-md-12 con">
              <?php woocommerce_breadcrumb(); ?>
            <div class="contenido">
              <!-- h2><?php the_title(); ?></h2 -->
              <!-- div class="date-cat">
                <div class="row">
                    <div class="col-xs-12 col-md-6 fecha"><i class="icon-date fa fa-calendar"></i><?php // the_time('j F, Y'); ?></div>
                    <div class="col-xs-12 col-md-6 descripcion_categoria"><i class="icon-file fa fa-file"></i><a class="cat"><?php /// the_category (' , '); ?></a></div>
                </div>
              </div -->
              <div class="comprar">
                    <?php woocommerce_content(); ?>
              </div>
            </div> 
       </div>
        <!-- div class="col-xs-12 col-md-4 side">
          <div class="entradas">
            <div class="titulo_entradas">
              <h3>Entradas recientes</h3>
            </div>

            <div class="recientes">
              <?php get_sidebar(); ?>
            </div>  
          </div>        
        </div -->      
    </div>
  </div>
  
</section>

<?php get_footer();  ?>