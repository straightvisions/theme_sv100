<?php
	/*
	Template Name: Post with Sidebar
	Template Post Type: post
	*/
	
	echo esc_html( $GLOBALS['sv_100']->get_module( 'sv_content' ) ? $GLOBALS['sv_100']->get_module( 'sv_content' )->load( array( 'template' => 'single_sidebar' ) ) : '' );