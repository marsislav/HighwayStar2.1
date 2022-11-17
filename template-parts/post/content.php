<article <?php post_class('post-excerpt')?>">
<?php if (get_the_post_thumbnail() !=='' ){ ?>
  <div class="post-thumbnail">
    <?php the_post_thumbnail('large');?>
  </div>
  <?php } ?>
 <?php if (is_single()) {?>
    <h1 class="post-title"><a href="<?php the_permalink(); ?>" title ="<?php the_title_attribute(); ?>"><?php the_title();?></a></h1>
    <?php } else {?>
      <h2 class="post-title"><a href="<?php the_permalink(); ?>" title ="<?php the_title_attribute(); ?>"><?php the_title();?></a></h2>
    <?php } ?>
    <div class="meta">
    <?php hs21_post_meta();?>
    </div>
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
      <footer class="post-footer">
        <?php if (has_category()) {
          $categories=get_the_category_list(esc_html__(', ', 'hs21'));
          printf (esc_html__('Posted in: %s', 'hs21'), $categories);
        }

        if (has_tag()) {
        $tags_list=get_the_tag_list('<ul><li>','</li><li>', '</li></ul>');
      echo $tags_list;  
      }
        ?>
      </footer>
     <?php }?> 
</article>
    <?php /*if (!is_single()) {hs21_readMore_link();} -- TO FIXX!!*/?> 
</article>