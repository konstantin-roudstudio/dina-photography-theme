<?php
/**
 * Template Name: Flexible
 */

get_header();
?>
    <main id="main" class="site-main">
        <?php
        if (have_rows('page_builder')):
            while (have_rows('page_builder')): the_row();
                if (get_row_layout() == 'hero_section'): get_template_part('template-parts/rows/hero-section', 'section');
                elseif (get_row_layout() == 'about_section'): get_template_part('template-parts/rows/about-section', 'section');
                elseif (get_row_layout() == 'facts_section'): get_template_part('template-parts/rows/facts-section', 'section');
                elseif (get_row_layout() == 'services_section'): get_template_part('template-parts/rows/services-section', 'section');
                elseif (get_row_layout() == 'testimonials_section'): get_template_part('template-parts/rows/testimonials-section', 'section');
                endif;
            endwhile;
        endif;
        ?>
    </main><!-- #main -->

<?php
get_footer();
