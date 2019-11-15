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
                            <h3 class="card-title">Port of Discharge Change</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        {!! Form::open(array('route' => 'shipping.carrier-change', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}

                        {!! csrf_field() !!}

                            <br>
                            <label>Container Status*</label>
                            <div class="form-group">

                                <table id="myTable" class=" table order-list table-condensed">
                                    <thead>
                                    <tr>
                                        <th>Container No</th>
                                        <th>Size</th>
                                        <th>Type</th>
                                        <th>Requested Change From (Vessel Name)</th>
                                        <th>Requested Change To (Vessel Name)</th>

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
                                                <option value="40''">45''</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select class="form-control" name="Type_0">
                                                <option value="Select">Select</option><option value="GP">GP</option>
                                                <option value="HC">HC</option><option value="RF">RF</option>
                                                <option value="OT">OT</option><option value="FR">FR</option>
                                                <option value="HT">HT</option>
                                            </select>
                                        </td>

                                        <td>
                                            <input  type="text" name="RCF_0" id="UPD_0" class="form-control">
                                        </td>
                                        <td>
                                            <input type="text" name="RCT_0" class="form-control">
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

                cols += '<td><select name="SIZE_' + counter + '" class="form-control"><option value="Select" selected="selected">Select</option><option value="20\'\'">20\'\'</option><option value="40\'\'">40\'\'</option>' +
                    '<option value="45\'\'">45\'\'</option></select></td>';

                cols += '<td><select name="Type_' + counter + '" class="form-control">      <option value="Select">Select</option>\n' +
                    '                                                <option value="Select">Select</option><option value="GP">GP</option>\n' +
                    '                                                <option value="HC">HC</option><option value="RF">RF</option>\n' +
                    '                                                <option value="OT">OT</option><option value="FR">FR</option>\n' +
                    '                                                <option value="HT">HT</option>\n' +
                    '                                                </select></td>';


                cols += '<td><input type="text" class="form-control"  name="RCF_0' + counter + '"/></td>';
                cols += '<td><input type="text" class="form-control"  name="RCT_0' + counter + '"/></td>';

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
