<?php
$title = get_field('form_title');
$bg_color = get_field('background_color');
$class = $bg_color != 'white' ? ' cta-form--'.$bg_color : null;

?>

<section class="cta-form<?= $class ?>">
  <div class="center cta-form__center">
  <h2 class="cta-form__title"><?= $title ?></h2>
    <?php do_shortcode('[contact-form-7 id="197" title="Default Contact Form"]'); ?>
  </div>
</section>
