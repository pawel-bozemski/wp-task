<?php

// register webpack compiled js and css with theme
function enqueue_webpack_scripts()
{

  $cssFilePath = glob(get_template_directory() . '/css/build/main.min.*.css');
  $cssFileURI = get_template_directory_uri() . '/css/build/' . basename($cssFilePath[0]);
  wp_enqueue_style('main_css', $cssFileURI);

  $jsFilePath = glob(get_template_directory() . '/js/build/main.min.*.js');
  $jsFileURI = get_template_directory_uri() . '/js/build/' . basename($jsFilePath[0]);
  wp_enqueue_script('main_js', $jsFileURI, null, null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_webpack_scripts');
function my_mce4_options($init)
{

  $custom_colours = '
        "ffffff", "White",
        "1f1f1d", "Black",
        "0087FE", "Blue"
    ';


  $init['textcolor_map'] = '[' . $custom_colours . ']';
  $init['textcolor_rows'] = 1;

  return $init;
}
add_filter('tiny_mce_before_init', 'my_mce4_options');
add_theme_support('post-thumbnails');
function include_file($atts)
{
  $a = shortcode_atts(array(
    'slug' => 'NULL',
  ), $atts);

  if ($a['slug'] != 'NULL') {
    ob_start();
    get_template_part($a['slug']);
    return ob_get_clean();
  }
}
add_shortcode('include', 'include_file');
