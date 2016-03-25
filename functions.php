<?php
/**
 * Proud Theme Starter
 *
 * This is the functions.php for the ProudCity subtheme
 */
define('PROUD_CHILD_THEME_ADVANCED', false);

/**
 * Load in assets from wp-proud-theme
 */
$proud_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];
foreach ($proud_includes as $file) {
  if (!$filepath = get_template_directory_uri() .'/'. $file) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'proud'), $file), E_USER_ERROR);
  }
  require_once $filepath;
}
unset($file, $filepath);

wp_enqueue_style('proud-vendor/css', Assets\asset_path('styles/proud-vendor.css'), false, null);
  wp_enqueue_style('proud/css', Assets\asset_path('styles/proud.css'), false, null);

/**
 * Add child theme asssets
 */
function add_assets() {
  if (PROUD_CHILD_THEME_ADVANCED) {
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css'
    );
  }
  else {
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'proud-vendor/css', 'proud/css' )
    );
  }
  // Optional: override default fonts
  //wp_enqueue_style('external-fonts', '//fonts.googleapis.com/css?family=Lato:400,900,700,300');
}
add_action( 'wp_enqueue_scripts',  __NAMESPACE__ . '\\add_assets' );