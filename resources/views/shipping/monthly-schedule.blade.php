@extends('layouts.app')

@section('template_title')
    {!! trans('usersmanagement.create-new-user') !!}
@endsection

@section('template_fastload_css')
@endsection

@section('content')

    <style type="text/css">
        .wrapper {
            position: relative;
            width: 400px;
            border-color: #0a568c;
            height: 200px;
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .signature-pad {
            position: absolute;
            left: 0;
            top: 0;
            width:400px;
            height:200px;
            background-color: white;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">

                    </div>

                    <div class="card-body">
                        {!! Form::open(array('route' => 'shipping.store', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}

                            {!! csrf_field() !!}

                        <div class="input-group">
                            <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fa fa-calendar"></i>
                      </span>
                            </div>
                            <input type="text" name="reservation" class="form-control float-right" id="reservation">
                        </div>
                        <div class="form-group">
                            <label>Vessel Details*</label>
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
                                        <input type="text" name="name" class="form-control">
                                    </td>
                                    <td>
                                        <input type="mail" name="mail" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="phone" class="form-control">
                                    </td>
                                    <td>

                                        <input type="text" class="form-control" id="datepicker">
                                    </td>
                                    <td>
                                        <input type="text" name="phone" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="phone" class="form-control">
                                    </td>
                                    <td>
                                        <input type="text" name="phone" class="form-control">
                                    </td>
                                    <td>
                                        <select class="form-control"><option value="Select" selected="selected">Select</option><option value="HLC">HLC</option><option value="NYK">NYK</option><option value="ONE">ONE</option><option value="MOL">MOL</option><option value="KYW">KYW</option>
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

                        <div class="wrapper">
                            <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
                        </div>
                        <button id="save-png">Save as PNG</button>
                        <button id="save-jpeg">Save as JPEG</button>
                        <button id="save-svg">Save as SVG</button>
                        <button id="draw">Draw</button>
                        <button id="erase">Erase</button>
                        <button id="clear">Clear</button>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                        {!! Form::close() !!}
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection

@section('footer_scripts')

    <script type="text/javascript">

        var canvas = document.getElementById('signature-pad');

        // Adjust canvas coordinate space taking into account pixel ratio,
        // to make it look crisp on mobile devices.
        // This also causes canvas to be cleared.
        function resizeCanvas() {
            // When zoomed out to less than 100%, for some very strange reason,
            // some browsers report devicePixelRatio as less than 1
            // and only part of the canvas is cleared then.
            var ratio =  Math.max(window.devicePixelRatio || 1, 1);
            canvas.width = canvas.offsetWidth * ratio;
            canvas.height = canvas.offsetHeight * ratio;
            canvas.getContext("2d").scale(ratio, ratio);
        }

        window.onresize = resizeCanvas;
        resizeCanvas();

        var signaturePad = new SignaturePad(canvas, {
            backgroundColor: 'rgb(255, 255, 255)' // necessary for saving image as JPEG; can be removed is only saving as PNG or SVG
        });

        document.getElementById('save-png').addEventListener('click', function () {
            if (signaturePad.isEmpty()) {
                return alert("Please provide a signature first.");
            }

            var data = signaturePad.toDataURL('image/png');
            console.log(data);
            window.open(data);
        });

        document.getElementById('save-jpeg').addEventListener('click', function () {
            if (signaturePad.isEmpty()) {
                return alert("Please provide a signature first.");
            }

            var data = signaturePad.toDataURL('image/jpeg');
            console.log(data);
            window.open(data);
        });

        document.getElementById('save-svg').addEventListener('click', function () {
            if (signaturePad.isEmpty()) {
                return alert("Please provide a signature first.");
            }

            var data = signaturePad.toDataURL('image/svg+xml');
            console.log(data);
            console.log(atob(data.split(',')[1]));
            window.open(data);
        });

        document.getElementById('clear').addEventListener('click', function () {
            signaturePad.clear();
        });

        document.getElementById('draw').addEventListener('click', function () {
            var ctx = canvas.getContext('2d');
            console.log(ctx.globalCompositeOperation);
            ctx.globalCompositeOperation = 'source-over'; // default value
        });

        document.getElementById('erase').addEventListener('click', function () {
            var ctx = canvas.getContext('2d');
            ctx.globalCompositeOperation = 'destination-out';
        });

        $(function() {

            $('input[name="reservation"]').daterangepicker({

                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(32, 'hour'),
                locale: {
                    format: 'D-M-Y'
                }
            });
        });
    </script>
@endsection
