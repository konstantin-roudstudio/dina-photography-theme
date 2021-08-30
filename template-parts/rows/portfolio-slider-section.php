<?php

$title = get_sub_field('title');
$text = get_sub_field('text');
$button = get_sub_field('link');
$items = get_sub_field('items');

if ($button) {
  $button_url = $button['url'];
  $button_title = $button['title'];
  $button_target = $button['target'] ? $button['target'] : '_self';
}

?>

<section class="portfolio-slider">
  <div class="portfolio-slider__center center">
    <div class="portfolio-slider__inner">
      <div class="portfolio-slider__content">
        <?php if ($title) : ?>
          <div class="portfolio-slider__title title"><?= $title ?></div>
        <?php endif; ?>

        <?php if ($text) : ?>
          <div class="portfolio-slider__text"><?= $text ?></div>
        <?php endif; ?>

        <?php if ($button): ?>
          <a href="<?php echo esc_url($button_url); ?>" target="<?php echo esc_attr($button_target); ?>"
             class="portfolio-slider__btn btn"><?php echo esc_html($button_title); ?></a>
        <?php endif; ?>

      </div>

      <?php if (!empty($items)) : ?>
        <div class="portfolio-slider__slider">

          <div class="swiper-container portfolio-slider__container">

            <div class="swiper-wrapper">

              <?php foreach ($items as $item) :
                $project = $item['project'];
                ?>
                <div class="swiper-slide portfolio-slider__item">
                  <div class="portfolio-slider__img-wrapper">
                    <img src="" alt="">
                  </div>
                  <div class="portfolio-slider__item-text"><?= get_the_title( $project ); ?></div>
                </div>
              <?php endforeach; ?>

            </div>

          </div>

          <div class="portfolio-slider__nav">
            <div class="swiper-button-prev">
              <svg width="57" height="7" viewBox="0 0 57 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M56.5 4H57V3H56.5V4ZM0.5 3.5L5.5 6.38675V0.613249L0.5 3.5ZM56.5 3H5V4H56.5V3Z" fill="black"/>
              </svg>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next">
              <svg width="57" height="7" viewBox="0 0 57 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.5 3H0V4H0.5V3ZM56.5 3.5L51.5 0.613249V6.38675L56.5 3.5ZM0.5 4H52V3H0.5V4Z" fill="black"/>
              </svg>
            </div>
          </div>

        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

