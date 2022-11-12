<?php get_header();?>
<main>
  <div class="container">
    <?php get_template_part('loop', 'index');?>
  </div>
</main>
  <?php if (is_active_sidebar('primary-sidebar')){?> <!--TO FIX!!!--> 
<aside>

    <?php get_sidebar();?>
</aside>
  <?php } ?>
  
 
<?php get_footer();?> 