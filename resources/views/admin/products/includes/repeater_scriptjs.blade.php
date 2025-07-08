<script>
  'use strict';

  $(function () {
    const formRepeater = $('.form-repeater');

    if (formRepeater.length) {
      let row = 2;

      formRepeater.on('submit', function (e) {
        e.preventDefault();
      });

      formRepeater.repeater({
        show: function () {
          let col = 1;

          const fromControl = $(this).find('.form-control, .form-select');
          const formLabel = $(this).find('.form-label');

          fromControl.each(function (i) {
            const id = 'form-repeater-' + row + '-' + col;
            $(this).attr('id', id);
            $(formLabel[i]).attr('for', id);
            col++;
          });

          row++;
          $(this).slideDown();

          // ✅ إعادة تهيئة الـ Select2 بعد إضافة عنصر جديد
          $(this).find('.select2').select2({
            dropdownParent: $(this).parent()
          });
        },

        hide: function (deleteElement) {
          if (confirm('هل أنت متأكد أنك تريد حذف هذا العنصر؟')) {
            $(this).slideUp(deleteElement);
          }
        }
      });
    }
  });
</script>
