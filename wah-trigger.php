<?php

/**
 * Wah Trigger
 */

defined('ABSPATH') or die('No script kiddies please!');

function wah_trigger()
{
?>
    <div id="wah-trigger" class="wah wah-fixed wah-cursor-pointer wah-borad-50">
        <i class='bx bx-cog'></i>
    </div>
<?php
}

add_action('wp_footer', 'wah_trigger', 100);
// add_action('admin_footer', 'wah_trigger');


function wah_backend_trigger()
{
    $enable_wah_in_backend = carbon_get_theme_option('wah_backend');
    if ($enable_wah_in_backend) {
        add_action('admin_footer', 'wah_trigger', 100);
    }
}
add_action('init', 'wah_backend_trigger', 101);
