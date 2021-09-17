<?php
/*
Template Name: Blog Archive
*/

get_header();
$posts_per_page = get_option( 'posts_per_page' );

global $wp_query;

$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'posts_per_page' => $posts_per_page,
    'post_type' => 'post',
    'paged' => $paged
);
$wp_query = new WP_Query( $args );

$max_page = $wp_query->max_num_pages;

?>

  <div id="primary" class="site-content">
    <div id="content" role="main">
      <div class="blog-listing">
        <div class="center blog-listing__center">
          <h1 class="blog-listing__title title"><?= get_the_title() ?></h1>

          <?php if ( $wp_query -> have_posts() ) : ?>

          <div class="blog-listing__items">
            <?php
            while ( $wp_query -> have_posts() ) :
              $wp_query -> the_post();

              get_template_part( 'template-parts/listing/blog-item');

            endwhile;
            wp_reset_postdata() ?>

          </div>

            <?php
            $nav_args = array(
                'end_size'     => 1,
                'mid_size'     => 2,
                'prev_next'    => true,
                'prev_text'    => __(''),
                'next_text'    => __(''),
                'add_args'     => false,
                'add_fragment' => '',
                'screen_reader_text' => __( 'Posts navigation' ),
                'type' => 'array'
            );

            $pagination = paginate_links($nav_args);

            if ($paged === 1) array_unshift($pagination, '<span class="prev page-numbers disabled"></span>');

            if ($paged === $max_page) array_push($pagination, '<span class="next page-numbers disabled"></span>');

            echo implode('', $pagination);

          else :

            get_template_part( 'template-parts/content', 'none' );

          endif;
          ?>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
