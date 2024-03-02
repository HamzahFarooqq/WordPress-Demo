
<?php 

/*
 * Plugin Name: Test 
 * Author: humzah
 * Description: basics of this plugin.
 * Version:  1.0.0
 */




 if (!defined('ABSPATH'))
{
    die;
}


if (!defined('HZ_PLUGIN_DIR'))
{
    define('HZ_PLUGIN_DIR', plugin_dir_url(__FILE__));
}









// generate shortcode for our plugin

require plugin_dir_path(__FILE__). 'inc/shortcode.php';




// generate post2 for our plugin

require plugin_dir_path(__FILE__). 'inc/post2.php';




// generate login-code for our plugin

require plugin_dir_path(__FILE__). 'inc/login-shortcode.php';










?>


