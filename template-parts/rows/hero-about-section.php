<?php
$title = get_sub_field('title');
$bg_id = get_sub_field('image');
$bg_mob_id = get_sub_field('image_mobile');
$text_items = get_sub_field('text_items');
$facts = get_sub_field('facts');
$logos = get_sub_field('logos');

$bg_img = $bg_id ? wp_get_attachment_image($bg_id, 'full', false, array('class' => 'animate-zoom')) : null;
$bg_mob_img = $bg_mob_id ? wp_get_attachment_image($bg_mob_id, 'full', false, array('class' => 'animate-zoom')) : null;

?>

<section class="hero-about">
  <?php if ($bg_img): ?>
    <div class="hero-about__bg<?php if ($bg_img && $bg_mob_img) echo ' hero-about__bg--desktop'; ?>">
      <?= $bg_img ?>
      <?php if ($title) : ?>
        <h1 class="hero-about__title title"><?= nl2br($title) ?></h1>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <?php if ($bg_mob_img): ?>
    <div class="hero-about__bg<?php if ($bg_img && $bg_mob_img) echo ' hero-about__bg--mobile'; ?>">
      <?= $bg_mob_img ?>
      <?php if ($title) : ?>
        <h1 class="hero-about__title title"><?= nl2br($title) ?></h1>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <div class="hero-about__center center animate-hero-about-content">
    <div class="hero-about__content">
      <?php if ($title) : ?>
        <h1 class="hero-about__title title"><?= nl2br($title) ?></h1>
      <?php endif; ?>

      <?php if (!empty($text_items)) : ?>
        <?php foreach ($text_items as $item) : ?>
          <?php if ($item['columns'] == true) : ?>
            <div class="hero-about__block-text hero-about__block-text--columns">
              <p class="hero-about__text"><?= $item['text_left'] ?></p>
              <p class="hero-about__text"><?= $item['text_right'] ?></p>
            </div>
          <?php else: ?>
            <div class="hero-about__block-text">
              <p class="hero-about__text"><?= $item['text'] ?></p>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      <?php endif; ?>

      <?php if (!empty($facts)) : ?>
        <div class="hero-about__items">
          <div class="hero-about__items-left">
            <?php foreach ($facts

            as $index => $item) : ?>
            <?php if ($index >= count($facts) / 2 && $index < (count($facts) / 2) + 1) : ?>
          </div>
          <div class="hero-about__items-right">
            <?php endif; ?>
            <div class="hero-about__item">
              <div class="hero-about__item-title"><?= $item['title'] ?></div>
              <div class="hero-about__item-text"><?= $item['text'] ?></div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>

      <?php if (!empty($logos)) : ?>
        <div class="hero-about__bottom">
          <div class="hero-about__item-title">Some of my works published at:</div>
          <div class="hero-about__bottom-items">
            <?php foreach ($logos as $logo) : ?>
              <div class="hero-about__bottom-item">
                <?= wp_get_attachment_image($logo['image'], 'large'); ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

