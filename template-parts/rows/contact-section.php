<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('image');
$shortcode = get_sub_field('form');
$phone = get_field('phone_number', 'option');
$email = get_field('contact_email', 'option');
?>

<section class="contact">
  <div class="contact__bg"><?= wp_get_attachment_image($image, 'full'); ?></div>
  <div class="contact__content animate-hero-about-content">
    <h1 class="title contact__title"><?= $title ?></h1>
    <div class="contact__text"><?= $text ?></div>
    <div class="contact__content-row">
      <?php if ($email) : ?>
        <div class="contact__content-item">
          <div class="contact__content-title">email me</div>
          <a href="mailto:<?= $email ?>" class="contact__content-text"><?= $email ?></a>
        </div>
      <?php endif; ?>

      <?php if ($phone) : ?>
        <div class="contact__content-item">
          <div class="contact__content-title">call me</div>
          <a href="tel:<?= $phone ?>" class="contact__content-text"><?= $phone ?></a>
        </div>
      <?php endif; ?>
    </div>
    <div class="contact__form"><?= do_shortcode($shortcode); ?></div>
  </div>
</section>



