<?php

namespace CloudTheme\Classes;

class ThemeFooter
{
    public function siteCopyright()
    {
        return '© ' . date('Y') . ' ' . get_bloginfo('name');
    }


    public function footerMenu()
    {
        return wp_nav_menu([
            'theme_location' => 'footer',
            'menu_id'        => 'footer-menu',
        ]);
    }
}
