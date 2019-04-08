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
			<nav id="site-navigation" class="navbar is-fixed-top" role="navigation" aria-label="main navigation">
				<div class="navbar-brand">
					<?php
					$custom_logo_id = get_theme_mod('custom_logo');
					$image = wp_get_attachment_image_src($custom_logo_id, 'full');
					$siteURL = get_site_url();
					$author = get_bloginfo('name');
					?>
					<a class="navbar-item" href="<?php echo esc_url($siteURL); ?>">
						<img src="<?php echo esc_url($image[0]); ?>" alt="<?php echo $author ?>" width="200" height="41">
					</a>

					<?php bulmapress_menu_toggle(); ?>

				</div>
				<div class="navbar-menu">
					<?php bulmapress_navigation(); ?>
					<div class="navbar-end">
						<div class="navbar-item">
							<div class="field is-grouped">
								<p class="control">
									<a class="button" target="_blank" href="tel:+1-<?php echo get_option('phone_number'); ?>">
										<span class="icon">
											<i class="fas fa-phone"></i>
										</span>
										<span>
											Call Now
										</span>
									</a>
								</p>
								<p class="control">
									<a class="button is-topbar" href="mailto:<?php echo get_option('email_address'); ?>">
										<span class="icon">
											<i class="fas fa-envelope-square"></i>
										</span>
										<span>
											Email Us
										</span>
									</a>
								</p>
							</div>
						</div>
					</div>
				</div>
	</div>
	</nav>
	</header>