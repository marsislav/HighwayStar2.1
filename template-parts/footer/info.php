<?php
$footer_bg=hs21_sanitize_footer_bg(get_theme_mod('hs21_footer_bg','dark'));
$site_info=get_theme_mod('hs21_site_info', '');
?>
<?php if ($site_info) {?>
<div class="site-info <?php echo esc_html($footer_bg);?>">
<ul class="copyright">
<li>
            <?php
            $allowed=array(
                'a'=>array(
                    'href'=>array(),
                    'title'=>array(),
                    'target'=>array()
                )
            );
            echo wp_kses($site_info, $allowed);?>
      </li>
        </ul>
</div>
<?php } ?>