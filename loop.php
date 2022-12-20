<?php if (have_posts()){?>
  <?php while (have_posts()){?>
  <?php the_post();?>
  <?php get_template_part('template-parts/posts/content', get_post_format() );?>
  <?php } ?>
 
<?php the_posts_pagination();

} else {?>
  <?php get_template_part('template-parts/posts/content', 'none');?>
<?php }?>

