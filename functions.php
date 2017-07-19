<?php

//add menu feature
register_nav_menus(array('main-nav'=>'Main Navigation'));

//remove admin bar from site
add_filter('show_admin_bar', '__return_false');

//add custom image size. add image size b4 uploading images
add_image_size('custom', 480, 320, false);

//insert styles
function add_styles(){
	wp_enqueue_style('bootstrap.min-style', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css');
}
add_action('wp_enqueue_scripts', 'add_styles');

//insert scripts
function add_scripts(){
	wp_enqueue_script('jsQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '1.12.4', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);
	wp_enqueue_script('respond', get_template_directory_uri() . '/js/respond.min.js', array(), false, true);
	wp_enqueue_script('sidebarMenu', get_template_directory_uri() . '/js/sidebarMenu.js', array(), false, true);
	wp_enqueue_script('viewportchecker', get_template_directory_uri() . '/js/viewportchecker.js', array(), false, true);
	wp_enqueue_script('animationTrigger', get_template_directory_uri() . '/js/animationTrigger.js', array(), false, true);
	wp_enqueue_script('scroll', get_template_directory_uri() . '/js/scrolling.js', array(), false, true);
	wp_enqueue_script('easing', get_template_directory_uri() . '/js/jquery.easing.min.js', array(), false, true);	
}
add_action('wp_enqueue_scripts', 'add_scripts');

//add page-scroll to anchor tas
function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="page-scroll"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');

?>