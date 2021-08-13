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
  <div class="footer__center center">
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

  </div>
</footer>
<?php /* get_template_part('template-parts/cookies-bar') */ ?>

</div>
</div>

<?php wp_footer(); ?>

</body>

</html>
