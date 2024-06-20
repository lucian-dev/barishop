<?php

//Declare Woo support
add_action('after_setup_theme','ya_woocommerce_support');
function ya_woocommerce_support() {
  add_theme_support( 'woocommerce' );
  add_theme_support( 'wc-product-gallery-lightbox');
  add_theme_support( 'wc-product-gallery-slider');
}

// Remove all stylesheets
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

//WC theme compatibility
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// Ensure cart contents update
function woo_header_add_to_cart_fragment( $fragments ) {
  ob_start(); ?>
  <div class="ya-side-cart__mini">
    <?php woocommerce_mini_cart(); ?>
  </div>

  <?php
  $fragments['.ya-side-cart__mini'] = ob_get_clean();

  return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'woo_header_add_to_cart_fragment');

function woo_header_add_to_cart_fragment_total( $fragments ) {
  ob_start(); ?>

  <span class="ya-header__cart-total">
    <?php echo WC()->cart->get_cart_total();?>
  </span>

  <?php
  $fragments['.ya-header__cart-total'] = ob_get_clean();

  return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'woo_header_add_to_cart_fragment_total');

// Remove Sidebar
remove_action('woocommerce_sidebar','woocommerce_get_sidebar', 10);

// Sharing icons
add_action("woocommerce_product_meta_end", "ya_fb_twitter_single_product", 6);
function ya_fb_twitter_single_product() {
  echo '<span class="share_as">Share:';
  echo '<button class="share-button" data-sharer="facebook" data-hashtag="BARISHOP" data-url="' . get_the_permalink() . '"><svg> <use xlink:href="#fb-icon"></use></svg></button>';
  echo '<button class="share-button" data-title="' . get_the_title() . '" data-sharer="twitter" data-hashtags="BARISHOP" data-url="' . get_the_permalink() . '"><svg> <use xlink:href="#twitter-icon"></use></svg></button>';
  echo '</span>';
}

