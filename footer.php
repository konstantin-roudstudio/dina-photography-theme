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

$fb_link = get_field('fb_link', 'option');
$insta_link = get_field('insta_link', 'option');
$phone = get_field('phone_number', 'option');
$email = get_field('contact_email', 'option');

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
          <?php if ($email) : ?>
            <a class="footer__contact-link" href="mailto:<?= $email ?>"><?= $email ?></a>
          <?php endif; ?>

          <?php if ($phone) : ?>
            <a class="footer__contact-link" href="tel:<?= $phone ?>"><?= $phone ?></a>
          <?php endif; ?>

          <?php if ($fb_link && $insta_link) : ?>
            <div class="footer__socials socials">
              <?php if ($fb_link) : ?>
                <a class="socials__link" href="<?= $fb_link ?>">
                  <svg class="socials__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 37">
                    <path d="M20.5,14.1c0-.9.1-1.4,1.4-1.4h1.7V9.3H20.8c-3.3,0-4.5,1.7-4.5,4.5v2.1H14.2v3.5h2.1V29.5h4.2V19.3h2.8l.4-3.5H20.5Z"/>
                  </svg>
                </a>
              <?php endif; ?>
              <a class="socials__link" href="#">
                <svg class="socials__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 37">
                  <path d="M28.4,14.4a9.86,9.86,0,0,0-.5-2.4,4.18,4.18,0,0,0-1.1-1.8,5,5,0,0,0-1.7-1.1,5.05,5.05,0,0,0-2.4-.5,36.93,36.93,0,0,0-4.1-.1c-1.65,0-2.4,0-3,.07-.37,0-.68,0-1.11,0a9.86,9.86,0,0,0-2.4.5,4.18,4.18,0,0,0-1.8,1.1A8.71,8.71,0,0,0,9.2,12a5.05,5.05,0,0,0-.5,2.4,36.93,36.93,0,0,0-.1,4.1c0,1.65,0,2.4.07,3,0,.37,0,.68,0,1.11A9.86,9.86,0,0,0,9.2,25a4.18,4.18,0,0,0,1.1,1.8A6.19,6.19,0,0,0,12,27.9a5.05,5.05,0,0,0,2.4.5,36.93,36.93,0,0,0,4.1.1c1.65,0,2.4,0,3-.07.37,0,.68,0,1.11,0a9.86,9.86,0,0,0,2.4-.5,4.52,4.52,0,0,0,1.7-1.1A8.71,8.71,0,0,0,27.8,25a5.05,5.05,0,0,0,.5-2.4c.08-.93.1-1.29.16-3,0-.32,0-.68,0-1.09,0-1.65,0-2.4-.07-3C28.42,15.14,28.4,14.83,28.4,14.4Zm-1.87,7.06c0,.36,0,.66,0,1a5.35,5.35,0,0,1-.3,1.8,2.59,2.59,0,0,1-.7,1.1,3,3,0,0,1-1.1.7l-.07,0a5,5,0,0,1-1.73.27,34.75,34.75,0,0,1-4,.1c-1.6,0-2.37,0-3-.07-.36,0-.66,0-1,0a5.35,5.35,0,0,1-1.8-.3,2.59,2.59,0,0,1-1.1-.7,3,3,0,0,1-.7-1.1l0-.07a5,5,0,0,1-.27-1.73,34.75,34.75,0,0,1-.1-4c0-1.6,0-2.37.07-3,0-.36,0-.66,0-1a5.35,5.35,0,0,1,.3-1.8,2.59,2.59,0,0,1,.7-1.1,3,3,0,0,1,1.1-.7l.07,0a5,5,0,0,1,1.73-.27,23.72,23.72,0,0,1,3.1-.1h.9c1.6,0,2.37,0,3,.07.36,0,.66,0,1,0a5.35,5.35,0,0,1,1.8.3,2.59,2.59,0,0,1,1.1.7,3,3,0,0,1,.7,1.1,3.61,3.61,0,0,1,.3,1.8,35.8,35.8,0,0,1,.1,4C26.6,20.1,26.56,20.87,26.53,21.46Z"/>
                  <path d="M18.5,13.4a5.1,5.1,0,1,0,5.1,5.1A5.12,5.12,0,0,0,18.5,13.4Zm0,8.4a3.3,3.3,0,1,1,3.3-3.3A3.33,3.33,0,0,1,18.5,21.8Z"/>
                </svg>
              </a>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <div class="footer__bottom">
        <a href="#" class="footer__btn btn btn--calendar">
          <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
            <path d="M12.09,1.45H10.82V.61A.63.63,0,0,0,10.18,0a.62.62,0,0,0-.63.61v.84H4.45V.61A.62.62,0,0,0,3.82,0a.63.63,0,0,0-.64.61v.84H1.91A1.88,1.88,0,0,0,0,3.29v8.87A1.87,1.87,0,0,0,1.91,14H12.09A1.87,1.87,0,0,0,14,12.16V3.29A1.88,1.88,0,0,0,12.09,1.45Zm.64,10.71a.61.61,0,0,1-.19.44.67.67,0,0,1-.45.18H1.91a.63.63,0,0,1-.64-.62v-5H12.73Zm0-6.27H1.27V3.29a.63.63,0,0,1,.64-.61H3.18v.69A.63.63,0,0,0,3.82,4a.62.62,0,0,0,.63-.61V2.68h5.1v.69a.62.62,0,0,0,.63.61.63.63,0,0,0,.64-.61V2.68h1.27a.63.63,0,0,1,.45.18.59.59,0,0,1,.19.43Z"/>
          </svg>
          check your date
        </a>
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
