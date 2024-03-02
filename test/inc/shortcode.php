<?php 




function display_business_shortcode()
{
    


    return get_the_title(52);




}

add_shortcode('business_shortcode', 'display_business_shortcode');





