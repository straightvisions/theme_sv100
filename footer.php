<?php
	echo $GLOBALS['sv100']->get_module( 'sv_footer' )
		? $GLOBALS['sv100']->get_module( 'sv_footer' )->load()
		: '';
	wp_footer();
?>
	</body>
</html>