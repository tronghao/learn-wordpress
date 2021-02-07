<?php

function ja_enqueue() {
	$uri = get_theme_file_uri();

    // xoa cache trinh duyet khi dev
  	// khi deploy edit define => false
    $version = JA_DEV_MODE ? time() : false;

	wp_register_style( 'main', $uri . '/assets/css/main.css', [], $version );
	//tham so thu 3: xac dinh cai nao tai truoc (datTen1 tai truoc datTen2). Tham so thu 3 co the k co cung dc
	
	wp_enqueue_style( 'main' );

}