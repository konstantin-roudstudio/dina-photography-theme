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

$text = get_field('footer_title', 'option');
$copyright = get_field('footer_copyright', 'option');
$logos = get_field('footer_partners', 'option');
$bg_id = get_field('footer_background', 'option');
$bg_mob_id = get_field('footer_mobile_background', 'option');

$bg_img = $bg_id ? wp_get_attachment_image($bg_id, 'full') : null;
$bg_mob_img = $bg_mob_id ? wp_get_attachment_image($bg_mob_id, 'full') : null;

?>

<footer class="footer">
  <?php if ($bg_img) : ?>
    <div class="footer__bg<?php if ($bg_img && $bg_mob_img) echo ' footer__bg--desktop'; ?>"><?= $bg_img ?></div>
  <?php endif; ?>

  <?php if ($bg_mob_img) : ?>
    <div class="footer__bg<?php if ($bg_img && $bg_mob_img) echo ' footer__bg--mobile'; ?>"><?= $bg_mob_img ?></div>
  <?php endif; ?>

  <div class="footer__center center">
    <div class="footer__inner">
      <div class="footer__main">
        <h2 class="footer__title"><?= nl2br($text) ?></h2>
        <div class="footer__nav footer__nav--wide">
          <h3 class="footer__subtitle">Photography</h3>
          <?php
          wp_nav_menu(
              array(
                  'theme_location' => 'footer-photography',
                  'fallback_cb' => '',
                  'container' => false,
                  'menu_class' => 'footer__nav-menu'
              )
          );
          ?>
        </div>

        <div class="footer__nav">
          <h3 class="footer__subtitle">About</h3>
          <?php
          wp_nav_menu(
              array(
                  'theme_location' => 'footer-about',
                  'fallback_cb' => '',
                  'container' => false,
                  'menu_class' => 'footer__nav-menu'
              )
          );
          ?>
        </div>

        <div class="footer__nav footer__nav--contact">
          <h3 class="footer__subtitle">Contact</h3>
          <a class="footer__contact-link" href="mailto:di@dinadeykun.com">di@dinadeykun.com</a>
          <a class="footer__contact-link" href="tel:+48784772391">+48 784 772 391</a>
          <div class="footer__socials socials">
            <a href="#">
              <svg class="socials__icon">
                <path class="socials__icon-path"
                      d="M19 0C8.8 0 0.5 8.3 0.5 18.5C0.5 28.8 8.8 37 19 37C29.3 37 37.5 28.8 37.5 18.5C37.5 8.3 29.3 0 19 0ZM21 19.3V29.4V29.5H16.8V19.4H14.7V15.9H16.8V13.8C16.8 11 18 9.3 21.3 9.3H24.1V12.7H22.4C21.1 12.7 21 13.2 21 14.1V15.8H24.2L23.8 19.3H21Z"/>
              </svg>
            </a>
            <a href="#">
              <svg class="socials__icon">
                <path class="socials__icon-path"
                      d="M0.5 18.5C0.5 8.3 8.8 0 19 0C29.3 0 37.5 8.3 37.5 18.5C37.5 28.7 29.2 37 19 37C8.8 37 0.5 28.7 0.5 18.5ZM28.3 25C28.6 24.4 28.8 23.7 28.8 22.6C28.8846 21.6689 28.8976 21.311 28.9603 19.5854C28.9717 19.2724 28.9846 18.9145 29 18.5C29 16.8519 28.9627 16.0981 28.9337 15.5106C28.9152 15.1357 28.9 14.8286 28.9 14.4C28.8 13.3 28.6 12.6 28.4 12C28.2 11.3 27.8 10.7 27.3 10.2C26.8 9.7 26.3 9.4 25.6 9.1C25 8.8 24.3 8.6 23.2 8.6C22.1 8.5 21.8 8.5 19.1 8.5C17.4519 8.5 16.6981 8.53726 16.1106 8.56629C15.7357 8.58482 15.4286 8.6 15 8.6C13.9 8.7 13.2 8.9 12.6 9.1C11.9 9.3 11.3 9.7 10.8 10.2C10.3 10.8 10 11.4 9.7 12C9.4 12.6 9.2 13.3 9.2 14.4C9.1 15.5 9.1 15.8 9.1 18.5C9.1 20.1481 9.13726 20.9019 9.16629 21.4894C9.18482 21.8643 9.2 22.1714 9.2 22.6C9.3 23.7 9.5 24.4 9.7 25C9.9 25.7 10.3 26.3 10.8 26.8C11.3 27.3 11.9 27.6 12.5 27.9C13.1 28.2 13.8 28.4 14.9 28.4C16 28.5 16.3 28.5 19 28.5C20.6481 28.5 21.4019 28.4627 21.9894 28.4337C22.3643 28.4152 22.6714 28.4 23.1 28.4C24.2 28.3 24.9 28.1 25.5 27.9C26.1 27.7 26.7 27.3 27.2 26.8C27.7 26.2 28 25.6 28.3 25Z"/>
                <path class="socials__icon-path"
                      d="M26.7001 12.7C26.5001 12.2 26.3001 11.9 26.0001 11.6C25.7001 11.3 25.3001 11 24.9001 10.9C24.6001 10.8 24.0001 10.6 23.1001 10.6C22.7173 10.6 22.4224 10.5853 22.0585 10.5673C21.4715 10.5381 20.7049 10.5 19.1001 10.5H18.2001C16.4001 10.5 16.0001 10.5 15.1001 10.6C14.1788 10.6 13.6819 10.7698 13.3748 10.8747C13.3485 10.8836 13.3237 10.8921 13.3001 10.9C12.8001 11.1 12.5001 11.3 12.2001 11.6C11.9001 11.9 11.6001 12.3 11.5001 12.7C11.4001 13 11.2001 13.6 11.2001 14.5C11.2001 14.8828 11.1854 15.1777 11.1674 15.5416C11.1382 16.1286 11.1001 16.8952 11.1001 18.5C11.1001 21.1 11.1001 21.5 11.2001 22.5C11.2001 23.4213 11.3699 23.9182 11.4748 24.2253L11.4748 24.2253C11.4837 24.2516 11.4922 24.2764 11.5001 24.3C11.7001 24.8 11.9001 25.1 12.2001 25.4C12.5001 25.7 12.9001 26 13.3001 26.1C13.6001 26.2 14.2001 26.4 15.1001 26.4C15.4829 26.4 15.7777 26.4147 16.1417 26.4327C16.7287 26.4619 17.4953 26.5 19.1001 26.5C21.7001 26.5 22.1001 26.5 23.1001 26.4C24.0214 26.4 24.5183 26.2302 24.8254 26.1253L24.8254 26.1253C24.8517 26.1164 24.8765 26.1079 24.9001 26.1C25.4001 25.9 25.7001 25.7 26.0001 25.4C26.3001 25.1 26.6001 24.7 26.7001 24.3C26.8001 24 27.0001 23.4 27.0001 22.5C27.0001 22.1172 27.0147 21.8223 27.0328 21.4584C27.062 20.8714 27.1001 20.1048 27.1001 18.5C27.1001 15.9 27.1001 15.6 27.0001 14.5C27.0001 13.6 26.9001 13 26.7001 12.7ZM19.0001 23.6C16.2001 23.6 13.9001 21.3 13.9001 18.5C13.9001 15.7 16.2001 13.4 19.0001 13.4C21.8001 13.4 24.1001 15.7 24.1001 18.5C24.1001 21.3 21.8001 23.6 19.0001 23.6ZM23.1001 13.2C23.1001 13.9 23.6001 14.4 24.3001 14.4C25.0001 14.4 25.5001 13.9 25.5001 13.2C25.5001 12.5 25.0001 12 24.3001 12C23.6001 12 23.1001 12.5 23.1001 13.2Z"/>
                <path class="socials__icon-path"
                      d="M19.0002 15.2C17.2002 15.2 15.7002 16.7 15.7002 18.5C15.7002 20.3 17.2002 21.8 19.0002 21.8C20.8002 21.8 22.3002 20.3 22.3002 18.5C22.3002 16.7 20.8002 15.2 19.0002 15.2Z"/>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="footer__bottom">
        <button class="footer__btn btn">
          <svg>
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M1.90909 14H12.0909C13.1455 14 14 13.1782 14 12.1639V3.28962C14 2.27536 13.1455 1.45355 12.0909 1.45355H10.8182V0.612022C10.8182 0.273742 10.5336 0 10.1818 0C9.83008 0 9.54545 0.273742 9.54545 0.612022V1.45355H4.45455V0.612022C4.45455 0.273742 4.16992 0 3.81818 0C3.46645 0 3.18182 0.273742 3.18182 0.612022V1.45355H1.90909C0.854493 1.45355 0 2.27536 0 3.28962V12.1639C0 13.1782 0.854493 14 1.90909 14ZM12.0909 12.776H1.90909C1.55736 12.776 1.27273 12.5022 1.27273 12.1639V7.11475H12.7273V12.1639C12.7273 12.3265 12.6602 12.4819 12.5408 12.5966C12.4215 12.7114 12.2599 12.776 12.0909 12.776ZM3.18182 2.6776H1.90909C1.55736 2.6776 1.27273 2.95134 1.27273 3.28962V5.89071H12.7273V3.28962C12.7273 3.12705 12.6602 2.97166 12.5408 2.8569C12.4215 2.74215 12.2599 2.6776 12.0909 2.6776H10.8182V3.36612C10.8182 3.7044 10.5336 3.97814 10.1818 3.97814C9.83008 3.97814 9.54545 3.7044 9.54545 3.36612V2.6776H4.45455V3.36612C4.45455 3.7044 4.16992 3.97814 3.81818 3.97814C3.46645 3.97814 3.18182 3.7044 3.18182 3.36612V2.6776Z"/>
          </svg>
          check your date
        </button>
        <div class="footer__rights"><span><?= $copyright ?></span> <a href="#">Privacy Policy.</a></div>
      </div>
    </div>

    <?php if($logos) : ?>
    <div class="footer__partners">
      <?php foreach ($logos as $item) :
        $img = wp_get_attachment_image($item['logo'], 'large');
      ?>
        <a href="#"><?= $img ?></a>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</footer>
</div>
</div>

<?php wp_footer(); ?>

</body>

</html>
