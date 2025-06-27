

<!-- JS -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

<script>
  $(document).ready(function () {
    var table = $('.table').DataTable({
        paging: false,
        scrollX: true,
        scrollY: 400,
        info: false,
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'collection',
                text: '<i class="fa fa-upload me-1"></i> Export',
                className: 'btn btn-light border d-flex align-items-center', // شكل الزر الرمادي
                buttons: [
                    { extend: 'copy', className: 'dropdown-item' },
                    { extend: 'csv', className: 'dropdown-item' },
                    { extend: 'excel', className: 'dropdown-item' },
                    { extend: 'pdf', className: 'dropdown-item' },
                    { extend: 'print', className: 'dropdown-item' }
                ]
            }
        ]
    });

    table.buttons().container().appendTo('#exportButtons');
});

</script>

