export default function ($) {
    const $form = $('.cta-form');

    $form.each(function () {
        const $fields = $(this).find('.wpcf7-form-control');

        $(this)[0].addEventListener('wpcf7submit', function () {
            $fields.each(function () {
                const $field = $(this);
                setTimeout(function () {
                    if ($field.hasClass('wpcf7-not-valid')) {
                        $field.closest('.cta-form__field').addClass('error');
                    }
                });
            })
        }, false);

        $fields.each(function () {
            const $field = $(this);
            $field[0].addEventListener('input', function () {
                if (!$field.hasClass('wpcf7-not-valid')) return;
                $field.closest('.cta-form__field').removeClass('error');
            })
        })
    });
}
