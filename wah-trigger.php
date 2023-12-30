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
