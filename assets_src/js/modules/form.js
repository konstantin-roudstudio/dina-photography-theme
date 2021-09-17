export default function ($) {
    const $form = $('.wpcf7');

    $form.each(function () {
        const $fields = $(this).find('.wpcf7-form-control');
        const $dateFields = $(this).find('[name="event-date"]');

        $(this)[0].addEventListener('wpcf7submit', function () {
            $fields.each(function () {
                const $field = $(this);
                setTimeout(function () {
                    if ($field.hasClass('wpcf7-not-valid')) {
                        $field.closest('.form__field').addClass('error');
                    }
                }, 50);
            })
        }, false);

        $fields.each(function () {
            const $field = $(this);
            $field[0].addEventListener('input', function () {
                if (!$field.hasClass('wpcf7-not-valid')) return;
                $field.closest('.form__field').removeClass('error');
            })
        });

        $dateFields.each(function () {
            $(this).focus(function () {
                if ($(this).val()) return;
                $(this).val('');
                $(this).val('/');
            });

            $(this).blur(function () {
                if ($(this).val() === "/") $(this).val('');
            })
        })
    });
}
