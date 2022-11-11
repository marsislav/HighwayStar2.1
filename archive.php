<?php get_header();?>
<main class="container">
<div class="row">
    <header>
        <?php the_archive_title('<h1>', '</h1>');?>
        <?php the_archive_description('<p>', '</p>');?>
    </header>
</div>
<?php get_template_part('loop', 'archive');?>
  </main>
  <?php if (is_active_sidebar('primary-sidebar')){?> <!--TO FIX!!!--> 
  <aside>

    <?php get_sidebar();?>
  </aside>
  <?php } ?>
  
 
<?php get_footer();?> 