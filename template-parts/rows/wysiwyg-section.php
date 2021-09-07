<?php
  $show_date = get_sub_field('show_date');
  $content = get_sub_field('content');
?>

<section class="wysiwyg-section">
  <div class="center center--narrow">
    <div class="wysiwyg-section__inner">
      <?php if ($show_date) : ?>
        <div class="wysiwyg-section__date"><!--Aug 13, 2021--> <?= get_the_date(); ?></div>
      <?php endif; ?>

      <div class="wysiwyg-section__text wysiwyg-content">
        <?= $content ?>
      </div>
    </div>
  </div>
</section>
