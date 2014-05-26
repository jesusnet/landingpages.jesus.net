<?php

$cp_config['nav_menu'][] = array(
	'name' => __cp('Menu in header', 'general'),
	'location' => 'header_menu',
	'description' => __cp('Menu in header', 'general'),
	'args' => array(
		'container' => null,
		'menu_class' => 'header_menu',
		'menu_id' => null
	)
);

$cp_config['nav_menu'][] = array(
	'name' => __cp('Menu in footer', 'general'),
	'location' => 'footer_menu',
	'description' => __cp('Menu in footer', 'general'),
	'args' => array(
		'container' => null,
		'menu_class' => 'footer_menu',
		'menu_id' => null
	)
);

