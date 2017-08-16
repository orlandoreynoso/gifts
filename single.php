<!-- Archivo de cabecera gobal de Wordpress -->

<?php 

/*
  Template Name: sigle
  Template Post Type: post, page, product
*/

 get_header();

?>

<section class="con-general">

  <div class="container">
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-8 con">
              <?php woocommerce_breadcrumb(); ?>
            <div class="contenido">
              <div class="date-cat">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 fecha">                        
                        <span class="label1"><i class="icon-date fa fa-calendar"></i><?php the_time('j  '); ?></span>
                        <span class="label2"><?php the_time('F '); ?></span>
                      </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 descripcion_categoria"><i class="icon-file fa fa-file"></i><a class="cat"><?php the_category (' , '); ?></a></div>
                </div>
              </div>              
              <div class="info">
            <!-- h1><?php //   the_title(); ?></h1 -->
             <?php
              while ( have_posts() ) : the_post();
            //          get_template_part( 'content', 'page' );
              the_content();           
              endwhile;
              ?>
              </div>
            </div> 
       </div>
      <div class="col-xs-12 col-sm-12 col-md-4 side">
          <div class="entradas">
            <div class="titulo_entradas"><h3>Entradas recientes</h3></div>
            <div class="recientes">
              <?php get_sidebar(); ?>
              <div class="facebook">
                <iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FTvArquidiocesana&width=292&height=590&colorscheme=light&show_faces=true&header=true&stream=true&show_border=true&appId=165911470135594" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:590px;" allowTransparency="true"></iframe>                    
              </div>
            </div>  
          </div> 
      </div>    
    </div>
  </div>
  
</section>

<?php get_footer(); ?>