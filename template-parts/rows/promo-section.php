<?php
$title = get_sub_field('title');
$text = get_sub_field('text');
$bg_id = get_sub_field('image');
$bg_mob_id = get_sub_field('image_mobile');
$button = get_sub_field('button');

$bg_img = $bg_id ? wp_get_attachment_image($bg_id, 'full', false, array('loading' => 'lazy')) : null;
$bg_mob_img = $bg_mob_id ? wp_get_attachment_image($bg_mob_id, 'full', false, array('loading' => 'lazy')) : null;

if ($button) {
  $button_url = $button['url'];
  $button_title = $button['title'];
  $button_target = $button['target'] ? $button['target'] : '_self';
}

?>

<section class="promo">
  <?php if ($bg_img): ?>
    <div class="promo__bg<?php if ($bg_img && $bg_mob_img) echo ' promo__bg--desktop'; ?> parallax-slow">
      <?= $bg_img ?>
    </div>
  <?php endif; ?>

  <?php if ($bg_mob_img): ?>
    <div class="promo__bg<?php if ($bg_img && $bg_mob_img) echo ' promo__bg--mobile'; ?> parallax-slow">
      <?= $bg_mob_img ?>
    </div>
  <?php endif; ?>

  <div class="promo__center center">
    <div class="promo__content">
      <?php if ($title) : ?>
        <h2 class="promo__title title"><?= $title ?></h2>
      <?php endif; ?>

      <?php if ($text) : ?>
        <div class="promo__text"><?= $text ?></div>
      <?php endif; ?>

      <?php if ($button): ?>
        <a href="<?php echo esc_url($button_url); ?>"
           target="<?php echo esc_attr($button_target); ?>"
           class="promo__btn btn btn--calendar">
          <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
            <path d="M12.09,1.45H10.82V.61A.63.63,0,0,0,10.18,0a.62.62,0,0,0-.63.61v.84H4.45V.61A.62.62,0,0,0,3.82,0a.63.63,0,0,0-.64.61v.84H1.91A1.88,1.88,0,0,0,0,3.29v8.87A1.87,1.87,0,0,0,1.91,14H12.09A1.87,1.87,0,0,0,14,12.16V3.29A1.88,1.88,0,0,0,12.09,1.45Zm.64,10.71a.61.61,0,0,1-.19.44.67.67,0,0,1-.45.18H1.91a.63.63,0,0,1-.64-.62v-5H12.73Zm0-6.27H1.27V3.29a.63.63,0,0,1,.64-.61H3.18v.69A.63.63,0,0,0,3.82,4a.62.62,0,0,0,.63-.61V2.68h5.1v.69a.62.62,0,0,0,.63.61.63.63,0,0,0,.64-.61V2.68h1.27a.63.63,0,0,1,.45.18.59.59,0,0,1,.19.43Z"/>
          </svg>
          <span><?php echo esc_html($button_title); ?></span>
        </a>
      <?php endif; ?>

    </div>
  </div>
</section>
