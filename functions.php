<?php
function lifehoney_script_enqueue{ //standard PHP function

  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/lifehoney.css', array(), 1.0.0, 'all');
  //WordPress hook, 5 diff parameters,
  // get_template_directory_uri() is WP code to get the absolute path of the css file w/o having to write out the address (which is not secure)
  wp_enqueue_script('customjss', get_template_directory_uri() . '/js/lifehoney.js', array(), 1.0.0, 'true');
  //true puts js file in footer- better for our website speed
}

add_action('wp_enqueue_scripts', 'lifehoney_script_enqueue');
//WP hook that connects our function to the WP execution process to execute function

 ?>