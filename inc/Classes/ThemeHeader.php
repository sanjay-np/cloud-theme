<?php

namespace CloudTheme\Classes;

class ThemeHeader
{
    public function siteBranding() {}

    public function siteTitle()
    {
        return get_bloginfo('name');
    }

    public function siteLogo() {}

    public function siteDescription()
    {
        return get_bloginfo('description');
    }

    public function siteNav()
    {
        return wp_nav_menu([
            'theme_location' => 'primary',
            'menu_id'        => 'primary-menu',
        ]);
    }
}
