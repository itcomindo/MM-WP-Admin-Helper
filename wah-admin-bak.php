<?php

/**
 * WHATS?
 */

defined('ABSPATH') or die('No script kiddies please!');

function mm_admin_helper()
{
    // Hanya tampil di halaman Dashboard
    $screen = get_current_screen();
    if ($screen->id != "dashboard") {
        return;
    }

?>
    <div id="wah-admin-helper">
        <input type="checkbox" id="wah-enable-admin-helper" name="enable_admin_helper">
        <label for="wah-enable-admin-helper">Enabling Admin Helper</label>
        <button id="wah-save-admin-helper">Save</button>
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#mm-save-admin-helper').on('click', function() {
                if (jQuery('#mm-enable-admin-helper').is(':checked')) {
                    return false;
                }
            });
        });
    </script>
<?php
}
add_action('admin_footer', 'mm_admin_helper');
