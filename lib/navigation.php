<?php

function hs21_register_menus(){
    register_nav_menus(array (
        'main-menu'=>esc_html__('Main menu', 'hs21'),
        'footer-menu'=>esc_html__('Footer menu', 'hs21'),
    ));
}

add_action ('init', 'hs21_register_menus');