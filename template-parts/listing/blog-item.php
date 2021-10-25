<?php
$url = esc_url(get_permalink());
?>

<div class="blog-listing__item">
  <div class="blog-listing__date"><?= get_the_date('M d, Y'); ?></div>
  <a href="<?= $url ?>" class="blog-listing__item-title"><?= get_the_title() ?></a>
  <div class="blog-listing__content-wrapper">
    <a href="<?= $url ?>" class="blog-listing__img-wrapper">
      <?= get_the_post_thumbnail(null, 'large', ['alt' => get_the_title(), 'sizes' => '350px', 'loading' => 'lazy']) ?>
    </a>
    <a href="<?= $url ?>" class="blog-listing__link">read more</a>
  </div>
</div>
