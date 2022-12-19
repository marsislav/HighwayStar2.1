<?php

function hs21_register_skills_tax(){
    $labels=[
    'name'=>esc_html_x('Skills', 'taxonomy general name', 'hs21'),
    'singular_name'=>esc_html_x('Skill', 'taxonomy singular name', 'hs21'),
    'search_items'=>esc_html_x('Search skills', 'hs21'),
    'all_items'=>esc_html_x('All skills', 'hs21'),
    'parent_item'=>esc_html_x('Parent Skill', 'hs21'),
    'parent_item_colon'=>esc_html_x('Parent Skill', 'hs21'),
    'edit_item'=>esc_html_x('Edit Skill', 'hs21'),
    'update_item'=>esc_html_x('Update Skill', 'hs21'),
    'add_new_item'=>esc_html_x('Add New Sk ill', 'hs21'),
    'new_item_name'=>esc_html_x('New Skill Name', 'hs21'),
    'menu_name'=>esc_html_x('Skills', 'hs21')
];


    $args=array (
        'labels'=>$labels,
        'hierarchical'=>false,
        'show_admin_column'=>true,
        'rewrite'=>['slug'=>'skills']
    );
    register_taxonomy('hs21_skills',['hs21_portfolio'], $args );
}

add_action('init', 'hs21_register_skills_tax');