<?php 

/*

Template Name: Portada
  Template Post Type: post, page, product

 */

?>


<?php get_header(); ?>

<div class="slide">
    <div class="row">
      <div class="col-md-12">
        <?php 
         // Este es para la pagina oficial echo do_shortcode("[metaslider id=188]"); 
        ?>
        <?php 
          echo do_shortcode("[metaslider id=92]"); 
        ?>
      </div>
    </div>  
</div> 

<section class="con-general">
	<div class="container">
     <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 con">
            <article class="noticias">
            <?php
              while ( have_posts() ) : the_post(); 
                the_content();           
              endwhile;
            ?>
            </article>
       </div>     
   	 </div>
	</div>
</section>


<div class="container sec-todo">
  <div class="row">
    <div class="caja col-md-4">    
      <a class="hoja hvr-sweep-to-right " href="<?php bloginfo('url'); ?>/empenar">
      <div class="icono">
        <span class="fa fa-angle-double-right"></span>
      </div>
      <div class="titu">Empeñar</div>      
      <div class="texto">
        <p>a. El cliente solicita un avalúo de su artículo a empeñar. (Electrodomésticos, computadoras, joyas, vehículos, ...)</p>
        <p>b. Solicita que se haga un avalúo de su artículo.</p>
        <p>c. Si el artículo en buen estado, se le indicará cuánto se le puede otorgar.</p>
        <p>d. Si el cliente acepta, se le desembolsa su crédito.</p>
      </div>
      </a>
    </div>
    <div class="caja col-md-4">
      <a class="hoja hvr-sweep-to-right" href="<?php bloginfo('url'); ?>/comprar">
      <div class="icono">
        <span class="fa fa-tags"></span>
      </div>
        <div class="titu">Comprar</div>
        <div class="texto">
          <p>a. Los artículos que no se recuperaron en el tiempo establecido según contrato, se procederá a la trasmisión automática de la propiedad y se pondrá a la venta a precios de oferta.</p>
          <p>b. El interesado puede ver en nuestro catálogo qué productos tenemos en existencia y si está interesado presentarse a nuestras instalaciones a ver el producto.</p>
          <p>c. La venta de los productos son al contado.</p> 
        </div>
      </a>
    </div>
    <div class="caja col-md-4">
      <a class="hoja hvr-sweep-to-right" href="<?php bloginfo('url'); ?>/contacto">
      <div class="icono">
        <span class="fa fa-envira"></span>
        </div>
        <div class="titu">Aseroría Profesional</div>
        <div class="texto">
        <p>CrediEmpeños: Más dinero por tus prendas</p>
        <p>Si deseas nuestros servicios no dudes en escribirnos y un asesor te contactará en la brevedad.</p>
        <p>Puedes llamarnos a los Teléfonos:</p>
        <p> (502) 7755 - 1863 | (502) 5986 - 0818</p>
        </div>
      </a>
    </div>    
  </div>
</div>


<section class="mapa">
    <div class="mapa-texto" >
      <h3>Ubicanos en la 4a. Avenida 8-39 zona 1</h3>
    </div>
    <a class="mapa-img"  href="<?php bloginfo('url'); ?>/contacto">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mapa-masportusprendas.jpg" alt="CrediEmpeños: Más por tus prendas">
    </a>
    
</section>




<?php get_footer(); ?>