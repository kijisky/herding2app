<?php
add_action( 'wp_enqueue_scripts', 'register_styles' );
add_action( 'after_setup_theme', 'theme_register_nav_menu');
// add_action( 'widgets_init', 'register_my_widgets' );

function register_styles() {
  wp_enqueue_style(  'style', get_stylesheet_uri() );
}

function theme_register_nav_menu() {
	register_nav_menu( 'top_menu', 'Главное верхнее');
	register_nav_menu( 'sidebar', 'Боковое основное меню');
	register_nav_menu( 'sidebar2', 'Моё');
	register_nav_menu( 'sidebar3', 'План');
	register_nav_menu( 'footer_menu', 'Нижнее меню');
	register_nav_menu( 'footer_menu2', 'Иконки');
}

