<?php
  $show_date = get_sub_field('show_date');
  $content = get_sub_field('content');
?>

<section class="wysiwyg-section">
  <div class="wysiwyg-section__center center center--narrow">
    <div class="wysiwyg-section__inner">
      <?php if ($show_date) : ?>
        <div class="wysiwyg-section__date"><?= get_the_date('M d, Y'); ?></div>
      <?php endif; ?>

      <div class="wysiwyg-section__text wysiwyg-content">
        <?= $content ?>
      </div>
    </div>
  </div>
</section>
