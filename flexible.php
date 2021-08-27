<?php
/**
 * Template Name: Flexible
 */

get_header();
?>
  <main id="main" class="main">
    <?php

    get_template_part('template-parts/rows/portfolio-listing-section', 'section');

    if (have_rows('page_builder')):
      while (have_rows('page_builder')): the_row();
        if (get_row_layout() == 'about_info_section'): get_template_part('template-parts/rows/about-info-section', 'section');
        elseif (get_row_layout() == 'feedback_section'): get_template_part('template-parts/rows/feedback-section', 'section');
        elseif (get_row_layout() == 'hero_info_section'): get_template_part('template-parts/rows/hero-info-section', 'section');
        elseif (get_row_layout() == 'hero_reviews_section'): get_template_part('template-parts/rows/hero-reviews-section', 'section');
        elseif (get_row_layout() == 'hero_slider_section'): get_template_part('template-parts/rows/hero-slider-section', 'section');
        elseif (get_row_layout() == 'hero_about_section'): get_template_part('template-parts/rows/hero-about-section', 'section');
        elseif (get_row_layout() == 'text_images_section'): get_template_part('template-parts/rows/text-images-section', 'section');
        elseif (get_row_layout() == 'cta_form_section'): get_template_part('template-parts/rows/cta-form-section', 'section');
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
