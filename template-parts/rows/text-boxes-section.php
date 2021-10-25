<?php
$inverted = get_sub_field('inverted');
$cream = get_sub_field('cream');
$title = get_sub_field('title');
$button = get_sub_field('button');

if ($button) {
  $button_url = $button['url'];
  $button_title = $button['title'];
  $button_target = $button['target'] ? $button['target'] : '_self';
}

$items = get_sub_field('items');
?>

<section
    class="text-boxes<?php if ($cream) : ?> text-boxes--cream<?php endif; ?><?php if ($inverted) : ?> text-boxes--inverted<?php endif; ?>">
  <div class="center">
    <div class="text-boxes__inner">
      <div class="text-boxes__head">
        <h2 class="text-boxes__title"><?= $title ?></h2>
        <?php if ($button) : ?>
          <a href="<?= $button_url ?>" target="<?= $button_target ?>" class="text-boxes__btn btn btn--calendar">
            <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
              <path
                  d="M12.09,1.45H10.82V.61A.63.63,0,0,0,10.18,0a.62.62,0,0,0-.63.61v.84H4.45V.61A.62.62,0,0,0,3.82,0a.63.63,0,0,0-.64.61v.84H1.91A1.88,1.88,0,0,0,0,3.29v8.87A1.87,1.87,0,0,0,1.91,14H12.09A1.87,1.87,0,0,0,14,12.16V3.29A1.88,1.88,0,0,0,12.09,1.45Zm.64,10.71a.61.61,0,0,1-.19.44.67.67,0,0,1-.45.18H1.91a.63.63,0,0,1-.64-.62v-5H12.73Zm0-6.27H1.27V3.29a.63.63,0,0,1,.64-.61H3.18v.69A.63.63,0,0,0,3.82,4a.62.62,0,0,0,.63-.61V2.68h5.1v.69a.62.62,0,0,0,.63.61.63.63,0,0,0,.64-.61V2.68h1.27a.63.63,0,0,1,.45.18.59.59,0,0,1,.19.43Z"/>
            </svg>
            <span><?= $button_title ?></span>
          </a>
        <?php endif; ?>
      </div>

      <?php if (!empty($items)) : ?>
        <div class="text-boxes__items">
          <?php foreach ($items as $item) : ?>
            <div class="text-boxes__item">
              <?php if ($item['title']) : ?>
                <h3 class="text-boxes__item-title"><?= $item['title'] ?></h3>
              <?php endif; ?>

              <?php if ($item['text']) : ?>
                <div class="text-boxes__item-text wysiwyg-content">
                  <?= $item['text'] ?>
                </div>
              <?php endif; ?>

              <?php if ($item['img']) : ?>
                <div class="text-boxes__img-wrapper">
                  <?= wp_get_attachment_image($item['img'], 'full', null, array('class' => 'text-boxes__img', 'loading' => 'lazy')) ?>
                </div>
              <?php endif; ?>

              <?php if ($item['explore_link']) : ?>
                <a href="<?= $item['explore_link'] ?>" class="text-boxes__link">explore more</a>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>

      <?php endif; ?>

      <?php if ($button) : ?>
        <a href="<?= $button_url ?>" target="<?= $button_target ?>" class="text-boxes__btn btn btn--calendar">
          <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
            <path
                d="M12.09,1.45H10.82V.61A.63.63,0,0,0,10.18,0a.62.62,0,0,0-.63.61v.84H4.45V.61A.62.62,0,0,0,3.82,0a.63.63,0,0,0-.64.61v.84H1.91A1.88,1.88,0,0,0,0,3.29v8.87A1.87,1.87,0,0,0,1.91,14H12.09A1.87,1.87,0,0,0,14,12.16V3.29A1.88,1.88,0,0,0,12.09,1.45Zm.64,10.71a.61.61,0,0,1-.19.44.67.67,0,0,1-.45.18H1.91a.63.63,0,0,1-.64-.62v-5H12.73Zm0-6.27H1.27V3.29a.63.63,0,0,1,.64-.61H3.18v.69A.63.63,0,0,0,3.82,4a.62.62,0,0,0,.63-.61V2.68h5.1v.69a.62.62,0,0,0,.63.61.63.63,0,0,0,.64-.61V2.68h1.27a.63.63,0,0,1,.45.18.59.59,0,0,1,.19.43Z"/>
          </svg>
          <span><?= $button_title ?></span>
        </a>
      <?php endif; ?>
    </div>
  </div>
</section>
