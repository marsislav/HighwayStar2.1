<article <?php post_class('post-excerpt')?>">
<?php if (get_the_post_thumbnail() !=='' ){ ?>
  <div class="post-thumbnail">
    <?php the_post_thumbnail('large');?>
  </div>

  <?php } ?>
    <h2 class="post-title"><a href="<?php the_permalink(); ?>" title ="<?php the_title_attribute(); ?>"><?php the_title();?></a></h2>
    <div class="meta">
    <?php hs21_post_meta();?>
    </div>
    <div>
      <?php the_excerpt();?>
    </div>
    <?php /*hs21_readMore_link() -- TO FIXX!!*/?> 
</article>