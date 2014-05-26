<?php

class CP_Disable_editor{

	public function __construct() {
		
		add_action( 'init', array($this, 'my_custom_init') );
	}
	
	function my_custom_init() {
		remove_post_type_support( 'page', 'editor' );
	}

// class end
}
