<?php

/**
* First, let's set the maximum content width based on the theme's design and stylesheet.
* This will limit the width of all uploaded images and embeds.
*/
if ( ! isset( $content_width ) )
$content_width = 800; /* pixels */

if (! function_exists( 'medialine_themes_setup' ) ) :
/**
* Sets up theme defaults and registers support for various WordPress features.
*
* Note that this function is hooked into the after_setup_theme hook, which runs
* before the init hook. The init hook is too late for some features, such as indicating
* support post thumbnails.
*/

function medialine_themes_setup(){

/**
* Make theme available for translation.
* Translations can be placed in the /languages/ directory.
*/
load_theme_textdomain( 'medialine', get_template_directory() . '/languages' );

/**
* Add default posts and comments RSS feed links to <head>.
*/
add_theme_support( 'automatic_feed_links' );

/**
* Enable support for post thumbnails and featured images.
*/
add_theme_support( 'post-thumbnails' );

/**
* Enable support for the following post formats:
* aside, gallery, quote, image, and video
*/
add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

/**
* Add support for two custom navigation menus.
*/
register_nav_menus( array(
'primary'   => __( 'Primary Menu', 'medialine' ),
'secondary' => __('Secondary Menu', 'meidaline' )
) );

};
add_action( 'after_setup_theme', 'medialine_themes_setup' );
endif;

/**
*Including CSS & JavaScript
*/

function medialine_themes_script(){
wp_enqueue_style( 'Main style', get_template_directory_uri().'/style.css' );
//foundation min
wp_enqueue_style( 'foundation_min', get_template_directory_uri().'/css/foundation.min.css' );
};
add_action( 'wp_enqueue_scripts', 'medialine_themes_script');

//incloads Themes Script
function medialine_script_themes(){

  wp_enqueue_script( 'jquery', get_template_directory_uri().'/js/vendor/jquery.js' ,array('jqurey'), false );

  wp_enqueue_script( 'foundation_min', get_template_directory_uri().'/js/vendor/foundation.min.js' , false );

};
add_action( 'wp_enqueue_scripts' , 'medialine_script_themes' );
?>
