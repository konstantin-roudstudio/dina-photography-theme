<?php
  $title = get_sub_field('title');
  $items = get_sub_field('items');
  $cream_bg = get_sub_field('cream_background');

  $class = $cream_bg ? ' cta-form--cream' : '';
?>

<?php if (!empty($items)) : ?>
  <div class="faq<?= $class ?>">
    <div class="faq__center center">
      <?php if ($title) : ?>
        <h2 class="faq__title title"><?= $title ?></h2>
      <?php endif; ?>

      <div class="faq__items">
        <?php foreach ($items as $item) : ?>
          
          <div class="faq__item">
            <div class="faq__item-head">
              <h3 class="faq__item-title"><?= $item['question'] ?></h3>
              <span class="plus-icon"></span>
            </div>

            <div class="faq__item-body">
              <div class="faq__item-wrapper">
                <div class="faq__item-content">
                  <?= nl2br($item['answer']) ?>
                </div>
              </div>              
            </div>
          </div>
        <?php endforeach; ?>        
      </div>
    </div>
  </div>
<?php endif; ?>