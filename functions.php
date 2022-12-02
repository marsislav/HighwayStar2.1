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



