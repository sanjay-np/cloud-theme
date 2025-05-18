<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- #page -->
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', '_s'); ?></a>

        <!-- masthead -->
        <header id="masthead" class="site-header">

            <!-- site branding -->
            <div class="site-branding">
                <?php the_custom_logo(); ?>
                <?php if (is_front_page() && is_home()) : ?>
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                <?php endif; ?>
                <?php $blog_description = get_bloginfo('description', 'display'); ?>
                <?php if ($blog_description || is_customize_preview()) : ?>
                    <p class="site-description">
                        <?php
                        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
                        echo $_s_description;
                        ?>
                    </p>
                <?php endif; ?>
            </div>
            <!-- end site-branding -->

            <!-- #site navigation-->
            <nav id="site-navigation" class="main-navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', '_s'); ?></button>
                <?php
                wp_nav_menu([
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                ]);
                ?>
            </nav>
            <!-- #site-navigation -->
        </header>
        <!-- #masthead -->
