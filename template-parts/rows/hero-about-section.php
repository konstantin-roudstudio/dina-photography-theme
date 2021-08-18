<?php
$title = get_sub_field('about_title');
$image = get_sub_field('about_image');

?>

<section class="hero-about center">
  <div class="hero-about__bg hero-about__bg--desktop"></div>

  <div class="hero-about__bg hero-about__bg--mobile"></div>

  <div class="hero-about__content">
    <h1 class="hero-about__title title">
      I’m Dina, Europe based photographer, experienced traveler and wine enthusiast.
    </h1>
    <div class="hero-about__top-text">
      <p class="hero-about__text">I’m an artist who creates beautiful and romantic portraiture, and I’m committed to my art and every client’s individuality. I believe your photographs are your legacy, and that each person I photograph has something to leave behind.</p>
      <p class="hero-about__text">I’m a frequent exhibition goer and study my craft relentlessly. I enjoy watching artistic films that allow me to research different photographer’s perspectives and enjoy following many famous fashion photographers.</p>
    </div>
    <div class="hero-about__bottom-text">
      <p class="hero-about__text">As a wedding photographer, I think I have an obligation to myself and my craft to learn and track other professional’s styles. For me, I find a deep inspiration from advertisement and fashion photography, as well as famous artists who take great care with documenting light in their work, like Rembrandt.</p>
    </div>
    <div class="hero-about__items">
      <div class="hero-about__items-left">
        <div class="hero-about__item">
          <div class="hero-about__item-title">FAVORITE COUNTRY</div>
          <div class="hero-about__item-text">France and Italy (can’t choose)</div>
        </div>
        <div class="hero-about__item">
          <div class="hero-about__item-title">SECRET TALENT</div>
          <div class="hero-about__item-text">Snowboarding & Chick with secrets</div>
        </div>
      </div>
      <div class="hero-about__items-right">
        <div class="hero-about__item">
          <div class="hero-about__item-title">FAVORITE DRINK</div>
          <div class="hero-about__item-text">Red Wine with soft taste of Fruits</div>
        </div>
        <div class="hero-about__item">
          <div class="hero-about__item-title">Current Location</div>
          <div class="hero-about__item-text">Warsaw</div>
        </div>
      </div>
    </div>
    <div class="hero-about__bottom">
      <div class="hero-about__item-title">Some of my works published at: </div>
      <div class="hero-about__bottom-items">
        <div class="hero-about__bottom-item">
          <img src="<?php echo get_template_directory_uri(); ?> /images/hero-about__pic-01.png" alt="">
        </div>
        <div class="hero-about__bottom-item">
          <img src="<?php echo get_template_directory_uri(); ?> /images/hero-about__pic-02.png" alt="">
        </div>
        <div class="hero-about__bottom-item">
          <img src="<?php echo get_template_directory_uri(); ?> /images/hero-about__pic-03.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

