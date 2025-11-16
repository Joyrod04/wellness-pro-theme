<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id='main'>.
 *
 * @package Wellness_Pro_Services_Solutions
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header" role="banner">
        <div class="site-header">
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                ));
                ?>
            </nav><!-- #site-navigation -->
        </div><!-- .site-header -->
    </header><!-- #header -->
    <div id="main" class="site-main">