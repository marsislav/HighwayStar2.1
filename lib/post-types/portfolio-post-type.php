<?php

function hs21_potfolio_post_type (){

    $labels=array(
        'name'=>esc_html_x('Portfolio', 'Post type general name', 'hs21'),
        'singular_name'=>esc_html_x('Portfolio item', 'Post type singular name', 'hs21'),
        'menu_name'=>esc_html_x('Portfolio', 'Admin menu text', 'hs21'),
        'name_admin_bar'=>esc_html_x('Portfolio Item', 'Add new on toolbar', 'hs21'),
        'add_new'=>esc_html_x('Add New', 'hs21'),
        'add_new_item'=>esc_html_x('New Portfolio Item', 'hs21'),
        'new_item'=>esc_html_x('New Portfolio Item', 'hs21'),
        'edit_item'=>esc_html_x('Edit Portfolio Item', 'hs21'),
        'view_item'=>esc_html_x('View Portfolio Item', 'hs21'),
        'view_items'=>esc_html_x('View Portfolio Items', 'hs21'),
        'all_items'=>esc_html_x('All Portfolio Items', 'hs21'),
        'search_items'=>esc_html_x('Search Portfolio Items', 'hs21'),
        'parent_item_colon'=>esc_html_x('Parent Portfolio Items', 'hs21'),
        'not_found'=>esc_html_x('No Portfolio Items Found', 'hs21'),
        'not_foind_in_trash'=>esc_html_x('No Portfolio Items in Trash', 'hs21'),
        'featured_image'=>esc_html_x('Portfolio Item Image', 'Overrides the "Featured Image Phrase for this Post Type"','hs21'),
        'set_featured_image'=>esc_html_x('Set Portfolio Item Image', 'Overrides the "Set Featured Image Phrase for this Post Type"','hs21'),
        'remove_featured_image'=>esc_html_x('Remove Portfolio Item Image', 'Overrides the "Remove Featured Image Phrase for this Post Type"','hs21'),
        'use_featured_image'=>esc_html_x('Use as Portfolio Item Image', 'Overrides the "Use as Featured Image Phrase for this Post Type"','hs21'),
        'archives'=>esc_html_x('Portfolio archives', 'The post type archive label used in nav menus. Default  "Post archives"','hs21'),
        'insert_into_item'=>esc_html_x('Insert into  Portfolio Item', 'Overrides the "Insert into Post" /" Insert into Page" phrase (used when inserting media)','hs21'),
        'uploaded_to_this_item'=>esc_html_x('Uploaded to this Portfolio Item', 'Overrides the "Uploaded to this post" / "Uploaded to this page" phrase (used when viewing media attached to a post)','hs21'),
        'filter_items_list'=>esc_html_x('Filter Portfolio Items list', 'Screen reader text for the filter links heading on the post type listing screen. Default "Filter posts list" / "Filter pages list"','hs21'),
        'items_list_navigation'=>esc_html_x('Portfolio Items list navigation', 'Screen reader text for pagination heading on the post type listing screen. Default "Posts list navihation" / "Pages list navigation"','hs21'),
        'items_list'=>esc_html_x('Portfolio Items list', 'Screenreader text for the items list heading on the post type listing screen. Default "Posts  list / "Pages list"','hs21')
        
    );

    $args=array(
        'labels'=>$labels,
        'public'=>true,
        'has_icons'=>true,
        'has_archive'=>true,
        'rewrite'=>array('slug'=> get_theme_mod('hs21_portfolio_slug')),
        'menu_icon'=>'dashicons-art',
        'supports'=>array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments')

    );
    register_post_type('hs21_portfolio', $args);
}
add_action('init', 'hs21_potfolio_post_type');