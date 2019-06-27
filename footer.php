<?php
	echo esc_html( $GLOBALS['sv_100']->get_module( 'sv_footer' ) ? $GLOBALS['sv_100']->get_module( 'sv_footer' )->load() : '' );
	wp_footer();
?>
	</body>
</html>