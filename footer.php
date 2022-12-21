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
				<h2>Únete a nuestro <strong>BOLETIN INFORMATIVO</strong></h2>
				<p>¡Suscríbete a nuestra newsletter y tendrás acceso a promociones exclusivas y mucho más!</p>
			</div>
		</div>
		<hr>
		<div class="footer-container">
			<div class="footer-info">
				
				<?php dynamic_sidebar('Footer 1') ; ?> 
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
