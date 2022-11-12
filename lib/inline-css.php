<?php
$inline_styles_selectors = array(
    'a' => array(
        'color' => 'hs21_accent_color',
    ),
    ':focus' => array(
        'outline-color' => 'hs21_accent_color',
    ),
    'post.sticky' => array(
        'border-left-color' => 'hs21_accent_color',
    ),
    'button, input[type=submit], .header-nav .menu > .menu-item:not(.mega) .sub-menu .menu-item:hover > a' => array(
        'background-color' => 'hs21_accent_color',
    )
);

$inline_styles = "";

foreach ($inline_styles_selectors as $selector => $props) {
    $inline_styles .= "{$selector} {";
    foreach ($props as $prop => $value) {
        $inline_styles .= "{$prop}: " . sanitize_hex_color(get_theme_mod($value, '#CE171F')) . ";";
    }
    $inline_styles .= "} ";
}