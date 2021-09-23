<?php
/**
 * Template Name: Flexible
 */

get_header();
?>
  <main id="main" class="main">

    <?php
    if (have_rows('page_builder')):
      while (have_rows('page_builder')): the_row();
        if (get_row_layout() == 'about_info_section'): get_template_part('template-parts/rows/about-info-section', 'section');
        elseif (get_row_layout() == 'contact_section'): get_template_part('template-parts/rows/contact-section', 'section');
        elseif (get_row_layout() == 'cta_form_section'): get_template_part('template-parts/rows/cta-form-section', 'section');
        elseif (get_row_layout() == 'cta_section'): get_template_part('template-parts/global-rows/cta-section', 'section');
        elseif (get_row_layout() == 'feedback_section'): get_template_part('template-parts/rows/feedback-section', 'section');
        elseif (get_row_layout() == 'feedback_slider_section'): get_template_part('template-parts/rows/feedback-slider-section', 'section');
        elseif (get_row_layout() == 'gallery_section'): get_template_part('template-parts/rows/gallery-section', 'section');
        elseif (get_row_layout() == 'hero_info_section'): get_template_part('template-parts/rows/hero-info-section', 'section');
        elseif (get_row_layout() == 'hero_reviews_section'): get_template_part('template-parts/rows/hero-reviews-section', 'section');
        elseif (get_row_layout() == 'hero_slider_section'): get_template_part('template-parts/rows/hero-slider-section', 'section');
        elseif (get_row_layout() == 'hero_about_section'): get_template_part('template-parts/rows/hero-about-section', 'section');
        elseif (get_row_layout() == 'image_fullwidth_section'): get_template_part('template-parts/rows/image-fullwidth-section', 'section');
        elseif (get_row_layout() == 'info_block_section'): get_template_part('template-parts/rows/info-block-section', 'section');
        elseif (get_row_layout() == 'portfolio_slider_section'): get_template_part('template-parts/rows/portfolio-slider-section', 'section');
        elseif (get_row_layout() == 'post_cta_section'):
          if (get_sub_field('override')) :
            get_template_part('template-parts/rows/post-cta-section', 'section');
          else  :
            get_template_part('template-parts/global-rows/post-cta-section', 'section');
          endif;
        elseif (get_row_layout() == 'promo_section'): get_template_part('template-parts/rows/promo-section', 'section');
        elseif (get_row_layout() == 'simple_slider_section'): get_template_part('template-parts/rows/simple-slider-section', 'section');
        elseif (get_row_layout() == 'text_boxes_section'): get_template_part('template-parts/rows/text-boxes-section', 'section');
        elseif (get_row_layout() == 'text_images_section'): get_template_part('template-parts/rows/text-images-section', 'section');
        elseif (get_row_layout() == 'text_wysiwyg_section'): get_template_part('template-parts/rows/wysiwyg-section', 'section');
        elseif (get_row_layout() == 'thank_you_section'): get_template_part('template-parts/rows/thank-you-section', 'section');
        endif;
      endwhile;
    endif;
    ?>
  </main>

<?php
get_footer();
