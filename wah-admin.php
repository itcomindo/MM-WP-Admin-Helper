<?php

/**
 * WHATS?
 */

defined('ABSPATH') or die('No script kiddies please!');

function mm_admin_helper()
{
    $checked = get_option('mm_wp_admin_helper') == 'active' ? 'checked' : '';
?>
    <div id="wah-admin-helper" style="margin-top: 20px;">
        <div id="wah-admin-helper-left">
            <input type="checkbox" id="mm-enable-admin-helper" name="enable_admin_helper" <?php echo $checked; ?>>
            <label for="mm-enable-admin-helper">Show WAH</label>
        </div>
        <button id="mm-save-admin-helper">Save</button>
    </div>
<?php
}
add_action('admin_footer', 'mm_admin_helper');


function mm_save_admin_helper_option()
{
    if (isset($_POST['enable_admin_helper'])) {
        $value = $_POST['enable_admin_helper'] === 'true' ? 'active' : 'inactive';
        update_option('mm_wp_admin_helper', $value);
    }
    wp_die(); // Always end AJAX handlers with wp_die()
}
add_action('wp_ajax_mm_save_admin_helper', 'mm_save_admin_helper_option');


function mm_admin_helper_scripts()
{
?>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#mm-save-admin-helper').on('click', function(e) {
                e.preventDefault();
                var enableAdminHelper = $('#mm-enable-admin-helper').is(':checked');
                $.post(ajaxurl, {
                    action: 'mm_save_admin_helper',
                    enable_admin_helper: enableAdminHelper
                });
            });
        });
    </script>
<?php
}
add_action('admin_footer', 'mm_admin_helper_scripts');
