<?php

namespace CloudTheme\Core;

use CloudTheme\Assets\Enqueue;

class Theme
{
    public function init()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueueFunc']);
        add_action('after_setup_theme', [$this, 'themeSupport']);
    }


    public function enqueueFunc()
    {
        $enqueue = new Enqueue();
        $enqueue->styles();
        $enqueue->scripts();
    }


    public function themeSupport()
    {
        /*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
        *
		*/
        load_theme_textdomain('cloud-theme', get_template_directory() . '/languages');

        /**
         * Add default posts and comments RSS feed links to head.
         *
         * */
        add_theme_support('automatic-feed-links');

        /*
		* Let WordPress manage the document title.
        *		
        **/
        add_theme_support('title-tag');

        /*
		* Enable support for Post Thumbnails on posts and pages.
		*
		*/
        add_theme_support('post-thumbnails');

        /**
         * This theme uses wp_nav_menu() in one location.
         *
         * */
        register_nav_menus(
            ['menu-1' => esc_html__('Header Menu', 'cloud-theme')],
            ['menu-2' => esc_html__('Footer Menu', 'cloud-theme')]
        );

        /*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
        add_theme_support(
            'html5',
            [
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            ]
        );

        /**
         * Add theme support for selective refresh for widgets.
         *
         * */
        add_theme_support('customize-selective-refresh-widgets');
    }
}
