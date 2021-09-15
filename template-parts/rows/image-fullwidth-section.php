<?php
  $image = get_sub_field('image');

  if ($image) :
?>
<section class="image-fullwidth">
  <div class="image-fullwidth__img-wrapper">
    <?= wp_get_attachment_image($image, 'full'); ?>
  </div>
</section>
<?php endif;
