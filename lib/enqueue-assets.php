<?php 
function  hs21_assets () {
    wp_enqueue_style('hs21-stylesheet', get_template_directory_uri().'/dist/assets/css/bundle.css', array(), '1.0.0', 'all' );
//Accent color
include(get_template_directory(). '/lib/inline-css.php');
    wp_add_inline_style('hs21-stylesheet', $inline_styles);
// END accent color
    wp_enqueue_script('hs21-scripts',get_template_directory_uri().'/dist/assets/js/main.js', array(), true);
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