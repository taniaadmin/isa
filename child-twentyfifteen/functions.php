<?php
add_action( 'wp_enqueue_scripts', 'child_scripts' );
function child_scripts() {
	//wp_enqueue_style( $script_name, get_stylesheet_uri() );
	wp_enqueue_style( "bootstrap", get_stylesheet_directory_uri().'/css/bootstrap.min.css' );	
	wp_enqueue_script( 'bootstrap' , get_stylesheet_directory_uri() .'/js/bootstrap.min.js', array(),'', ture );					
}

function child_search_form(  ) {
	$form = '<form role="search" method="get" id="searchform" class="searchform" action="' . home_url( '/' ) . '" >
	<div class="input-group">	
	<input type="text" class="form-control" value="' . get_search_query() . '" name="s" id="s" />
	<span class="input-group-btn">
	<button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
	</span>	
	</div>
	</form>';

	return $form;
}

add_filter( 'get_search_form', 'child_search_form' );


register_nav_menus( array(
	'footer_menu' => 'Footer Menu',
) );

