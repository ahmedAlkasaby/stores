<script src='https://code.jquery.com/jquery-3.7.1.js'></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>



<script>
    $(document).ready(function () {
        $('.table').DataTable({
            paging: false,
            scrollX: true,
            scrollY: 500,
            info: false
        });
    });
</script>
