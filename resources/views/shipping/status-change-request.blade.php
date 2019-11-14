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
                            <h3 class="card-title">Cargo Status Change Request</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        {!! Form::open(array('route' => 'shipping.request-change', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}

                        {!! csrf_field() !!}
                        <div class="card-body">
                            {!! Form::open(array('route' => 'shipping.store', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}

                            {!! csrf_field() !!}
                            <label>Vessel name*</label>
                            <div class="input-group">


                                <input type="text" name="Vessel_Number" class="form-control float-right" id="reservation">
                                @if($errors->has('Vessel_Number'))
                                <span class="help-block">
                                            <strong>{{ $errors->first('Vessel_Number') }}</strong>
                                        </span>

                                @endif
                            </div>
                            <label>Voyage number*</label>
                            <div class="input-group">


                                <input type="text" name="Voyage_number" class="form-control float-right" id="reservation">
                                @if($errors->has('Voyage_number'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('Voyage_number') }}</strong>
                                        </span>

                                @endif
                            </div>
                            <br>
                            <label>Container Status*</label>
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
                                    <tr>
                                        <td>
                                            <input type="text" name="CN_0" class="form-control">
                                        </td>
                                        <td>
                                            <select  name="SIZE_0" class="form-control">
                                                <option value="Select">Select</option>
                                                <option value="20''">20''</option>
                                                <option value="40''">40''</option>
                                            </select>
                                        </td>
                                        <td>

                                            <select class="form-control" name="OS_0">
                                                <option value="Select">Select</option>
                                                <option value="Export">Export</option>
                                                <option value="FCL">FCL</option>
                                                <option value="Import">Import</option>
                                                <option value="Shutout">Shutout</option><option value="MT">MT</option>
                                                <option value="LCL">LCL</option><option value="TS">TS</option>
                                                <option value="CCV">CCV</option><option value="HMC">HMC</option>
                                                <option value="INCC">INCC</option>
                                            </select>
                                        </td>
                                        <td>

                                            <select name="SC_0" class="form-control">
                                                <option value="Select">Select</option>
                                                <option value="Export">Export</option>
                                                <option value="FCL">FCL</option>
                                                <option value="Import">Import</option>
                                                <option value="Shutout">Shutout</option>
                                                <option value="MT">MT</option><option value="LCL">LCL</option>
                                                <option value="TS">TS</option><option value="CCV">CCV</option>
                                                <option value="HMC">HMC</option>
                                                <option value="INCC">INCC</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input  type="text" name="LVN_0" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="LVVN_0" class="form-control">
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



        $(document).ready(function () {
            var counter = 1;

            $("#addrow").on("click", function () {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td><input type="text" class="form-control"  name="CN_' + counter + '"/></td>';

                cols += '<td><select name="SIZE_' + counter + '" class="form-control"><option value="Select" selected="selected">Select</option><option value="20\'\'">20\'\'</option><option value="40\'\'">40\'\'</option></select></td>';

                cols += '<td><select name="OS_' + counter + '" class="form-control">      <option value="Select">Select</option>\n' +
                    '                                                <option value="Export">Export</option>\n' +
                    '                                                <option value="FCL">FCL</option>\n' +
                    '                                                <option value="Import">Import</option>\n' +
                    '                                                <option value="Shutout">Shutout</option><option value="MT">MT</option>\n' +
                    '                                                <option value="LCL">LCL</option><option value="TS">TS</option>\n' +
                    '                                                <option value="CCV">CCV</option><option value="HMC">HMC</option>\n' +
                    '                                                <option value="INCC">INCC</option></select></td>';

                cols += '<td><select name="SIZE_' + counter + '" class="form-control">   <option value="Select">Select</option>\n' +
                    '                                                <option value="Export">Export</option>\n' +
                    '                                                <option value="FCL">FCL</option>\n' +
                    '                                                <option value="Import">Import</option>\n' +
                    '                                                <option value="Shutout">Shutout</option>\n' +
                    '                                                <option value="MT">MT</option><option value="LCL">LCL</option>\n' +
                    '                                                <option value="TS">TS</option><option value="CCV">CCV</option>\n' +
                    '                                                <option value="HMC">HMC</option>\n' +
                    '                                                <option value="INCC">INCC</option></select></td>';

                cols += '<td><input type="text" class="form-control"  name="LVN_' + counter + '"/></td>';
                cols += '<td><input type="text" class="form-control"  name="LVVN_' + counter + '"/></td>';
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
