<?php
$title = get_sub_field('title');

$posts = get_posts(array(
    'posts_per_page' => '3',
));

 if (!empty($posts)) : ?>
   <div class="blog-listing blog-listing--explore blog-listing--section">
     <div class="center blog-listing__center">
       <div class="blog-listing__title title title--s"><?= $title ?></div>
       <div class="blog-listing__items">
         <?php
         foreach ($posts as $post) :
           setup_postdata($post);

           get_template_part('template-parts/listing/blog-item');

         endforeach;
         wp_reset_postdata() ?>
       </div>
     </div>
   </div>
 <?php endif;
