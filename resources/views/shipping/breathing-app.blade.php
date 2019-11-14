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

                        <!-- /.card-header -->
                        <!-- form start -->
                        {!! Form::open(array('route' => 'shipping.store', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}

                        {!! csrf_field() !!}
                        <div class="card card-default">
                            <div class="card-header">
                                <h3 class="card-title">Vessel Berthing Application</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Minimal</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Disabled</label>
                                            <select class="form-control select2" disabled="disabled" style="width: 100%;">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Multiple</label>
                                            <select class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                                                <option>Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                        <div class="form-group">
                                            <label>Disabled Result</label>
                                            <select class="form-control select2" style="width: 100%;">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option disabled="disabled">California (disabled)</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->

                                <h5>Custom Color Variants</h5>
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Minimal (.select2-danger)</label>
                                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                                                <option selected="selected">Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group">
                                            <label>Multiple (.select2-purple)</label>
                                            <div class="select2-purple">
                                                <select class="select2" multiple="multiple" data-placeholder="Select a State" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                                    <option>Alabama</option>
                                                    <option>Alaska</option>
                                                    <option>California</option>
                                                    <option>Delaware</option>
                                                    <option>Tennessee</option>
                                                    <option>Texas</option>
                                                    <option>Washington</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
                                the plugin.
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
