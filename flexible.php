<?php
/**
 * Template Name: Flexible
 */

get_header();
?>
  <main id="main" class="main">

<!--    TEMPORARY!!!  -->
    <div class="center center--article">
      <div class="wysiwyg-content">
        <h2>Why a Wedding in South of France?</h2>        
        <p>Unlike in the North of France, this region has 300 sunny days in a year. The weather is perfect for an outdoor wedding in the lovely chateaus with their extensive gardens and endless vineyards. With the pine trees, olive groves, palm trees, and lavender fields scattered all around, there is no lack of venues in the South of France.</p>
        <p>If you are not fond of a sunny wedding in the South of France, how about a wedding on the sunset? It is equally as beautiful with the varying shades of orange and pink in the sky. A wedding photographer will not get enough of the beautiful scenery with the amazing light — an ideal venue for creating unique images that the couple will treasure.</p>
        <p>Another wedding destination is St. Tropez for the beach and the sea. Nice and Cannes can also be an option. The beautiful chateau on the cliff in Eze has a breathtaking view. There are also amazing venues you can find dotting the coast of Monaco.</p>
        <p>Many people do not realize how big the South of France is, and a wedding photographer has a large area to cover. From the vineyards to the seafront venues and everything in between, all these unique and scenic places will be a perfect destination for a wedding.</p>

        <h2>How a Wedding Photographer Help You Plan Your Day</h2>
        <p>Any good wedding photographer knows that a perfect wedding should work on a schedule and you don’t need a wedding planner for that. Your South of France wedding photographer can help. The best way to accurately schedule your entire wedding day is to work together and create a plan.</p>

        <ol>
          <li>
            <h3>Setup Milestones</h3>
            <p>After you have booked the venues, the first step is to finalize the mandatory milestone times – the time of the ceremony.</p>
          </li>
          <li>
            <h3>Getting Ready Sessions</h3>
            <p>Most bride and groom want to tell the whole story from start to finish. This is a great way to allow the photographer and the couple to establish rapport. Most of the shots here should be candid to make it more organic.</p>
          </li>
          <li>
            <h3>First Look</h3>
            <p>The most intimate moment when the groom see the bride at first time in her wedding dress. A quick session before the ceremony called the First Look needs to be built into the schedule.</p>
          </li>
          <li>
            <h3>After the Ceremony</h3>
            <p>The Bridal Party and the Bride and Groom sessions are essential for portraits. It can take place either at the ceremony venue, right at the reception venue or at a location on the way.</p>
          </li>
          <li>
            <h3>Family Photo Session</h3>
            <p>The final task before enjoying the reception is the family portrait session. Usually a staged session but a test of patience searching for the lost grandma or uncle.</p>
          </li>
          <li>
            <h3>Bride and Groom Session</h3>
            <p>Most photographers love capturing candid images during this part. It is a celebration of love and is often filled with organic joy. The wedding photographer enjoys using their creative methods in capturing the energy with their cameras.</p>
          </li>          
        </ol>

        <h2>Your South of France Wedding Photographer</h2>
        <p>Getting married in the South of France is a dream come true. As a wedding photographer, my goal is to create stunning images that will remind you of your big day every time you look at them. My travels and passion for photography allow me to discover new places perfect for a venue for your big day.</p>
        <p>As your photographer, I will be glad to travel with you and work around your schedule to meet your needs.</p>
      </div>
    </div>

    <?php
    if (have_rows('page_builder')):
      while (have_rows('page_builder')): the_row();
        if (get_row_layout() == 'hero_info_section'): get_template_part('template-parts/rows/hero-info-section', 'section');
        elseif (get_row_layout() == 'hero_reviews_section'): get_template_part('template-parts/rows/hero-reviews-section', 'section');
        elseif (get_row_layout() == 'about_info_section'): get_template_part('template-parts/rows/about-info-section', 'section');
        elseif (get_row_layout() == 'text_images_section'): get_template_part('template-parts/rows/text-images-section', 'section');
        elseif (get_row_layout() == 'hero_slider_section'): get_template_part('template-parts/rows/hero-slider-section', 'section');
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
