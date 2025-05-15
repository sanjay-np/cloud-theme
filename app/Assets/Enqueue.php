<?php

namespace CloudTheme\Assets;

class Enqueue
{
    /**
     * add your custom theme styles 
     *
     * */
    public function styles()
    {
        /**
         * Import Cloud Child theme style sheet
         *
         * */
        wp_enqueue_style('cloud-theme-style', get_stylesheet_uri(), array('parent-style'));
        wp_enqueue_style('cloud-theme-css', get_stylesheet_directory_uri() . '/assets/styles/cloud-theme.css');
    }

    /**
     *
     * add your custom theme styles 
     *
     * */
    public function scripts()
    {
        /**
         * Import Custom JS Script
         *
         * */
        wp_enqueue_script('cloud-theme-script', get_stylesheet_directory_uri() . '/assets/scripts/main.js', ['jquery']);
    }
}
