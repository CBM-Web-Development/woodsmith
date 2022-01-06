<?php 

add_action('after_setup_theme', 'woodsmith_menus');
function woodsmith_menus(){
	register_nav_menu('primary-right', __('Primary Menu (Right)', 'WOODSMITH_TEXTDOMAIN'));
	register_nav_menu('primary-left', __('Primary Menu (Left)', 'WOODSMITH_TEXTDOMAIN'));
}
