<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$link = get_sub_field('link');
$img = get_sub_field('img');
$inverted = get_sub_field('inverted');

if ($link) {
  $link_url = $link['url'];
  $link_title = $link['title'];
  $link_target = $link['target'] ? $link['target'] : '_self';
}
?>

<section class="info-block <?php if ($inverted) echo ' info-block--inverted'; ?>">
  <div class="info-block__center center center--narrow">
    <div class="info-block__inner">
      <div class="info-block__img-wrapper">
        <?= wp_get_attachment_image($img, 'full') ?>
      </div>
      <div class="info-block__content">
        <?php if ($title) : ?>
          <div class="info-block__title"><?= $title ?></div>
        <?php endif; ?>

        <?php if ($text) : ?>
          <div class="info-block__text"><?= $text ?></div>
        <?php endif; ?>

        <?php if ($link) : ?>
          <a href="#" class="info-block__link">read more</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>