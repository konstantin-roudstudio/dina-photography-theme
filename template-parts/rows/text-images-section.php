<?php
$inverted = get_sub_field('inverted');
$color = get_sub_field('bg_color');
$button = get_sub_field('button');
$check_button = get_sub_field('check_date_button');
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$text = get_sub_field('text');
$note = get_sub_field('note');
$image1 = get_sub_field('image_1');
$image2 = get_sub_field('image_2');

if ($button) {
  $button_url = $button['url'];
  $button_title = $button['title'];
  $button_target = $button['target'] ? $button['target'] : '_self';
}
?>

<section class="text-images<?php if ($color != 'white') echo ' text-images--'.$color; ?>">
  <div class="center">
    <div class="text-images__inner">
      <div class="text-images__content">
        <?php if ($title) : ?>
          <h2 class="text-images__title"><?= $title ?></h2>
        <?php endif; ?>
      <div class="text-images__img-wrapper mob">
        <?= wp_get_attachment_image($image1, 'full', null, array('class' => 'text-images__img') ) ?>
      </div>

      <?php if ($text) : ?>
        <div class="text-images__text wysiwyg-content">
          <?= $text ?>
        </div>
      <?php endif; ?>

      <?php if ($button && !$check_button) : ?>
        <a href="<?= $button_url ?>" target="<?= $button_target ?>" class="text-images__btn btn"><?= $button_title ?></a>
      <?php endif; ?>

      <?php if ($button && $check_button) : ?>

        <a href="<?= $button_url ?>" target="<?= $button_target ?>" class="text-images__btn btn btn--calendar">
          <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
            <path d="M12.09,1.45H10.82V.61A.63.63,0,0,0,10.18,0a.62.62,0,0,0-.63.61v.84H4.45V.61A.62.62,0,0,0,3.82,0a.63.63,0,0,0-.64.61v.84H1.91A1.88,1.88,0,0,0,0,3.29v8.87A1.87,1.87,0,0,0,1.91,14H12.09A1.87,1.87,0,0,0,14,12.16V3.29A1.88,1.88,0,0,0,12.09,1.45Zm.64,10.71a.61.61,0,0,1-.19.44.67.67,0,0,1-.45.18H1.91a.63.63,0,0,1-.64-.62v-5H12.73Zm0-6.27H1.27V3.29a.63.63,0,0,1,.64-.61H3.18v.69A.63.63,0,0,0,3.82,4a.62.62,0,0,0,.63-.61V2.68h5.1v.69a.62.62,0,0,0,.63.61.63.63,0,0,0,.64-.61V2.68h1.27a.63.63,0,0,1,.45.18.59.59,0,0,1,.19.43Z"/>
          </svg>
          <span><?= $button_title ?></span>
        </a>
      <?php endif; ?>
    </div>
    <div class="text-images__wrap">
      <?php if ($image1) : ?>
        <div class="text-images__img-wrapper desktop horisontal">
          <?= wp_get_attachment_image($image1, 'full', null, array('class' => 'text-images__img')) ?>
        </div>
      <?php endif; ?>

      <?php if ($image2) : ?>
        <div class="text-images__img-wrapper desktop vertical">
          <?= wp_get_attachment_image($image2, 'full', null, array('class' => 'text-images__img')) ?>
        </div>
      <?php endif; ?>
    </div>
    </div>
  </div>
</section>







