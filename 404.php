
<?php get_header();?>
<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3><?php esc_html_e('Nothingfound here, maybe you can try to search?', 'hs21') ?></h3>
                <?php get_search_form(); ?>
            </div>

        </div>
    </div>
</main>



<?php get_footer();?>