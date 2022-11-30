<header>
    <?php if (is_single()) {?>
        <h1 class="post-title"><a href="<?php the_permalink(); ?>" title ="<?php the_title_attribute(); ?>"><?php the_title();?></a></h1>
        <?php } else {?>
        <h2 class="post-title"><a href="<?php the_permalink(); ?>" title ="<?php the_title_attribute(); ?>"><?php the_title();?></a></h2>
        <?php } ?>
        <div class="meta">
        <?php hs21_post_meta();?>
        </div>
</header>