<?php
	/*
	Template Name: Post with Sidebar
	Template Post Type: post
	*/
	
	echo $GLOBALS['sv100']->get_module( 'sv_content' ) ? $GLOBALS['sv100']->get_module( 'sv_content' )->load( array( 'template' => 'single_sidebar' ) ) : '';