

$(document).ready(function() {

    
    $('#hz-login-form').submit(function(e) {

        let email = $('#email').val();
        let password = $('#password').val();

        console.log(email, password);

        e.preventDefault();
        
        $.ajax({
            url: 'http://localhost:8000/login',
            type: 'POST',
            dataType: 'json',
            data: {
                email: email,
                password: password
            },
            success: function(res) {
                console.log(res);
                localStorage.setItem('access_token', res.access_token);
                window.location.href = res.redirect_url;
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });


    let access_token = localStorage.getItem('access_token');

    if (access_token) {
        $.ajax({
            url: 'http://localhost:8000/user',
            type: 'GET',
            dataType: 'json',
            headers: {
                Authorization: 'Bearer ' + access_token
            },
            success: function(res) {
                console.log(res);
                $('#username').append(res.username);
                $('#email').append(res.email);
            },
            error: function(xhr, status, error) {
                console.error(error);
            }   
        });
    }



// signup form submission

    $('#signup-form').on('submit', function(e) {
        e.preventDefault(); // Prevent form submission

        console.log("Data sent:", {
            username: username,
            email: email,
            password: password
        });

        let username = $('#username').val();
        let email = $('#email').val();
        let password = $('#password').val();

        // Send AJAX request to Laravel API
        $.ajax({
            type: 'POST',
            url: 'http://localhost:8000/signup', // Replace with your Laravel API endpoint
            // data: formData,
            data: {
                username: username,
                email: email,
                password: password
            },
            success: function(res) {
                if (res.message === 'user signup complete') {
                    // Show success message
                    
                    alert('User signup complete');
                    
                } else {
                    // Show error message or handle other cases
                    alert('Signup failed');
                }
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error(xhr.responseText);
                alert('An error occurred. Please try again.');
            }
        });
    });




});




 // jQuery AJAX for form submission
//  jQuery(document).ready(function($) {
    
// });