<?php

function load_css() {
	wp_register_style('fontawesome.min.css', get_template_directory_uri() . '/css/fontawesome.min.css');
  wp_enqueue_style('fontawesome.min.css');
  
	wp_register_style('font-Lora', 'https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic');
  wp_enqueue_style('font-Lora');
  
	wp_register_style('font-Open-Sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
	wp_enqueue_style('font-Open-Sans');

	wp_register_style('bootstrap.min.css', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('bootstrap.min.css');

	wp_register_style('/css/main.css', get_template_directory_uri() . '/css/main.css');
	wp_enqueue_style('/css/main.css');
	
	wp_register_style('/style.css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('/style.css');
}
// add_action('wp_enqueue_scripts', 'load_css');


function load_js() {
	wp_register_script('jQuery', get_template_directory_uri() . '/js/jquery.min.js', array(), false, true);
  wp_enqueue_script('jQuery');
  
	wp_register_script('Bootstrap-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), false, true);
	wp_enqueue_script('Bootstrap-js');

	wp_register_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);
	wp_enqueue_script('main-script');

	if(is_page('contact')) {
		wp_register_script('jqBootstrapValidation', get_template_directory_uri() . '/js/jqBootstrapValidation.js', array('jquery'), false, true);
		wp_enqueue_script('jqBootstrapValidation');

		wp_register_script('contact_me', get_template_directory_uri() . '/js/contact_me.js', array('jquery'), false, true);
		wp_enqueue_script('contact_me');
	}

}
// add_action('wp_enqueue_scripts', 'load_js');