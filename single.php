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
$archive_link = get_post_type_archive_link($type);
?>
  <main id="primary" class="main">
    <div class="breadcrumbs">
      <div class="breadcrumbs__center center center--narrow">
        <div class="breadcrumbs__inner">
          <a href="<?= get_post_type_archive_link($type) ?>">Blog</a>
          <span class="breadcrumbs__divider">/</span>
          <span><?= the_title(); ?></span>
        </div>
      </div>
    </div>

    <?php
    while (have_posts()) :
      the_post();
      ?>

      <article class="post">
        <div class="article-head">
          <div class="article-head__center center center--narrow">
            <h1 class="article-head__title title"><?= the_title(); ?></h1>
          </div>
        </div>

        <?php
        if (have_rows('page_builder')):
          while (have_rows('page_builder')): the_row();
            if (get_row_layout() == 'simple_slider_section'): get_template_part('template-parts/rows/simple-slider-section', 'section');
            elseif (get_row_layout() == 'info_block_section'): get_template_part('template-parts/rows/info-block-section', 'section');
            elseif (get_row_layout() == 'image_fullwidth_section'): get_template_part('template-parts/rows/image-fullwidth-section', 'section');
            elseif (get_row_layout() == 'image_simple_section'): get_template_part('template-parts/rows/image-simple-section', 'section');
            elseif (get_row_layout() == 'post_cta_section'):
              if (get_sub_field('override')) :
                get_template_part('template-parts/rows/post-cta-section', 'section');
              else  :
                get_template_part('template-parts/global-rows/post-cta-section', 'section');
              endif;
            elseif (get_row_layout() == 'wysiwyg_section'): get_template_part('template-parts/rows/wysiwyg-section', 'section');
            endif;
          endwhile;
        endif;
        ?>
      </article>

    <?php
    endwhile;

    global $post;

    $related = get_posts(array(
        'posts_per_page' => '3',
        'exclude' => $id,

    ))

    ?>


    <?php if (!empty($related)) : ?>
      <div class="blog-listing blog-listing--explore">
        <div class="center blog-listing__center">
          <div class="blog-listing__title title title--s">Explore More</div>
          <div class="blog-listing__items">
            <?php
            foreach ( $related as $post ) :
              setup_postdata( $post );

              get_template_part( 'template-parts/listing/blog-item');

            endforeach;
            wp_reset_postdata() ?>
          </div>
        </div>
      </div>
    <?php endif; ?>

  </main><!-- #main -->

<?php
//get_sidebar();
get_footer();
