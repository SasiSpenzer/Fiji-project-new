<script type="text/javascript">

$(document).ready(function () {

        $("#showpending").change(function () {
            if(this.checked) {


                $.ajax({
                    url: '{{route('makePendingSession')}}',
                    type: 'POST',
                    data: {"val":'1',_token: $('input[name="_token"]').val()},
                    success: function (data) {

                        location.reload();

                    }
                });



            }else{
                $.ajax({
                    url: '{{route('makePendingSession')}}',
                    type: 'POST',
                    data: {"val":'0',_token: $('input[name="_token"]').val()},
                    success: function (data) {

                        location.reload();

                    }
                });
            }
        });


});

</script>
