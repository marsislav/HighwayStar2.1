
<?php get_header();?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-<?php echo is_active_sidebar('primary-sidebar') ? '8' : '12';?>">
                <header>
                    <h1>
                        <?php printf(esc_html__('Search Results for: %s', 'hs21'), get_search_query()) ?>
                    </h1>
                </header>
            </div>
            <div class="col-md-<?php echo is_active_sidebar('primary-sidebar') ? '8' : '12';?>">
                <?php get_template_part('loop', 'search');?>
            </div>
        </div>

        <?php if (is_active_sidebar('primary-sidebar')){?>
            <div class="col-md-4"><?php get_sidebar();?></div>
        <?php } ?>

    </div>
</main>



<?php get_footer();?>