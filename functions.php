<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

// END ENQUEUE PARENT ACTION


function logo(){
    $logo = IMAGES.'/metanoiaradio.png';
    echo '<a class="logo" href="';
    echo bloginfo('url');
    echo '"><img src="'.$logo.'" alt="Metanoia Radio"></a>';
}


function showMenu(){
    $args = array(
        'menu'=> '',
        'menu_id' => 'menu-principal', /*Lo que tienen el Ul primero*/
        'menu_class' => 'menu', /* tambien lo que contiene el  Ul primero*/
        "container"=>"",  /*ESto es lo que contiene al menu por ejemplo nav, pero lo quito ya que en el header incluyo el nav para controlarlo.*/
    );
    wp_nav_menu($args);
}

    require( get_stylesheet_directory() . '/libs/totop.php' );
    require( get_stylesheet_directory() . '/libs/entradas.php' );

   // include (TEMPLATEPATH . '/libs/breadcrumb.php'); 

    /*==== n Widget=====*/
    if (function_exists('register_sidebar')) {
        register_sidebar(
            array(
                'name' => 'Sidebar',
                'id' => 'sidebar'
        ));
    }

    if (function_exists('register_sidebar')) {
        register_sidebar(
            array(
                'name' => 'listacat',
                'id' => 'listacat'
        ));
    }

    if (function_exists('register_sidebar')) {
        register_sidebar(
            array(
                'name' => 'formulario',
                'id' => 'formulario'
        ));
    }

    if (function_exists('register_sidebar')) {
        register_sidebar(
            array(
                'name' => 'contacto',
                'id' => 'contacto'
        ));
    }

    if (function_exists('register_sidebar')) {
        register_sidebar(
            array(
                'name' => 'Empeñar',
                'id' => 'empenar'
        ));
    }



    /*
    include (TEMPLATEPATH . '/libs/paginacion.php'); 
    include (TEMPLATEPATH . '/libs/plugins.php'); 
    paginacion();*/


//    include (TEMPLATEPATH . 'libs/totop.php'); 


add_filter( 'woocommerce_breadcrumb_defaults', 'jk_change_breadcrumb_delimiter' );
function jk_change_breadcrumb_delimiter( $defaults ) {
    // Change the breadcrumb delimeter from '/' to '>'
    $defaults['delimiter'] = ' &gt; ';
    return $defaults;
}

?>