export default function faq($) {
  const $faqSections = $('.faq');

  $faqSections.each(function () {
    const $section = $(this);
    const $faqItems = $section.find('.faq__item');
    
    $faqItems.each(function () {
      const $item = $(this);
      const $head = $item.find('.faq__item-head');

      $head.on('click', () => {
        $item.toggleClass('opened');
      });
    });
  });
}