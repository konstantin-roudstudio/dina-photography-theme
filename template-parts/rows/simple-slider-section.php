<?php
  $slides = get_sub_field('slides')
?>

<?php if ($slides) : ?>
  <section class="blog-slider">
    <div class="blog-slider__center center center--narrow">
      <div class="blog-slider__inner">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php foreach ($slides as $slide) : ?>
              <div class="swiper-slide">
                <?= wp_get_attachment_image($slide['image'], 'full', false, array('loading' => 'lazy')) ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="blog-slider__nav">
          <div class="blog-slider__nav-inner">
            <div class="swiper-button-prev">
              <svg width="57" height="7" viewBox="0 0 57 7" xmlns="http://www.w3.org/2000/svg">
                <path d="M56.5 3H57V4H56.5V3ZM0.5 3.5L5.5 0.613249V6.38675L0.5 3.5ZM56.5 4H5V3H56.5V4Z"/>
              </svg>
            </div>
            <div class="blog-slider__numbers">
              <span class="blog-slider__number current">1</span>
              <span class="blog-slider__slash"></span>
              <span class="blog-slider__number total"><?= count($slides) ?></span>
            </div>
            <div class="swiper-button-next">
              <svg width="57" height="7" viewBox="0 0 57 7" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.5 3H0V4H0.5V3ZM56.5 3.5L51.5 0.613249V6.38675L56.5 3.5ZM0.5 4H52V3H0.5V4Z"/>
              </svg>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
