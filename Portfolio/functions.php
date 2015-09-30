<?php

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' ); 

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' => __( 'Primary Menu' ),
			'footer-menu' => __( 'Footer Menu' )
			)
	);
	
}

add_action( 'init', 'register_theme_menus');

function wpc_theme_styles() {

	wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'wpc_theme_styles' );

function wpc_theme_js() {

	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );

}
add_action( 'wp_enqueue_scripts', 'wpc_theme_js' );


function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer right',
		'id'            => 'footer_right',
		'before_widget' => '<aside id="tag_cloud-2" class="widget widget_tag_cloud">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );


    function load_fonts() {
            wp_register_style('googleFonts', 'https://fonts.googleapis.com/css?family=Roboto');
            wp_enqueue_style( 'googleFonts');
        }
    
    add_action('wp_print_styles', 'load_fonts');

?>


