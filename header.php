<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package localwp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'localwp'); ?></a>

        <header id="masthead" class="site-header ui container">
            <div class="site-branding">
                 <?php
                    $image = 'https://res.cloudinary.com/possibleweb/image/upload/c_scale,w_250/v1548815687/charlotte-SEO-WordPress-Expert.png';
                    ?>
                    <style type="text/css">
                        .custom-logo {
                            margin-top: 25px;
                            background-image: url(<?php echo esc_url( $image ); ?>);
                            /* -webkit-background-size: <?php echo absint( $image[1] )?>px;
                            background-size: <?php echo absint( $image[1] ) ?>px; */
                            height: 41px;
                            width: 395px;
                            background-repeat: no-repeat;
                            background-size: auto;
                        }
                    </style> 
                    <div class="ui image fluid">
                        <div class="custom-logo"></div>
                    </div>
                    </div> 
                    
                    <nav id = "site-navigation" class = "main-navigation ui secondary pointing menu">
                    <div class="right menu">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        ));
                        ?>
                    </div>
                    </nav><!-- #site-navigation -->
        </header><!-- #masthead -->

        <div id="content" class="site-content ui container">