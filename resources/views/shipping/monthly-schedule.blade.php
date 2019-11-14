@extends('layouts.app')


@section('content')
    <div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Agents Monthly Shipping Schedule</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        {!! Form::open(array('route' => 'shipping.store', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}

                        {!! csrf_field() !!}
                        <div class="card-body">
                            {!! Form::open(array('route' => 'shipping.store', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}

                            {!! csrf_field() !!}
                            <label>Vessel Details*</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="fa fa-calendar"></i>
                                  </span>
                                </div>

                                <input type="text" name="reservation" class="form-control float-right" id="reservation">
                                @if($errors->has('reservation'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('reservation') }}</strong>
                                        </span>

                                @endif
                            </div>
                            <div class="form-group">

                                <table id="myTable" class=" table order-list table-condensed">
                                    <thead>
                                    <tr>
                                        <th>Vessel Name</th>
                                        <th>Voyage Inward</th>
                                        <th>Voyage Outward</th>
                                        <th>ETA Date</th>
                                        <th>LOA</th>
                                        <th>Last Port</th>
                                        <th>Next Port</th>
                                        <th>Line</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <input type="text" name="VN_0" class="form-control">
                                        </td>
                                        <td>
                                            <input type="mail" name="VI_0" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="VO_0" class="form-control">
                                        </td>
                                        <td>

                                            <input name="ETA_Date_0" type="text" class="form-control datepicker" id="datepicker">
                                        </td>
                                        <td>
                                            <input  type="text" name="LOA_0" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="LP_0" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="NP_0" class="form-control">
                                        </td>
                                        <td>
                                            <select name="Line_0" class= " form-control"><option value="Select" selected="selected">Select</option><option value="HLC">HLC</option><option value="NYK">NYK</option><option value="ONE">ONE</option><option value="MOL">MOL</option><option value="KYW">KYW</option>
                                            </select>
                                        </td>

                                        <td><a class="deleteRow"></a>

                                        </td>
                                    </tr>
                                    </tbody>
                                    <tfoot>

                                    </tfoot>
                                </table>
                                <input type="button" class="btn btn-block btn-primary " id="addrow" value="Add Row">
                            </div>





                        </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        {!! Form::close() !!}
                    </div>

                    <!-- /.card -->

                </div>
                <!--/.col (left) -->
                <!-- right column -->

                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection

@section('footer_scripts')

    <script type="text/javascript">

        // var canvas = document.getElementById('signature-pad');
        //
        // // Adjust canvas coordinate space taking into account pixel ratio,
        // // to make it look crisp on mobile devices.
        // // This also causes canvas to be cleared.
        // function resizeCanvas() {
        //     // When zoomed out to less than 100%, for some very strange reason,
        //     // some browsers report devicePixelRatio as less than 1
        //     // and only part of the canvas is cleared then.
        //     var ratio =  Math.max(window.devicePixelRatio || 1, 1);
        //     canvas.width = canvas.offsetWidth * ratio;
        //     canvas.height = canvas.offsetHeight * ratio;
        //     canvas.getContext("2d").scale(ratio, ratio);
        // }
        //
        // window.onresize = resizeCanvas;
        // resizeCanvas();
        //
        // var signaturePad = new SignaturePad(canvas, {
        //     backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
        // });
        //
        // document.getElementById('save-png').addEventListener('click', function () {
        //     if (signaturePad.isEmpty()) {
        //         return alert("Please provide a signature first.");
        //     }
        //
        //     var data = signaturePad.toDataURL('image/png');
        //     console.log(data);
        //     window.open(data);
        // });
        //
        // document.getElementById('save-jpeg').addEventListener('click', function () {
        //     if (signaturePad.isEmpty()) {
        //         return alert("Please provide a signature first.");
        //     }
        //
        //     var data = signaturePad.toDataURL('image/jpeg');
        //     console.log(data);
        //     window.open(data);
        // });
        //
        // document.getElementById('save-svg').addEventListener('click', function () {
        //     if (signaturePad.isEmpty()) {
        //         return alert("Please provide a signature first.");
        //     }
        //
        //     var data = signaturePad.toDataURL('image/svg+xml');
        //     console.log(data);
        //     console.log(atob(data.split(',')[1]));
        //     window.open(data);
        // });
        //
        // document.getElementById('clear').addEventListener('click', function () {
        //     signaturePad.clear();
        // });
        //
        // document.getElementById('draw').addEventListener('click', function () {
        //     var ctx = canvas.getContext('2d');
        //     console.log(ctx.globalCompositeOperation);
        //     ctx.globalCompositeOperation = 'source-over'; // default value
        // });
        //
        // document.getElementById('erase').addEventListener('click', function () {
        //     var ctx = canvas.getContext('2d');
        //     ctx.globalCompositeOperation = 'destination-out';
        // });
        //
        $(function() {

            $('input[name="reservation"]').daterangepicker({

                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    format: 'D-M-Y'
                }
            });
        });

        $(document).ready(function () {
            var counter = 1;

            $("#addrow").on("click", function () {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td><input type="text" class="form-control"  name="VN_' + counter + '"/></td>';
                cols += '<td><input type="text" class="form-control" name="VI_' + counter + '"/></td>';
                cols += '<td><input type="text" class="form-control" name="VO_' + counter + '"/></td>';
                cols += '<td><input type="text" class="form-control datepicker_' + counter + '" name="ETA_Date_' + counter + '"/></td>';
                cols += '<td><input type="text" class="form-control" name="LOA_' + counter + '"/></td>';
                cols += '<td><input type="text" class="form-control" name="LP_' + counter + '"/></td>';
                cols += '<td><input type="text" class="form-control" name="NP_' + counter + '"/></td>';
                cols += '<td><select name="Line_' + counter + '" class="form-control"><option value="Select" selected="selected">Select</option><option value="HLC">HLC</option><option value="NYK">NYK</option><option value="ONE">ONE</option><option value="MOL">MOL</option><option value="KYW">KYW</option>'+ counter + '</select></td>';


                cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
                newRow.append(cols);
                $("table.order-list").append(newRow);
                counter++;
            });



            $("table.order-list").on("click", ".ibtnDel", function (event) {
                $(this).closest("tr").remove();
                counter -= 1
            });


            $(".datepicker").datepicker({ dateFormat: 'yy-mm-dd' });




        });
    </script>
@endsection
