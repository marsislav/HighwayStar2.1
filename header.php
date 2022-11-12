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

<nav>
<header class="main-header" role="banner">
    <div class="container">
      <div class=" main-header d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        
        
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
        

        
    <nav role="navigation" aria-label="<?php esc_html_e ('Main navigation', 'hs21')?>">
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        
          <li><?php wp_nav_menu(array (
                        'theme_location'=>'main-menu'
                    ));?>
          </li>
          
        </ul>
    </nav>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
            <?php get_search_form(true);?>
        </form>

        <!--<div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Login</button>
          <button type="button" class="btn btn-warning">Sign-up</button>
        </div>-->
      </div>
    </div>  
  </header>



