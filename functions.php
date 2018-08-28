<?php
function lifehoney_script_enqueue() { //standard PHP function

  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/lifehoney.css', array(), 1, 'all');
  //WordPress hook, 5 diff parameters,
  // get_template_directory_uri() is WP code to get the absolute path of the css file w/o having to write out the address (which is not secure)
  wp_enqueue_script('customjss', get_template_directory_uri() . '/js/lifehoney.js', array(), 1, 'true');
  //true puts js file in footer- better for our website speed
}

add_action('wp_enqueue_scripts', 'lifehoney_script_enqueue');
//WP hook that connects our function to the WP execution process to execute function

function lifehoney_theme_setup() {
  add_theme_support('menus'); //WP hook
  register_nav_menu('primary', 'Primary Header Nav');
}

add_action('init', lifehoney_theme_setup);

 ?>
