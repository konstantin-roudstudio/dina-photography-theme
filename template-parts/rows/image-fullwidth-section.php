<?php
$image = get_sub_field('image');
if ($image) : ?>

<section class="image-fullwidth">
  <?= wp_get_attachment_image($image, 'full'); ?>
</section>
<?php endif;
