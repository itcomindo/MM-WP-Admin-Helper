<?php

/**
 * Tools Main Container
 */

defined('ABSPATH') or die('No script kiddies please!');

function wah_tools_main_container()
{
?>


    <div id="tools-main-container" class="wah wah-fixed">

        <div id="wah-close-tools-container" class="wah-trigger-button wah-close wah-cursor-pointer wah-trigger-close" title="Close"></div>

        <ul id="tool-item-wr">
            <li id="wah-call-content-formater">Content Formater</li>
            <li id="wah-call-seo-tools">SEO Tools</li>
            <li id="wah-call-prism-creator-tool">Prism Creator</li>
            <li>HTML Entity</li>
        </ul>

    </div>


<?php
}


add_action('wp_footer', 'wah_tools_main_container', 100);
// add_action('admin_footer', 'wah_tools_main_container');

function wah_tools_main_container_in_backend()
{
    $enable_wah_in_backend = carbon_get_theme_option('wah_backend');
    if ($enable_wah_in_backend) {
        add_action('admin_footer', 'wah_tools_main_container', 100);
    }
}
add_action('init', 'wah_tools_main_container_in_backend', 101);
