<?php
$title = get_sub_field('title');
$text = get_sub_field('description');
$gallery = get_sub_field('gallery');
?>

<section class="gallery">
  <div class="gallery__inner">
    <div class="gallery__content center">
      <?php if ($title) : ?>
        <div class="gallery__title title"><?= $title ?></div>
      <?php endif; ?>

      <?php if ($text) : ?>
        <div class="gallery__text"><?= $text ?></div>
      <?php endif; ?>
    </div>

    <?php foreach ($gallery as $row) : ?>
      <div class="gallery__row<?php if (!$row['full_width']) echo ' center'; ?>">
        <?php foreach($row['row'] as $item) :
          $ratio = $item['aspect_ratio'] === 'unset' ? null : 'padding-bottom:'.$item['aspect_ratio'].'%;';
          $width = $item['image_width'] === 'unset' ? null : 'width:'.$item['image_width'].'%;';
          ?>
          <div class="gallery__item"  <?php if ($width) echo 'style="'.$width.'"' ?>>
            <div class="gallery__item-wrapper" <?php if ($ratio) echo 'style="'.$ratio.'"' ?>>
              <?= wp_get_attachment_image($item['image'], 'full') ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endforeach; ?>
  </div>
</section>
