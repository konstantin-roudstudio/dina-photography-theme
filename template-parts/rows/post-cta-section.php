<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$image = get_sub_field('image');
$check_link = get_sub_field('check_link');
$explore_link = get_sub_field('explore_link');

if ($check_link) {
  $check_link_url = $check_link['url'];
  $check_link_title = $check_link['title'];
  $check_link_target = $check_link['target'] ? $check_link['target'] : '_self';
}

if ($explore_link) {
  $explore_link_url = $explore_link['url'];
  $explore_link_title = $explore_link['title'];
  $explore_link_target = $explore_link['target'] ? $explore_link['target'] : '_self';
}
?>

<section class="post-cta">
  <div class="post-cta__bg parallax-slow"><?= wp_get_attachment_image($image, 'full', false, array('loading' => 'lazy')) ?></div>
  <div class="center center--narrow">
    <div class="post-cta__content">
      <?php if ($title) : ?>
        <div class="post-cta__title title"><?= $title ?></div>
      <?php endif; ?>

      <?php if ($text) : ?>
        <div class="post-cta__text"><?= $text ?></div>
      <?php endif; ?>

      <?php if ($check_link || $explore_link) : ?>
        <div class="post-cta__links-wrapper">
          <?php if ($check_link) : ?>
            <a href="<?= $check_link_url ?>" target="<?= $check_link_target ?>" class="post-cta__btn btn btn--calendar"><?= $check_link_title ?></a>
          <?php endif; ?>

          <?php if ($explore_link) : ?>
            <a href="<?= $explore_link_url ?>" target="<?= $explore_link_target ?>" class="post-cta__link"><?= $explore_link_title ?></a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
