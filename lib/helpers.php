<?php
function hs21_post_meta(){ 

   printf(esc_html__('Posted on: %s', 'hs21'),
    '<a href="'.esc_url(get_permalink()).'"><time datetime="'.esc_attr(get_the_date('c')) .
    '">'.esc_html(get_the_date()) .'</time></a>'
);

printf(
    esc_html__(', author: %s ', 'hs21'),
    '<a href="'.esc_url(get_author_posts_url(get_the_author_meta('ID'))).'">'.esc_html(get_the_author()).'</a>'

);
}
    

    function hs21_readMore_link() {
       
        echo '<a href="'.esc_url(get_permalink()).'"title="' . the_title_attribute(['echo'=>false]).'">';
        /* BUG!
        printf(
            wp_kses(
            __('Read more <span class="u-screen-reader-text">About %</span>', 'hs21'), 
            [
                'span'=>[
                    'class'=>[]
                    ]
                ]
            ),

            get_the_title()
        );
      
        echo '</a>';
 */
    }    
?>