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
                   $row.find('.offer-error').remove();
               }
           });

           if (!offerEnabled) {
               $row.find('[name*="[offer]"]').removeClass('is-invalid');
               $row.find('.offer-error').remove();
               return;
           }

           clampOfferAmount($row);
           validateOfferSelection($row);
           validateOfferPrice($row);
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

            validateOfferSelection($row);
        }

        function validateOfferSelection($row) {
            const offer = $row.find('[name*="[offer]"]').val() === '1';
            const percent = $row.find('[name*="[offer_percent]"]').val();
            const amount = $row.find('[name*="[offer_amount]"]').val();
            const price = $row.find('[name*="[offer_price]"]').val();

            const filled = [percent, amount, price].filter(val => val !== '' && val !== null);

            $row.find('.offer-error').remove();

            if (offer) {
                if (filled.length === 0) {
                    $row.find('[name*="[offer]"]').addClass('is-invalid')
                        .after(`<div class="invalid-feedback offer-error">يجب اختيار نوع عرض واحد على الأقل</div>`);
                    return false;
                } else if (filled.length > 1) {
                    $row.find('[name*="[offer]"]').addClass('is-invalid')
                        .after(`<div class="invalid-feedback offer-error">يجب اختيار نوع عرض واحد فقط</div>`);
                    return false;
                }
            }

            $row.find('[name*="[offer]"]').removeClass('is-invalid');
            return true;
        }

        function validateAmountVsMax($row) {
            const amount = parseFloat($row.find('[name*="[amount]"]').val()) || 0;
            const maxOrder = parseFloat($('#max_order').val()) || 0;
            const $input = $row.find('[name*="[amount]"]');

            $row.find('.amount-error').remove();

            if (maxOrder > 0 && amount <= maxOrder) {
                $input.addClass('is-invalid');
                $input.after(`<div class="invalid-feedback amount-error">
                    يجب أن تكون كمية المنتج الفرعي أكبر من الحد الأعلى للطلب (${maxOrder})
                </div>`);
                return false;
            } else {
                $input.removeClass('is-invalid');
                return true;
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

            $row.find('.offer-price-error').remove();

            if (!isNaN(offerPrice) && !isNaN(price) && offerPrice <= price) {
                $offerPriceInput.addClass('is-invalid');
                $offerPriceInput.after(`<div class="invalid-feedback offer-price-error">
                    سعر العرض يجب أن يكون أكبر من السعر العادي (${price})
                </div>`);
                return false;
            } else {
                $offerPriceInput.removeClass('is-invalid');
                return true;
            }
        }


        function validateUniqueSizes() {
            let isValid = true;
            const sizes = [];

            $('[name*="[size_id]"]').each(function () {
                const $input = $(this);
                const val = $input.val();
                $input.removeClass('is-invalid');
                $input.next('.invalid-feedback.size-error').remove();

                if (val && sizes.includes(val)) {
                    $input.addClass('is-invalid');
                    $input.after(`<div class="invalid-feedback size-error">الحجم مستخدم من قبل، اختر حجم مختلف</div>`);
                    isValid = false;
                } else {
                    sizes.push(val);
                }
            });

            return isValid;
        }

        function validateAll() {
            let allValid = true;

            $('[data-repeater-item]').each(function () {
                const $row = $(this);

                if (!validateAmountVsMax($row)) allValid = false;
                if (!validateOfferPrice($row)) allValid = false;
                if (!validateOfferSelection($row)) allValid = false;
            });

            if (!validateUniqueSizes()) allValid = false;

            return allValid;
        }

        $('form').on('submit', function (e) {
            if (!validateAll()) {
                e.preventDefault();
                alert('⚠️ تأكد من إدخال البيانات بشكل صحيح قبل الحفظ');
            }
        });

        $('.form-repeater').repeater({
            initEmpty: false,
            show: function () {
                $(this).slideDown();
                $(this).find('.select2').select2({ dropdownParent: $('body') });
                updateOfferFields($(this));
            },
            hide: function (deleteElement) {
                if (confirm('{{ __("site.confirm_delete") }}')) {
                    $(this).slideUp(deleteElement, function () {
                        $(this).remove();
                    });
                }
            }
        });

        $('.select2').select2({ dropdownParent: $('body') });

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
            validateUniqueSizes();
        });

        $('[data-repeater-item]').each(function () {
            updateOfferFields($(this));
            validateAmountVsMax($(this));
            validateOfferPrice($(this));
        });

        validateUniqueSizes();
    });
</script>
