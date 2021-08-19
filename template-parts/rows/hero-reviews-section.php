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
    <svg class="hero-reviews__quote">
      <path class="hero-reviews__quote-path" d="M11.9999 6.18419C11.9999 2.76862 9.32123 0 6.01631 0C2.71139 0 0.313128 2.67267 0.0326729 6.07636C-0.394311 11.2692 3.42217 15.6171 8.05628 17C6.47652 16.0133 5.37527 14.2966 5.19097 12.2993C5.46113 12.3395 5.73474 12.3668 6.01519 12.3668C9.32117 12.3679 12 9.59944 12 6.18378L11.9999 6.18419Z" />
      <path class="hero-reviews__quote-path" d="M24.9999 6.18419C24.9999 2.76862 22.3212 0 19.0163 0C15.7115 0 13.3131 2.67267 13.0327 6.07636C12.6057 11.2692 16.4222 15.6171 21.0574 17C19.4777 16.0133 18.3764 14.2966 18.1921 12.2993C18.4623 12.3395 18.7371 12.3668 19.0164 12.3668C22.3212 12.3679 25 9.59944 25 6.18378L24.9999 6.18419Z" />
    </svg>

    <?php if ($title) : ?>
      <h1 class="hero-reviews__title title">Kind Words from my Brides & Grooms</h1>
    <?php endif; ?>

    <?php if ($text): ?>
      <div class="hero-reviews__text">Thanks to everyone for your feedback about my wedding or pre-wedding photography. It means a lot to me that you love the images and having a great time with me as your photographer. </div>
    <?php endif; ?>

    <?php if ($link): ?>
      <a href="<?= esc_url($link); ?>" class="hero-reviews__arrow">
        <svg>
          <path class="hero-reviews__arrow-path" d="M4 0.5V0H3V0.5H4ZM3.5 48.5L6.38675 43.5H0.613249L3.5 48.5ZM3 0.5V44H4V0.5H3Z" />
        </svg>
      </a>
    <?php endif; ?>
  </div>
</section>
