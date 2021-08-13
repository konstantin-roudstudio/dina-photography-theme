<?php
$url = esc_url(get_permalink());
?>

<div class="post-item">
  <a href="<?= $url ?>"
     class="post-item__thumbnail"><?= get_the_post_thumbnail(null, 'large', ['alt' => get_the_title(), 'sizes' => '400px']) ?></a>
  <div class="post-item__info">
    <h2 class="post-item__title"><a href="<?= $url ?>"><?php the_title(); ?></a></h2>
    <div
        class="post-item__excerpt"><?= strlen(get_the_excerpt()) <= 145 ? get_the_excerpt() : substr(get_the_excerpt(), 0, 145) . '...'; ?></div>
    <a href="<?= $url ?>" class="post-item__link arrow-link">
      <span>Читать Дальше</span>
      <svg class="arrow-link__svg" viewBox="0 0 44 45" xmlns="http://www.w3.org/2000/svg">
        <path d="M43.1132 24.0139L43.015 24.112C42.966 24.1611 42.966 24.1611 42.8675 24.1608C38.0526 26.6069 34.0762 29.8923 30.7919 34.1637C29.9587 35.293 26.4092 33.0191 27.1936 32.0373C29.6448 28.8952 32.3926 26.246 35.6341 24.0903L3.74687 23.7018C2.5659 23.6984 -0.443287 21.0817 1.03285 21.0859C13.4827 21.27 25.9325 21.3555 38.333 21.4902C34.7311 18.1827 31.2274 14.679 27.8218 11.1752C25.9461 9.20145 29.4415 9.75293 30.4778 10.7893C34.3771 14.8848 38.4235 18.8331 42.6174 22.6345C43.0119 22.9309 43.506 23.6212 43.1135 24.0137L43.1132 24.0139Z"/>
      </svg>
    </a>
  </div>
</div>
