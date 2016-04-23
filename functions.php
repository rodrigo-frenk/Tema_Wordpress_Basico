<?php


// añadir soporte para imagenes destacadas
add_theme_support('post-thumbnails');


/* Paso 6: Crear funciones de cargado de recursos */

function cargar_estilos() {

   $themeDir = get_stylesheet_directory_uri() . '/';

   wp_enqueue_style( 'foundation', $themeDir . 'css/foundation.css' );
   wp_enqueue_style( 'font-awesome', $themeDir . 'recursos/font-awesome-4.6.1/css/font-awesome.min.css' );
   wp_enqueue_style( 'app', $themeDir . 'css/app.css' );


}

function cargar_javascripts() {

   $themeDir = get_stylesheet_directory_uri() . '/';


   wp_enqueue_script( "jquery", $themeDir . "js/vendor/jquery.js" );
   wp_enqueue_script( "what-input", $themeDir . "js/vendor/what-input.js" );
   wp_enqueue_script( "foundation", $themeDir . "js/vendor/foundation.js" );
   wp_enqueue_script( "imgLiquid", $themeDir . "recursos/imgLiquid-master/js/imgLiquid-min.js" );

   // Al final va nuestro script:
   wp_enqueue_script("app", $themeDir . "js/app.js", array('jquery') );

}

add_action( 'wp_enqueue_scripts', 'cargar_estilos' );
add_action( 'wp_enqueue_scripts', 'cargar_javascripts' );

?>
