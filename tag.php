<?php echo $GLOBALS['sv100']->get_module( 'sv_content' )
	? $GLOBALS['sv100']->get_module( 'sv_content' )->load( array( 'template' => 'tag' ) )
	: '';