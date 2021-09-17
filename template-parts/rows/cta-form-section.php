<?php
$title = get_field('cta_form_title', 'option');
$bg_color = get_sub_field('background_color');
$shortcode = get_field('cta_form_shortcode', 'option');

if (is_single()) {
  $class = ' cta-form--cream';
} else {
  $class = $bg_color && $bg_color != 'white' ? ' cta-form--'.$bg_color : null;
};
?>

<section class="cta-form<?= $class ?>">
  <div class="center cta-form__center">
    <div class="cta-form__content">
      <h2 class="cta-form__title title"><?= $title ?></h2>

      <?= do_shortcode($shortcode); ?>
    </div>
  </div>
</section>
