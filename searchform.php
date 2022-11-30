<form role="search" method="get"action="<?php esc_url(home_url('/'));?>">
    <input type="search" name="s" placeholder=<?php echo esc_html_x('Search...', 'hs21'); ?>  value="<?php  echo esc_attr(get_search_query()) ?>"/>
    <button type="submit"><?php echo __('<i class="fa-solid fa-magnifying-glass"></i>', 'hs21');?></button>
</form>