<?php
$review_post = get_sub_field('review_post');
$text = $review_post->post_content;
$img = get_post_thumbnail_id($review_post);
?>

<section class="feedback" data-sal>
  <div class="feedback__wrapper">
    <?php if ($img) : ?>
      <div class="feedback__bg"><?= wp_get_attachment_image($img, 'full') ?></div>
    <?php endif; ?>

    <div class="feedback__center center">
      <div class="feedback__content">
        <div class="feedback__quotemark">
          <svg class="feedback__quotemark-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 17">
            <path
                d="M12,6.18A6.09,6.09,0,0,0,6,0C2.71,0,.31,2.67,0,6.08c-.42,5.19,3.39,9.54,8,10.92a6.22,6.22,0,0,1-2.87-4.7,5.57,5.57,0,0,0,.83.07,6.09,6.09,0,0,0,6-6.19Z"/>
            <path
                d="M25,6.18A6.09,6.09,0,0,0,19,0c-3.31,0-5.71,2.67-6,6.08-.42,5.19,3.39,9.54,8,10.92a6.22,6.22,0,0,1-2.87-4.7,5.69,5.69,0,0,0,.83.07,6.09,6.09,0,0,0,6-6.19Z"/>
          </svg>
        </div>
        <div class="feedback__quote wysiwyg-content">
          <?= $text ?>
        </div>
        <div class="feedback__author">- <?= esc_html($review_post->post_title); ?></div>
      </div>
    </div>
  </div>
</section>

