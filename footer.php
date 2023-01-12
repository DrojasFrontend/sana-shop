<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sanna_Shop
 */

?>

	<footer id="colophon" class="footer" data-scroll-section>
		<div class="footer-container">
			<div class="footer-top">
				<h2><strong>CONOCE LAS ÚLTIMAS NOTICIAS DE SANNA</strong></h2>
				<p>Suscríbete y sé parte de nuestros contactos más importantes. Tendrás acceso a información exclusiva y mucho más</p>
				<!-- Begin Mailchimp Signup Form -->
				<div id="mc_embed_signup">
					<form action="https://sannaofficial.us13.list-manage.com/subscribe/post?u=6c9b8c80439723dc706679f5b&amp;id=e7af778304&amp;f_id=00e996e2f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_self">
						<div id="mc_embed_signup_scroll">
							<div class="indicates-required"></div>
							<div class="mc-field-group">
								<div class="icon">
									<!-- <?php get_template_part('images/icons/email'); ?> -->
								</div>
								<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Correo Electrónico" required>
								<span id="mce-EMAIL-HELPERTEXT" class="helper_text"></span>
							</div>
							<div id="mce-responses">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    
							<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" aria-hidden="true">
								<input type="text" name="b_6c9b8c80439723dc706679f5b_e7af778304" tabindex="-1" value="">
							</div>
							<input type="submit" value="ENVIAR" name="Subscribe" id="mc-embedded-subscribe" class="button">
						</div>
					</form>
				</div>
				<!--End mc_embed_signup-->
			</div>
		</div>
		<hr>
		<div class="footer-social-mobile">
			<div class="footer-container">
				<?php dynamic_sidebar('Footer 4') ; ?> 
			</div>
		</div>
		<div class="footer-container">
			<div class="footer-info">
				<div class="footer-language">
					<h4>Idiomas</h4>
					<?php $array = trp_custom_language_switcher();  ?>
					<ul class="" data-no-translation>
						<?php foreach ($array as $name => $item){ ?>
							<li class="">
								<a class="" href="<?php echo $item['current_page_url']?>"> 
									<span>
										<?php if( $item['language_code'] == 'es_CO') : ?>
											Español
										<?php else : ?>
											English
										<?php endif; ?>
									</span>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>
				<?php dynamic_sidebar('Footer 2') ; ?> 
				<?php dynamic_sidebar('Footer 3') ; ?> 
				<?php dynamic_sidebar('Footer 4') ; ?> 
				<?php dynamic_sidebar('Footer 5') ; ?> 
			</div>
		</div>
		<hr>
		<div class="footer-container">
			<div class="footer-bottom">
				COPYRIGHT 2022 © SANNA DESIGN I ALL RIGHTS RESERVED | <a href="https://99andpartners.com/" target="_blank">POWERED BY 99 & PARTNERS.</a>
			</div>
		</div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
