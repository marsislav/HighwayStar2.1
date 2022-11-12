<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <!-- Metas -->
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marsislav" />  
    <link href="css/main.css" rel="stylesheet" />
    <!-- Document Title -->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<header role="banner" class="main-header"> 
    <div class="main-header-element">
        <div class="container">
            <div class="header-logo">
                <a href="<?php echo esc_url(home_url('/'));?>">
                    <?php if (has_custom_logo()) {
                        the_custom_logo();
                    } else {    
                        esc_html(bloginfo('name'));
                    }
                    ?>
                </a>
            </div>   
            <?php get_search_form(true);?>
        </div>
            <div class="main-navigation">
                <div class="container">
                 <nav role="navigation" aria-label="<?php esc_html_e ('Main navigation', 'hs21')?>">
                    <?php wp_nav_menu(array (
                        'theme_location'=>'main-menu'
                    ));?>
                </nav>
            </div>
            </div>
    </div>
</header>

