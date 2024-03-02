<?php 



// Hook into the admin menu creation action
add_action('admin_menu', 'custom_admin_menu');

// Function to create the top-level menu
function custom_admin_menu() {
    // Add top-level menu
    add_menu_page(
        'Settings', // Page title
        'HZ Settings', // Menu title
        'manage_options', // Capability required to access the menu
        'hz-settings', // Menu slug
        'custom_settings_page_content', // Callback function to display page content
        'dashicons-admin-generic' // Icon URL or slug
    );
}

// Function to display content on the custom menu page
function custom_settings_page_content() {
    ?>
    <div class="wrap">
        <h2>Settings Page</h2>
        <!-- Your settings page content goes here -->
        <p>just for practice !</p>
    </div>
    <?php
}











// submenu option page

// function wporg_options_page()
// {
// 	add_submenu_page(
// 		'hz-settings',
// 		'WPOrg Options',
// 		'WPOrg Options',
// 		'manage_options',
// 		'wporg',
// 		'wporg_options_page_html'
// 	);
// }
// add_action('admin_menu', 'wporg_options_page');




// Function to create the signup submenu page
function signup_admin_submenu() {
    // Add submenu under the 'Settings' menu
    add_submenu_page(
        'hz-settings', // Parent menu slug (Settings)
        'Signup', // Page title
        'Signup', // Menu title
        'manage_options', // Capability required to access the page
        'signup_page', // Menu slug
        'hm_signup_page_content' // Callback function to display page content
    );
}

add_action('admin_menu', 'signup_admin_submenu');




// Function to display content on the custom submenu page
function hm_signup_page_content() {
    ?>

    <div class="wrap">
        <h2>Signup Page</h2>
        <form id="signup-form" method="post" action="http://localhost:8000/signup" >
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="button-primary"  >Signup</button>
        </form>
    </div>


    <p id="p1"></p>


    <?php
}







// Function to create the logni submenu page

function login_admin_submenu() {
    // Add submenu under the 'Settings' menu
    add_submenu_page(
        'hz-settings', // Parent menu slug (Settings)
        'Login', // Page title
        'Login', // Menu title
        'manage_options', // Capability required to access the page
        'login_page', // Menu slug
        'hm_login_page_content' // Callback function to display page content
    );
}

add_action('admin_menu', 'login_admin_submenu');

// Function to display content on the custom submenu page
function hm_login_page_content() {
    ?>
     <div class="wrap">
        <h2>Login Page</h2>
        <form id="login-form" method="post" action="http://localhost:8000/login">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <button type="submit" class="button-primary">Login</button>
        </form>
    </div>
    
    <?php
}


?>