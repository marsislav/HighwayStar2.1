<?php get_header();?>
<!-- Banner -->
<section id="banner">
  <h2><?php esc_html(bloginfo('name'))?></h2>
  <p><?php esc_html(bloginfo('description'))?></p>
  <ul class="actions special">
    <li><a href="#" class="button primary">Sign Up</a></li>
    <li><a href="#" class="button">Learn More</a></li>
  </ul>
</section>

<!-- Main -->
<section id="main" class="container">
  <section class="box special">
    <header class="major">
      <h2>
        Introducing the ultimate mobile app
        <br />
        for doing stuff with your phone
      </h2>
      <p>
        Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus
        nunc ornare<br />
        adipiscing nunc adipiscing. Condimentum turpis massa.
      </p>
    </header>
    <span class="image featured"><img src="images/pic01.jpg" alt="" /></span>
  </section>

  

  <div class="row">
  <?php get_template_part('loop', 'index');?>
  </div>
</section>

<!-- CTA -->

<?php get_footer();?>
