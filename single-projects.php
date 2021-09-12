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

$bg_id = get_field('project_cover');
$bg_id_mobile = get_field('project_cover_mobile');

$bg_img = $bg_id ? wp_get_attachment_image($bg_id, 'full') : null;
$bg_img_mobile = $bg_id_mobile ? wp_get_attachment_image($bg_id_mobile, 'full') : null;
?>
  <main id="primary" class="main project">

    <?php
    while (have_posts()) :
      the_post();
      ?>

      <article class="post">
        <div class="hero-info">
          <?php if ($bg_img): ?>
            <div class="hero-info__bg<?php if ($bg_img && $bg_img_mobile) echo ' hero-info__bg--desktop'; ?>">
              <?= $bg_img ?>
            </div>
          <?php endif; ?>

          <?php if ($bg_img_mobile): ?>
            <div class="hero-info__bg<?php if ($bg_img && $bg_img_mobile) echo ' hero-info__bg--mobile'; ?>">
              <?= $bg_img_mobile ?>
            </div>
          <?php endif; ?>

          <div class="center hero-info__center">
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

        <div class="post__content wysiwyg-content">
          <!--            --><?php
          //            the_content(
          //                sprintf(
          //                    wp_kses(
          //                    /* translators: %s: Name of current post. Only visible to screen readers */
          //                        __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'dina-photography'),
          //                        array(
          //                            'span' => array(
          //                                'class' => array(),
          //                            ),
          //                        )
          //                    ),
          //                    wp_kses_post(get_the_title())
          //                )
          //            );
          //            ?>
        </div>
      </article>
    <?php
    endwhile; // End of the loop.
    ?>

  </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
