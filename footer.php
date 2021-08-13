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
  <div class="footer__bg">
    <img src="<?php echo get_template_directory_uri(); ?> /images/footer-bg-mob.jpg" alt="">
  </div>
	
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

      <div class="footer__socials">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?> /images/footer-icon-01.svg" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?> /images/footer-icon-02.svg" alt=""></a>
      </div>

			<div class="footer__bottom">
				<button class="footer__btn btn"><img src="<?php echo get_template_directory_uri(); ?> /images/footer-btn-icon.svg" alt=""> check your date</button>
				<div class="footer__rights">&copy; 2021. Dina Deykun. All rights reserved. Privacy Policy.</div>
			</div>

		</div>

	</div>
</footer>
<?php /* get_template_part('template-parts/cookies-bar') */ ?>

</div>
</div>

<?php wp_footer(); ?>

</body>

</html>