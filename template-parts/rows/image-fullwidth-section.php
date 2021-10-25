<?php
$image = get_sub_field('image');
if ($image) : ?>

<section class="image-fullwidth">
  <?= wp_get_attachment_image($image, 'full', false, array('class' => 'parallax-fast', 'loading' => 'lazy')); ?>
</section>
<?php endif;
