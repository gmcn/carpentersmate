<?php

// return in JSON format
header( 'Content-type: application/json' );

// WP_Query arguments
$args = array (

'post_type'       => 'distributors',
'post_status'     => 'publish',
'posts_per_page'  => -1,
'no_found_rows=true' => true,

);

// The Query
$loop = new WP_Query( $args );

// create an array if there is more than one result
$locations = array();

//the loop
while ( $loop->have_posts() ) : $loop->the_post();

$title = html_entity_decode(get_the_title($post->ID),ENT_QUOTES,'UTF-8');

   // Add in your custom fields or WP fields that you want
   $locations[] = array(
     'id' => get_the_ID(),
     'name' => $title,
     'address' => get_field('distributor_shipping_address_line_1') . ', ' . get_field('distributor_shipping_address_line_2') . ', ' . get_field('distributor_shipping_address_town') . ', ' . get_field('distributor_shipping_address_county') . ', ' . get_field('distributor_shipping_address_postcode'),
     'address1' => get_field('distributor_shipping_address_line_1'),
     'address2' => get_field('distributor_shipping_address_line_2'),
     'address3' => get_field('distributor_shipping_address_town'),
     'city' => get_field('distributor_shipping_address_county'),
     'zip' => get_field('distributor_shipping_address_postcode'),
     'phone' => get_field('distributor_phone_number'),
     'email' => get_field('distributor_email'),
     'web' => get_field('distributor_website'),
     'stockist_id' => get_field('distributor_account_number'),
     'lat' => get_field('lat'),
     'lng' => get_field('lng')
   );

endwhile;

wp_reset_query();

// output

echo json_encode( $locations, JSON_PRETTY_PRINT );

$myJSON = json_encode( $locations, true);

// echo $myJSON;



?>
