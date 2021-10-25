<?php
$title = get_field('post_cta_title', 'option');
$text = get_field('post_cta_text', 'option');
$image = get_field('post_cta_image', 'option');
$check_link = get_field('post_cta_check_link', 'option');
$explore_link = get_field('post_cta_explore_link', 'option');

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
  <div class="post-cta__bg"><?= wp_get_attachment_image($image, 'full', false, array('loading' => 'lazy')) ?></div>
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
            <a href="<?= $check_link_url ?>" target="<?= $check_link_target ?>" class="post-cta__btn btn btn--calendar"><span><?= $check_link_title ?></span></a>
          <?php endif; ?>

          <?php if ($explore_link) : ?>
            <a href="<?= $explore_link_url ?>" target="<?= $explore_link_target ?>" class="post-cta__link"><?= $explore_link_title ?></a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
