<?php

namespace CloudTheme\Classes;

class Template
{
    /**
     * Load the header template part
     */
    public function getHeader()
    {
        get_template_part('template-parts/header');
    }


    public function getContent()
    {
        get_template_part('template-parts/content');
    }

    /**
     * Load the footer template part
     */
    public function getFooter()
    {
        get_template_part('template-parts/footer');
    }
}
