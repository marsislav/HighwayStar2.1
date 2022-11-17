<?php
$prev=get_previous_post();
$next=get_next_post();
?>
<?php if ($prev || $next) {?>
    <nav class="post-navigation" role="navigation">
        <h2 class="screen-reader-text"><?php esc_attr_e('Post navigation', 'hs21'); ?></h2>
        <div class="post-navigation">
            <?php if ($prev){?>
                <div class="prev-post">
                    <a href="<?php the_permalink($prev->ID);?>">
                        <?php if (has_post_thumbnail($prev->ID)){?>
                            <div class="post-navigation-thumbnail">
                                <?php echo get_the_post_thumbnail ($prev->ID, 'thumbnail');?>
                            </div>
                        <?php }?>
                        <div class="post-navigation-excerpt">
                            <span class="post-navgation-subtitle"><?php esc_html_e('Previous post: ','hs21')?></span>
                            <span class="title">
                                <?php echo esc_html(get_the_title($prev->ID)); ?>
                            </span>
                        </div>
                    </a>
                </div>
            <?php }?>
            <?php if ($next){?>
                <div class="next-post">
                    <a href="<?php the_permalink($next->ID);?>">
                        <?php if (has_post_thumbnail($next->ID)){?>
                            <div class="post-navigation-thumbnail">
                                <?php echo get_the_post_thumbnail ($next->ID, 'thumbnail');?>
                            </div>
                        <?php }?>
                        <div class="post-navigation-excerpt">
                            <span class="post-navgation-subtitle"><?php esc_html_e('Next post: ','hs21')?></span>
                            <span class="title">
                                <?php echo esc_html(get_the_title($next->ID)); ?>
                            </span>
                        </div>
                    </a>
                </div>
            <?php }?>


        </div>
    </nav>

<?php }?>
</nav>