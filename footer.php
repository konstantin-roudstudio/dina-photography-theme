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
      <div class="footer__inner">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, sint maiores quidem repellat omnis. Eligendi ea in debitis magnam earum, esse distinctio officia. Est aperiam, repellat veniam asperiores ut quisquam dicta necessitatibus, maiores temporibus mollitia iste, praesentium similique omnis aspernatur perspiciatis doloremque, quidem amet magnam reiciendis blanditiis voluptate quae. Ut, cum est natus? Veritatis, at deserunt itaque commodi minus repellendus optio nobis, reprehenderit iusto quam cumque quidem fugit quibusdam sed fuga dolore eos voluptates. Nostrum, explicabo, eaque? At, provident cumque totam quis tempora asperiores aperiam consequatur nobis dolor corporis unde eum iure nulla obcaecati facilis velit quaerat quos excepturi ipsam.</div>
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
