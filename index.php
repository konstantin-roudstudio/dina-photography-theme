<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DinaPhotography
 */

get_header();
?>

<?php

if (have_posts()) : ?>
  <main id="primary" class="main blog-list">
    <div class="center blog-list__center">
      <div class="blog-list__inner">
        <div class="blog-list__items">

          <?php

          /* Start the Loop */
          while (have_posts()) :
            the_post();
            get_template_part('template-parts/listing/blog-item');

          endwhile; ?>
        </div>

        <?php the_posts_pagination(); ?>
      </div>
    </div>
  </main>

  <?php
  the_posts_navigation();

else :

  get_template_part('template-parts/content', 'none');

endif;
?>

<?php
get_sidebar();
get_footer();
