<?php
  // Add JavaScript and CSS files
  function carolinaspa_scripts() {
    // CSS files
    // wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0' );
    // wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '4.7.0' );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900|Lora:400,700' );
    // wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0.0' );

    // JavaScript files
    // wp_enqueue_script( 'jquery' );
    // wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/tether.min.js', array('jquery'), '1.0.0', true );
    // wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.0.0', true );
    // wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'carolinaspa_scripts');