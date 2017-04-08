<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package delivery
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'delivery' ); ?></a>
    <section class="intro">
        <?php
        $query = new WP_Query( array('post_type' => 'slides-intro', 'posts_per_page' => 100 ) );
        if ($query->have_posts()):?>
            <div class="owl-carousel intro-slides">
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <div class="intro-slide" <?php

                    if ( $thumbnail_id = get_post_thumbnail_id() ) {
                        if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, 'normal-bg' ) )
                            printf( ' style="background:  url(%s) no-repeat;"', $image_src[0] );
                    }
                    ?>>
                        <div class="container">
                            <header id="masthead" class="site-header" role="banner">
                                <div class="container">
                                    <h1 class="logo"><?php the_custom_logo(); ?></h1>
                                    <ul class="social-links">
                                        <li>
                                            <a class="twitter" href="<?php echo get_theme_mod('social_links_twitter'); ?>">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="facebook" href="<?php echo get_theme_mod('social_links_facebook'); ?>">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="google-plus" href="<?php echo get_theme_mod('social_links_google'); ?>">
                                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                    <nav id="site-navigation" class="main-navigation" role="navigation">
                                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa fa-bars" aria-hidden="true"></i></button>
                                        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'nav-menu' ) ); ?>
                                    </nav><!-- #site-navigation -->
                                </div>

                            </header><!-- #masthead -->

                            <h3 class="title title-small"><?php the_title(); ?></h3>
                            <p class="text"><?php the_content(); ?></p>
                            <a class="btn-border" href="<?php the_permalink(); ?>">Portfolio</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; wp_reset_postdata(); ?>

    </section>

    <div id="content" class="site-content">