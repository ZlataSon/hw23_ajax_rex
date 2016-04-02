<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HW21_blog_name
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site wrapper">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hw21_blog_name' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <div class="container-fluid">
            <div class="site-branding">
                <?php if ( get_header_image() ) : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
                    </a></h1>
                <?php endif; // End header image check. ?>
            </div><!-- .site-branding -->
            <div class="search-box">
                <?php get_search_form(); ?>
            </div>
        </div>
        <div class="container-fluid menu">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <button class="menu-toggle" aria-controls="primary-menu"
                        aria-expanded="false"><span class="fa fa-navicon"></span></button>
                <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
            </nav><!-- #site-navigation -->
        </div>

	</header><!-- #masthead -->

    <?php
    if (is_category() || is_single()) {
        ?>
        <div class="category-block">
            <div class="container-fluid">
                <ul class="category-list">
                    <?php
                    $args = array(
                        'title_li'           => __( '' ),
                        'current_category'   => 1,
                        'taxonomy'           => 'category'
                    );
                    wp_list_categories( $args );
                    ?>
                </ul>
            </div>
        </div>
        <?php
    }
    ?>

	<div id="content" class="site-content">

        <
