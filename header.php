<!DOCTYPE HTML>

<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="author" content="Marsislav" /> 
        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>

		<!--<link rel="stylesheet" href="assets/css/main.css" />-->
	</head>
	<body <?php body_class('landing is-preload');?>>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="<?php echo esc_url(home_url('/'));?>">
                    <?php if (has_custom_logo()) {
                        the_custom_logo();
                    } else {    
                        esc_html(bloginfo('name'));
                    }
                    ?>
                </a></h1>
					<nav id="nav" aria-label="<?php esc_html_e ('Main navigation', 'hs21')?>>
						<ul>
							<li><?php wp_nav_menu(array (
                        'theme_location'=>'main-menu'
                    ));?></li>
							
						</ul>
					</nav>
				</header>