{{-- FYI: Datatables do not support colspan or rowpan --}}

<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.bootstrap4.min.js"></script>
​

<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>

<script type="text/javascript" src="{{ mix('/js/all.js') }}"></script>
​<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
​
<script type="text/javascript">

    $(document).ready(function () {

        $('#date_from').datepicker({
            dateFormat: 'yy-mm-dd',
            autoclose: true,


            todayBtn: true,
            setDate: new Date(),
        });
        $('#date_to').datepicker({
            dateFormat: 'yy-mm-dd',
            autoclose: true,


            todayBtn: true,
            setDate: new Date(),
        });

        $('#reportdatatable').DataTable( {
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', { extend: 'pdf', orientation: 'landscape', pageSize: 'A4' }, 'print'
            ]
        } );


    });


</script>







