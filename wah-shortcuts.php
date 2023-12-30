<?php

/**
 * Shortcuts
 */

defined('ABSPATH') or die('No script kiddies please!');


function wah_get_admin_url()
{
    $admin_path = str_replace('\\', '/', ABSPATH) . 'wp-admin/';

    // Mengubah path absolut menjadi URL relatif
    $relative_path = str_replace(rtrim($_SERVER['DOCUMENT_ROOT'], '/'), '', $admin_path);
    $relative_path = ltrim($relative_path, '/');

    // Menambahkan URL situs ke path relatif
    $admin_url = get_site_url(null, $relative_path);

    return $admin_url;
}





/**
 * Post Shortcuts
 */
function wah_post_shortcuts()
{
    if (carbon_get_theme_option('wah_post')) {
        $admin_url = wah_get_admin_url();
?>
        <div class="wah-shortcuts">
            <div data-shortcut="wah-post" class="wah-shortcut-trigger">
                <h3 class="wah-head">Post</h3>
            </div>
            <div id="wah-post" class="wah-shortcut-container">
                <ul>
                    <?php
                    //to all posts
                    echo '<li><a href="' . $admin_url . 'edit.php">All Posts</a></li>';
                    //to add new post
                    echo '<li><a href="' . $admin_url . 'post-new.php">Add New Post</a></li>';
                    //to categories
                    echo '<li><a href="' . $admin_url . 'edit-tags.php?taxonomy=category">Categories Page</a></li>';
                    //to tags
                    echo '<li><a href="' . $admin_url . 'edit-tags.php?taxonomy=post_tag">Tags Page</a></li>';
                    //if is_single echo to edit post
                    if (is_single()) {
                        echo '<li><a href="' . $admin_url . 'post.php?post=' . get_the_ID() . '&action=edit">Edit Post</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    <?php
    }
}

function testxxx()
{
    ?>
    <div class="wah-shortcuts">
        <div data-shortcut="wah-page" class="wah-shortcut-trigger">
            <h3 class="wah-head">Page</h3>
        </div>
        <div id="wah-page" class="wah-shortcut-container">
            <ul>
                <?php
                $admin_url = wah_get_admin_url();
                //to all posts
                echo '<li><a href="' . $admin_url . 'edit.php">All Pages</a></li>';
                //to add new post
                echo '<li><a href="' . $admin_url . 'post-new.php">Add New Post</a></li>';
                //to categories
                echo '<li><a href="' . $admin_url . 'edit-tags.php?taxonomy=category">Categories Page</a></li>';
                //to tags
                echo '<li><a href="' . $admin_url . 'edit-tags.php?taxonomy=post_tag">Tags Page</a></li>';
                //if is_single echo to edit post
                if (is_single()) {
                    echo '<li><a href="' . $admin_url . 'post.php?post=' . get_the_ID() . '&action=edit">Edit Post</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
    <?php
}


/**
 * Page Shortcuts
 */
function wah_page_shortcuts()
{
    if (carbon_get_theme_option('wah_page')) {

    ?>
        <div class="wah-shortcuts">
            <div data-shortcut="wah-page" class="wah-shortcut-trigger">
                <h3 class="wah-head">Page</h3>
            </div>
            <div id="wah-page" class="wah-shortcut-container">
                <ul>
                    <?php
                    $admin_url = wah_get_admin_url();
                    //to all pages
                    echo '<li><a href="' . $admin_url . 'edit.php?post_type=page">All Pages</a></li>';
                    //to add new page
                    echo '<li><a href="' . $admin_url . 'post-new.php?post_type=page">Add New Page</a></li>';
                    //if is_page echo to edit page
                    if (is_page()) {
                        echo '<li><a href="' . $admin_url . 'post.php?post=' . get_the_ID() . '&action=edit">Edit Page</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    <?php






    }
}


/**
 * Media Shortcuts
 */
function wah_media_shortcuts()
{
    if (carbon_get_theme_option('wah_media')) {


    ?>
        <div class="wah-shortcuts">
            <div data-shortcut="wah-page" class="wah-shortcut-trigger">
                <h3 class="wah-head">Media</h3>
            </div>
            <div id="wah-page" class="wah-shortcut-container">
                <ul>
                    <?php
                    $admin_url = wah_get_admin_url();
                    //to media library
                    echo '<li><a href="' . $admin_url . 'upload.php">Media Library</a></li>';
                    //to add new media
                    echo '<li><a href="' . $admin_url . 'media-new.php">Add New Media</a></li>';
                    ?>
                </ul>
            </div>
        </div>
    <?php
    }
}


/**
 * Comment Shortcuts
 */
function wah_comment_shortcuts()
{
    if (carbon_get_theme_option('wah_comment')) {
    ?>
        <div class="wah-shortcuts">
            <div data-shortcut="wah-page" class="wah-shortcut-trigger">
                <h3 class="wah-head">Comments</h3>
            </div>
            <div id="wah-page" class="wah-shortcut-container">
                <ul>
                    <?php
                    $admin_url = wah_get_admin_url();
                    //to comments
                    echo '<li><a href="' . $admin_url . 'edit-comments.php">Comments</a></li>';
                    ?>
                </ul>
            </div>
        </div>
    <?php
    }
}


/**
 * Appearance Shortcuts
 */
function wah_appearance_shortcuts()
{
    if (carbon_get_theme_option('wah_appearance')) {
    ?>
        <div class="wah-shortcuts">
            <div data-shortcut="wah-page" class="wah-shortcut-trigger">
                <h3 class="wah-head">Appearances</h3>
            </div>
            <div id="wah-page" class="wah-shortcut-container">
                <ul>
                    <?php
                    $admin_url = wah_get_admin_url();
                    //to themes
                    echo '<li><a href="' . $admin_url . 'themes.php">All Themes</a></li>';
                    //to customize
                    echo '<li><a href="' . $admin_url . 'customize.php">Customize Theme</a></li>';
                    //to editor
                    echo '<li><a href="' . $admin_url . 'theme-editor.php">Editor</a></li>';
                    //if theme support menus echo to menus
                    if (current_theme_supports('menus')) {
                        echo '<li><a href="' . $admin_url . 'nav-menus.php">Menus</a></li>';
                    }
                    //if theme support widgets echo to widgets
                    if (current_theme_supports('widgets')) {
                        echo '<li><a href="' . $admin_url . 'widgets.php">Widgets</a></li>';
                    }
                    //if theme support background echo to background
                    if (current_theme_supports('custom-background')) {
                        echo '<li><a href="' . $admin_url . 'themes.php?page=custom-background">Background</a></li>';
                    }
                    //if theme support header echo to header
                    if (current_theme_supports('custom-header')) {
                        echo '<li><a href="' . $admin_url . 'themes.php?page=custom-header">Header</a></li>';
                    }
                    //if theme support logo echo to logo
                    if (current_theme_supports('custom-logo')) {
                        echo '<li><a href="' . $admin_url . 'customize.php?autofocus[control]=custom_logo">Logo</a></li>';
                    }
                    //if theme support colors echo to colors
                    if (current_theme_supports('editor-color-palette')) {
                        echo '<li><a href="' . $admin_url . 'customize.php?autofocus[control]=editor_color_palette">Colors</a></li>';
                    }

                    ?>

                </ul>
            </div>
        </div>
    <?php
    }
}


/**
 * Plugin Shortcuts
 */

function wah_plugin_shortcuts()
{
    if (carbon_get_theme_option('wah_plugin')) {
    ?>
        <div class="wah-shortcuts">
            <div data-shortcut="wah-page" class="wah-shortcut-trigger">
                <h3 class="wah-head">Plugins</h3>
            </div>
            <div id="wah-page" class="wah-shortcut-container">
                <ul>
                    <?php
                    $admin_url = wah_get_admin_url();
                    //to plugins
                    echo '<li><a href="' . $admin_url . 'plugins.php">Plugins</a></li>';
                    //to add new plugin
                    echo '<li><a href="' . $admin_url . 'plugin-install.php">Add New Plugin</a></li>';
                    //to editor
                    echo '<li><a href="' . $admin_url . 'plugin-editor.php">Editor</a></li>';
                    ?>
                </ul>
            </div>
        </div>
    <?php
    }
}


/**
 * User Shortcuts
 */
function wah_user_shortcuts()
{
    if (carbon_get_theme_option('wah_user')) {
    ?>
        <div class="wah-shortcuts">
            <div data-shortcut="wah-page" class="wah-shortcut-trigger">
                <h3 class="wah-head">Users</h3>
            </div>
            <div id="wah-page" class="wah-shortcut-container">
                <ul>
                    <?php
                    $admin_url = wah_get_admin_url();
                    //to users
                    echo '<li><a href="' . $admin_url . 'users.php">Users</a></li>';
                    //to add new user
                    echo '<li><a href="' . $admin_url . 'user-new.php">Add New User</a></li>';
                    //to your profile
                    echo '<li><a href="' . $admin_url . 'profile.php">Your Profile</a></li>';
                    ?>
                </ul>
            </div>
        </div>
    <?php
    }
}

/**
 * tools shortcuts
 */
function wah_tools_shortcuts()
{
    if (carbon_get_theme_option('wah_tools')) {
    ?>
        <div class="wah-shortcuts">
            <div data-shortcut="wah-page" class="wah-shortcut-trigger">
                <h3 class="wah-head">Tools</h3>
            </div>
            <div id="wah-page" class="wah-shortcut-container">
                <ul>
                    <?php
                    $admin_url = wah_get_admin_url();
                    //to tools
                    echo '<li><a href="' . $admin_url . 'tools.php">Tools</a></li>';
                    //to import
                    echo '<li><a href="' . $admin_url . 'import.php">Import</a></li>';
                    //to export
                    echo '<li><a href="' . $admin_url . 'export.php">Export</a></li>';
                    ?>
                </ul>
            </div>
        </div>
    <?php

    }
}

/**
 *  Settings Shortcuts
 */
function wah_settings_shortcuts()
{
    if (carbon_get_theme_option('wah_settings')) {
    ?>
        <div class="wah-shortcuts">
            <div data-shortcut="wah-page" class="wah-shortcut-trigger">
                <h3 class="wah-head">Settings</h3>
            </div>
            <div id="wah-page" class="wah-shortcut-container">
                <ul>
                    <?php
                    $admin_url = wah_get_admin_url();
                    //to general
                    echo '<li><a href="' . $admin_url . 'options-general.php">General</a></li>';
                    //to writing
                    echo '<li><a href="' . $admin_url . 'options-writing.php">Writing</a></li>';
                    //to reading
                    echo '<li><a href="' . $admin_url . 'options-reading.php">Reading</a></li>';
                    //to discussion
                    echo '<li><a href="' . $admin_url . 'options-discussion.php">Discussion</a></li>';
                    //to media
                    echo '<li><a href="' . $admin_url . 'options-media.php">Media</a></li>';
                    //to permalinks
                    echo '<li><a href="' . $admin_url . 'options-permalink.php">Permalinks</a></li>';
                    //to privacy
                    echo '<li><a href="' . $admin_url . 'options-privacy.php">Privacy</a></li>';
                    //to site health
                    echo '<li><a href="' . $admin_url . 'site-health.php">Site Health</a></li>';
                    //to export
                    echo '<li><a href="' . $admin_url . 'export.php">Export</a></li>';
                    ?>
                </ul>
            </div>
        </div>
<?php
    }
}
