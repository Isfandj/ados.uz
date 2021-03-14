<?php 
if (!defined('ABSPATH')) {
		exit;
	}

register_nav_menus([
	'primary' => 'Primary',
	'secondary' => 'Secondary'
	]
);
function ados_primary_menu(){
	wp_nav_menu(
		array(
			'theme_location' => 'primary',
			'menu_id'        => 'primary-menu',
			'menu_class'        => 'top_bar_nav',
			'container_class' => 'ml-auto mr-auto'
		)
	);
}
 










?>
