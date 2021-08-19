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
                if (get_row_layout() == 'hero_info_section'): get_template_part('template-parts/rows/hero-info-section', 'section');
                elseif (get_row_layout() == 'hero_reviews_section'): get_template_part('template-parts/rows/hero-reviews-section', 'section');
                endif;
            endwhile;
        endif;
        ?>
    </main><!-- #main -->

<?php
get_footer();
