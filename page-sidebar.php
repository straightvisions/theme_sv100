<?php
	/*
	Template Name: Page with Sidebar
	Template Post Type: page
	*/
	
	echo $GLOBALS['sv100']->get_module( 'sv_content' ) ? $GLOBALS['sv100']->get_module( 'sv_content' )->load( array( 'template' => 'page_sidebar' ) ) : '';