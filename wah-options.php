<?php

/**
 * WHATS?
 */

defined('ABSPATH') or die('No script kiddies please!');


use Carbon_Fields\Container;
use Carbon_Fields\Field;


add_action('carbon_fields_register_fields', 'wah_register_options_fields');
function wah_register_options_fields()
{

    Container::make('theme_options', 'Admin Helper')
        ->add_fields([


            //backend
            Field::make('checkbox', 'wah_backend', 'Enable in Backend')
                ->set_width(30)
                ->set_option_value('yes')
                ->set_default_value(true),



            //post
            Field::make('checkbox', 'wah_post', 'Post')
                ->set_width(30)
                ->set_option_value('yes')
                ->set_default_value(true),

            //page
            Field::make('checkbox', 'wah_page', 'Page')
                ->set_width(30)
                ->set_option_value('yes')
                ->set_default_value(false),

            //media
            Field::make('checkbox', 'wah_media', 'Media')
                ->set_width(30)
                ->set_option_value('yes')
                ->set_default_value(false),

            //comment
            Field::make('checkbox', 'wah_comment', 'Comment')
                ->set_width(30)
                ->set_option_value('yes')
                ->set_default_value(false),

            //appearance
            Field::make('checkbox', 'wah_appearance', 'Appearance')
                ->set_width(30)
                ->set_option_value('yes')
                ->set_default_value(false),

            //plugin
            Field::make('checkbox', 'wah_plugin', 'Plugin')
                ->set_width(30)
                ->set_option_value('yes')
                ->set_default_value(false),

            //user
            Field::make('checkbox', 'wah_user', 'User')
                ->set_width(30)
                ->set_option_value('yes')
                ->set_default_value(false),

            //tools
            Field::make('checkbox', 'wah_tools', 'Tools')
                ->set_width(30)
                ->set_option_value('yes')
                ->set_default_value(false),

            //settings
            Field::make('checkbox', 'wah_settings', 'Settings')
                ->set_width(30)
                ->set_option_value('yes')
                ->set_default_value(false),
        ]);
}
