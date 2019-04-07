<?php

require get_template_directory() . '/functions/bulmapress_navwalker.php';
require get_template_directory() . '/functions/bulmapress_helpers.php';
require get_template_directory() . '/functions/bulmapress_custom_query.php';
require get_template_directory() . '/functions/panel.php';
require get_template_directory() . '/functions/post_types.php';

if (!function_exists('bulmapress_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function localwp_setup()
	{
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
add_action('after_setup_theme', 'localwp_setup');

require get_template_directory() . '/functions/template-tags.php';
require get_template_directory() . '/functions/extras.php';
require get_template_directory() . '/functions/customizer.php';
require get_template_directory() . '/functions/jetpack.php';
require get_template_directory() . '/functions/speed.php';


