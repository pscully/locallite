<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmapress
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="is-fullheight">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<?php bulmapress_skip_link_screen_reader_text(); ?>
		<header id="header">
			<nav id="site-navigation" class="navbar" role="navigation" aria-label="main navigation">
				<div class="navbar-brand">
					<?php 
					  $custom_logo_id = get_theme_mod( 'custom_logo' );
					  $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					  $siteURL = get_site_url();
					?>
					<a class="navbar-item" href="<?php echo esc_url($siteURL); ?>">
						<img src="<?php echo esc_url($image[0]); ?>" alt="Website Logo" width="200" height="41">
					</a>

					<?php bulmapress_menu_toggle(); ?>
				</div>
				<div class="navbar-menu">
					<div class="navbar-start"></div>
					<?php bulmapress_navigation(); ?>
				</div>
			</nav>
		</header>

		<div id="content" class="site-content">