<?php 


// remove_action('woocommerce_before_main_content hook', 'woocommerce_output_content_wrapper', 10);
// remove_action('woocommerce_before_main_content hook', 'woocommerce_breadcrumb', 20);



// remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);  - working



// remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);




//  remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);  - working




// function my_disable_slider() {
// 	// Make sure all parameters match the add_action() call exactly.
// 	remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
// }
// // Make sure we call remove_action() after add_action() has been called.
// add_action( 'after_setup_theme', 'my_disable_slider' );



// function my_remove_sidebar() {
//     return false;
    
// }

// add_filter( 'is_active_sidebar', 'my_remove_sidebar', 10 ); - working





//  function test() 
// {
	// echo 'ye test line hai!!!!!!';

// 	$get_field = get_fields(get_the_ID(), 'field' );
// 	 echo $get_field['field'];

// 	 echo '<input type= "text" name="text />';

// 	 echo '<pre>';
// 	 print_r( get_post_meta(get_the_ID(), 'toofa')) ;
// 	 echo '</pre>';
// }

// add_action('woocommerce_single_product_summary', 'test');




 
// function bbloomer_remove_storefront_sidebar() {
//    if ( is_product() ) {
//       remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
//    }
// }

// add_action( 'get_header', 'bbloomer_remove_storefront_sidebar' );  - working


// ---------------------------------



			




// image field on attribute page


// Custom function to add images to WooCommerce attributes
function save_attribute_image( $term_id, $tt_id, $taxonomy ) {
    if (isset($_POST['attribute_image'])) {
        $image_url = esc_url_raw($_POST['attribute_image']);
        update_woocommerce_term_meta($term_id, 'attribute_image', $image_url);
    }
}

// Hook the custom function to save_post action for product attributes
add_action('edited_product_cat', 'save_attribute_image', 10, 3);
add_action('create_product_cat', 'save_attribute_image', 10, 3);













// ---------------------------------

// to add custom cart item data in an existing cart_item array


add_filter('woocommerce_add_cart_item_data', 'custom_cart_item_data', 10, 3);

function custom_cart_item_data($cart_item_data, $product_id, $variation_id) {
   

    $cart_item_data['my text'] = $_POST['yell'];

    return $cart_item_data;

    

}


// echo '<pre>';

// var_dump($cart_item_data);
// // // print_r($cart_item_data);

// echo $_POST['yell'];

// exit;






// to get cart item data on cart page

add_filter('woocommerce_get_item_data', 'display_cart_item_data', 10, 2);

function display_cart_item_data($item_data, $cart_item_data) {
    

// echo '<pre>';
// var_dump($product_id);

// var_dump($cart_item_data);
//     var_dump($item_data);
// echo $_POST['yell'];

// exit;


    if ( isset( $cart_item_data['my text'] ) ) {
        
        $item_data[] = array(
            'key'   => 'my text',
            'value' =>  $cart_item_data['my text'],
        );
    }
    return $item_data;

}




/**
 * Add custom meta to order
 * 
 * 
 * 
 */
add_action( 'woocommerce_checkout_create_order_line_item', 'checkout_create_order_line_item', 10, 4 );

function checkout_create_order_line_item( $item, $cart_item_key, $values, $order ) {

    if ( isset( $values['my text'] ) ) {

        $item->add_meta_data(
            'My Text',
            $values['My Text'],
            true
        );
    }
    


}







// echo '<pre>';

//     print_r($_POST['yell']);
    
//     print_r($item_data);
    
//     echo '</pre>';



 ?>