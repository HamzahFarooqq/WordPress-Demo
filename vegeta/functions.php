<?php 


 function vegeta_theme_enqueue_styles() {

    wp_enqueue_style(

        'vegeta-css-bootstrap',
        get_parent_theme_file_uri('/assets/css/css-bootstrap.css')

    );


    wp_enqueue_style (

            'vegeta-style',
            get_stylesheet_uri(),
            array('vegeta-css-bootstrap')
    );
 }

 add_action('wp_enqueue_scripts', 'vegeta_theme_enqueue_styles');




 


 function vegeta_theme_enqueue_scripts() {

        wp_enqueue_script('vegeta-script-bootstrap', get_parent_theme_file_uri('/assets/js/script-bootstrap.js'), array(), false, true);
 }


 add_action('wp_enqueue_scripts', 'vegeta_theme_enqueue_scripts');





?>