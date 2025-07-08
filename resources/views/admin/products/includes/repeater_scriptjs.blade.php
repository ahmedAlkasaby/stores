

<script>
    $(document).ready(function () {
        $('.form-repeater').repeater({
            initEmpty: false,
            show: function () {
                $(this).slideDown();

                // Re-init select2 inside newly added item
                $(this).find('.select2').select2({
                    dropdownParent: $('body'),

                });
            },
            hide: function (deleteElement) {
                if (confirm('Are you sure you want to delete this item?')) {
                    $(this).slideUp(deleteElement);
                }
            }
        });

        // Init select2 on first load
        $('.select2').select2({
            dropdownParent: $('body'),

        });
    });
</script>
