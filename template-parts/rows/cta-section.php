<?php
?>

<section class="about">
  <?php if ($anchor) : ?>
    <div class="anchor" id="<?= $anchor ?>"></div>
  <?php endif ?>

  <div class="center">
    <div class="about__inner">

      <div class="about__title-mob">
        <?php if ($title) : ?>
          <h1 class="about__title title"><?= $title ?></h1>
        <?php endif; ?>

        <?php if ($subtitle) : ?>
          <h1 class="about__subtitle subtitle"><?= $subtitle ?></h1>
        <?php endif; ?>
      </div>

      <div class="about__img<?php if ($shift == 'right') {
        echo ' about__img--right';
      } ?>">
        <div class="about__img-bg parallax-slow" style="background-color: <?= $bg_color ?>;"></div>

        <div class="about__img-inner">
          <?php echo wp_get_attachment_image($image, 'full', '', array('class' => 'parallax-fast')); ?>
        </div>
      </div>

      <div class="about__info">
        <div class="about__title-desktop">
          <?php if ($title) : ?>
            <h1 class="about__title title"><?= $title ?></h1>
          <?php endif; ?>

          <?php if ($subtitle) : ?>
            <h1 class="about__subtitle subtitle"><?= $subtitle ?></h1>
          <?php endif; ?>
        </div>
        <?php if ($text) : ?>
          <div class="about__text wysiwyg-content"><?= $text ?></div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

