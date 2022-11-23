<?php get_header(); ?>

    <div class="container">
        <div class="row">
            <div class="">
                <main role="main">
                    <?php get_template_part('loop', 'page'); ?>
                </main>
            </div>
            <div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>