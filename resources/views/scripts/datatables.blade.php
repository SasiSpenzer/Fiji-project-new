{{-- FYI: Datatables do not support colspan or rowpan --}}

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.data-table').dataTable({
            "paging": false,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "dom": 'T<"clear">lfrtip',
            "sPaginationType": "full_numbers",
            'aoColumnDefs': [{
                'bSortable': true,
                'searchable': true,
                'aTargets': ['no-search'],
                'bTargets': ['no-sort']
            }]
        });
    });
</script>
