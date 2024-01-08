<?php

/**
 *  Wah Container
 */

defined('ABSPATH') or die('No script kiddies please!');

function wah_container()
{
?>
    <div id="wah-main-container" class="wah wah-fixed">
        <div id="wah-close-container" class="wah-trigger-button wah-close wah-cursor-pointer wah-trigger-close" title="Close"></div>
        <!-- wah top -->
        <div id="wah-top">
            <?php
            wah_box_tools();
            ?>
        </div>

        <!-- wah bot -->
        <div id="wah-bot">
            <div class="wah-shortcuts wah-bg-important">
                <ul class="wah-no-border">
                    <li><a href="/wp-admin/">Go to Admin</a></li>
                </ul>
            </div>
            <?php
            wah_post_shortcuts();
            wah_page_shortcuts();
            wah_media_shortcuts();
            wah_comment_shortcuts();
            wah_appearance_shortcuts();
            wah_plugin_shortcuts();
            wah_user_shortcuts();
            wah_tools_shortcuts();
            wah_settings_shortcuts();
            ?>
        </div>
    </div>
<?php
}

add_action('wp_footer', 'wah_container', 100);
// add_action('admin_footer', 'wah_container');

function wah_maih_container_in_backend()
{
    $enable_wah_in_backend = carbon_get_theme_option('wah_backend');
    if ($enable_wah_in_backend) {
        add_action('admin_footer', 'wah_container', 100);
    }
}
add_action('init', 'wah_maih_container_in_backend', 101);


//enabling in backend
function wah_in_backend()
{
    $enable_wah_in_backend = carbon_get_theme_option('wah_backend');
    if ($enable_wah_in_backend) {
        // add_action('admin_footer', 'wah_container', 100);
        //load in admin
        // add_action('admin_init', 'wah_container');
    }
}
// add_action('init', 'wah_in_backend');






function wah_box_tools()
{
?>
    <ul class="wah-box-tool-wr">
        <li id="wah-call-tools-main-container" class="wah-box-tool"><?php echo wah_icon_tools(); ?></li>
        <li class="wah-box-tool"><?php echo wah_icon_style(); ?></li>
        <li class="wah-box-tool"><?php echo wah_icon_chat(); ?></li>
    </ul>
<?php
}
