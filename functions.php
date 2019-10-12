<?php
	if(!class_exists('\sv_dependencies\init')){
		require_once( 'lib/core_theme/dependencies/sv_dependencies.php' );
	}
	
	if ( $GLOBALS['sv_dependencies']->set_instance_name( 'SV 100' )->check_php_version() ) {
		require_once( get_template_directory() . '/lib/core_theme/core_theme.php' );
	} else {
		$GLOBALS['sv_dependencies']->php_update_notification()->prevent_theme_activation();
	}



if(did_action('sv100_companion_freemius_loaded')){
	sv100_freemius();
}else{
	add_action('sv100_companion_freemius_loaded','sv100_freemius');
}

function sv100_freemius(){
	global $sv100_freemius;

	if ( ! isset( $sv100_freemius ) ) {
		$sv100_freemius = fs_dynamic_init( array(
			'id'                  => '4141',
			'slug'                => 'sv100',
			'type'                => 'theme',
			'public_key'          => 'pk_8b2d100933f4a81fe4f81c7f30274',
			'is_premium'          => false,
			'has_addons'          => false,
			'has_paid_plans'      => false,
			'menu'                => array(
				'slug'           => 'sv100',
				'account'        => false,
				'parent'         => array(
					'slug' => 'straightvisions',
				),
			),
		) );
	}

	do_action( 'sv100_freemius_loaded' );

	return $sv100_freemius;
}