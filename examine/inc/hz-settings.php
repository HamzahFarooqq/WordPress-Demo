<?php 



// settings menu and page html


function hz_settings_page_html()
{

    if ( !is_admin() ) 
    {
        return;
    }
    ?>

        <div class="wrap">
            <h1><?php= esc_html(get_admin_page_title());   ?></h1>
            <form action="options.php" method="post">
                <?php 
                        settings_fields( 'hz-settings' );
                        do_settings_sections( 'hz-settings');
                        submit_button( 'save changes');


                ?>
            </form>
        </div>


    <?php
}

function hz_option_menu_page()
{
    add_menu_page('HZ LIKE SYSTEM', 'HZ SETTINGS', 'manage_options', 'hz-settings', 'hz_settings_page_html', 'dashicons-airplane',30);

}
    add_action('admin_menu', 'hz_option_menu_page');




/*
* above code to register option page
*
* below code to register option page settings
*/




function hz_plugin_settings()
{
    register_setting('hz-settings', 'hz_like_btn_label');
    register_setting('hz-settings', 'hz_dislike_btn_label');

    add_settings_section('hz_label_settings_section', 'HZ Button Labels', 'hz_plugin_settings_section_cb', 'hz-settings');

    add_settings_field('hz_like_label_field', 'Like Button Label', 'hz_like_label_field_cb', 'hz-settings','hz_label_settings_section');
    add_settings_field('hz_dislike_label_field', 'Dislike Button Label', 'hz_dislike_label_field_cb', 'hz-settings','hz_label_settings_section');
   
   
}

    add_action('admin_init', 'hz_plugin_settings');



function hz_plugin_settings_section_cb()
{
    echo '<p>define button labels</p>';
}



function hz_like_label_field_cb()
{
    $setting = get_option('hz_like_btn_label');

    ?>

    <input type="text" name="hz_like_btn_label" value="<?php echo isset($setting) ? esc_attr($setting) : '' ; ?>">

    <?php
}

function hz_dislike_label_field_cb()
{
    $setting = get_option('hz_dislike_btn_label');

    ?>

    <input type="text" name="hz_dislike_btn_label" value="<?php echo isset($setting) ? esc_attr($setting) : '' ; ?>">

    <?php
}

