<?php
$title = get_field('cta_title', 'option');
$text = get_field('cta_text', 'option');
$image = get_field('cta_image', 'option');
$explore = get_field('cta_explore_link', 'option');
$date = get_field('cta_date_link', 'option');
?>

<section class="cta<?php if (get_sub_field('cream_background')) echo ' cta--cream'; ?>">
	<div class="center">
		<div class="cta__inner">
			<div class="cta__img-wrapper desktop">
        <?= wp_get_attachment_image($image, 'large', false, array('class' => 'cta__img', 'loading' => 'lazy')); ?>
			</div>
			<div class="cta__content">
				<h2 class="cta__title"><?= $title ?></h2>
				<div class="cta__img-wrapper mob">
          <?= wp_get_attachment_image($image, 'large', false, array('class' => 'cta__img', 'loading' => 'lazy')); ?>
				</div>
				<div class="cta__text"><?= $text ?></div>
				<div class="cta__link-wrapper">
          <?php if($explore) : ?>
            <a href="<?= $explore ?>" class="cta__btn btn btn--calendar">
              <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                <path d="M12.09,1.45H10.82V.61A.63.63,0,0,0,10.18,0a.62.62,0,0,0-.63.61v.84H4.45V.61A.62.62,0,0,0,3.82,0a.63.63,0,0,0-.64.61v.84H1.91A1.88,1.88,0,0,0,0,3.29v8.87A1.87,1.87,0,0,0,1.91,14H12.09A1.87,1.87,0,0,0,14,12.16V3.29A1.88,1.88,0,0,0,12.09,1.45Zm.64,10.71a.61.61,0,0,1-.19.44.67.67,0,0,1-.45.18H1.91a.63.63,0,0,1-.64-.62v-5H12.73Zm0-6.27H1.27V3.29a.63.63,0,0,1,.64-.61H3.18v.69A.63.63,0,0,0,3.82,4a.62.62,0,0,0,.63-.61V2.68h5.1v.69a.62.62,0,0,0,.63.61.63.63,0,0,0,.64-.61V2.68h1.27a.63.63,0,0,1,.45.18.59.59,0,0,1,.19.43Z" />
              </svg>
              <span>check your date</span>
            </a>
          <?php endif; ?>

          <?php if($explore) : ?>
            <a href="<?= $explore ?>" class="cta__link">explore portfolio</a>
          <?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
