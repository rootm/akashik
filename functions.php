<?php 

require get_template_directory().'/inc/function-adminPage.php';

function akashik_loadScripts(){
	//register style sheets
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '3.3.3', all );
	wp_enqueue_style( 'custom_css', get_template_directory_uri().'/css/main.css', array(), '3.3.3', all );
	wp_enqueue_style( 'style_css', get_template_directory_uri().'/css/style.css', array(), '3.3.3', all );
	//register script files
	wp_enqueue_script( 'bootstrapScript', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
	
	wp_enqueue_script( 'jQuery', get_template_directory_uri().'/js/jQuery.min.js', array('jquery'), '3.3.6', true );
	wp_enqueue_script( 'particle', get_template_directory_uri().'/particles.js', array('jquery'), '3.3.6', true );
	wp_enqueue_script( 'indexpScript', get_template_directory_uri().'/js/index.js', array('jquery'), '3.3.6', true );
}
add_action( 'wp_enqueue_scripts','akashik_loadScripts' );

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}