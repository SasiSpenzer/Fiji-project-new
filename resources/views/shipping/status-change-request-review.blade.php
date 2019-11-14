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
                            {!! Form::open(array('route' => 'shipping.store-final', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}

                            {!! csrf_field() !!}
                            <div class="card-body">

                                <label>Vessel Details*</label>
                                <div class="input-group">


                                    {{--                                <input type="text" name="reservation" class="form-control float-right" id="reservation">--}}
                                    Vessel NUmber - : {{$Vessel_Number}}
                                    Voyage NUmber - : {{$Voyage_number}}
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
                                            <th>Container No</th>
                                            <th>Size / Type</th>
                                            <th>Original status</th>
                                            <th>Status changed</th>
                                            <th>Loading Vessel Name</th>
                                            <th>Loading Vessel Voyage Number</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(isset($DataArray))
                                            @foreach($DataArray as $eachArray)
                                                <tr>
                                                    <td>
                                                        {{$eachArray['CN']}}
                                                    </td>
                                                    <td>
                                                        {{$eachArray['SIZE']}}
                                                    </td>
                                                    <td>
                                                        {{$eachArray['OS']}}
                                                    </td>
                                                    <td>

                                                        {{$eachArray['SC']}}
                                                    </td>
                                                    <td>
                                                        {{$eachArray['LVN']}}
                                                    </td>
                                                    <td>
                                                        {{$eachArray['LVVN']}}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                        <tfoot>

                                        </tfoot>
                                    </table>
                                    <div class="wrapper">
                                        <canvas id="signature-pad" class="signature-pad" width=400 height=200></canvas>
                                    </div>

                                    {{--                                <input type="button" class="btn btn-block btn-primary " id="addrow" value="Add Row">--}}
                                </div>





                            </div>
                            <div class="ginput_container ginput_container_consent"><input name="input_53.1" id="input_14_53_1" type="checkbox" value="1" aria-required="true" aria-invalid="false"> <label class="gfield_consent_label" for="input_14_53_1">We hereby confirm that the above information are accurate and guarantee to pay all applicable charges</label><input type="hidden" name="input_53.2" value="We hereby confirm that the above information are accurate and guarantee to pay all applicable charges" class="gform_hidden"><input type="hidden" name="input_53.3" value="8" class="gform_hidden"></div>

                            <div class="card-footer">
                                <button type="button" id="finishBtn" class="btn btn-primary">Send</button>
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



                    $("#finishBtn").click(function () {

                        var data = signaturePad.toDataURL('image/jpeg');

                        $.ajax({
                            url: '{{route('statusChangeRequest')}}',
                            type: 'POST',
                            data: {'data':data, _token: $('input[name="_token"]').val()},
                            success: function (data) {

                            }
                        });

                    });




                });
            </script>
@endsection
