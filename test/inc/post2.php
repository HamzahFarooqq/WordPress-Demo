<?php





function tst_register_post_types()
{
    // Register Business post type
    register_post_type(
        'business',
        array(
            'labels'      => array(
                'name'          => __('Business'),
                'singular_name' => __('Business'),
            ),
            'public'      => true,
            'has_archive' => true,
        )
    );


    // Register Design post type
    register_post_type(
        'design',
        array(
            'labels' => array(
                'name' => __('Design'),
                'singular_name' => __('Design')
            ),
            'public' => true,
            'has_archive' => true,

        )
    );


    // Register Construction post type
    register_post_type(
        'construction',
        array(
            'labels' => array(
                'name' => __('Construction'),
                'singular_name' => __('Construction')
            ),
            'public' => true,
            'has_archive' => true,

        )
    );


}



add_action('init', 'tst_register_post_types');




// taxonomy

function tst_register_taxonomy_course() {
    $labels = array(
        'name'              => _x( 'Courses', 'taxonomy general name' ),
        'singular_name'     => _x( 'Course', 'taxonomy singular name' ),
        'search_items'      => __( 'Search Courses' ),
        'all_items'         => __( 'All Courses' ),
        'parent_item'       => __( 'Parent Course' ),
        'parent_item_colon' => __( 'Parent Course:' ),
        'edit_item'         => __( 'Edit Course' ),
        'update_item'       => __( 'Update Course' ),
        'add_new_item'      => __( 'Add New Course' ),
        'new_item_name'     => __( 'New Course Name' ),
        'menu_name'         => __( 'Course' ),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'course' ],
    );
    register_taxonomy( 'course', [ 'business', 'design', 'construction' ], $args );
}


add_action('init', 'tst_register_taxonomy_course');











// Add meta box with custom field dropdown


function tst_meta_box() {
    add_meta_box(
        'business_meta_box',  // id
        'business meta box title',  // title
        'business_meta_box_html',  // callback
        'business', // Change this to your desired post type
        'normal',
        'default'
    );

    add_meta_box(
        'design_meta_box',
        'design meta box title',
        'design_meta_box_html',
        'design', // Change this to your desired post type
        'normal',
        'default'
    );

    add_meta_box(
        'construction_meta_box',
        'construction meta box title',
        'construction_meta_box_html',
        'construction', // Change this to your desired post type
        'normal',
        'default'
    );
}

add_action( 'add_meta_boxes', 'tst_meta_box' );




function business_meta_box_html( $post ) {
	?>
	<label for="wporg_field">Description for this field</label>
	<select name="business_field" id="wporg_field" class="postbox">
		<option value="select">Select something...</option>
		<option value="something">Something</option>
		<option value="else">Else</option>
	</select>
	<?php
}


function design_meta_box_html( $post ) {
	?>
	<label for="wporg_field">Description for this field</label>
	<select name="design_field" id="wporg_field" class="postbox">
		<option value="select">Select something...</option>
		<option value="something">Something</option>
		<option value="else">Else</option>
	</select>
	<?php
}


function construction_meta_box_html( $post ) {
	?>
	<label for="wporg_field">Description for this field</label>
	<select name="construction_field" id="wporg_field" class="postbox">
		<option value="select">Select something...</option>
		<option value="something">Something</option>
		<option value="else">Else</option>
	</select>
	<?php
}








// Save custom field value
add_action( 'save_post', 'save_business_meta_box_data' );

function save_business_meta_box_data( $post_id ) {

    $post_id = 44;

    if ( array_key_exists( 'business_field', $_POST ) ) {
        update_post_meta(
            $post_id,
            'business_meta_key',
            sanitize_text_field( $_POST['business_field'] )
        );
    }
}





