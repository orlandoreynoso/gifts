<?php 

/*
Template Name: contacto
Template Post Type: post, page, product
 */

 get_header();


?>


<section class="con-general">

  <div class="container">
     <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 contacto">
              <?php woocommerce_breadcrumb(); ?>
          <div class="interiores">
            <?php //  echo  'estoy en page';      ?>    
            <?php
              while ( have_posts() ) : the_post(); 
                the_content();           
              endwhile;
            ?>
          </div>
       </div>
        <div class="col-xs-12 col-sm-12 col-md-6 side-contacto">
          <?php  dynamic_sidebar('contacto');  ?>                
        </div>      
    </div>
  </div>
  
</section>

<?php get_footer();  ?>