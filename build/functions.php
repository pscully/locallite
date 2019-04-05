<?php
/**
 * Bulmapress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bulmapress
 */


require get_template_directory() . '/functions/bulmapress_navwalker.php';
require get_template_directory() . '/functions/bulmapress_helpers.php';
require get_template_directory() . '/functions/bulmapress_custom_query.php';

if ( ! function_exists( 'bulmapress_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bulmapress_setup() {
	require get_template_directory() . '/functions/base.php';
	require get_template_directory() . '/functions/post-thumbnails.php';
	require get_template_directory() . '/functions/navigation.php';
	require get_template_directory() . '/functions/content.php';
	require get_template_directory() . '/functions/pagination.php';
	require get_template_directory() . '/functions/widgets.php';
	require get_template_directory() . '/functions/search.php';
	require get_template_directory() . '/functions/scripts-styles.php';
}
endif;
add_action( 'after_setup_theme', 'bulmapress_setup' );

require get_template_directory() . '/functions/template-tags.php';
require get_template_directory() . '/functions/extras.php';
require get_template_directory() . '/functions/customizer.php';
require get_template_directory() . '/functions/jetpack.php';

remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );

function remove_cssjs_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
	$src = remove_query_arg( 'ver', $src );
	return $src;
   }
   add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
   add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );
