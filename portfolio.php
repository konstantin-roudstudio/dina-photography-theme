<?php
/**
 * Template Name: Portfolio
 */

$category_id = get_field('category');
$description = get_field('description');
//$button = get_field('button');

$info_title = get_field('info_title');
$info_text = get_field('info_text');
$button = get_field('info_button');

if ($button) {
  $button_url = $button['url'];
  $button_title = $button['title'];
  $button_target = $button['target'] ? $button['target'] : '_self';
}

$landscape_items = [3, 5, 7, 9, 11];

$args = array(
    'post_type' => 'projects',
    'cat' => $category_id
);
$wp_query = new WP_Query( $args );

get_header();
?>
  <main id="main" class="main">
    <div class="portfolio">
      <div class="portfolio__center center">
        <div class="portfolio__inner">

          <div class="portfolio__item portfolio__item--text portfolio__item--mobile">
            <div class="portfolio__item-subtitle"><?= get_cat_name( $category_id ) ?></div>
            <div class="portfolio__item-title title"><?= get_the_title() ?></div>
            <?php if ($description) : ?>
              <div class="portfolio__item-text wysiwyg-content"><?= $description ?></div>
            <?php endif; ?>
          </div>

          <div class="portfolio__items-column">

            <div class="portfolio__item portfolio__item--portrait">
              <div class="portfolio__img-wrapper">
                <img src="" alt="">
              </div>
              <div class="portfolio__text">Sam & Paul</div>
            </div>

            <div class="portfolio__item">
              <div class="portfolio__img-wrapper">
                <img src="" alt="">
              </div>
              <div class="portfolio__text">Sam & Paul</div>
            </div>

            <div class="portfolio__item portfolio__item--portrait">
              <div class="portfolio__img-wrapper">
                <img src="" alt="">
              </div>
              <div class="portfolio__text">Sam & Paul</div>
            </div>

            <div class="portfolio__item portfolio__item--portrait">
              <div class="portfolio__img-wrapper">
                <img src="" alt="">
              </div>
              <div class="portfolio__text">Sam & Paul</div>
            </div>

            <div class="portfolio__item">
              <div class="portfolio__img-wrapper">
                <img src="" alt="">
              </div>
              <div class="portfolio__text">Sam & Paul</div>
            </div>

            <div class="portfolio__item portfolio__item--portrait">
              <div class="portfolio__img-wrapper">
                <img src="" alt="">
              </div>
              <div class="portfolio__text">Sam & Paul</div>
            </div>

          </div>

          <div class="portfolio__items-column">

            <div class="portfolio__item portfolio__item--text portfolio__item--desktop">
              <div class="portfolio__item-subtitle">Wedding</div>
              <div class="portfolio__item-title title">Portfolio</div>
              <div class="portfolio__item-text">
                <p>I am passionate about reaching through my lens to capture all the emotions of your special day. I focus on everything from the big moments to the small details. Each element helps me create a visual story that you can look back on again and again.</p>

                <p>From the first kiss to the first dance, the vows to the speeches, these are moments you’ll never forget. Then there are those moments you never got to see. I aim to grab hold of it all, click by click.</p>
              </div>
            </div>

            <div class="portfolio__item portfolio__item--portrait">
              <div class="portfolio__img-wrapper">
                <img src="" alt="">
              </div>
              <div class="portfolio__text">Sam & Paul</div>
            </div>

            <div class="portfolio__item">
              <div class="portfolio__img-wrapper">
                <img src="" alt="">
              </div>
              <div class="portfolio__text">Sam & Paul</div>
            </div>

            <div class="portfolio__item portfolio__item--text portfolio__item--desktop">
              <div class="portfolio__item-subtitle"><?= get_cat_name( $category_id ) ?></div>

              <?php if ($info_title) : ?>
                <div class="portfolio__item-title portfolio__item-title--small title"><?= $info_title ?></div>
              <?php endif; ?>

              <?php if ($info_text) : ?>
                <div class="portfolio__item-text"><?= $info_text ?></div>
              <?php endif; ?>

              <?php if ($button) : ?>
                <a href="<?= $button_url ?>" target="<?= $button_target ?>" class="portfolio__item-btn btn btn--calendar"><?= $button_title ?></a>
              <?php endif; ?>
            </div>

            <div class="portfolio__item portfolio__item--portrait">
              <div class="portfolio__img-wrapper">
                <img src="" alt="">
              </div>
              <div class="portfolio__text">Sam & Paul</div>
            </div>

            <div class="portfolio__item">
              <div class="portfolio__img-wrapper">
                <img src="" alt="">
              </div>
              <div class="portfolio__text">Sam & Paul</div>
            </div>

          </div>

          <div class="portfolio__items-column">

            <div class="portfolio__item portfolio__item--portrait">
              <div class="portfolio__img-wrapper">
                <img src="" alt="">
              </div>
              <div class="portfolio__text">Sam & Paul</div>
            </div>

            <div class="portfolio__item">
              <div class="portfolio__img-wrapper">
                <img src="" alt="">
              </div>
              <div class="portfolio__text">Sam & Paul</div>
            </div>

            <div class="portfolio__item portfolio__item--portrait">
              <div class="portfolio__img-wrapper">
                <img src="" alt="">
              </div>
              <div class="portfolio__text">Sam & Paul</div>
            </div>

            <div class="portfolio__item portfolio__item--portrait">
              <div class="portfolio__img-wrapper">
                <img src="" alt="">
              </div>
              <div class="portfolio__text">Sam & Paul</div>
            </div>

            <div class="portfolio__item">
              <div class="portfolio__img-wrapper">
                <img src="" alt="">
              </div>
              <div class="portfolio__text">Sam & Paul</div>
            </div>

            <div class="portfolio__item portfolio__item--portrait">
              <div class="portfolio__img-wrapper">
                <img src="" alt="">
              </div>
              <div class="portfolio__text">Sam & Paul</div>
            </div>

          </div>

          <div class="portfolio__item portfolio__item--text portfolio__item--mobile">
            <div class="portfolio__item-subtitle">Wedding</div>
            <div class="portfolio__item-title title">PHOTOGRAPHY IN A STORY WHICH LASTS FOR GENERATIONS</div>
            <div class="portfolio__item-text">
              <p>Every wedding is unique, which is why I’m happy to work around your plans and schedule. I look forward to meeting new clients and getting to know their love stories. I feel incredibly lucky every day that I get to be a part of such special moments in my clients’ lives while doing something I’m so passionate about.</p>
            </div>
            <a href="#" class="portfolio__item-btn btn btn--calendar">check your date</a>
          </div>

          <div class="portfolio__item portfolio__item--text"></div>
        </div>
      </div>
    </div>
  </main>

<?php
get_footer();
