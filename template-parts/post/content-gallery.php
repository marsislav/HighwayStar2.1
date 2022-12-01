<?php 
$blocks=parse_blocks(get_the_content());
$gallery=null;
foreach ($blocks as $block) {
if ($block['blockName']==='core/gallery') {
$gallery=$block;
break;
}
}
?>

<article <?php post_class('post-excerpt')?>>

<?php if (get_the_post_thumbnail() !=='' && (!$gallery  || is_single())){ ?>
  <div class="post-thumbnail">
    <?php the_post_thumbnail('large');?>
  </div>
  <?php } 
  if (!is_single() && get_post_gallery()){
  ?>
  <div class="post-gallery-guttenberg">
    
    <?php 
      echo $gallery['innerHTML'];
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