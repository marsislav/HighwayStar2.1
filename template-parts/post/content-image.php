<article <?php post_class('post-excerpt')?>">
    <div>
    <?php the_content();?>
    </div>
      <div class="meta">
          <?php hs21_post_meta();?>
      </div>
     <?php if (is_single()) {?>
      <?php get_template_part('template-parts/post/footer');?>
     <?php }?> 
</article>