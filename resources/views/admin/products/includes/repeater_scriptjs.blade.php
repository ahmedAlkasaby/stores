<script>
    $(document).ready(function () {

        function updateOfferFields($row) {
            const offerVal = $row.find('[name*="[offer]"]').val();
            const offerEnabled = offerVal === '1' || offerVal === 'true';

            const fields = [
                $row.find('[name*="[offer_percent]"]'),
                $row.find('[name*="[offer_amount]"]'),
                $row.find('[name*="[offer_price]"]'),
            ];

            fields.forEach($el => {
                $el.prop('disabled', !offerEnabled);
                if (!offerEnabled) {
                    $el.val('');
                    $el.removeClass('is-invalid');
                }
            });

            // إعادة التحقق بعد التفعيل
            if (offerEnabled) {
                clampOfferAmount($row);
                validateOfferPrice($row);
            }
        }

        function handleSingleOfferInput($row, changedField) {
            const fields = [
                $row.find('[name*="[offer_percent]"]'),
                $row.find('[name*="[offer_amount]"]'),
                $row.find('[name*="[offer_price]"]'),
            ];

            fields.forEach($input => {
                if ($input[0] !== changedField[0]) {
                    $input.val('');
                    $input.removeClass('is-invalid');
                }
            });
        }

        function validateAmountVsMax($row) {
            const amount = parseFloat($row.find('[name*="[amount]"]').val()) || 0;
            const maxOrder = parseFloat($('#max_order').val()) || 0;
            const $input = $row.find('[name*="[amount]"]');

            if (maxOrder > 0 && amount <= maxOrder) {
                $input.addClass('is-invalid');
                if (!$row.find('.amount-error').length) {
                    $input.after(`<div class="invalid-feedback amount-error">
                        ${`{{ __("validation.child_amount_gt_max_order", ["child" => "", "max_order" => ":max_order"]) }}`.replace(':max_order', maxOrder)}
                    </div>`);
                }
            } else {
                $input.removeClass('is-invalid');
                $row.find('.amount-error').remove();
            }
        }

        function clampOfferAmount($row) {
            const $input = $row.find('[name*="[offer_amount]"]');
            let val = parseFloat($input.val());

            if (val > 99) val = 99;
            else if (val < 1 && val !== 0) val = 1;

            if (!isNaN(val)) $input.val(val);
        }

        function validateOfferPrice($row) {
            const $offerPriceInput = $row.find('[name*="[offer_price]"]');
            const $priceInput = $row.find('[name*="[price]"]');

            const offerPrice = parseFloat($offerPriceInput.val());
            const price = parseFloat($priceInput.val());

            if (!isNaN(offerPrice) && !isNaN(price)) {
                if (offerPrice <= price) {
                    $offerPriceInput.val('');
                    $offerPriceInput.addClass('is-invalid');
                    if (!$offerPriceInput.next('.invalid-feedback').length) {
                        $offerPriceInput.after(
                            `<div class="invalid-feedback">
                                سعر العرض يجب أن يكون أكبر من السعر (${price})
                            </div>`
                        );
                    }
                } else {
                    $offerPriceInput.removeClass('is-invalid');
                    $offerPriceInput.next('.invalid-feedback').remove();
                }
            }
        }

        function refreshSizeOptions() {
            const selectedSizes = $('[name*="[size_id]"]').map(function () {
                return $(this).val();
            }).get();

            $('[name*="[size_id]"]').each(function () {
                const $select = $(this);
                const currentVal = $select.val();

                $select.find('option').each(function () {
                    const optionVal = $(this).val();
                    if (
                        optionVal &&
                        optionVal !== currentVal &&
                        selectedSizes.includes(optionVal)
                    ) {
                        $(this).hide();
                    } else {
                        $(this).show();
                    }
                });
            });
        }

        $('.form-repeater').repeater({
            initEmpty: false,
            show: function () {
                $(this).slideDown();
                $(this).find('.select2').select2({ dropdownParent: $('body') });
                updateOfferFields($(this));
                refreshSizeOptions();
            },
            hide: function (deleteElement) {
                if (confirm('{{ __("site.confirm_delete") }}')) {
                    $(this).slideUp(deleteElement, function () {
                        $(this).remove();
                        refreshSizeOptions();
                    });
                }
            }
        });

        $('.select2').select2({ dropdownParent: $('body') });

        // Bindings
        $(document).on('change', '[name*="[offer]"]', function () {
            updateOfferFields($(this).closest('[data-repeater-item]'));
        });

        $(document).on('input', '[name*="[offer_percent]"], [name*="[offer_amount]"], [name*="[offer_price]"]', function () {
            handleSingleOfferInput($(this).closest('[data-repeater-item]'), $(this));
        });

        $(document).on('input', '[name*="[amount]"]', function () {
            validateAmountVsMax($(this).closest('[data-repeater-item]'));
        });

        $(document).on('input', '[name*="[offer_amount]"]', function () {
            clampOfferAmount($(this).closest('[data-repeater-item]'));
        });

        $(document).on('input', '[name*="[offer_price]"], [name*="[price]"]', function () {
            validateOfferPrice($(this).closest('[data-repeater-item]'));
        });

        $(document).on('change', '[name*="[size_id]"]', function () {
            refreshSizeOptions();
        });

        // Initial checks
        $('[data-repeater-item]').each(function () {
            updateOfferFields($(this));
            validateAmountVsMax($(this));
            validateOfferPrice($(this));
        });

        refreshSizeOptions();
    });
</script>
