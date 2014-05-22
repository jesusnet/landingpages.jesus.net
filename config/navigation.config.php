<?php


$cp_config['nav_menu'][] = array(
	'name' => 'Menu in header',
	'location' => 'header_menu',
	'description' => 'Menu in header',
	'args' => array(
		'container' => null,
		'menu_class' => 'header_menu',
		'menu_id' => null
	)
);

$cp_config['nav_menu'][] = array(
	'name' => 'Menu in footer',
	'location' => 'footer_menu',
	'description' => 'Menu in footer',
	'args' => array(
		'container' => null,
		'menu_class' => 'footer_menu',
		'menu_id' => null
	)
);

$cp_config['nav_menu'][] = array(
	'name' => 'Menu in footer at bottom',
	'location' => 'footer_menu_bottom',
	'description' => 'Menu in footer at the bottom',
	'args' => array(
		'container' => null,
		'menu_class' => 'footer_menu_bottom',
		'menu_id' => null
	)
);

