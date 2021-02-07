<?php
//setup
define( 'JA_DEV_MODE', true );

//includes
include( get_theme_file_path('/includes/front/enqueue.php') );

//hooks
add_action('wp_enqueue_scripts', 'ja_enqueue');

//shortcodes