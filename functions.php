<?php

// require_once('blog_piece.php');
// require_once('front-page.php');

function start_up_files() {
  wp_enqueue_script(
    'your-script', // name your script so that you can attach other scripts and de-register, etc.
    get_template_directory_uri() . '/script.js', // this is the location of your script file
    array('jquery') // this array lists the scripts upon which your script depends
);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

  wp_enqueue_script('ajax', get_template_directory_uri() . '/scripts.js',  NULL, true);
  // wp_localize_scripts('ajax' , 'wpAjax', array('ajaxurl' => admin_url('admin-ajax.php')));

  if (strstr($_SERVER['SERVER_NAME'], 'catherine-dixon.local')) {
    wp_enqueue_script('CDixon', 'http://localhost:3000/bundled.js', NULL, '1.0', true);
  } else {
    wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/undefined'), NULL, '1.0', true);
    wp_enqueue_script('main-university-js', get_theme_file_uri('/bundled-assets/scripts.276446dbdca2419f9b37.js'), NULL, '1.0', true);
    wp_enqueue_style('our-main-styles', get_theme_file_uri('/bundled-assets/undefined'));
  }
  
}

add_action('wp_enqueue_scripts', 'start_up_files');

function theme_styles()  
{ 

	// Example of loading a jQuery slideshow plugin just on the homepage
	wp_register_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css' );

	// Load all of the styles that need to appear on all pages
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css' );
	wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css' );

	// Conditionally load the FlexSlider CSS on the homepage
	if(is_page('home')) {
		wp_enqueue_style('flexslider');
	}

}
add_action('wp_enqueue_scripts', 'theme_styles');
