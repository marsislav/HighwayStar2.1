<div class="col-6 col-12-narrower"><?php /*post_class('post-excerpt')*/?>
      <section class="box special">
      <?php if (get_the_post_thumbnail() !=='' ){ ?>
        <span class="image featured"><?php the_post_thumbnail('large');?></span>
        <?php } ?>
        <?php if (is_single()) {?>
        <h3><?php the_title();?></h3>
        <?php } else {?>
          <h3><a href="<?php the_permalink(); ?>" title ="<?php the_title_attribute(); ?>"><?php the_title();?></a></h3><?php }?>
        <p>
        <?php if (is_single()) {
          the_content();
          wp_link_pages();
        } 
        else {
          the_excerpt();
        }
        ?>
        </p>
        <div class="meta">
        <?php hs21_post_meta();?>
        <?php if (is_single()) {?>
      <?php if (has_category()) {
          $categories=get_the_category_list(esc_html__(', ', 'hs21'));
          printf (esc_html__('Posted in: %s', 'hs21'), $categories);
        }

        if (has_tag()) {
        $tags_list=get_the_tag_list('<ul><li>','</li><li>', '</li></ul>');
      echo $tags_list;  
      }}
        ?>
        </div>
        <ul class="actions special">
          <li><a href="#" class="button alt">Learn More</a></li>
          <?php /*if (!is_single()) {hs21_readMore_link();} -- TO FIXX!!*/?> 
        </ul>
      
      </section>

    </div>




       

     
      
  