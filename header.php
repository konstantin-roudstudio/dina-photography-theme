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

$fb_link = get_field('fb_link', 'option');
$insta_link = get_field('insta_link', 'option');

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
                            'menu_class'     => 'main-nav__secondary',
                            'walker' => new Header_Menu_Walker()
                        )
                    );
                    ?>
                    <div class="main-nav__btn-wrapper">
                      <a href="#" class="main-nav__btn btn btn--calendar">
                        <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                          <path d="M12.09,1.45H10.82V.61A.63.63,0,0,0,10.18,0a.62.62,0,0,0-.63.61v.84H4.45V.61A.62.62,0,0,0,3.82,0a.63.63,0,0,0-.64.61v.84H1.91A1.88,1.88,0,0,0,0,3.29v8.87A1.87,1.87,0,0,0,1.91,14H12.09A1.87,1.87,0,0,0,14,12.16V3.29A1.88,1.88,0,0,0,12.09,1.45Zm.64,10.71a.61.61,0,0,1-.19.44.67.67,0,0,1-.45.18H1.91a.63.63,0,0,1-.64-.62v-5H12.73Zm0-6.27H1.27V3.29a.63.63,0,0,1,.64-.61H3.18v.69A.63.63,0,0,0,3.82,4a.62.62,0,0,0,.63-.61V2.68h5.1v.69a.62.62,0,0,0,.63.61.63.63,0,0,0,.64-.61V2.68h1.27a.63.63,0,0,1,.45.18.59.59,0,0,1,.19.43Z"/>
                        </svg>
                        <span>check your date</span>
                      </a>
                    </div>

                    <?php if ($fb_link && $insta_link) : ?>
                      <div class="main-nav__socials socials">
                        <?php if ($fb_link) : ?>
                          <a class="socials__link" href="<?= $fb_link ?>">
                            <svg class="socials__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 37">
                              <path d="M20.5,14.1c0-.9.1-1.4,1.4-1.4h1.7V9.3H20.8c-3.3,0-4.5,1.7-4.5,4.5v2.1H14.2v3.5h2.1V29.5h4.2V19.3h2.8l.4-3.5H20.5Z"/>
                            </svg>
                          </a>
                        <?php endif; ?>
                        <a class="socials__link" href="#">
                          <svg class="socials__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37 37">
                            <path d="M28.4,14.4a9.86,9.86,0,0,0-.5-2.4,4.18,4.18,0,0,0-1.1-1.8,5,5,0,0,0-1.7-1.1,5.05,5.05,0,0,0-2.4-.5,36.93,36.93,0,0,0-4.1-.1c-1.65,0-2.4,0-3,.07-.37,0-.68,0-1.11,0a9.86,9.86,0,0,0-2.4.5,4.18,4.18,0,0,0-1.8,1.1A8.71,8.71,0,0,0,9.2,12a5.05,5.05,0,0,0-.5,2.4,36.93,36.93,0,0,0-.1,4.1c0,1.65,0,2.4.07,3,0,.37,0,.68,0,1.11A9.86,9.86,0,0,0,9.2,25a4.18,4.18,0,0,0,1.1,1.8A6.19,6.19,0,0,0,12,27.9a5.05,5.05,0,0,0,2.4.5,36.93,36.93,0,0,0,4.1.1c1.65,0,2.4,0,3-.07.37,0,.68,0,1.11,0a9.86,9.86,0,0,0,2.4-.5,4.52,4.52,0,0,0,1.7-1.1A8.71,8.71,0,0,0,27.8,25a5.05,5.05,0,0,0,.5-2.4c.08-.93.1-1.29.16-3,0-.32,0-.68,0-1.09,0-1.65,0-2.4-.07-3C28.42,15.14,28.4,14.83,28.4,14.4Zm-1.87,7.06c0,.36,0,.66,0,1a5.35,5.35,0,0,1-.3,1.8,2.59,2.59,0,0,1-.7,1.1,3,3,0,0,1-1.1.7l-.07,0a5,5,0,0,1-1.73.27,34.75,34.75,0,0,1-4,.1c-1.6,0-2.37,0-3-.07-.36,0-.66,0-1,0a5.35,5.35,0,0,1-1.8-.3,2.59,2.59,0,0,1-1.1-.7,3,3,0,0,1-.7-1.1l0-.07a5,5,0,0,1-.27-1.73,34.75,34.75,0,0,1-.1-4c0-1.6,0-2.37.07-3,0-.36,0-.66,0-1a5.35,5.35,0,0,1,.3-1.8,2.59,2.59,0,0,1,.7-1.1,3,3,0,0,1,1.1-.7l.07,0a5,5,0,0,1,1.73-.27,23.72,23.72,0,0,1,3.1-.1h.9c1.6,0,2.37,0,3,.07.36,0,.66,0,1,0a5.35,5.35,0,0,1,1.8.3,2.59,2.59,0,0,1,1.1.7,3,3,0,0,1,.7,1.1,3.61,3.61,0,0,1,.3,1.8,35.8,35.8,0,0,1,.1,4C26.6,20.1,26.56,20.87,26.53,21.46Z"/>
                            <path d="M18.5,13.4a5.1,5.1,0,1,0,5.1,5.1A5.12,5.12,0,0,0,18.5,13.4Zm0,8.4a3.3,3.3,0,1,1,3.3-3.3A3.33,3.33,0,0,1,18.5,21.8Z"/>
                          </svg>
                        </a>
                      </div>
                    <?php endif; ?>
                  </div>
                </nav>

                <a class="menu-btn">
                  <span></span>
                </a>
              </div>

            </div>

            <a href="#" class="header__btn btn btn--calendar">
              <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14">
                <path d="M12.09,1.45H10.82V.61A.63.63,0,0,0,10.18,0a.62.62,0,0,0-.63.61v.84H4.45V.61A.62.62,0,0,0,3.82,0a.63.63,0,0,0-.64.61v.84H1.91A1.88,1.88,0,0,0,0,3.29v8.87A1.87,1.87,0,0,0,1.91,14H12.09A1.87,1.87,0,0,0,14,12.16V3.29A1.88,1.88,0,0,0,12.09,1.45Zm.64,10.71a.61.61,0,0,1-.19.44.67.67,0,0,1-.45.18H1.91a.63.63,0,0,1-.64-.62v-5H12.73Zm0-6.27H1.27V3.29a.63.63,0,0,1,.64-.61H3.18v.69A.63.63,0,0,0,3.82,4a.62.62,0,0,0,.63-.61V2.68h5.1v.69a.62.62,0,0,0,.63.61.63.63,0,0,0,.64-.61V2.68h1.27a.63.63,0,0,1,.45.18.59.59,0,0,1,.19.43Z"/>
              </svg>
              <span>check your date</span>
            </a>
          </div>
        </div>
			</header>
