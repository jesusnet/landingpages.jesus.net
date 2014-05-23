<?php 

add_action( 'init', 'my_custom_init' );
function my_custom_init() {
	remove_post_type_support( 'page', 'editor' );
}