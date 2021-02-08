<?php

function ja_widgets() {
	register_sidebar([
		'name'		=> __('sidebarPrimary', 'Udemy'),
		'id'		=> 'js_sidebar_custom',
		'description'	=> __('sidebar primary', 'Udemy'),
		'before_widget'	=> '<div id="%1$s" class="widget cleafix %2$s"',
		'after_widget'	=> '</div>',
		'before_title'	=> '<h4>',
		'after_title'	=> '</h4>'
	]);
}