<?php
/**
 * Template Name: Flexible
 */

get_header();
?>
  <main id="main" class="main">
    <?php
    get_template_part('template-parts/rows/portfolio-slider-section', 'section');

    if (have_rows('page_builder')):
      while (have_rows('page_builder')): the_row();
        if (get_row_layout() == 'hero_info_section'): get_template_part('template-parts/rows/hero-info-section', 'section');
        elseif (get_row_layout() == 'hero_reviews_section'): get_template_part('template-parts/rows/hero-reviews-section', 'section');
        elseif (get_row_layout() == 'about_info_section'): get_template_part('template-parts/rows/about-info-section', 'section');
        elseif (get_row_layout() == 'text_images_section'): get_template_part('template-parts/rows/text-images-section', 'section');
        elseif (get_row_layout() == 'cta_section'):
          get_template_part('template-parts/rows/cta-section', 'section');
//                  if (get_sub_field('override')) :
//                    get_template_part('template-parts/rows/cta-section', 'section');
//                  else  :
//                    get_template_part('template-parts/global-rows/cta-section', 'section');
//                  endif;
        endif;
      endwhile;
    endif;
    ?>
  </main><!-- #main -->

<?php
get_footer();
