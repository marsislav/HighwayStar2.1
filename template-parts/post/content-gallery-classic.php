<article <?php post_class('post-excerpt')?>>

<?php if (get_the_post_thumbnail() !=='' && (!get_post_gallery()  || is_single())){ ?>
  <div class="post-thumbnail">
    <?php the_post_thumbnail('large');?>
  </div>
  <?php } 
  if (!is_single() && get_post_gallery()){
  ?>
  <div class="post-gallery">
    
    <?php 
        $gallery=get_post_gallery(get_the_ID(), false );
        $gallery=explode(',', $gallery['ids']);
        foreach ($gallery as $id) {
            echo wp_get_attachment_image($id, 'large');
        }
    ?>
    
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