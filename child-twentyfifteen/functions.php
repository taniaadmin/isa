<?php

function child_scripts() {
	//wp_enqueue_style( $script_name, get_stylesheet_uri() );
	$scripts = array(
		array(
			'name' => 'bootstrap',
			'path' => 'bootstrap.min.js'
		)
	);
		foreach ($scripts as $script ) {
			wp_enqueue_script( $script['name'] , get_stylesheet_directory_uri() .'/js/'.$script['path']);					
		}
}

wp_enqueue_style( $script_name, get_template_directory_uri().'/css/bootstrap.min.css' );
add_action( 'wp_enqueue_scripts', 'child_scripts' );