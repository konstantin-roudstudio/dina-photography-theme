<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DinaPhotography
 */

?>

<footer class="footer">
	<div class="footer__bg"></div>

	<div class="footer__center center">
		<div class="footer__inner">
			<h2 class="footer__title">I’m an artist who creates beautiful and romantic portraiture, and I’m committed to my art and every client’s individuality.</h2>
				<div class="footer__nav">
					<?php
            wp_nav_menu(
                array(
                    'theme_location' => 'footer-menu',
                    'fallback_cb'    => '',
                    'container'      => false
                )
              );
            ?>
				</div>

				<div class="footer__contact">
					<h3 class="footer__contact-title">Contact</h3>
					<a class="footer__contact-link"href="mailto:di@dinadeykun.com">di@dinadeykun.com</a>
					<a class="footer__contact-link"href="tel:+48784772391">+48 784 772 391</a>
					<div class="footer__socials">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?> /images/facebook.svg" alt=""></a>
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?> /images/instagram.svg" alt=""></a>
					</div>
				</div>
			<div class="footer__bottom">
				<button class="footer__btn btn">
          <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" clip-rule="evenodd"
							d="M1.90909 14H12.0909C13.1455 14 14 13.1782 14 12.1639V3.28962C14 2.27536 13.1455 1.45355 12.0909 1.45355H10.8182V0.612022C10.8182 0.273742 10.5336 0 10.1818 0C9.83008 0 9.54545 0.273742 9.54545 0.612022V1.45355H4.45455V0.612022C4.45455 0.273742 4.16992 0 3.81818 0C3.46645 0 3.18182 0.273742 3.18182 0.612022V1.45355H1.90909C0.854493 1.45355 0 2.27536 0 3.28962V12.1639C0 13.1782 0.854493 14 1.90909 14ZM12.0909 12.776H1.90909C1.55736 12.776 1.27273 12.5022 1.27273 12.1639V7.11475H12.7273V12.1639C12.7273 12.3265 12.6602 12.4819 12.5408 12.5966C12.4215 12.7114 12.2599 12.776 12.0909 12.776ZM3.18182 2.6776H1.90909C1.55736 2.6776 1.27273 2.95134 1.27273 3.28962V5.89071H12.7273V3.28962C12.7273 3.12705 12.6602 2.97166 12.5408 2.8569C12.4215 2.74215 12.2599 2.6776 12.0909 2.6776H10.8182V3.36612C10.8182 3.7044 10.5336 3.97814 10.1818 3.97814C9.83008 3.97814 9.54545 3.7044 9.54545 3.36612V2.6776H4.45455V3.36612C4.45455 3.7044 4.16992 3.97814 3.81818 3.97814C3.46645 3.97814 3.18182 3.7044 3.18182 3.36612V2.6776Z" fill="black" />
					</svg> check your date</button>
				<a href="#" class="footer__rights">&copy; 2021. Dina Deykun. All rights reserved. Privacy Policy.</a>
			</div>

		</div>
		<div class="footer__partners">
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?> /images/footer-partners-01.png" alt=""></a>
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?> /images/footer-partners-02.png" alt=""></a>
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?> /images/footer-partners-03.png" alt=""></a>
		</div>
	</div>
</footer>
<?php /* get_template_part('template-parts/cookies-bar') */ ?>

</div>
</div>

<?php wp_footer(); ?>

</body>

</html>