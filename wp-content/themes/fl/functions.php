<?php
// js
function register_js() {
  if (!is_admin()) {
    wp_register_script('js_index', get_bloginfo('template_directory').'/js/script.js', array(), false, true);
  }
}

function add_javascript() {
  wp_deregister_script('jquery');
  register_js();

  if(is_front_page()) {
    wp_enqueue_script('js_index');
  }
}

add_action('wp_enqueue_scripts', 'add_javascript');

// css
function register_style() {
  if (!is_admin()) {
    wp_register_style('css_index', get_bloginfo('template_directory').'/css/style.css');
  }
}

function add_stylesheet() {
  register_style();

  if(is_front_page()) {
    wp_enqueue_style('css_index');
  }
}
add_action('wp_enqueue_scripts', 'add_stylesheet');