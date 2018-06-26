<?php

// remove homepage content text and display featured image
function carolinaspa_homepage_content() {
  remove_action( 'homepage', 'storefront_homepage_content' );
  add_action('homepage', 'carolinaspa_homepage_coupon');
}

function carolinaspa_homepage_coupon() {
  echo '<div class="main-content">';
    the_post_thumbnail();
  echo '</div>';
}
add_action( 'init', 'carolinaspa_homepage_content', 10 );