<?php 

function custom_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts_with_jquery' );

add_filter(wp_nav_menu_items, add_login_logout_link, 10, 2);
function add_login_logout_link($items, $args) {

ob_start();
wp_loginout(‘index.php’);
$loginoutlink = ob_get_contents();
ob_end_clean();

$items .= ”. $loginoutlink .”;

return $items;
}

?>