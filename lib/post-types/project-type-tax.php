<?php

function hs21_register_project_type_tax(){
    $labels=[
    'name'=>esc_html_x('Project Type', 'taxonomy general name', 'hs21'),
    'singular_name'=>esc_html_x('Ptoject type', 'taxonomy singular name', 'hs21'),
    'search_items'=>esc_html_x('Search project types', 'hs21'),
    'all_items'=>esc_html_x('All project types', 'hs21'),
    'parent_item'=>esc_html_x('Parent ptoject type', 'hs21'),
    'parent_item_colon'=>esc_html_x('Parent project type', 'hs21'),
    'edit_item'=>esc_html_x('Edit Project Type', 'hs21'),
    'update_item'=>esc_html_x('Update Project Type', 'hs21'),
    'add_new_item'=>esc_html_x('Add New Project Type', 'hs21'),
    'new_item_name'=>esc_html_x('New Project Type Name', 'hs21'),
    'menu_name'=>esc_html_x('Project Types', 'hs21')
];


    $args=array (
        'labels'=>$labels,
        'hierarchical'=>true,
        'show_admin_column'=>true
    );
    register_taxonomy('hs21_project_type',['hs21_portfolio'], $args );
}

add_action('init', 'hs21_register_project_type_tax');