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