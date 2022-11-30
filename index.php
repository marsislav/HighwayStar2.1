<?php get_header();?>
<main>
  <div class="container">
    <?php get_template_part('loop', 'index');?>
  </div>
  <?php if (is_active_sidebar('primary-sidebar')){?>
<aside   class="col-md-4" role="complementary">
    <?php get_sidebar();?>
</aside>
</div>
  <?php } ?>
</main>

  
 
<?php get_footer();?> 