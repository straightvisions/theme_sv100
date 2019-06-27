<?php
	/*
	Template Name: Page with Sidebar
	Template Post Type: page
	*/
	
	echo esc_html( $GLOBALS['sv_100']->get_module( 'sv_content' ) ? $GLOBALS['sv_100']->get_module( 'sv_content' )->load( array( 'template' => 'page_sidebar' ) ) : '' );