<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DinaPhotography
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<?php if ( ! empty( $analytics_code ) ) : ?>
        <template id="analytics-code">
            <?= $analytics_code ?>
        </template>
	<?php endif; ?>
    <script>
        document.documentElement.classList.add('js');
        window.fixVh = function () {
            let vh = window.innerHeight * 0.01;
            document.documentElement.style.setProperty('--vh', vh + 'px');
        };
        window.fixVh();
        var analyticsCode = document.getElementById('analytics-code');
        if (analyticsCode && (document.cookie || '').indexOf('analytics_disabled') === -1) {
            if ('content' in document.createElement('template')) {
              document.head.append(analyticsCode.content)
            }
        }
    </script>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="root">
		<div class="wrapper">
			<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dina_photography' ); ?></a>

			<header class="header" id="header">
        <div class="header__inner">
          <div class="header__center center">
            <div class="header__wrapper">
              <div class="header__info">
                <a class="logo" href="<?= esc_url( home_url( '/' ) ); ?>">
                  <div class="logo__main">Dina Deykun</div>
                  <div class="logo__seconadary">photography</div>
                </a>                
              </div>

              <div class="header__nav">
                <nav class="main-nav">
                  <div class="main-nav__inner">
                    <div class="header__block">
                      <a class="logo-small" href="<?= esc_url( home_url( '/' ) ); ?>">
                        <div>D/D</div>
                      </a>
                      <?php
                      wp_nav_menu(
                        array(
                            'theme_location' => 'header-main-menu',
                            'fallback_cb'    => '',
                            'container'      => false,
                            'menu_class'     => 'main-nav__main'
                        )
                      );
                      ?>
                    </div>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'header-secondary-menu',
                            'fallback_cb'    => '',
                            'container'      => false,
                            'menu_class'     => 'main-nav__secondary'
                        )
                    );
                    ?>
                    <div class="main-nav__btn-wrapper">
                      <button class="main-nav__btn btn"><img src="<?php echo get_template_directory_uri(); ?> /images/footer-btn-icon.svg" alt=""> <span>check your date</span></button>
                    </div>

                    <div class="main-nav__socials-wrapper">
                      <a href="#" class="main-nav__socials">
                        <img src="<?php echo get_template_directory_uri(); ?> /images/facebook.svg" alt="">
                      </a>

                      <a href="#" class="main-nav__socials">
                        <img src="<?php echo get_template_directory_uri(); ?> /images/instagram.svg" alt="">
                      </a>
                    </div>
                  </div>
                </nav>

                <a class="menu-btn">
                  <span></span>
                </a>
              </div>

            </div>

            <button class="header__btn btn"><img src="<?php echo get_template_directory_uri(); ?> /images/footer-btn-icon.svg" alt=""> <span>check your date</span></button>
          </div>
        </div>
			</header>
