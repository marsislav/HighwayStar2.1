<h1>SINGLE PORTFOLIO - TO FIX!</h1>
<?php get_header();?>
<?php
$layout= hs21_meta(get_the_ID(),'hs21_post_layout', 'full');
$sidebar =is_active_sidebar('primary-sidebar');
if ($layout==='sidebar' && !$sidebar){
    $layout='full';
}
?>
<main>
    <div class="container single-post-<?php echo $layout;?>">
        <?php get_template_part ('loop', 'single')?>
    </div>
</main>



<?php get_footer();?>