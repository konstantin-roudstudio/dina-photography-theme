<?php
$image = get_sub_field('image');
if ($image) : ?>

<section class="image-simple">
  <div class="center center--narrow">
    <div class="image-simple__inner">
      <?= wp_get_attachment_image($image, 'full'); ?>
    </div>
  </div>
</section>
<?php endif;
