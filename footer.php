
			<!-- Footer -->
            <footer id="footer" role="contentinfo">
			<?php wp_footer();?>
			
  			<?php get_template_part ('template-parts/footer/widgets');?>
			
					<ul class="icons">
					
						<?php if(get_theme_mod('hs21_facebook_handle')){?>
							<li><a href="<?php echo get_theme_mod('hs21_facebook_handle')?>" class="icon brands fa-facebook-f">
						<span class="label">
						Facebook
						</span></a></li><?php }?>	
						<?php if(get_theme_mod('hs21_twitter_handle')){?><li><a href="<?php echo get_theme_mod('hs21_twitter_handle')?>" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
							<?php }?>
							<?php if(get_theme_mod('hs21_instagram_handle')){?>
						<li><a href="<?php echo get_theme_mod('hs21_instagram_handle')?>" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<?php }?>
						<?php if(get_theme_mod('hs21_youtube_handle')){?>
							<li><a href="<?php echo get_theme_mod('hs21_youtube_handle')?>" class="icon brands fa-youtube"><span class="label">YouTube</span></a></li>
							<?php }?>
							<?php if(get_theme_mod('hs21_viber_handle')){?>
							<li><a href="viber://chat?number=<?php echo get_theme_mod('hs21_viber_handle')?>" class="icon brands fa-viber"><span class="label">Viber</span></a></li>
							<?php }?>
							<?php if(get_theme_mod('hs21_whatsapp_handle')){?>
							<li><a href="https://api.whatsapp.com/send?phone=<?php echo get_theme_mod('hs21_whatsapp_handle')?>" class="icon brands fa-whatsapp"><span class="label">WhatsApp</span></a></li><?php }?>
							<?php if(get_theme_mod('hs21_github_handle')){?><li><a href="<?php echo get_theme_mod('hs21_github_handle')?>" class="icon brands fa-github"><span class="label">Github</span></a></li><?php }?>
							<?php if(get_theme_mod('hs21_phone_handle')){?><li><a href="tel:<?php echo get_theme_mod('hs21_phone_handle')?>" class="icon far fa-comments"><span class="label">Phone</span></a></li><?php } ?>
							<?php if(get_theme_mod('hs21_email_handle')){?><li><a href="mailto:<?php echo get_theme_mod('hs21_email_handle')?>" class="icon fa-envelope"><span class="label">Email</span></a></li> <?php } ?>
							<?php if(get_theme_mod('hs21_skype_handle')){?><li><a href="skype:<?php echo get_theme_mod('hs21_skype_handle')?>?chat" class="icon brands fa-skype"><span class="label">Skype</span></a></li><?php }?>
					</ul>
					<ul class="copyright">
					<?php  get_template_part('template-parts/footer/info');?>
					</ul>
				</footer>

		</div>

		<!-- Scripts 
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>-->

	</body>
</html>