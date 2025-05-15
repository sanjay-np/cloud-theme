<?php

namespace CloudTheme\Core;

use CloudTheme\Assets\Enqueue;

class Theme
{
    public function init()
    {
        add_action('wp_enqueue_scripts', [$this, 'enqueueFunc']);
    }


    public function enqueueFunc()
    {
        $enqueue = new Enqueue();
        $enqueue->styles();
        $enqueue->scripts();
    }
}
