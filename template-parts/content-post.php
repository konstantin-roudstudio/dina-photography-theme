<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DinaPhotography
 */

?>

<main id="primary" class="main blog-list">
  <div class="center blog-list__center">
    <div class="blog-list__inner">
      <div class="blog-list__items">
        <?php
        while (have_posts()) {
          the_post();

          echo the_title();
//          get_template_part('template-parts/listing/blog-item');
        }
        ?>
      </div>
    </div>
  </div>
</main>
