<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package DinaPhotography
 */

get_header();

$id = get_the_ID();
$thumbnail = get_the_post_thumbnail($id, 'full', array('class' => 'post__image-inner'));
$type = get_post_type($id);
$archive_link = get_post_type_archive_link( $type );

$title = get_field('page_title');
$gallery = get_field('gallery');
$description = get_field('project_description');

$bottom_text = get_field('project_bottom_text');

$bg_id = get_field('project_cover');
$bg_id_mobile = get_field('project_cover_mobile');

$bg_img = $bg_id ? wp_get_attachment_image($bg_id, 'full', false, array('loading' => 'lazy')) : null;
$bg_img_mobile = $bg_id_mobile ? wp_get_attachment_image($bg_id_mobile, 'full', false, array('loading' => 'lazy')) : null;
?>
  <main id="primary" class="main project">

    <?php
    while (have_posts()) :
      the_post();
      ?>

      <article class="post">
        <div class="hero-info">
          <?php if ($bg_img): ?>
            <div class="hero-info__bg<?php if ($bg_img && $bg_img_mobile) echo ' hero-info__bg--desktop'; ?> animate-zoom">
              <?= $bg_img ?>
            </div>
          <?php endif; ?>

          <?php if ($bg_img_mobile): ?>
            <div class="hero-info__bg<?php if ($bg_img && $bg_img_mobile) echo ' hero-info__bg--mobile'; ?> animate-zoom">
              <?= $bg_img_mobile ?>
            </div>
          <?php endif; ?>

          <div class="center hero-info__center animate-hero-content">
            <h3 class="hero-info__subtitle">
              <?= the_title() ?>
            </h3>

            <?php if ($title) : ?>
              <h1 class="hero-info__title title"><?= $title ?></h1>
            <?php endif; ?>
          </div>
        </div>

        <div class="gallery gallery--project">
          <div class="gallery__content center">
            <?php if ($description) : ?>
              <div class="gallery__text gallery__text--columns"><?= $description ?></div>
            <?php endif; ?>
          </div>

          <?php foreach ($gallery as $row) : ?>
            <div class="gallery__row<?php if (!$row['full_width']) echo ' center'; ?>">
              <?php foreach($row['row'] as $item) :
                $ratio = $item['aspect_ratio'] === 'unset' ? null : 'padding-bottom:'.$item['aspect_ratio'].'%;';
                $width = $item['image_width'] === 'unset' ? null : 'width:'.$item['image_width'].'%;';
                ?>
                <div class="gallery__item"  <?php if ($width) echo 'style="'.$width.'"' ?>>
                  <div class="gallery__item-wrapper" <?php if ($ratio) echo 'style="'.$ratio.'"' ?>>
                    <?= wp_get_attachment_image($item['image'], 'full') ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          <?php endforeach; ?>
        </div>

        <?php get_template_part('template-parts/rows/cta-form-section', 'section'); ?>

        <?php
        $id = get_the_ID();
        $categories = !empty(wp_get_post_categories($id)) ? implode(", ", wp_get_post_categories($id)) : 0;

        $items = get_posts( array(
            'numberposts' => 8,
            'category'    => $categories,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => $id,
            'post_type'   => 'projects',
            'suppress_filters' => true,
        ) );

        ?>


        <?php if (count($items) >= 3) : ?>

        <section class="portfolio-slider">
          <div class="portfolio-slider__center center">
            <div class="portfolio-slider__inner">
              <div class="portfolio-slider__content">
                <div class="portfolio-slider__title title">Explore More</div>
              </div>
                <div class="portfolio-slider__slider">

                  <div class="portfolio-slider__slider-wrapper">
                    <div class="swiper-container portfolio-slider__container">

                      <div class="swiper-wrapper">

                        <?php foreach ($items as $item) :
                            $thumb_id = get_field('thumbnail_portrait', $item);
                          ?>
                          <div class="swiper-slide portfolio-slider__item">
                            <a href="<?= get_post_permalink($item); ?>" class="portfolio-slider__img-wrapper">
                              <?= wp_get_attachment_image($thumb_id, 'full', false, array('loading' => 'lazy')) ?>
                            </a>
                            <a href="<?= get_post_permalink($item); ?>" class="portfolio-slider__item-text"><?= get_the_title( $item ); ?></a>
                          </div>
                        <?php endforeach; ?>

                      </div>

                    </div>

                    <div class="portfolio-slider__nav">
                      <div class="swiper-button-prev">
                        <svg width="57" height="7" viewBox="0 0 57 7" xmlns="http://www.w3.org/2000/svg">
                          <path d="M56.5 4H57V3H56.5V4ZM0.5 3.5L5.5 6.38675V0.613249L0.5 3.5ZM56.5 3H5V4H56.5V3Z"/>
                        </svg>
                      </div>
                      <div class="swiper-pagination"></div>
                      <div class="swiper-button-next">
                        <svg width="57" height="7" viewBox="0 0 57 7" xmlns="http://www.w3.org/2000/svg">
                          <path d="M0.5 3H0V4H0.5V3ZM56.5 3.5L51.5 0.613249V6.38675L56.5 3.5ZM0.5 4H52V3H0.5V4Z"/>
                        </svg>
                      </div>
                    </div>
                  </div>

                </div>
            </div>
          </div>
        </section>

        <?php endif; ?>

        <?php if ($bottom_text) : ?>
          <section class="project-wysiwig">
            <div class="project-wysiwig__center center">
              <div class="wysiwyg-content">
                <?= $bottom_text ?>
              </div>
            </div>
          </section>
        <?php endif; ?>
      </article>
    <?php
    endwhile; // End of the loop.
    ?>

  </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
