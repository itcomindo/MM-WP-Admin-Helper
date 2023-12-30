<?php

/**
 * Plugin Name: MM WP Admin Helper
 * Plugin URI: https://budiharyono.id/
 * Description: Helper for WordPress Admin
 * Version: 1.0.0
 * Author: Budi Haryono
 * Author URI: https://budiharyono.id/
 */

defined('ABSPATH') or die('No script kiddies please!');

require_once plugin_dir_path(__FILE__) . 'wah-options.php';



add_action('init', 'mm_load_files_for_admin');

function mm_load_files_for_admin()
{
    if (wah_is_admin_logged_in()) {
        require_once plugin_dir_path(__FILE__) . 'icons/icons.php';
        require_once plugin_dir_path(__FILE__) . 'wah-trigger.php';
        require_once plugin_dir_path(__FILE__) . 'wah-main-container.php';
        require_once plugin_dir_path(__FILE__) . 'wah-shortcuts.php';
        require_once plugin_dir_path(__FILE__) . 'wah-tools-main-container.php';
        require_once plugin_dir_path(__FILE__) . 'tools/content-formater-tool.php';
        require_once plugin_dir_path(__FILE__) . 'tools/seo-tools.php';
        require_once plugin_dir_path(__FILE__) . 'tools/prism-creator-tool.php';

        add_action('wp_enqueue_scripts', 'wah_load_css_js', 100);
    }
}






//define plugin version
function wah_plugin_version()
{
    $plugin_data = get_file_data(plugin_dir_path(__FILE__) . 'mm-wp-admin-helper.php', array('Version' => 'Version'));
    $version = $plugin_data['Version'];
    return $version;
}

/**
 *=========================
 *NAME: Load Carbon Fields
 *=========================
 */
function mah_check_cf()
{
    require_once(plugin_dir_path(__FILE__) . 'vendor/autoload.php');
    \Carbon_Fields\Carbon_Fields::boot();
}

/**
 * Load Carbon Fields When Needed
 */
function mah_load_cf()
{
    if (!function_exists('carbon_fields_boot_plugin')) {
        mah_check_cf();
    }
}
add_action('plugins_loaded', 'mah_load_cf');








//get file
// require_once plugin_dir_path(__FILE__) . 'icons/icons.php';
// require_once plugin_dir_path(__FILE__) . 'wah-trigger.php';
// require_once plugin_dir_path(__FILE__) . 'wah-main-container.php';
// require_once plugin_dir_path(__FILE__) . 'wah-options.php';
// require_once plugin_dir_path(__FILE__) . 'wah-shortcuts.php';
// require_once plugin_dir_path(__FILE__) . 'wah-tools-main-container.php';
// require_once plugin_dir_path(__FILE__) . 'tools/content-formater-tool.php';
// require_once plugin_dir_path(__FILE__) . 'tools/seo-tools.php';



function wah_load_css_js()
{
    //jquery ui css
    wp_enqueue_style('jquery-ui-css', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css', array(), '1.13.2', 'all');

    //boxicons css
    wp_enqueue_style('boxicons', 'https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css', array(), '2.0.7', 'all');


    wp_enqueue_style('wah-style', plugin_dir_url(__FILE__) . 'wah.css', array(), wah_plugin_version(), 'all');

    //check jquery exist or not
    if (!wp_script_is('jquery', 'enqueued')) {
        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true);
    }

    wp_enqueue_script('jquery-ui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js', array(), '1.13.2', true);






    // global js
    wp_enqueue_script('wah-script', plugin_dir_url(__FILE__) . 'wah.js', array('jquery'), wah_plugin_version(), true);


    // content formater
    wp_enqueue_script('wah-content-formater-scripts', plugin_dir_url(__FILE__) . 'tools/content-formater.js', array('jquery'), wah_plugin_version(), true);

    // seo tools
    wp_enqueue_script('wah-seo-tools-scripts', plugin_dir_url(__FILE__) . 'tools/seo-tools.js', array('jquery'), wah_plugin_version(), true);

    // prism creator
    wp_enqueue_script('wah-prism-creator-scripts', plugin_dir_url(__FILE__) . 'tools/prism-creator-tool.js', array('jquery'), wah_plugin_version(), true);
}
// add_action('wp_enqueue_scripts', 'wah_load_css_js', 100);





function wah_is_admin_logged_in()
{
    // Memeriksa apakah pengguna yang sedang login adalah administrator
    if (!current_user_can('administrator') || !is_user_logged_in()) {
        return false;
    } else {
        return true;
    }
}
