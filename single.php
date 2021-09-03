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

?>
  <main id="primary" class="main">

<!--    --><?php
//    while (have_posts()) :
//      the_post();
//      ?>
<!---->
<!--      <article class="post">-->
<!--        <div class="center post__center">-->
<!--          <h1 class="post__title title-xl">-->
<!--            --><?php //the_title(); ?>
<!--          </h1>-->
<!---->
<!--          <div class="post__image">-->
<!--            --><?//= $thumbnail ?>
<!--          </div>-->
<!---->
<!--          <div class="post__content wysiwyg-content">-->
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
<!--          </div>-->
<!--      </article>-->
<!--    --><?php
//    endwhile;
//    ?>

    <section class="info-block">
      <div class="info-block__center center center--narrow">
        <div class="info-block__inner">
          <div class="info-block__img-wrapper">
            <img src="" alt="">
          </div>
          <div class="info-block__content">
            <div class="info-block__title">More Contrast</div>
            <div class="info-block__text">Monochrome photography is best applied to images with lots of contrast. It focuses on the difference between light and the dark, and not on the colors in the pictures. Images with harsh lighting will look good in black and white. It will be easier to control how the color changes to a different shade of gray.</div>
            <a href="#" class="info-block__link">read more</a>
          </div>
        </div>
      </div>
    </section>
    
    <section class="blog-slider">
      <div class="blog-slider__center center center--narrow">
        <div class="blog-slider__inner">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="" alt="">
              </div>
              <div class="swiper-slide">
                <img src="" alt="">
              </div>
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

    <section class="post-cta">
      <div class="post-cta__bg"></div>
      <div class="center center--narrow">
        <div class="post-cta__content">
          <div class="post-cta__title title">Looking for photograpeher?</div>
          <div class="post-cta__text">Let’s chat more about your wedding or pre-wedding photosession.</div>
          <div class="post-cta__links-wrapper">
            <a href="#" class="post-cta__btn btn btn--calendar">check your date</a>
            <a href="#" class="post-cta__link">explore portfolio</a>
          </div>
        </div>
      </div>
    </section>

  </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
