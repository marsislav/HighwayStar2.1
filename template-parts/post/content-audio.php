<?php
    $content=apply_filters('the_content', get_the_content());
    $audios=get_media_embedded_in_content($content, array('audio', 'iframe'));
?>
<article <?php post_class('post-excerpt')?>>

<?php if (get_the_post_thumbnail() !=='' && (empty($audios) || is_single())){ ?>
  <div class="post-thumbnail">
    <?php the_post_thumbnail('large');?>
  </div>
  <?php } 
  if (!is_single() && !empty($audios)){
  ?>
  <div class="post-audio">
    
    <?php echo $audios[0]; ?>
    
  </div>
  <?php } ?>

<?php get_template_part('template-parts/post/header');?>
    <?php if (is_single()) {?>
    <div>
    <?php the_content();
    wp_link_pages();
    ?>
    </div>
    <?php } 
    else {?>
     <?php the_excerpt();?>
     <?php }?>
     <?php if (is_single()) {?>
      <?php get_template_part('template-parts/post/footer');?>
      
     <?php }?> 
</article>
    <?php /*if (!is_single()) {hs21_readMore_link();} -- TO FIXX!!*/?> 
</article>