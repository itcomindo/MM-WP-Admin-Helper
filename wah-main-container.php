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
