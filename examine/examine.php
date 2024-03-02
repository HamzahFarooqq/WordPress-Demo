<?php  

/*
* Plugin Name: Examine
* Author: humzah
* Description: Handle the basics with this plugin.
* Version:  1.10.3
*/



if (!defined('ABSPATH'))
{
    die;
}


if (!defined('HZ_PLUGIN_VERSION'))
{
    define('HZ_PLUGIN_VERSION','1.0.0');
}


if (!defined('HZ_PLUGIN_DIR'))
{
    define('HZ_PLUGIN_DIR', plugin_dir_url(__FILE__));
}

if (!function_exists('my_plugin_fn'))
{
     function my_plugin_fn()
    {
        
    }
}

if (!defined('hz_plugin_scripts'))
{



    function hz_plugin_scripts()
    {
        
        wp_enqueue_style('hz-css', HZ_PLUGIN_DIR. 'assets/css/style.css');
        wp_enqueue_script('hz-jquery', 'https://code.jquery.com/jquery-3.7.1.js', [], '1.0.0' , true);
        wp_enqueue_script('hz-js', HZ_PLUGIN_DIR. 'assets/js/main.js', ['hz-jquery'], '1.0.0' , true);
    }

    add_action('wp_enqueue_scripts', 'hz_plugin_scripts');
}









// settings menu and page 

require plugin_dir_path(__FILE__). 'inc/settings.php';

// create table for our plugin

// require plugin_dir_path(__FILE__). 'inc/db.php';

// generate shortcode for our plugin

require plugin_dir_path(__FILE__). 'inc/shortcode.php';



?>
