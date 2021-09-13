<?php
$title = get_sub_field('title');
$sub_title = get_sub_field('subtitle');
$review_posts = get_sub_field('review_posts');

$content = $review['post'];
$text = apply_filters('the_content', get_post_field('post_content', $content));
$img = get_post_thumbnail_id($content);
?>

<section class="feedback feedback--slider">
  <div class="feedback__content">
    <div class="swiper-container">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="feedback__slide-bg"></div>
          <div class="feedback__container">
            <div class="feedback__quotemark">
              <svg class="feedback__quotemark-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 17">
                <path d="M12,6.18A6.09,6.09,0,0,0,6,0C2.71,0,.31,2.67,0,6.08c-.42,5.19,3.39,9.54,8,10.92a6.22,6.22,0,0,1-2.87-4.7,5.57,5.57,0,0,0,.83.07,6.09,6.09,0,0,0,6-6.19Z"/>
                <path d="M25,6.18A6.09,6.09,0,0,0,19,0c-3.31,0-5.71,2.67-6,6.08-.42,5.19,3.39,9.54,8,10.92a6.22,6.22,0,0,1-2.87-4.7,5.69,5.69,0,0,0,.83.07,6.09,6.09,0,0,0,6-6.19Z"/>
              </svg>
            </div>
            <div class="feedback__quote wysiwyg-content">
              <p>A wedding, pre-wedding and fashion photographer based in central Europe, I specialise in telling visual stories and shooting destination weddings. My work combines my two great loves: photography and travel.</p>

              <p>There is nowhere and no lengths I won’t go to capture a wedding or engagement – the more unique the better. I’ll be wherever you are!</p>
            </div>
            <div class="feedback__author">- Katie & Joe</div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="feedback__slide-bg"></div>
          <div class="feedback__container">
            <div class="feedback__quotemark">
              <svg class="feedback__quotemark-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 17">
                <path d="M12,6.18A6.09,6.09,0,0,0,6,0C2.71,0,.31,2.67,0,6.08c-.42,5.19,3.39,9.54,8,10.92a6.22,6.22,0,0,1-2.87-4.7,5.57,5.57,0,0,0,.83.07,6.09,6.09,0,0,0,6-6.19Z"/>
                <path d="M25,6.18A6.09,6.09,0,0,0,19,0c-3.31,0-5.71,2.67-6,6.08-.42,5.19,3.39,9.54,8,10.92a6.22,6.22,0,0,1-2.87-4.7,5.69,5.69,0,0,0,.83.07,6.09,6.09,0,0,0,6-6.19Z"/>
              </svg>
            </div>
            <div class="feedback__quote wysiwyg-content">
              <p>A wedding, pre-wedding and fashion photographer based in central Europe, I specialise in telling visual stories and shooting destination weddings. My work combines my two great loves: photography and travel.</p>

              <p>There is nowhere and no lengths I won’t go to capture a wedding or engagement – the more unique the better. I’ll be wherever you are!</p>
            </div>
            <div class="feedback__author">- Katie & Joe</div>
          </div>
        </div>

      </div>
    </div>

    <div class="feedback__nav-content">
      <div class="feedback__nav-block">
        <div class="feedback__nav-title title">Kind Words</div>
        <div class="feedback__nav-text">from my Clients</div>
      </div>
      <div class="feedback__slider-nav">
        <div class="swiper-button-prev">
          <svg width="56" height="7" viewBox="0 0 56 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M55.5 4H56V3H55.5V4ZM0.5 3.5L5.5 6.38675V0.613249L0.5 3.5ZM55.5 3H5V4H55.5V3Z"/>
          </svg>
        </div>

        <div class="feedback__numbers">
          <span class="feedback__number current">1</span>
          <span class="feedback__slash"></span>
          <span class="feedback__number total">5</span>
        </div>

        <div class="swiper-button-next">
          <svg width="57" height="7" viewBox="0 0 57 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0.5 3H0V4H0.5V3ZM56.5 3.5L51.5 0.613249V6.38675L56.5 3.5ZM0.5 4H52V3H0.5V4Z"/>
          </svg>
        </div>
      </div>
    </div>
  </div>
</section>

