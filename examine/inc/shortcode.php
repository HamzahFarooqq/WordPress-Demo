<?php


// add shortcode for signup form


function hz_signup_form() {
    ob_start(); ?>

    <form id="hz-registration-form" method="post"  action="http://localhost:8000/signup" >

        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <input type="submit" name="submit" value="Register" class="btn btn-primary">
    </form>

    <?php
    return ob_get_clean();
}

add_shortcode('hz-signup', 'hz_signup_form');




// add shortcode for login form

function hz_login_form() {
    ob_start(); ?>

    <form id="hz-login-form" method="post"  action="#">

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <br>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <br>

        <input type="submit" name="submit" value="Login" class="btn btn-primary">
    </form>

    <?php
    return ob_get_clean();
}

add_shortcode('hz-login', 'hz_login_form');


// write a shortcode for displaying user data

function hz_display_user_data() {
    ob_start(); ?>

    <div id="hz-user-data">
        <h2>User Data</h2>
        <p id='username'>Username: </p>
        <p id='email'>Email: </p>
    </div>

<?php
    return ob_get_clean();
}

add_shortcode('hz-user-data', 'hz_display_user_data');