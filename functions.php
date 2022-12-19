<?php
require_once('lib/enqueue-assets.php');
require_once('lib/customize.php');
require_once('lib/helpers.php');
//require_once('lib/enqueue-assets.php');
require_once('lib/sidebars.php');
require_once('lib/theme-support.php');
require_once('lib/navigation.php');
require_once('lib/metaboxes.php');
require_once('lib/comment-callback.php');
require_once('lib/shortcodes.php');

//Custom post types

require_once('lib/post-types/portfolio-post-type.php');
require_once('lib/post-types/project-type-tax.php');
require_once('lib/post-types/skills-tax.php');

function hs21_flush_rewrite (){
    if (get_theme_mod('hs21_flush_flag', false)) {
        flush_rewrite_rules();
        set_theme_mod('hs21_flush_flag', false);
    }
}

add_action('init', 'hs21_flush_rewrite',9999);

function hs21_customize_save_after(){
    $old=get_post_type_object('hs21_portfolio')->rewrite['slug'];
    $new=get_theme_mod('hs21_portfolio_slug', 'portfolio');
    if ($old !== $new){
        set_theme_mod('hs21_flush_flag', true);
}
}

add_action('customize_save_after', 'hs21_customize_save_after');

/*end of section*/

if (!isset($content_width)){
    $content_width=1024;
}

function hs2_content_width (){
    global $content_width;
    global $post;
    if (is_single() && $post->post_type==='post') {
        $layout=hs21_meta($post->ID,'hs21_post_layout', 'full');
        $sidebar =is_active_sidebar('primary-sidebar');
        if ($layout==='sidebar' && !$sidebar){
        $layout='full';
        }
        $content_width=$layout==='full' ? 1024 : 738;
    }
}

add_action('template_redirect', 'hs2_content_width');

function  hs21_image_sizes ($sizes, $size, $image_src, $image_meta,$attachment_id){
    $width=$size[0];
    global $content_width;
    global $post;
    $layout='full';

    if (is_single() && $post->post_type==='post') {
        $layout=hs21_meta($post->ID,'hs21_post_layout', 'full');
        $sidebar =is_active_sidebar('primary-sidebar');
        if ($layout==='sidebar' && !$sidebar){
        $layout='full';
        }
        
    }
return "ffff";
}

add_filter('wp_calculate_image_sizes', 'hs21_image_sizes', 10, 5);


