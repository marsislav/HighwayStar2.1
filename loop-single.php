<div class="container">
    <div class="row">
  <div class="col-md-<?php echo is_active_sidebar('primary-sidebar') ? '8' : '12'; ?>"> <!--TO FIX!!!--></div>
<?php if (have_posts()){?>
  <?php while (have_posts()){?>
  <?php the_post();?>
  <?php get_template_part('template-parts/post/content');
  if (get_theme_mod('hs21_display_author_info', true)){
  get_template_part('template-parts/single/author');
}  
  get_template_part('template-parts/single/navigation');
  if (comments_open() || get_comments_nuber()) {
    comments_template();
  }
?>

  <?php } 
  ?>
 
<?php the_posts_pagination();

} else {?>
  <?php get_template_part('template-parts/post/content', 'none');?>
<?php }?>

  </div> <!--end main container-->