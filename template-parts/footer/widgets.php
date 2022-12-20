<?php
$footer_layout=sanitize_text_field(get_theme_mod('hs21_footer_layout', '3,3,3,3'));
$footer_layout=preg_replace('/\s+/','', $footer_layout);
$columns=explode(',', $footer_layout);
$footer_bg=hs21_sanitize_footer_bg(get_theme_mod('hs21_footer_bg','dark'));
$widgets_active=false;
foreach ($columns as $i =>$column) {
    if(is_active_sidebar ('footer-sidebar-' . ($i+1))){
        $widgets_active=true;
    }
}
?>
<?php if($widgets_active) {?>
    
    <section id="cta" class="footer-<?php echo $footer_bg?>">
    <div class="row">
            <?php foreach ($columns as $i => $column){?>
                <div class="col-<?php echo $column ?>">
                    <?php if (is_active_sidebar('footer-sidebar-' . ($i+1))) {
                        dynamic_sidebar('footer-sidebar-' . ($i+1));
                    }
                    ?>
                </div>
            <?php } ?>
            </div>
    </section>
    

<?php } ?>