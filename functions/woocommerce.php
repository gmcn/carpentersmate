<?php

function woocommerce_support(){
    add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'woocommerce_support');

// add_action( 'after_setup_theme', 'wc_product_result_count_sort', 99 );
//
// function wc_product_result_count_sort() {
//     remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );
//     remove_action( 'woocommerce_after_shop_loop' , 'woocommerce_result_count', 20 );
//     remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_catalog_ordering', 30 );
//     remove_action( 'woocommerce_after_shop_loop' , 'woocommerce_catalog_ordering', 30 );
// }

add_action( 'after_setup_theme', 'woocommerce_gallery' );

function woocommerce_gallery() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}



function woocommerce_product_layout_method($classes) {

  if (isset($_COOKIE['cm-wc-sort-list']) && $_COOKIE['cm-wc-sort-list'] == 1) {
    $classes[] = 'woocommerce-sort-list';
  }

  return $classes;
}

add_filter('body_class', 'woocommerce_product_layout_method');


// add a products per-page select dropdown to archive - above shop productloop
add_action( 'woocommerce_before_shop_loop', 'pro_selectbox', 25 );
function pro_selectbox() {
  $per_page = filter_input(INPUT_GET, 'perpage', FILTER_SANITIZE_NUMBER_INT);

  echo '<div class="woocommerce-perpage">';
  echo '<select class="per-page" onchange="if (this.value) window.location.href=this.value">';
  echo '<option selected="selected" value="">Items Per Page</option>',

    $orderby_options = array(
      '12' => '12',
      '24' => '24',
      '36' => '36',
      '-1' => 'All'
    );
  foreach( $orderby_options as $value => $label ) {
    echo "<option ".selected( $per_page, $value )." value='?perpage=$value'>$label</option>";
  }
      echo '</select>';
  echo '</div>';
  }
add_action( 'pre_get_posts', 'pro_pre_get_products_query' );

function pro_pre_get_products_query( $query ) {
  $per_page = filter_input(INPUT_GET, 'perpage', FILTER_SANITIZE_NUMBER_INT);
  if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'product' ) ) {
  $query->set( 'posts_per_page', $per_page );
  }
}
