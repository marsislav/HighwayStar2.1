<?php 
function hs21jq_enqueue_scripts() {
    wp_enqueue_script( 'jquery' );
   }
   add_action( 'init', 'hs21jq_enqueue_scripts' );//to fix

function  hs21_assets () {
    wp_enqueue_style('hs21-stylesheet', get_template_directory_uri().'/dist/assets/css/bundle.css', array(), '1.0.0', 'all' );
//Accent color
include(get_template_directory(). '/lib/inline-css.php');
    wp_add_inline_style('hs21-stylesheet', $inline_styles);
// END accent color

wp_enqueue_script('hs21-scripts',get_template_directory_uri().'/dist/assets/js/bundle.js');
    wp_enqueue_script('hs21-scripts',get_template_directory_uri().'/dist/assets/js/bundle.js', array('jquery'), '1.0.0', true);
    if (is_singular() &&comments_open() && get_option('thread_comments') ) {
    wp_enqueue_script('comment-reply');
}
}
 
add_action('wp_enqueue_scripts', 'hs21_assets');

function hs21_admin_assets () {
    wp_enqueue_style('hs21-admin-stylesheet', get_template_directory_uri().'/dist/assets/css/admin.css', array(), '1.0.0', 'all');
    wp_enqueue_script('hs21-admin-scripts', get_template_directory_uri().'/dist/assets/js/admin.js', array(), '1.0.0', true);

}
add_action ('admin_enqueue_scripts', 'hs21_admin_assets');

function hs21_customize_preview_js () {
wp_enqueue_script('hs21-customize-preview', get_template_directory_uri().
'/dist/assets/js/customize-preview.js', array ('customize-preview', 'jquery'), '1.0.0',  true);

wp_localize_script('hs21_customize_preview', 'hs21', array ('inline-css'=>$inline_styles_selectors));
}

add_action('customize_preview_init', 'hs21_customize_preview_js');

/**
 * Font Awesome Kit Setup
 * 
 * This will add your Font Awesome Kit to the front-end, the admin back-end,
 * and the login screen area.
 */
if (! function_exists('fa_custom_setup_kit') ) {
    function fa_custom_setup_kit($kit_url = '') {
      foreach ( [ 'wp_enqueue_scripts', 'admin_enqueue_scripts', 'login_enqueue_scripts' ] as $action ) {
        add_action(
          $action,
          function () use ( $kit_url ) {
            wp_enqueue_script( 'font-awesome-kit', $kit_url, [], null );
          }
        );
      }
    }
  }

fa_custom_setup_kit('https://kit.fontawesome.com/67d0f4db6e.js');