<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package DinaPhotography
 */

$title = get_field('404_title', 'option');
$text = get_field('404_text', 'option');
$button = get_field('404_button', 'option');

if ($button) {
  $button_url = $button['url'];
  $button_title = $button['title'];
  $button_target = $button['target'] ? $button['target'] : '_self';
}

get_header();
?>

    <main id="primary" class="main error-404">
        <div class="center">
            <section class="error-404__inner">
              <?php if ($title) : ?>
                <h1 class="error-404__title title"><?= $title ?></h1>
              <?php endif; ?>

              <?php if ($text) : ?>
                <h3 class="error-404__subtitle"><?= $text ?></h3>
              <?php endif; ?>

              <?php if ($button) : ?>
                <a href="<?= $button_url ?>" target="<?= $button_target ?>" class="btn"><?= $button_title ?></a>
              <?php endif; ?>
            </section>
        </div>
    </main>

<?php
get_footer();
