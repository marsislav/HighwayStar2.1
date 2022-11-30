<div class="row">
  <div class="col-md-<?php echo is_active_sidebar('primary-sidebar') ? '8' : '12'; ?>">
<?php if (have_posts()){?>
  <?php while (have_posts()){?>
  <?php the_post();?>
  <?php get_template_part('template-parts/post/content', get_post_format() );?>
  <?php } ?>
 
<?php the_posts_pagination();

} else {?>
  <?php get_template_part('template-parts/post/content', 'none');?>
<?php }?>

 