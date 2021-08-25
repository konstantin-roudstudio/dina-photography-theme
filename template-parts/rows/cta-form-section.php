<?php
$title = get_sub_field('form_title');
$bg_color = get_sub_field('background_color');
$shortcode = get_sub_field('form_shortcode');
$class = $bg_color != 'white' ? ' cta-form--'.$bg_color : null;

?>

<section class="cta-form<?= $class ?>">
  <div class="center cta-form__center">
  <h2 class="cta-form__title"><?= $title ?></h2>

    <?= do_shortcode($shortcode); ?>
  </div>
</section>
