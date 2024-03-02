

<?php 



function vegeta_child_enqueue_styles() {

    


	wp_enqueue_style( 
		'vegeta-style', 
		get_parent_theme_file_uri('/style.css'),
		array('vegeta-css-bootstrap')
        
	);


    wp_enqueue_style( 
		'vegeta-child-style', 
		get_stylesheet_uri(),
        array('vegeta-style')
        
	);



}

add_action( 'wp_enqueue_scripts', 'vegeta_child_enqueue_styles' );



?>