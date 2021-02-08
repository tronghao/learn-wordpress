<?php
//setup
define( 'JA_DEV_MODE', true );

//includes
include( get_theme_file_path('/includes/front/enqueue.php') );
include( get_theme_file_path('/includes/setup.php') );
include( get_theme_file_path('/includes/custom-nav.php') );

//hooks
add_action('wp_enqueue_scripts', 'ja_enqueue');
add_action( 'after_setup_theme', 'ja_setup_theme' );

//shortcodes