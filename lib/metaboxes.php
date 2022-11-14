<?php

function hs21_add_meta_box() {
    add_meta_box('hs21_post_metabox', esc_html_e('Popst settings'), 'hs21_post_metabox_html','post', 'normal', 'default');
}

add_action ('add_metaboxes', 'hs21_add_metabox'); 

function hs21_posts_metabox_hml () {
    $subtitle=get_post_meta($post->ID, '_hs21_post_subtitle', true)
    ?>

<p>
        <label for="hs21_post_metabox_html"><?php esc_html_e('Post Subtitle', 'hs21'); ?></label>
        <br/>
        <input class="widefat" type="text" name="hs21_post_subtitle_field" id="hs21_post_metabox_html"
               value="<?php echo esc_attr($subtitle); ?>"/>
</p>

<?php } 

function hs21_save_post_metabox ($post_id, $post) {

if (array_key_exists('hs21_post_subtitle_field', $_POST)) {
    update_post_meta($post_id, '_hs21_post_subtitle', sanitize_text_field($_POST['_hs21_post_subtitle_field']));
}
}

add_action('save_post', 'hs21_save_post_metabox', 10, 2);
?>
