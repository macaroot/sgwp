<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo( 'name' ); ?></title>
        <!-- WordPress inserts default things e.g. for plugins -->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <!-- body container -->
        <div class="container">

            <!-- site-header -->
            <header class="site-header">

                <nav class="site-nav">
                    <?php
                    $args = array(
                        'theme_location' => 'primary'
                    );
                     ?>
                    <!-- wp_nab_menu creates ul>li nav menu -->
                    <?php wp_nav_menu( $args ); ?>
                </nav>

            </header><!-- /site-header -->

            <!-- page content binder -->
            <div class="binder">
