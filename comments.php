<?php
if (post_password_required()) {
    return;

} ?>
<div id="comments" class="comment-form">
    <?php
    if (have_comments()) { ?>
        <h2 class="comment-title">
            <?php
            printf(
                esc_html(_n('%1$s Reply to "%1$s"',
                    '%1$s Replies to "%1$s"', get_comments_number(), 'hs21'
                )),
                number_format_i18n(get_comments_number(), get_the_title())
            ) ?>
        </h2>
        <ul class="comment-list">
            <?php wp_list_comments(array(
                'short_ping'=>false,
                'avatar_size' => 200,
                'reply_text' => 'Reply',
                'callback' => 'hs21_comment_callback'
            )); ?>
        </ul>
        <?php the_comments_pagination(); ?>
    <?php } ?>
    <?php
    if (!comments_open() && get_comments_nuber()) { ?>
        <p class="comments-closed">
            <?php esc_html_e('Comments are closed for this post', 'hs2'); ?>
        </p>
    <?php } ?>
    <?php comment_form(); ?>
</div>