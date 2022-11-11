<?php get_header();?>
<main class="container">
<?php get_template_part('loop', 'index');?>
  <i class="fas fa-user"></i> <!-- uses solid style -->
  </main>
  <?php if (is_active_sidebar('primary-sidebar')){?> <!--TO FIX!!!--> 
  <aside>

    <?php get_sidebar();?>
  </aside>
  <?php } ?>
  
 
<?php get_footer();?> 