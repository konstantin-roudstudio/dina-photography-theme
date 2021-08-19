<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$bg_id = get_sub_field('image');
$bg_mob_id = get_sub_field('image_mobile');
$link = get_sub_field('link');

$bg_img = $bg_id ? wp_get_attachment_image($bg_id, 'full') : null;
$bg_mob_img = $bg_mob_id ? wp_get_attachment_image($bg_mob_id, 'full') : null;

?>

<section class="hero-reviews">
  <?php if ($bg_img): ?>
    <div class="hero-reviews__bg<?php if ($bg_img && $bg_mob_img) echo ' hero-reviews__bg--desktop'; ?>">
      <?= $bg_img ?>
    </div>
  <?php endif; ?>

  <?php if ($bg_mob_img): ?>
    <div class="hero-reviews__bg<?php if ($bg_img && $bg_mob_img) echo ' hero-reviews__bg--mobile'; ?>">
      <?= $bg_mob_img ?>
    </div>
  <?php endif; ?>

  <div class="center hero-reviews__center">
    <?php if ($title) : ?>
      <h1 class="hero-reviews__title title">Kind Words from my Brides & Grooms</h1>
    <?php endif; ?>

    <?php if ($text): ?>
      <div class="hero-reviews__text">Thanks to everyone for your feedback about my wedding or pre-wedding photography. It means a lot to me that you love the images and having a great time with me as your photographer. </div>
    <?php endif; ?>

    <?php if ($link): ?>
      <a href="<?= esc_url($link); ?>" class="hero-reviews__arrow"></a>
    <?php endif; ?>
  </div>
</section>
