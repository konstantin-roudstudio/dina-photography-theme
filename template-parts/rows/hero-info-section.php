<?php
$title = get_sub_field('title');
$bg_id = get_sub_field('image');
$bg_mob_id = get_sub_field('image_mobile');
$button = get_sub_field('button');

$bg_img = $bg_id ? wp_get_attachment_image($bg_id, 'full') : null;
$bg_mob_img = $bg_mob_id ? wp_get_attachment_image($bg_mob_id, 'full') : null;

if ($button) {
  $button_url = $button['url'];
  $button_title = $button['title'];
  $button_target = $button['target'] ? $button['target'] : '_self';
}

?>

<section class="hero-info">
  <?php if ($bg_img): ?>
    <div class="hero-info__bg<?php if ($bg_img && $bg_mob_img) echo ' hero-info__bg--desktop'; ?> animate-zoom">
      <?= $bg_img ?>
    </div>
  <?php endif; ?>

  <?php if ($bg_mob_img): ?>
    <div class="hero-info__bg<?php if ($bg_img && $bg_mob_img) echo ' hero-info__bg--mobile'; ?> animate-zoom">
      <?= $bg_mob_img ?>
    </div>
  <?php endif; ?>

  <div class="center hero-info__center animate-hero-content">
    <?php if ($title) : ?>
      <h1 class="hero-info__title title"><?= $title ?></h1>
    <?php endif; ?>

    <?php if ($button): ?>
      <a href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"
         class="hero-info__btn btn btn--solid"><span><?php echo esc_html($button_title); ?></span></a>
    <?php endif; ?>
  </div>
</section>
