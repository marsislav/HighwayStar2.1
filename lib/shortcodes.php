<?php 
//Shortcodes

function hs21_button ($atts) {
    extract (shortcode_atts ([
        'color'=>'red',
        'text'=>'Button'
    ], $atts));
    
    return '<button style="background-color:' .esc_attr($color) .'">'.esc_html($text) .'</button>';
}
add_shortcode('hs21_button', 'hs21_button');

function hs21_button2 ($atts=[], $content=null) {
    extract (shortcode_atts ([
        'color'=>'red',
        'text'=>'Button'
    ], $atts));
    
    return '<button style="background-color:' .esc_attr($color) .'">'.do_shortcode($content) .'</button>';
}
add_shortcode('hs21_button2', 'hs21_button2');

 


function hs21_icon ($atts) {
    extract (shortcode_atts ([
        'icon'=>'',
         
    ], $atts));
    
    return '<i class="'.esc_attr($icon) . '" aria-hidden> </i>';
}
add_shortcode('hs21_icon', 'hs21_icon');

//Slick slider 
function hs21_slider ($atts=[], $content=null, $tag='') {
    extract(shortcode_atts([
        'autoplay'=>false,
        'arrows'=>false
    ], $atts, $tag));
    $output='<div class="hs21_slider" data-slick=\'{"autoplay":' . ($autoplay ? 'true' : 'false') . ', "arrows": ' . ($arrows ? 'true' : 'false') .'}\'>';
    
    if (!is_null($content)) {
        $output.=do_shortcode($content);
    }
    $output.='</div>';
    return $output;
}
add_shortcode ('hs21_slider', 'hs21_slider');

function hs21_slide ($atts=[], $content=null, $tag='') {
    extract(shortcode_atts([
        'image'=>null,
        'caption'=>''
    ], $atts, $tag));


$output ='<div class="hs21-slide"> ';
if($image) {
    $output.=wp_get_attachment_image($image, 'large');
}
if ($caption) {
$output.='<div class="hs21-caption">' . esc_html($caption) .'</div>';
}
$output.='</div>';
return $output;
}
add_shortcode ('hs21_slide', 'hs21_slide');