<?php
  $title = get_sub_field('title');
  $text = get_sub_field('text');
  $button = get_sub_field('button');

if ($button) {
  $button_url = $button['url'];
  $button_title = $button['title'];
  $button_target = $button['target'] ? $button['target'] : '_self';
}
?>

<section class="thank-you">
  <div class="thank-you__center center">
    <div class="thank-you__inner">
      <?php if ($title) : ?>
        <h1 class="thank-you__title title title-s"><?= $title ?></h1>
      <?php endif; ?>

      <?php if ($text) : ?>
        <div class="thank-you__message wysiwyg-content"><?= $text ?></div>
      <?php endif; ?>

      <?php if ($button) : ?>
        <a href="<?= $button_url ?>" target="<?= $button_target ?>" class="btn"><span><?= $button_title ?></span></a>
      <?php endif; ?>
    </div>
  </div>
</section>
