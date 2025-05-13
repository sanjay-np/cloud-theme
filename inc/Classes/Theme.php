<?php

namespace CloudTheme\Classes;

class Theme
{
    public function init()
    {
        add_action('wp_enqueue_scripts', [$this, 'stylesAndScripts']);
    }

    public function stylesAndScripts()
    {
        $this->enqueueStyleSheets();
        $this->enqueueScripts();
    }

    /**
     * add your custom theme styles 
     *
     * */
    public function enqueueStyleSheets()
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
    public function enqueueScripts()
    {
        /**
         * Import Custom JS Script
         *
         * */
        wp_enqueue_script('cloud-theme-script', get_stylesheet_directory_uri() . '/assets/scripts/scripts.js', ['jquery']);
    }
}
