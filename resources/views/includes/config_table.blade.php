<link href="{{asset('css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">

<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/plugins/dataTables/datatables.min.js')}}"></script>

<script>
    $(document).ready(function(){
        $('.dataTables-example').DataTable({
            pageLength: 10,
            responsive: true,
            dom: '<"html5buttons"B>lTfgitp',
            buttons: [
                {extend: 'csv'},
                {extend: 'excel', title: 'ExampleFile'}
            ]

        });

        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });

        $('#data_5 .input-daterange').datepicker({
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true
        });

    });
</script>