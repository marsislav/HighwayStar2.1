<?php get_header();?>
<main class="container">
<div class="row">
  <div class="col-md-<?php echo is_active_sidebar('primary-sidebar') ? '8' : '12'; ?>"> <!--TO FIX!!!--></div>
<?php if (have_posts()){?>
  <?php while (have_posts()){?>
  <?php the_post();?>
  <article <?php post_class('post-excerpt')?>">
    <h2 class="post-title"><a href="<?php the_permalink(); ?>" title ="<?php the_title_attribute(); ?>"><?php the_title();?></a></h2>
    <div class="meta">
    <?php hs21_post_meta();?>
    </div>
    <div>
      <?php the_excerpt();?>
    </div>
    <?php hs21_readMore_link()?> 
</article>
  <?php } ?>
 
<?php the_posts_pagination();

} else {?>
<p><?php _e('Sorry, no posts available', 'hs21');?></p>
<?php }?>

  </div> <!--end main container-->
  </main>
  <?php if (is_active_sidebar('primary-sidebar')){?> <!--TO FIX!!!--> 
  <aside>

    <?php get_sidebar();?>
  </aside>
  <?php } ?>
  
 
<?php get_footer();?> 