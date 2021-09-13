<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('image');
$shortcode = get_sub_field('form');
?>

<section class="contact">
  <div class="contact__bg"><?= wp_get_attachment_image($image, 'full'); ?></div>
  <div class="contact__content">
    <h1 class="title contact__title"><?= $title ?></h1>
    <div class="contact__text"><?= $text ?></div>
    <div class="contact__content-row">
      <div class="contact__content-item">
        <div class="contact__content-title">email me</div>
        <div class="contact__content-text">di@dinadeykun.com</div>
      </div>
      <div class="contact__content-item">
        <div class="contact__content-title">call me</div>
        <div class="contact__content-text">+48 784 772 391</div>
      </div>
    </div>
    <div class="contact__form"><?= do_shortcode($shortcode); ?></div>
  </div>
</section>



