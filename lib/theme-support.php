<?php 
function hs21_theme_support () {
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('html5', array('search-form','comment-list', 'comment-form', 'gallery', 'caption', 'admin-bar'));
add_theme_support('customize-selective-refresh-widgets');
add_theme_support('custom-logo', array (
    'height'=>200,
    'width'=>600,
    'flex-height'=>true,
    'flex-width'=>true,
    
));

}
add_action('after_setup_theme', 'hs21_theme_support');