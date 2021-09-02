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
