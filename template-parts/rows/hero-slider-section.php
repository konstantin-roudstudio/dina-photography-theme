<?php
$slides = get_sub_field('hero_slides');
$title = get_sub_field('hero_title');
$text = get_sub_field('hero_text');
$destinations = get_sub_field('hero_destinations');

?>

<section class="hero-slider">
  <div class="hero-slider__inner">
    <?php if (!empty($slides)) : ?>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php foreach ($slides as $slide) : ?>
            <div class="swiper-slide">
              <?php if ($slide['image']) : ?>
                <div class="swiper-slide__inner<?php if ($slide['image_mobile']) echo ' swiper-slide__inner--desktop' ?>">
                  <?= wp_get_attachment_image($slide['image'], 'full', false,  array('class' => 'animate-zoom')) ?>
                </div>
              <?php endif; ?>

              <?php if ($slide['image_mobile']) : ?>
                <div class="swiper-slide__inner<?php if ($slide['image']) echo ' swiper-slide__inner--mobile' ?>">
                  <?= wp_get_attachment_image($slide['image_mobile'], 'full', false,  array('class' => 'animate-zoom')) ?>
                </div>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>

    <div class="hero-slider__content center animate-hero-content">
      <?php if ($title) : ?>
        <h1 class="hero-slider__title title"><?= nl2br($title) ?></h1>
      <?php endif; ?>

      <div class="hero-slider__nav">
        <div class="hero-slider__nav-inner">
          <div class="swiper-button-prev">
            <span></span>
          </div>
          <div class="hero-slider__numbers">
            <span class="hero-slider__number current">1</span>
            <span class="hero-slider__slash"></span>
            <span class="hero-slider__number total"><?= count($slides) ?></span>
          </div>
          <div class="swiper-button-next">
            <span></span>
          </div>
        </div>
      </div>

      <?php if ($text) : ?>
        <div class="hero-slider__text wysiwyg-content">
          <?= $text ?>
        </div>
      <?php endif; ?>

      <?php if($destinations) : ?>
        <ul class="hero-slider__destinations">
          <?php foreach ($destinations as $index => $destination) : ?>
            <?php if ($index > 0) : ?><li class="hero-slider__dot"></li><?php endif; ?>
            <li class="hero-slider__destination"><?= $destination['text'] ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
  </div>

	<div class="hero-slider__content-mobile">
    <?php if ($text) : ?>
      <div class="hero-slider__text wysiwyg-content">
        <?= $text ?>
      </div>
    <?php endif; ?>
	</div>
</section>
