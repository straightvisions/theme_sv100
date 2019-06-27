<?php
	require_once( 'lib/core_theme/dependencies/sv_dependencies.php' );
	
	if ( $GLOBALS['sv_dependencies']->set_instance_name( 'SV 100' )->check_php_version() ) {
		require_once( get_template_directory() . '/lib/core_theme/core_theme.php' );
	} else {
		$GLOBALS['sv_dependencies']->php_update_notification()->prevent_theme_activation();
	}