<?php
/**
 * Template Name: Portfolio
 */
$title = get_field('primary_title');
$category_id = get_field('category');
$description = get_field('description');

$info_title = get_field('info_title');
$info_text = get_field('info_text');
$button = get_field('info_button');

if ($button) {
  $button_url = $button['url'];
  $button_title = $button['title'];
  $button_target = $button['target'] ? $button['target'] : '_self';
}

$landscape_items = [2, 4, 6, 8, 10, 12, 14,];

$args = array(
    'post_type' => 'projects',
    'cat' => $category_id
);
$query = get_posts($args);

get_header();
?>
  <main id="main" class="main">
    <div class="portfolio">
      <div class="portfolio__center center">
        <div class="portfolio__head">
          <div class="portfolio__item-subtitle"><?= get_cat_name($category_id) ?></div>
          <div class="portfolio__item-title title"><?= $title ?></div>
          <?php if ($description) : ?>
            <div class="portfolio__item-text wysiwyg-content"><?= $description ?></div>
          <?php endif; ?>
        </div>

        <div class="portfolio__inner">
          <?php foreach ($query as $index => $item) :
            $landscape = ($index % 2 == 0) && $index != 0 ? true : false;
            ?>
            <div class="portfolio__item<?php if (!$landscape) echo ' portfolio__item--portrait'; else echo ' portfolio__item--landscape'; ?>">
              <div class="portfolio__img-wrapper">
                <?php if (!$landscape) :
                  echo wp_get_attachment_image(get_field('thumbnail_portrait', $item), 'large');
                else :
                  echo wp_get_attachment_image(get_field('thumbnail_landscape', $item), 'large');
                endif; ?>
              </div>
              <div class="portfolio__text"><?= get_the_title($item); ?></div>
            </div>
            <?php if ($index === 0) : ?>
            <div class="portfolio__item portfolio__item--text portfolio__item--desktop">
              <div class="portfolio__item-subtitle"><?= get_cat_name($category_id) ?></div>
              <div class="portfolio__item-title title"><?= $title ?></div>
              <?php if ($description) : ?>
                <div class="portfolio__item-text wysiwyg-content"><?= $description ?></div>
              <?php endif; ?>
            </div>
          <?php elseif ($index === 8) : ?>
            <div class="portfolio__item portfolio__item--text portfolio__item--desktop">
              <div class="portfolio__item-subtitle"><?= get_cat_name($category_id) ?></div>
              <?php if ($info_title) : ?>
                <div class="portfolio__item-title title title--s"><?= $info_title ?></div>
              <?php endif; ?>

              <?php if ($info_text) : ?>
                <div class="portfolio__item-text wysiwyg-content">
                  <?= $info_text ?>
                </div>
              <?php endif; ?>

              <?php if ($button) : ?>
                <a href="<?= $button_url ?>" target="<?= $button_target ?>"
                   class="portfolio__item-btn btn btn--calendar"><?= $button_title ?></a>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php endforeach; ?>

          <?php if ($info_title || $info_text) : ?>
            <div class="portfolio__item portfolio__item--text portfolio__item--mobile">
              <div class="portfolio__item-subtitle"><?= get_cat_name($category_id) ?></div>
              <?php if ($info_title) : ?>
                <div class="portfolio__item-title title title--s"><?= $info_title ?></div>
              <?php endif; ?>

              <?php if ($info_text) : ?>
                <div class="portfolio__item-text wysiwyg-content">
                  <?= $info_text ?>
                </div>
              <?php endif; ?>

              <?php if ($button) : ?>
                <a href="<?= $button_url ?>" target="<?= $button_target ?>"
                   class="portfolio__item-btn btn btn--calendar">
                  <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                    <path d="M12.09,1.45H10.82V.61A.63.63,0,0,0,10.18,0a.62.62,0,0,0-.63.61v.84H4.45V.61A.62.62,0,0,0,3.82,0a.63.63,0,0,0-.64.61v.84H1.91A1.88,1.88,0,0,0,0,3.29v8.87A1.87,1.87,0,0,0,1.91,14H12.09A1.87,1.87,0,0,0,14,12.16V3.29A1.88,1.88,0,0,0,12.09,1.45Zm.64,10.71a.61.61,0,0,1-.19.44.67.67,0,0,1-.45.18H1.91a.63.63,0,0,1-.64-.62v-5H12.73Zm0-6.27H1.27V3.29a.63.63,0,0,1,.64-.61H3.18v.69A.63.63,0,0,0,3.82,4a.62.62,0,0,0,.63-.61V2.68h5.1v.69a.62.62,0,0,0,.63.61.63.63,0,0,0,.64-.61V2.68h1.27a.63.63,0,0,1,.45.18.59.59,0,0,1,.19.43Z"/>
                  </svg>
                  <span><?= $button_title ?></span></a>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </main>

<?php
get_footer();
