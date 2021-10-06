<?php
  $title = get_sub_field('about_title');
  $text = get_sub_field('about_text');
  $button = get_sub_field('about_button');
  $img_1_id = get_sub_field('about_image_1');
  $img_2_id = get_sub_field('about_image_2');
  $logos = get_sub_field('about_logos');

$img_1 = $img_1_id ? wp_get_attachment_image($img_1_id, 'full') : null;
$img_2 = $img_2_id ? wp_get_attachment_image($img_2_id, 'full') : null;

if ($button) {
  $button_url = $button['url'];
  $button_title = $button['title'];
  $button_target = $button['target'] ? $button['target'] : '_self';
}

?>

<section class="about">
  <div class="about__center center">
    <div class="about__inner">
      <div class="about__images">
        <div class="about__img about__img--portrait parallax-fast"><?= $img_1 ?></div>
        <div class="about__img about__img--landscape"><?= $img_2 ?></div>
      </div>

      <div class="about__content">
        <?php if ($title) : ?>
          <div class="about__title title"><?= $title ?></div>
        <?php endif; ?>

        <div class="about__img about__img--mobile"><?= $img_2 ?></div>

        <div class="about__content-wrap">
          <?php if ($text) : ?>
            <div class="about__text"><?= $text ?></div>
          <?php endif ?>

          <?php if ($button) : ?>
            <a href="<?= $button_url ?>" target="<?= $button_target ?>" class="about__btn btn"><span><?= $button_title ?></span></a>
          <?php endif; ?>
        </div>
      </div>
    </div>

    <?php if (!empty($logos)) : ?>
      <div class="about__bottom-items">
        <?php foreach ($logos as $logo) : ?>
          <div class="about__bottom-item">
            <?= wp_get_attachment_image($logo['image'], 'full') ?>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

