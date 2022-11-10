<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <!-- Metas -->
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset');?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marsislav" />
    <!-- Links -->
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="icofont.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/slick.css" rel="stylesheet" />
    
    <link href="css/main.css" rel="stylesheet" />
    <!-- Document Title -->
    <?php wp_head(); ?>
</head>
<body>
  <!-- HEADER SECTION -->  
  <header id="home">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light ">
        <!-- Change Logo Img Here -->
        <a class="navbar-brand" href="#"><img src="images/logo.svg" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <div class="interactive-menu-button">
            <a href="#">
              <span>Menu</span>
            </a>
          </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="#home">Home.<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="#about-us">About Us.</a>
            </li>
            <li class="nav-item">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="#portfolio">Portfolio.</a>
            </li>
            <li class="nav-item">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="#blog">Blog.</a>
            </li>
            <li class="nav-item">
              <!-- Nav Link -->
              <a class="nav-link" data-scroll href="#contact-us">Contact Us.</a>
            </li>
            <li class="nav-item dropdown">
              <!-- Lang Dropdown Link -->
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <!-- Lang Dropdown Choice -->
                <a class="dropdown-item" href="#">DE </a>
                <!-- Lang Dropdown Choice -->
                <a class="dropdown-item" href="#">ES </a>
              </div>
            </li>
          </ul>
          <form data-scroll href="#contact-us" class="contact-btn form-inline my-2 my-lg-0">
            <!-- Contacgt Us Button -->
            <button>Contact Us</button>
          </form>
        </div>
      </nav>
    </div>
    <!-- HERO SECTION -->    
    <div class="container-fluid hero">
      <img src="images/hero.svg" alt="">
      <div class="container">
        <!-- Hero Title -->
        <?php if (have_posts()){?>
            <?php while(have_posts()){?>
                <?php the_post();?>
        <h1><a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>"><?php the_title();?></a></h1>
        
        <!-- Hero Title Info -->
        <p><?php the_excerpt();?></p>
        <div>
            Posted on: <a href="<?php echo get_permalink( );?>"> 
            <time datetime="<?php echo get_the_date('c');?>">
                <?php echo get_the_date(); ?>
            </time></a>
            By: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"> <?php echo get_the_author(); ?> </a>    
        </div><?php }}?>
        <div class="hero-btns">
          <!-- Hero Btn First -->
          <a data-scroll href="#about-us">More About us</a>
          <!-- Hero Btn Second -->
          <a data-scroll href="#contact-us">Get in Touch.</a>
        </div>
      </div>
    </div>
    

  </header>