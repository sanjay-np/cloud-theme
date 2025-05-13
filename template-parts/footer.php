<?php

use CloudTheme\Classes\ThemeFooter;

/**
 * Template part for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CloudTheme
 */


$footer = new ThemeFooter();
?>

<footer class="site-footer">
    <div class="main-footer">
        <?php $footer->footerMenu(); ?>
    </div>
    <div class="bottom-footer">
        <p><?php echo $footer->siteCopyright(); ?></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
