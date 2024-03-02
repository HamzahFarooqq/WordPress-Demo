<?php 



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
