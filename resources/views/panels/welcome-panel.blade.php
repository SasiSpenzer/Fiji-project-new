{{--@php--}}

{{--    $levelAmount = 'level';--}}

{{--    if (Auth::User()->level() >= 2) {--}}
{{--        $levelAmount = 'levels';--}}

{{--    }--}}

{{--@endphp--}}

{{--<div class="card">--}}
{{--    <div class="card-header @role('admin', true) bg-secondary text-white @endrole">--}}

{{--        Welcome {{ Auth::user()->name }}--}}

{{--        @role('admin', true)--}}
{{--            <span class="pull-right badge badge-primary" style="margin-top:4px">--}}
{{--                Admin Access--}}
{{--            </span>--}}
{{--        @else--}}
{{--            <span class="pull-right badge badge-warning" style="margin-top:4px">--}}
{{--                User Access--}}
{{--            </span>--}}
{{--        @endrole--}}

{{--    </div>--}}
{{--    <div class="card-body">--}}
{{--        <h2 class="lead">--}}
{{--            {{ trans('auth.loggedIn') }}--}}
{{--        </h2>--}}
{{--        <div class="mb-3">--}}
{{--            <div style="background-color: #6c757d" class="card-deck">--}}
{{--                <div class="card card-inverse card-success text-center">--}}
{{--                    <div class="card-body">--}}
{{--                        <blockquote class="card-blockquote">--}}
{{--                            <h5>Agents Monthly Shipping Schedule</h5>--}}

{{--                        </blockquote>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card card-inverse card-success text-center">--}}
{{--                    <div class="card-body">--}}
{{--                        <blockquote class="card-blockquote">--}}
{{--                            <h5>Vessel Berthing Application</h5>--}}

{{--                        </blockquote>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card card-inverse card-success text-center">--}}
{{--                    <div class="card-body">--}}
{{--                        <blockquote class="card-blockquote">--}}
{{--                            <h5>Cargo Status Change Request</h5>--}}

{{--                        </blockquote>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card card-inverse card-success text-center">--}}
{{--                    <div class="card-body">--}}
{{--                        <blockquote class="card-blockquote">--}}
{{--                            <h5>Port Of Discharge Change Request</h5>--}}

{{--                        </blockquote>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <br>--}}

{{--            <div style="background-color: #6c757d" class="card-deck">--}}
{{--                <div class="card card-inverse card-success text-center">--}}
{{--                    <div class="card-body">--}}
{{--                        <blockquote class="card-blockquote">--}}
{{--                            <h5>Reefer Unplugging Request</h5>--}}

{{--                        </blockquote>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card card-inverse card-success text-center">--}}
{{--                    <div class="card-body">--}}
{{--                        <blockquote class="card-blockquote">--}}
{{--                            <h5>Domestic Reefer Plugging Request</h5>--}}

{{--                        </blockquote>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="card card-inverse card-success text-center">--}}
{{--                    <div class="card-body">--}}
{{--                        <blockquote class="card-blockquote">--}}
{{--                            <h5>Cargo Receiving Request</h5>--}}

{{--                        </blockquote>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card card-inverse card-success text-center">--}}
{{--                    <div class="card-body">--}}
{{--                        <blockquote class="card-blockquote">--}}
{{--                            <h5>On Carrier Change Request</h5>--}}

{{--                        </blockquote>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div style="background-color: #6c757d" class="card-deck">--}}
{{--            <div class="card card-inverse card-success text-center">--}}
{{--                <div class="card-body">--}}
{{--                    <blockquote class="card-blockquote">--}}
{{--                        <h5>Berthing Window application</h5>--}}

{{--                    </blockquote>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="card card-inverse card-success text-center">--}}
{{--                <div class="card-body">--}}
{{--                    <blockquote class="card-blockquote">--}}
{{--                        <h5>Vessel Deposit Form</h5>--}}

{{--                    </blockquote>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}

{{--        <hr>--}}

{{--        <p style="margin-left: 20px;">--}}
{{--            You have--}}
{{--                <strong>--}}
{{--                    @role('admin')--}}
{{--                       Admin--}}
{{--                    @endrole--}}
{{--                    @role('user')--}}
{{--                       User--}}
{{--                    @endrole--}}
{{--                </strong>--}}
{{--            Access--}}
{{--        </p>--}}

{{--        <hr>--}}

{{--        <p style="margin-left: 20px;">--}}
{{--            You have access to {{ $levelAmount }}:--}}
{{--            @level(5)--}}
{{--                <span class="badge badge-primary margin-half">5</span>--}}
{{--            @endlevel--}}

{{--            @level(4)--}}
{{--                <span class="badge badge-info margin-half">4</span>--}}
{{--            @endlevel--}}

{{--            @level(3)--}}
{{--                <span class="badge badge-success margin-half">3</span>--}}
{{--            @endlevel--}}

{{--            @level(2)--}}
{{--                <span class="badge badge-warning margin-half">2</span>--}}
{{--            @endlevel--}}

{{--            @level(1)--}}
{{--                <span class="badge badge-default margin-half">1</span>--}}
{{--            @endlevel--}}
{{--        </p>--}}

{{--        @role('admin')--}}

{{--            <hr>--}}

{{--            <p style="margin-left: 20px;">--}}
{{--                You have permissions:--}}
{{--                @permission('view.users')--}}
{{--                    <span class="badge badge-primary margin-half margin-left-0">--}}
{{--                        {{ trans('permsandroles.permissionView') }}--}}
{{--                    </span>--}}
{{--                @endpermission--}}

{{--                @permission('create.users')--}}
{{--                    <span class="badge badge-info margin-half margin-left-0">--}}
{{--                        {{ trans('permsandroles.permissionCreate') }}--}}
{{--                    </span>--}}
{{--                @endpermission--}}

{{--                @permission('edit.users')--}}
{{--                    <span class="badge badge-warning margin-half margin-left-0">--}}
{{--                        {{ trans('permsandroles.permissionEdit') }}--}}
{{--                    </span>--}}
{{--                @endpermission--}}

{{--                @permission('delete.users')--}}
{{--                    <span class="badge badge-danger margin-half margin-left-0">--}}
{{--                        {{ trans('permsandroles.permissionDelete') }}--}}
{{--                    </span>--}}
{{--                @endpermission--}}

{{--            </p>--}}

{{--        @endrole--}}

{{--    </div>--}}
{{--</div>--}}
@php

    $levelAmount = 'level';

   if (Auth::User()->level() >= 2) {
        $levelAmount = 'levels';

   }



@endphp

@role('admin')

        <div style="margin-top: 20px;" class="dashboard-header d-flex flex-column grid-margin">
            <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
                <div class="d-flex align-items-center">
                    <h4 class="mb-0 font-weight-bold">Welcome &nbsp;</h4>
                    <h3 class="mb-0 font-weight-light">{{{ isset(Auth::user()->first_name) ? Auth::user()->first_name : Auth::user()->name }}}</h3>
                </div>
            </div>
            <div class="d-md-flex align-items-center justify-content-between flex-wrap">
                <div class="d-flex align-items-center">
                    <p class="badge badge-info badge-pill" style="margin: 0px; padding-bottom: 5px;">Admin Access</p>
                </div>
            </div>
{{--            {{ Breadcrumbs::render('home') }}--}}
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6 grid-margin stretch-card">
                <div class="loader-demo-box">
                    <div class="card-body text-center">
                        <h1 class="display-4">Agents Monthly Shipping Schedule</h1>
                        <p class="text-secondary">Manage Your Organization<br>Shipping</p>
                        <a href="organization/branch"><button type="button" class="btn btn-link">Agents Monthly Shipping Schedule</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 grid-margin stretch-card">
                <div class="loader-demo-box">
                    <div class="card-body text-center">
                        <h1 class="display-4">Vessel Berthing Application</h1>
                        <p class="text-secondary">Manage Vessel Berthing</p>
                        <a href="branch-divisions"> <button type="button" class="btn btn-link">Go To Vessel Berthing Application</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 grid-margin stretch-card">
                <div class="loader-demo-box">
                    <div class="card-body text-center">
                        <h1 class="display-4"> Cargo Status Change</h1>
                        <p class="text-secondary">Manage Cargo Status Change Request</p>
                        <a href="branch-facilities"> <button type="button" class="btn btn-link">Go To Cargo Status Change Request</button></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 col-sm-6 grid-margin stretch-card">
                <div class="loader-demo-box">
                    <div class="card-body text-center">
                        <h1 class="display-4">Port Of Discharge Change Request</h1>
                        <p class="text-secondary">Manage Your Port Of Discharge Change Request</p>
                        <a href="/asset-list"> <button type="button" class="btn btn-link">Port Of Discharge Change Request</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 grid-margin stretch-card">
                <div class="loader-demo-box">
                    <div class="card-body text-center">
                        <h1 class="display-4">Reefer Unplugging Request</h1>
                        <p class="text-secondary">Manage Your<br>Reefer Unplugging Request</p>
                        <a href="/projects">  <button type="button" class="btn btn-link">Go To Reefer Unplugging Request</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 grid-margin stretch-card">
                <div class="loader-demo-box">
                    <div class="card-body text-center">
                        <h1 class="display-4">Domestic Reefer Plugging Request</h1>
                        <p class="text-secondary">Manage<br>Domestic Reefer Plugging Request</p>
                        <a href="/teams" ><button type="button" class="btn btn-link">Go To Domestic Reefer Plugging Requests</button> </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
@include("layouts.footer")
<!-- partial -->
</div>
<!-- partial -->


@endrole


@role('user')

<div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class="modal-dialog modal-full-height modal-right" role="document">


        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalLabel">Meeting Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-condensed table-responsive table-user-information">
                    <tbody>
                    <tr>

                        <input value="" type="hidden" id="hiddenMeetingIDa">
                        <input value="" type="hidden" id="hiddenvisitorIDa">
                    </tr>
                    <tr>
                        <td>Meeting Name</td>
                        <td id="meetingNamea"> Meeting Name</td>
                    </tr>
                    <tr>
                        <td>Meeting Starts</td>
                        <td id="meetingStarta">Meeting Start Time</td>
                    </tr>
                    <tr>
                        <td>Meeting Ends</td>
                        <td id="meetingEnda">end time</td>
                    </tr>

                    </tbody>
                </table>
            </div>
            &nbsp;<span id="alreadyhide" style="display: none;">Already Requested to Delay</span>
            &nbsp;<span id="alreadycancel" style="display: none;">Already Requested to Cancel</span>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{--                <button type="button" class="btn btn-primary">Save changes</button>--}}
                <button id="request_delay" type="button" class="btn btn-primary">Request delay</button>

                <button id="request_cancel" type="button" class="btn btn-primary">Can't Attend</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade right" id="notificationView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->


    <div class="modal-dialog modal-full-height modal-right" role="document">


        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalLabel">Meeting Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-condensed table-responsive table-user-information">
                    <tbody>
                    <tr>
                        Notification Details
                    </tr>
                    <tr>
                        <td>Meeting Name</td>
                        <td id="meetingName-notification"> Meeting Name</td>
                        <input type="hidden" id="hiddenMeetingID">
                        <input type="hidden" id="hiddenVisiID">
                    </tr>
                    <tr>
                        <td>Meeting Starts</td>
                        <td id="meetingStart-notification">Meeting Start Time</td>
                    </tr>
                    <tr>
                        <td>Meeting Ends</td>
                        <td id="meetingEnd-notification">end time</td>
                    </tr>
                    <tr>
                        <td>Meeting Date</td>
                        <td id="meetingDate-notification">end time</td>
                    </tr>

                    <tr id="1n">
                        <td>Visitor Name</td>
                        <td id="visitor-notification">end time</td>
                    </tr>
                    <tr id="2n">
                        <td>Visitor Email</td>
                        <td id="Email-notification">end time</td>
                    </tr>
                    <tr id="3n">
                        <td>NIC</td>
                        <td id="NIC-notification">end time</td>
                    </tr>
                    <tr id="4n">
                        <td>Organization</td>
                        <td id="Organization-notification">end time</td>
                    </tr>

                    </tbody>
                </table>
            </div>
            <div class="modal-footer justify-content-center">
                <button id="approveVisitor" type="button" class="btn btn-primary">Approve</button>
                <button id="re-register" type="button" class="btn btn-primary">Re-Register</button>
                <br>


            </div>
            <div class="modal-footer justify-content-center">
                {{--                <button id="parking" type="button" class="btn btn-primary">Approve Parking</button>--}}
                <button id="parking-to-admin" type="button" class="btn btn-primary">Refer Parking to Admin</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <div class="row-fluid user-infos cyruxx">
                    <div class="span10 offset1">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Visitor information</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row-fluid">
                                    <div id="Vimage" class="span3">
                                        <img class="img-circle"
                                             src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100"
                                             alt="User Pic">
                                    </div>
                                    <div class="span6">
                                        <strong id="name">Name Goes Here</strong><br>
                                        <table class="table table-condensed table-responsive table-user-information">
                                            <tbody>
                                            <tr>
                                                <td>User Email:</td>
                                                <td id="visitorEmail">Email Goes Here</td>
                                                <input style="display: none;" type="text" id="hiddenMeetingID">
                                                <input style="display: none;" type="text" id="hiddenvisitorID">
                                            </tr>
                                            <tr>
                                                <td>Meeting Name</td>
                                                <td id="meetingName"> Meeting Name</td>
                                            </tr>
                                            <tr>
                                                <td>Meeting Starts</td>
                                                <td id="meetingStart">Meeting Start Time</td>
                                            </tr>
                                            <tr>
                                                <td>Meeting Ends</td>
                                                <td id="meetingEnd">end time</td>
                                            </tr>
                                            <tr>
                                                <td>Card ID</td>
                                                <td id="meetingEnd"><input id="cardID" type="number" class="form-control"></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">

                                {{--                                        <button id="confirmVisitor" type="button" class="btn btn-success">Confirm Visit</button>--}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

{{--<div style="margin-top: 20px;" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}

{{--    <div class="box-part text-center">--}}

{{--        <i class="fa fa-calendar-check-o fa-3x" aria-hidden="true"></i>--}}

{{--        <div class="title">--}}
{{--            <h4>Meeting Manager</h4>--}}
{{--        </div>--}}

{{--        <div class="text">--}}
{{--            <span>Manage Meetings</span>--}}
{{--        </div>--}}

{{--        <a href="/meeting-list">Go to Meeting manager</a>--}}

{{--    </div>--}}
{{--</div>--}}
{{--<div style="margin-top: 20px;" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">--}}

{{--    <div class="box-part text-center">--}}

{{--        <i class="fa fa-male fa-3x" aria-hidden="true"></i>--}}

{{--        <div class="title">--}}
{{--            <h4>Visitor Manager</h4>--}}
{{--        </div>--}}

{{--        <div class="text">--}}
{{--            <span>Manage Visitors</span>--}}
{{--        </div>--}}

{{--        <a href="/meeting-create">Go to Visitor manager</a>--}}

{{--    </div>--}}
{{--</div>--}}
{{--<form method="POST" name="VerifyForm">--}}
{{--    {!! Form::token() !!}--}}
{{--    <div style="margin-top: 50px;" class="input-group mb-3">--}}


{{--        <div class="input-group-append">--}}
{{--            <button id="renumberBtn" class="btn btn-outline-secondary" type="button">Verify Visitor</button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</form>--}}



{{--<div id="myModal" class="modal fade" role="dialog">--}}
{{--    <div class="modal-dialog">--}}

{{--        <!-- Modal content-->--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <button type="button" class="close" data-dismiss="modal">&times;</button>--}}

{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <div class="row-fluid user-infos cyruxx">--}}
{{--                    <div class="span10 offset1">--}}
{{--                        <div class="panel panel-primary">--}}
{{--                            <div class="panel-heading">--}}
{{--                                <h3 class="panel-title">Visitor information</h3>--}}
{{--                            </div>--}}
{{--                            <div class="panel-body">--}}
{{--                                <div class="row-fluid">--}}
{{--                                    <div id="Vimage" class="span3">--}}
{{--                                        <img class="img-circle"--}}
{{--                                             src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100"--}}
{{--                                             alt="User Pic">--}}
{{--                                    </div>--}}
{{--                                    <div class="span6">--}}
{{--                                        <strong id="name">Name Goes Here</strong><br>--}}
{{--                                        <table class="table table-condensed table-responsive table-user-information">--}}
{{--                                            <tbody>--}}
{{--                                            <tr>--}}
{{--                                                <td>User Email:</td>--}}
{{--                                                <td id="visitorEmail">Email Goes Here</td>--}}
{{--                                                <input type="hidden" id="hiddenMeetingID">--}}
{{--                                                <input type="hidden" id="hiddenvisitorID">--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td>Meeting Name</td>--}}
{{--                                                <td id="meetingName"> Meeting Name</td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td>Meeting Starts</td>--}}
{{--                                                <td id="meetingStart">Meeting Start Time</td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td>Meeting Ends</td>--}}
{{--                                                <td id="meetingEnd">end time</td>--}}
{{--                                            </tr>--}}
{{--                                            <tr>--}}
{{--                                                <td>Card ID</td>--}}
{{--                                                <td id="meetingEnd"><input id="cardID" type="number" class="form-control"></td>--}}
{{--                                            </tr>--}}
{{--                                            </tbody>--}}
{{--                                        </table>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="panel-footer">--}}

{{--                                <button id="confirmVisitor" type="button" class="btn btn-success">Confirm Visit</button>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="modal-footer">--}}
{{--                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}

{{--<!-- Full Height Modal Right -->--}}
{{--<div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"--}}
{{--     aria-hidden="true">--}}

{{--    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->--}}
{{--    <div class="modal-dialog modal-full-height modal-right" role="document">--}}


{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h4 class="modal-title w-100" id="myModalLabel">Meeting Details</h4>--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <table class="table table-condensed table-responsive table-user-information">--}}
{{--                    <tbody>--}}
{{--                    <tr>--}}
{{--                        <td>User Email:</td>--}}
{{--                        <td id="visitorEmaila">Email Goes Here</td>--}}
{{--                        <input type="hidden" id="hiddenMeetingID">--}}
{{--                        <input type="hidden" id="hiddenvisitorID">--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>Meeting Name</td>--}}
{{--                        <td id="meetingNamea"> Meeting Name</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>Meeting Starts</td>--}}
{{--                        <td id="meetingStarta">Meeting Start Time</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>Meeting Ends</td>--}}
{{--                        <td id="meetingEnda">end time</td>--}}
{{--                    </tr>--}}

{{--                    </tbody>--}}
{{--                </table>--}}
{{--            </div>--}}
{{--            <div class="modal-footer justify-content-center">--}}
{{--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--<!-- Full Height Modal Right -->--}}

{{--<div class="container-fluid">--}}
{{--    <div class="row">--}}
{{--        <div class="col-sm-12">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">--}}

{{--                    <div style="display: flex; justify-content: space-between; align-items: center;">--}}

{{--                            <span id="card_title">--}}
{{--                                Show upcoming Meetings &nbsp; &nbsp;<a  href="{{ route('visitor.view-all-today') }}"  id="viewAllMeetings" type="button" class="btn btn-info">View All Today's Meetings</a>--}}
{{--                            </span>--}}
{{--                        {!! csrf_field() !!}--}}
{{--                        {!! Form::close() !!}--}}
{{--                        <div class="btn-group pull-right btn-group-xs">--}}
{{--                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                                <i class="fa fa-ellipsis-v fa-fw" aria-hidden="true"></i>--}}
{{--                                <span class="sr-only">--}}

{{--                                    </span>--}}
{{--                            </button>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <table class="table table-dark">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th scope="col">#</th>--}}
{{--                        <th scope="col">Meeting Name</th>--}}
{{--                        <th scope="col">Facility</th>--}}
{{--                        <th scope="col">Reference</th>--}}
{{--                        <th scope="col">Start Time</th>--}}
{{--                        <th scope="col">Meeting Status</th>--}}
{{--                        <th scope="col">Action</th>--}}

{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @if($meetingData)--}}
{{--                        @foreach($meetingData as $meeting)--}}
{{--                            <tr>--}}
{{--                                <td>{{$meeting->id}}</td>--}}
{{--                                <td>{{$meeting->meeting_name}}</td>--}}
{{--                                <td>{{$meeting->facility_name}}</td>--}}
{{--                                <td>{{$meeting->ref_number}}</td>--}}
{{--                                <td>{{$meeting->start}}</td>--}}
{{--                                <td align="center">--}}
{{--                                @switch($meeting->status)--}}
{{--                                    @case(1)--}}
{{--                                    <!-- 1 = in future -->--}}
{{--                                        <span class="badge badge-primary">In Future</span>--}}
{{--                                    @break--}}

{{--                                    @case(2)--}}
{{--                                    <!-- 2 = on going -->--}}
{{--                                        <span class="badge badge-warning">On going</span>--}}
{{--                                    @break--}}
{{--                                    @case(3)--}}
{{--                                    <!-- 3 = finished meetings -->--}}
{{--                                        <span class="badge badge-success">Finished</span>--}}
{{--                                        @break--}}

{{--                                        @default--}}
{{--                                        <span class="badge badge-dark">Cancelled</span>--}}
{{--                                    @endswitch--}}

{{--                                </td>--}}
{{--                                <td><a onclick="viewMeeting({{$meeting->ref_number}})" class="btn btn-success">View More</a> </td>--}}
{{--                            </tr>--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
{{--                    </tbody>--}}
{{--                </table>--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


{{--    <div class="content-wrapper">--}}
{{--        <div class="dashboard-header d-flex flex-column grid-margin">--}}
{{--            <div class="d-flex justify-content-between flex-wrap border-bottom pb-3 mb-3">--}}
{{--                <div class="d-flex align-items-center">--}}
{{--                    <h4 class="mb-0 font-weight-bold">Welcome &nbsp;</h4>--}}
{{--                    <h5 class="mb-0 font-weight-light">User Name</h5>--}}
{{--                </div>--}}
{{--                <div class="button-wrapper d-flex align-items-center mt-md-3 mt-xl-0">--}}
{{--                    <button class="create-meeting btn btn-primary btn-rounded btn-sm mr-3 d-md-block">Create Meeting</button>--}}
{{--                    <button class="btn btn-primary btn-rounded btn-sm mr-3 d-md-block">View Meetings</button>--}}
{{--                    <button class="btn btn-primary btn-rounded btn-sm mr-3 d-md-block">Show Contacts</button>--}}
{{--                    <button type="button" class="btn btn-primary btn-rounded btn-icon"><i class="mdi mdi-account-plus"></i></button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-lg-4 grid-margin stretch-card">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body text-center">--}}
{{--                        <div>--}}
{{--                            <h4>Meeting Information</h4>--}}
{{--                            <p class="text-muted mb-0">12:00 PM To 1:00 PM</p>--}}
{{--                        </div>--}}
{{--                        <p class="mt-2 card-text">--}}
{{--                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.--}}
{{--                            Aenean commodo ligula eget dolor. Lorem <br><br>--}}
{{--                        </p>--}}
{{--                        <div class="border-top pt-3">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-4">--}}
{{--                                    <h6>20</h6>--}}
{{--                                    <p class="mb-0">Total Members</p>--}}
{{--                                </div>--}}
{{--                                <div class="col-4">--}}
{{--                                    <h6>16</h6>--}}
{{--                                    <p class="mb-0">Confirmed</p>--}}
{{--                                </div>--}}
{{--                                <div class="col-4">--}}
{{--                                    <h6>4</h6>--}}
{{--                                    <p class="mb-0">Rejected</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 grid-margin stretch-card">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <h4 class="card-title">TODAY'S MEETINGS</h4>--}}
{{--                        <p class="card-description">28th<code>July 2019</code></p>--}}
{{--                        <div class="table-responsive">--}}
{{--                            <table class="table">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Start Time</th>--}}
{{--                                    <th>End Time</th>--}}
{{--                                    <th>Host</th>--}}
{{--                                    <th>Status</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                 --}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-4 grid-margin stretch-card"></div>--}}
{{--        </div>--}}
{{--        <div id="myModal" class="modal fade" role="dialog">--}}
{{--            <div class="modal-dialog">--}}

{{--                <!-- Modal content-->--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <button type="button" class="close" data-dismiss="modal">&times;</button>--}}

{{--                    </div>--}}
{{--                    <div class="modal-body">--}}
{{--                        <div class="row-fluid user-infos cyruxx">--}}
{{--                            <div class="span10 offset1">--}}
{{--                                <div class="panel panel-primary">--}}
{{--                                    <div class="panel-heading">--}}
{{--                                        <h3 class="panel-title">Visitor information</h3>--}}
{{--                                    </div>--}}
{{--                                    <div class="panel-body">--}}
{{--                                        <div class="row-fluid">--}}
{{--                                            <div id="Vimage" class="span3">--}}
{{--                                                <img class="img-circle"--}}
{{--                                                     src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100"--}}
{{--                                                     alt="User Pic">--}}
{{--                                            </div>--}}
{{--                                            <div class="span6">--}}
{{--                                                <strong id="name">Name Goes Here</strong><br>--}}
{{--                                                <table class="table table-condensed table-responsive table-user-information">--}}
{{--                                                    <tbody>--}}
{{--                                                    <tr>--}}
{{--                                                        <td>User Email:</td>--}}
{{--                                                        <td id="visitorEmail">Email Goes Here</td>--}}
{{--                                                        <input type="hidden" id="hiddenMeetingID">--}}
{{--                                                        <input type="hidden" id="hiddenvisitorID">--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td>Meeting Name</td>--}}
{{--                                                        <td id="meetingName"> Meeting Name</td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td>Meeting Starts</td>--}}
{{--                                                        <td id="meetingStart">Meeting Start Time</td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td>Meeting Ends</td>--}}
{{--                                                        <td id="meetingEnd">end time</td>--}}
{{--                                                    </tr>--}}
{{--                                                    <tr>--}}
{{--                                                        <td>Card ID</td>--}}
{{--                                                        <td id="meetingEnd"><input id="cardID" type="number" class="form-control"></td>--}}
{{--                                                    </tr>--}}
{{--                                                    </tbody>--}}
{{--                                                </table>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="panel-footer">--}}

{{--                                        <button id="confirmVisitor" type="button" class="btn btn-success">Confirm Visit</button>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-lg-4 grid-margin stretch-card">--}}
{{--                <div class="card">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12">--}}
{{--                            <div class="card-body text-center">--}}
{{--                                <div>--}}
{{--                                    <h4>Verified Meeting Information</h4>--}}
{{--                                    <p class="text-muted mb-0">12:00 PM To 1:00 PM</p>--}}
{{--                                </div>--}}
{{--                                <p class="mt-2 card-text">--}}
{{--                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.--}}
{{--                                    Aenean commodo ligula eget dolor. Lorem--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12">--}}
{{--                            <div class="card-body">--}}
{{--                                <h4 class="card-title">Visitor Details</h4>--}}
{{--                                <ul class="bullet-line-list pt-2 mb-0">--}}
{{--                                    <li>--}}
{{--                                        <h6>Visitor Name</h6>--}}
{{--                                        <p>Visitor Information </p>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <h6>Visitor Name</h6>--}}
{{--                                        <p>Visitor Information </p>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <h6>Visitor Name</h6>--}}
{{--                                        <p>Visitor Information </p>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 grid-margin stretch-card">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <h4 class="card-title">PENDING APPROVAL</h4>--}}
{{--                        <p class="card-description">28th<code>July 2019</code></p>--}}
{{--                        <div class="table-responsive">--}}
{{--                            <table class="table">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Host</th>--}}
{{--                                    <th>Reference</th>--}}
{{--                                    <th>Status</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td>Ajeewan</td>--}}
{{--                                    <td>7751</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-info">&nbsp;&nbsp;&nbsp; Pending &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw ">Resend</button></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Sasitha</td>--}}
{{--                                    <td>7752</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-info">&nbsp;&nbsp;&nbsp; Pending &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw">Resend</button></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Ajeewan</td>--}}
{{--                                    <td>7753</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-info">&nbsp;&nbsp;&nbsp; Pending &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw">Resend</button></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Sasitha</td>--}}
{{--                                    <td>7754</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-info">&nbsp;&nbsp;&nbsp; Pending &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw">Resend</button></td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-4 grid-margin stretch-card"></div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <form method="POST" name="VerifyForm">--}}
{{--                {!! Form::token() !!}--}}
{{--            <div class="col-lg-4 grid-margin stretch-card"></div>--}}
{{--            <div class="col-lg-4 grid-margin stretch-card">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <h4 class="card-title">VERIFY YOUR MEETING</h4>--}}
{{--                        <div class="add-items d-flex pt-2">--}}
{{--
{{--                            <button id="renumberBtn" class="add btn btn-primary font-weight-bold todo-list-add-btn">Verify</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-4 grid-margin stretch-card"></div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!-- content-wrapper ends -->--}}
{{--    <!-- partial:partials/_footer.html -->--}}
{{--    <footer class="footer">--}}
{{--        <div class="d-sm-flex justify-content-center justify-content-sm-between">--}}
{{--            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="#" target="_blank" class="text-muted">Traccular</a>. All rights reserved.</span>--}}
{{--        </div>--}}
{{--    </footer>--}}
<!-- partial -->

{{--<div class="main-panel">--}}
{{--    <div class="content-wrapper">--}}
{{--        <div class="dashboard-header d-flex flex-column grid-margin">--}}
{{--            <div class="d-flex justify-content-between flex-wrap border-bottom pb-3">--}}

{{--                <div class="d-flex align-items-center">--}}
{{--                    <div class="dropdown">--}}
{{--                        <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Next Two Hour Meetings</button>--}}
{{--                        <div class="dropdown-menu sho" aria-labelledby="dropdownMenuButton1">--}}
{{--                            <h6 class="dropdown-header">You Meeting Details</h6>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item" href="#">Next One Hour Meetings</a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item" href="#">Next Two Hour Meetings</a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item" href="#">Next Three Hour Meetings</a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item" href="#">Next Four Hour Meetings</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="d-flex align-items-center">--}}
{{--                    <h5 class="mb-0 font-weight-bold pr-3">VERIFY YOUR MEETING</h5>--}}
{{--                    <div class="add-items d-flex pt-2">--}}
{{--                        <input type="text" class="form-control todo-list-input mr-1" placeholder="Meeting Ref. Number">--}}
{{--                        <button class="btn btn-rounded btn-info font-weight-bold mr-5 todo-list-add-btn">&nbsp;Verify&nbsp;</button>--}}
{{--                    </div>--}}
{{--                    <button class="create-meeting btn btn-primary btn-rounded mr-3 d-md-block" data-toggle="modal" data-target="#createMeetingModal">Create Meeting</button>--}}
{{--                    <div class="modal fade" id="createMeetingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-lg" role="document">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h5 class="modal-title" id="exampleModalLabel">CREATE MEETING</h5>--}}
{{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                        <span aria-hidden="true">&times;</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    <p class="mb-0">Modal body text goes here.</p>--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button type="button" class="btn btn-info btn-rounded">Save</button>--}}
{{--                                    <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button class="create-meeting btn btn-primary btn-rounded mr-3 d-md-block" data-toggle="modal" data-target="#viewMeetingModal">View Meetings</button>--}}
{{--                    <div class="modal fade" id="viewMeetingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-lg" role="document">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h5 class="modal-title" id="exampleModalLabel">VIEW MEETINGS</h5>--}}
{{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                        <span aria-hidden="true">&times;</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    <p class="mb-0">Modal body text goes here.</p>--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button type="button" class="btn btn-info btn-rounded">Save</button>--}}
{{--                                    <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button class="create-meeting btn btn-primary btn-rounded mr-3 d-md-block" data-toggle="modal" data-target="#showContactsModal">Show Contacts</button>--}}
{{--                    <div class="modal fade" id="showContactsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-lg" role="document">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h5 class="modal-title" id="exampleModalLabel">SHOW CONTACTS</h5>--}}
{{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                        <span aria-hidden="true">&times;</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    <p class="mb-0">Modal body text goes here.</p>--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button type="button" class="btn btn-info btn-rounded">Save</button>--}}
{{--                                    <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button class="create-meeting btn btn-primary btn-rounded mr-3 d-md-block" data-toggle="modal" data-target="#addContactModal">Add Contact</button>--}}
{{--                    <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-lg" role="document">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h5 class="modal-title" id="exampleModalLabel">ADD CONTACT</h5>--}}
{{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                        <span aria-hidden="true">&times;</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    <p class="mb-0">Modal body text goes here.</p>--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button type="button" class="btn btn-info btn-rounded">Save</button>--}}
{{--                                    <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-xl-1 grid-margin stretch-card"></div>--}}
{{--            <div class="col-lg-5 grid-margin stretch-card">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body text-center">--}}
{{--                        <div>--}}
{{--                            <h4 class="card-title">MEETING INFORMATION</h4>--}}
{{--                            <p class="text-muted mb-0">12:00 PM To 1:00 PM</p>--}}
{{--                        </div>--}}
{{--                        <p class="mt-2 card-text">--}}
{{--                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.--}}
{{--                            Aenean commodo ligula eget dolor. Lorem <br><br>--}}
{{--                        </p>--}}
{{--                        <div class="border-top pt-3">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-4">--}}
{{--                                    <h6>20</h6>--}}
{{--                                    <p class="mb-0">Total Members</p>--}}
{{--                                </div>--}}
{{--                                <div class="col-4">--}}
{{--                                    <h6>16</h6>--}}
{{--                                    <p class="mb-0">Confirmed</p>--}}
{{--                                </div>--}}
{{--                                <div class="col-4">--}}
{{--                                    <h6>4</h6>--}}
{{--                                    <p class="mb-0">Rejected</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-5 grid-margin stretch-card">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <h4 class="card-title">TODAY'S MEETINGS</h4>--}}
{{--                        <p class="card-description">28th<code>July 2019</code></p>--}}
{{--                        <div class="table-responsive">--}}
{{--                            <table class="table">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Start Time</th>--}}
{{--                                    <th>End Time</th>--}}
{{--                                    <th>Host</th>--}}
{{--                                    <th>Status</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td>12:00 PM</td>--}}
{{--                                    <td>1:00 AM</td>--}}
{{--                                    <td>Ajeewan</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-danger">&nbsp;&nbsp;&nbsp; Ongoing &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw">More</button></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>12:30 PM</td>--}}
{{--                                    <td>1:30 PM</td>--}}
{{--                                    <td>Sasitha</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-danger">&nbsp;&nbsp;&nbsp; Ongoing &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw">More</button></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>1:30 PM</td>--}}
{{--                                    <td>2:00 PM</td>--}}
{{--                                    <td>Ajeewan</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-info">&nbsp;&nbsp;&nbsp; Pending &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw">More</button></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>1:30 PM</td>--}}
{{--                                    <td>2:00 PM</td>--}}
{{--                                    <td>Ajeewan</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-info">&nbsp;&nbsp;&nbsp; Pending &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw">More</button></td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-1 grid-margin stretch-card"></div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-xl-1 grid-margin stretch-card"></div>--}}
{{--            <div class="col-lg-5 grid-margin stretch-card">--}}
{{--                <div class="card">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12">--}}
{{--                            <div class="card-body text-center">--}}
{{--                                <div>--}}
{{--                                    <h4 class="card-title">VERIFIED MEETING INFORMATION</h4>--}}
{{--                                    <p class="text-muted mb-0">12:00 PM To 1:00 PM</p>--}}
{{--                                </div>--}}
{{--                                <p class="mt-2 card-text">--}}
{{--                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.--}}
{{--                                    Aenean commodo ligula eget dolor. Lorem--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12">--}}
{{--                            <div class="card-body">--}}
{{--                                <h4 class="card-title">Visitor Details</h4>--}}
{{--                                <ul class="bullet-line-list pt-2 mb-0">--}}
{{--                                    <li>--}}
{{--                                        <h6>Visitor Name</h6>--}}
{{--                                        <p>Visitor Information </p>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <h6>Visitor Name</h6>--}}
{{--                                        <p>Visitor Information </p>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <h6>Visitor Name</h6>--}}
{{--                                        <p>Visitor Information </p>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-5 grid-margin stretch-card">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <h4 class="card-title">PENDING APPROVAL</h4>--}}
{{--                        <p class="card-description">28th<code>July 2019</code></p>--}}
{{--                        <div class="table-responsive">--}}
{{--                            <table class="table">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Host</th>--}}
{{--                                    <th>Reference</th>--}}
{{--                                    <th>Status</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td>Ajeewan</td>--}}
{{--                                    <td>7751</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-info">&nbsp;&nbsp;&nbsp; Pending &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw ">Resend</button></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Sasitha</td>--}}
{{--                                    <td>7752</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-info">&nbsp;&nbsp;&nbsp; Pending &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw">Resend</button></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Ajeewan</td>--}}
{{--                                    <td>7753</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-info">&nbsp;&nbsp;&nbsp; Pending &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw">Resend</button></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Sasitha</td>--}}
{{--                                    <td>7754</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-info">&nbsp;&nbsp;&nbsp; Pending &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw">Resend</button></td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-1 grid-margin stretch-card"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- content-wrapper ends -->--}}
{{--    <!-- partial:partials/_footer.html -->--}}
{{--    <footer class="footer">--}}
{{--        <div class="d-sm-flex justify-content-center justify-content-sm-between">--}}
{{--            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="#" target="_blank" class="text-muted">Traccular</a>.  </span>--}}
{{--        </div>--}}
{{--    </footer>--}}
{{--    <!-- partial -->--}}
{{--</div>--}}

{{--   new changes apply old commented in 08.08.2019 by Spenzer--}}

{{--<div class="main-panel col-lg-12">--}}
{{--    <div class="content-wrapper">--}}
{{--        <div class="dashboard-header d-flex flex-column grid-margin">--}}
{{--            <div class="d-flex justify-content-between flex-wrap border-bottom pb-3">--}}

{{--                <div class="d-flex align-items-center">--}}
{{--                    <div class="dropdown">--}}
{{--                        <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Next Two Hour Meetings</button>--}}
{{--                        <div class="dropdown-menu sho" aria-labelledby="dropdownMenuButton1">--}}
{{--                            <h6 class="dropdown-header">You Meeting Details</h6>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item" href="#">Next One Hour Meetings</a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item" href="#">Next Two Hour Meetings</a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item" href="#">Next Three Hour Meetings</a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item" href="#">Next Four Hour Meetings</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="d-flex align-items-center">--}}
{{--                    <h5 class="mb-0 font-weight-bold pr-3">VERIFY YOUR MEETING</h5>--}}
{{--                    <div class="add-items d-flex pt-2">--}}
{{--                        <input type="text" class="form-control todo-list-input mr-1" placeholder="Meeting Ref. Number">--}}
{{--                        <button class="btn btn-rounded btn-info font-weight-bold mr-5 todo-list-add-btn">&nbsp;Verify&nbsp;</button>--}}
{{--                    </div>--}}
{{--                    <button class="create-meeting btn btn-primary btn-rounded mr-3 d-md-block" data-toggle="modal" data-target="#createMeetingModal">Create Meeting</button>--}}
{{--                    <div class="modal fade" id="createMeetingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-lg" role="document">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h5 class="modal-title" id="exampleModalLabel">CREATE MEETING</h5>--}}
{{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                        <span aria-hidden="true">&times;</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    <p class="mb-0">Modal body text goes here.</p>--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button type="button" class="btn btn-info btn-rounded">Save</button>--}}
{{--                                    <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button class="create-meeting btn btn-primary btn-rounded mr-3 d-md-block" data-toggle="modal" data-target="#viewMeetingModal">View Meetings</button>--}}
{{--                    <div class="modal fade" id="viewMeetingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-lg" role="document">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h5 class="modal-title" id="exampleModalLabel">VIEW MEETINGS</h5>--}}
{{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                        <span aria-hidden="true">&times;</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    <p class="mb-0">Modal body text goes here.</p>--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button type="button" class="btn btn-info btn-rounded">Save</button>--}}
{{--                                    <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button class="create-meeting btn btn-primary btn-rounded mr-3 d-md-block" data-toggle="modal" data-target="#showContactsModal">Show Contacts</button>--}}
{{--                    <div class="modal fade" id="showContactsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-lg" role="document">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h5 class="modal-title" id="exampleModalLabel">SHOW CONTACTS</h5>--}}
{{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                        <span aria-hidden="true">&times;</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    <p class="mb-0">Modal body text goes here.</p>--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button type="button" class="btn btn-info btn-rounded">Save</button>--}}
{{--                                    <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button class="create-meeting btn btn-primary btn-rounded mr-3 d-md-block" data-toggle="modal" data-target="#addContactModal">Add Contact</button>--}}
{{--                    <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                        <div class="modal-dialog modal-lg" role="document">--}}
{{--                            <div class="modal-content">--}}
{{--                                <div class="modal-header">--}}
{{--                                    <h5 class="modal-title" id="exampleModalLabel">ADD CONTACT</h5>--}}
{{--                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                        <span aria-hidden="true">&times;</span>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                                <div class="modal-body">--}}
{{--                                    <p class="mb-0">Modal body text goes here.</p>--}}
{{--                                </div>--}}
{{--                                <div class="modal-footer">--}}
{{--                                    <button type="button" class="btn btn-info btn-rounded">Save</button>--}}
{{--                                    <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-xl-1 grid-margin stretch-card"></div>--}}
{{--            <div class="col-lg-5 grid-margin stretch-card">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body text-center">--}}
{{--                        <div>--}}
{{--                            <h4 class="card-title">MEETING INFORMATION</h4>--}}
{{--                            <p class="text-muted mb-0">12:00 PM To 1:00 PM</p>--}}
{{--                        </div>--}}
{{--                        <p class="mt-2 card-text">--}}
{{--                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.--}}
{{--                            Aenean commodo ligula eget dolor. Lorem <br><br>--}}
{{--                        </p>--}}
{{--                        <div class="border-top pt-3">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-4">--}}
{{--                                    <h6>20</h6>--}}
{{--                                    <p class="mb-0">Total Members</p>--}}
{{--                                </div>--}}
{{--                                <div class="col-4">--}}
{{--                                    <h6>16</h6>--}}
{{--                                    <p class="mb-0">Confirmed</p>--}}
{{--                                </div>--}}
{{--                                <div class="col-4">--}}
{{--                                    <h6>4</h6>--}}
{{--                                    <p class="mb-0">Rejected</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-5 grid-margin stretch-card">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <h4 class="card-title">TODAY'S MEETINGS</h4>--}}
{{--                        <p class="card-description">28th<code>July 2019</code></p>--}}
{{--                        <div class="table-responsive">--}}
{{--                            <table class="table">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Start Time</th>--}}
{{--                                    <th>End Time</th>--}}
{{--                                    <th>Host</th>--}}
{{--                                    <th>Status</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td>12:00 PM</td>--}}
{{--                                    <td>1:00 AM</td>--}}
{{--                                    <td>Ajeewan</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-danger">&nbsp;&nbsp;&nbsp; Ongoing &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw">More</button></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>12:30 PM</td>--}}
{{--                                    <td>1:30 PM</td>--}}
{{--                                    <td>Sasitha</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-danger">&nbsp;&nbsp;&nbsp; Ongoing &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw">More</button></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>1:30 PM</td>--}}
{{--                                    <td>2:00 PM</td>--}}
{{--                                    <td>Ajeewan</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-info">&nbsp;&nbsp;&nbsp; Pending &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw">More</button></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>1:30 PM</td>--}}
{{--                                    <td>2:00 PM</td>--}}
{{--                                    <td>Ajeewan</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-info">&nbsp;&nbsp;&nbsp; Pending &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw">More</button></td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-1 grid-margin stretch-card"></div>--}}
{{--        </div>--}}

{{--        <div class="row">--}}
{{--            <div class="col-xl-1 grid-margin stretch-card"></div>--}}
{{--            <div class="col-lg-5 grid-margin stretch-card">--}}
{{--                <div class="card">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12">--}}
{{--                            <div class="card-body text-center">--}}
{{--                                <div>--}}
{{--                                    <h4 class="card-title">VERIFIED MEETING INFORMATION</h4>--}}
{{--                                    <p class="text-muted mb-0">12:00 PM To 1:00 PM</p>--}}
{{--                                </div>--}}
{{--                                <p class="mt-2 card-text">--}}
{{--                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.--}}
{{--                                    Aenean commodo ligula eget dolor. Lorem--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm-12">--}}
{{--                            <div class="card-body">--}}
{{--                                <h4 class="card-title">Visitor Details</h4>--}}
{{--                                <ul class="bullet-line-list pt-2 mb-0">--}}
{{--                                    <li>--}}
{{--                                        <h6>Visitor Name</h6>--}}
{{--                                        <p>Visitor Information </p>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <h6>Visitor Name</h6>--}}
{{--                                        <p>Visitor Information </p>--}}
{{--                                    </li>--}}
{{--                                    <li>--}}
{{--                                        <h6>Visitor Name</h6>--}}
{{--                                        <p>Visitor Information </p>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-5 grid-margin stretch-card">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <h4 class="card-title">PENDING APPROVAL</h4>--}}
{{--                        <p class="card-description">28th<code>July 2019</code></p>--}}
{{--                        <div class="table-responsive">--}}
{{--                            <table class="table">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th>Host</th>--}}
{{--                                    <th>Reference</th>--}}
{{--                                    <th>Status</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <td>Ajeewan</td>--}}
{{--                                    <td>7751</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-info">&nbsp;&nbsp;&nbsp; Pending &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw ">Resend</button></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Sasitha</td>--}}
{{--                                    <td>7752</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-info">&nbsp;&nbsp;&nbsp; Pending &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw">Resend</button></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Ajeewan</td>--}}
{{--                                    <td>7753</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-info">&nbsp;&nbsp;&nbsp; Pending &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw">Resend</button></td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <td>Sasitha</td>--}}
{{--                                    <td>7754</td>--}}
{{--                                    <td class="d-flex align-items-center justify-content-between"><label class="badge badge-info">&nbsp;&nbsp;&nbsp; Pending &nbsp;&nbsp;&nbsp;</label><button class="btn btn-link btn-fw">Resend</button></td>--}}
{{--                                </tr>--}}
{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-xl-1 grid-margin stretch-card"></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- content-wrapper ends -->--}}
{{--    <!-- partial:partials/_footer.html -->--}}
{{--    <footer class="footer">--}}
{{--        <div class="d-sm-flex justify-content-center justify-content-sm-between">--}}
{{--            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2019 <a href="#" target="_blank" class="text-muted">Traccular</a>. All rights reserved.</span>--}}
{{--        </div>--}}
{{--    </footer>--}}
{{--    <!-- partial -->--}}
{{--</div>--}}
{{--</div>--}}

<div class="main-panel">
    <div class="content-wrapper">
        <div class="dashboard-header d-flex flex-column grid-margin">
            <div class="d-flex justify-content-between flex-wrap border-bottom pb-3">

                {{--                <div class="d-flex align-items-center">--}}
                {{--                    <div class="dropdown">--}}
                {{--                        <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Next Two Hour Meetings</button>--}}
                {{--                        <div class="dropdown-menu sho" aria-labelledby="dropdownMenuButton1">--}}

                {{--                            @if($meetingData)--}}
                {{--                                @if(isset($meetingData[0]->meeting_name))--}}
                {{--                                @foreach($meetingData as $meetingsTwo)--}}
                {{--                                    <h6 class="dropdown-header">{{$meetingsTwo->meeting_name}}</h6>--}}
                {{--                                    <div class="dropdown-divider"></div>--}}
                {{--                                @endforeach--}}
                {{--                                    @else--}}
                {{--                                    <h6 class="dropdown-header">No Meetings</h6>--}}
                {{--                                    <div class="dropdown-divider"></div>--}}
                {{--                                @endif--}}
                {{--                            @endif--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <div>--}}
                {{--                    <a class="btn btn-primary btn-rounded" href="/home-view-all-today">View All Meetings</a>--}}
                {{--                </div>--}}

                <div id="create-meeting-button">
                    <button class="create-meeting btn btn-danger btn-lg btn-rounded" data-toggle="modal" data-target="#createMeetingModal"><i class="mdi mdi-access-point-network"></i></button>
                </div>
                <div class="modal fade" id="createMeetingModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content" style="width: 80%!important;position: absolute;left: 8%">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">CREATE MEETING</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            {{--                                            <h4 class="card-title">CREATE MEETING</h4>--}}


                                            {!! Form::open(array('route' => 'meeting-create','id'=>'meetingForm', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation forms-sample')) !!}

                                            {!! csrf_field() !!}


                                            <div class="form-group">
                                                <label for="exampleInputMeetingName">Meeting Subject</label>
                                                {{--                                <input type="text" class="form-control" id="exampleInputMeetingName" placeholder="Meeting Name">--}}
                                                {!! Form::text('meeting_name','', array('id' => 'meeting_name', 'class' => 'form-control', 'placeholder' => trans('forms.meeting_name'))) !!}

                                                @if($errors->has('meeting_name'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('meeting_name') }}</strong>
                                    </span>
                                                @endif

                                            </div>
                                            <div class="form-group">
                                                <label for="exampleSelectFacility">Facility</label>
                                                <select class="custom-select form-control" name="facility_id" id="facility_id">
                                                    <option value="">Select Location</option>
                                                    @if($facilities)
                                                        @foreach($facilities as $facility)
                                                            <option value="{{$facility->id}}">{{$facility->facility_name}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>

                                            </div>
                                            @if($errors->has('facility_id'))
                                                <span class="help-block">
                            <strong>{{ $errors->first('facility_id') }}</strong>
                            </span>
                                            @endif

                                            {{--                                            <div class="form-group">--}}
                                            {{--                                                <label for="exampleSelectFacility">Project</label>--}}
                                            {{--                                                <select class="custom-select form-control" name="project_id" id="project_id">--}}

                                            {{--                                                    @if(session('projectId'))--}}
                                            {{--                                                        <option value="{{ Session::get('projectId')}}">{{ Session::get('projectName')}}</option>--}}

                                            {{--                                                    @else--}}
                                            {{--                                                        <option value="">Select Project</option>--}}
                                            {{--                                                        @if($projects)--}}
                                            {{--                                                            @foreach($projects as $project)--}}
                                            {{--                                                                <option value="{{$project->id}}">{{$project->project_name}}</option>--}}
                                            {{--                                                            @endforeach--}}
                                            {{--                                                        @endif--}}
                                            {{--                                                    @endif--}}
                                            {{--                                                </select>--}}

                                            {{--                                            </div>--}}

                                            <div class="form-group">
                                                <label for="exampleSelectFacility">Host</label>
                                                <select class="custom-select form-control" name="arranged_by" id="arranged_by">

                                                    @if($users)
                                                        @foreach($users as $user)
                                                            <option value="{{$user->id}}">{{$user->first_name}} - {{$user->last_name}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                @if($errors->has('arranged_by'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('arranged_by') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleSelectFacility">Purpose</label>
                                                <select class="custom-select form-control" name="purpose" id="purpose">
                                                    <option value="">Select Purpose</option>
                                                    <option value="SUPPLY">SUPPLY</option>
                                                    <option value="MEETING">MEETING</option>
                                                    <option value="WALKIN">WALK IN</option>

                                                </select>
                                                @if($errors->has('purpose'))
                                                    <span class="help-block">
                            <strong>{{ $errors->first('purpose') }}</strong>
                            </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputStartTime">Meeting Date</label>
                                                {{--                                <input type="text" class="form-control" id="exampleInputStartTime" placeholder="Start Time">--}}
                                                {!! Form::text('date','', array('id' => 'date', 'class' => 'form-control', 'placeholder' => 'Meeting Date')) !!}


                                                @if($errors->has('date'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputStartTime">Start Time</label>
                                                {{--                                <input type="text" class="form-control" id="exampleInputStartTime" placeholder="Start Time">--}}
                                                {!! Form::text('start','', array('id' => 'start', 'class' => 'form-control', 'placeholder' => trans('forms.start'))) !!}


                                                @if($errors->has('start'))
                                                    <span class="help-block">
                                            <strong>{{ $errors->first('start') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEndTime">End Time</label>
                                                {{--                                <input type="text" class="form-control" id="exampleInputEndTime" placeholder="End Time">--}}
                                                {!! Form::text('end','', array('id' => 'end', 'class' => 'form-control', 'placeholder' => trans('forms.end'))) !!}
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPartners">Internal Guests</label>
                                                {{--                                <input type="text" class="form-control" id="exampleInputPartners" placeholder="">--}}
                                                <select  multiple name="users[]" id="partnerSelect" class="custom-select form-control" multiple="multiple">
                                                    @if($users)
                                                        @foreach($users as $user)
                                                            <option value="{{$user->id}}">{{$user->first_name}} - {{$user->last_name}}</option>
                                                        @endforeach
                                                    @endif

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputVisitors">External Guests</label>
                                                {{--                                <input type="text" class="form-control" id="exampleInputVisitors" placeholder="">--}}
                                                <select multiple name="visitors[]" id="selectVisitors" class="form-control" multiple="multiple">--}}
                                                    @if($visitorsdropDown)
                                                        @foreach($visitorsdropDown as $visitor)
                                                            <option value="{{$visitor->id}}">{{$visitor->first_name}} - {{$visitor->email}}</option>
                                                        @endforeach
                                                    @endif

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleSelectAssets">Meeting Assets</label>
                                                <select multiple name="assets[]" id="assetsSelect" class="form-control" multiple="multiple">--}}
                                                    @if($assets)
                                                        @foreach($assets as $asset)
                                                            <option value="{{$asset->id}}">{{$asset->asset_name}}</option>
                                                        @endforeach
                                                    @endif

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleComments">Description</label>
                                                <textarea class="form-control" id="exampleComments" rows="4"></textarea>
                                            </div>
                                            {{--                                            <div class="form-group">--}}
                                            {{--                                                <label for="exampleComments">Send Link</label>--}}
                                            {{--                                                <input  type="email" name="recipient_email" value="" id="recipient_email" class="form-control">--}}
                                            {{--                                                <input type="hidden" name="something" id="hiddenArray">--}}
                                            {{--                                            </div>--}}
                                            <button type="submit" class="btn btn-primary btn-rounded mr-2">&nbsp; &nbsp; &nbsp; &nbsp; Save &nbsp; &nbsp; &nbsp; &nbsp;</button>
                                            <button class="btn btn-light btn-rounded">&nbsp; &nbsp; &nbsp; &nbsp; Cancel &nbsp; &nbsp; &nbsp; &nbsp;</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                {{--                                <button type="button" class="btn btn-info btn-rounded">Save</button>--}}
                                {{--                                <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 60px;" id="add-contact-button">
                    <button class="create-meeting btn btn-danger btn-lg btn-rounded" data-toggle="modal" data-target="#addContactModal"><i class="mdi mdi-account-plus"></i></button>
                </div>
                <div  class="modal fade" id="addContactModal" tabindex="2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content" style="width: 70%!important;position: absolute;left: 15%">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ADD CONTACT</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div style="widows: 100%!important;" class="col-lg-10 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">

                                            <p class="card-description"><?php echo date('dS') ; ?><code><?php echo date('M') ; ?> <?php echo date('Y') ; ?></code></p>
                                            {!! Form::open(array('route' => 'visitor.store','enctype'=>"multipart/form-data", 'method' => 'POST', 'role' => 'form','id'=>'visiform', 'class' => 'needs-validation')) !!}

                                            {!! csrf_field() !!}
                                            <div class="form-group">
                                                <label for="exampleInputFirstName">First Name</label>
                                                {{--                    <input type="text" class="form-control" id="exampleInputFirstName" placeholder="First Name">--}}
                                                {!! Form::text('first_name','', array('id' => 'first_name', 'class' => 'form-control', 'placeholder' => trans('forms.first_name'))) !!}
                                                @if($errors->has('first_name'))
                                                    <span style="color: red" class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                                                @endif

                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputFirstName">Last Name</label>
                                                {!! Form::text('last_name','', array('id' => 'last_name', 'class' => 'form-control', 'placeholder' => trans('forms.last_name'))) !!}
                                                {{--                    <input type="text" class="form-control" id="exampleInputLastName" placeholder="Last Name">--}}
                                                @if($errors->has('last_name'))
                                                    <span style="color: red" class="help-block">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputOrganization">Select Vendor</label>
                                                {{--                    <input type="text" class="form-control" id="exampleInputOrganization" placeholder="Organization">--}}
                                                {{--                    {!! Form::text('organization','', array('id' => 'organization', 'class' => 'form-control', 'placeholder' => trans('forms.organization'))) !!}--}}

                                                <select class="custom-select form-control" name="organization" id="organization">
                                                    <option value="">Select Vendor</option>
                                                    @if($vendorData)
                                                        @foreach($vendorData as $vendor)
                                                            <option value="{{ $vendor->id }}">{{ $vendor->business_name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                @if($errors->has('organization'))
                                                    <span style="color: red" class="help-block">
                        <strong>{{ $errors->first('organization') }}</strong>
                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputEmail">Email</label>
                                                {{--                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">--}}
                                                {!! Form::text('email','', array('id' => 'email', 'class' => 'form-control', 'placeholder' => trans('forms.email'))) !!}
                                                @if($errors->has('email'))
                                                    <span style="color: red" class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputContactNumber">Contact Number</label>
                                                {{--                    <input type="text" class="form-control" id="exampleInputContactNumber" placeholder="Contact Number">--}}
                                                {!! Form::text('contact_number','', array('id' => 'contact_number', 'class' => 'form-control', 'placeholder' => trans('forms.contact_number'))) !!}
                                                @if($errors->has('contact_number'))
                                                    <span style="color: red" class="help-block">
                        <strong>{{ $errors->first('contact_number') }}</strong>
                    </span>
                                                @endif
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputNIC">NIC Number | Passport </label>
                                                {{--                    <input type="text" class="form-control" id="exampleInputNIC" placeholder="NIC Number">--}}
                                                {!! Form::number('nic','', array('id' => 'nic', 'class' => 'form-control', 'placeholder' => trans('forms.nic'))) !!}
                                                @if($errors->has('nic'))
                                                    <span style="color: red" class="help-block">
                        <strong>{{ $errors->first('nic') }}</strong>
                    </span>
                                                @endif
                                            </div>

                                            {{--                <div class="form-check form-check-flat form-check-primary">--}}
                                            {{--                    <label class="form-check-label">On Appointment--}}
                                            {{--                        <input id="onAppointment" name="onAppointment" type="checkbox" value="1">--}}
                                            {{--                        <i class="input-helper"></i></label>--}}
                                            {{--                </div>--}}
                                            {{--                <div class="form-group">--}}
                                            {{--                    <label for="exampleSelectTeam">Team</label>--}}

                                            {{--                    <select class="custom-select form-control" name="team" id="team">--}}
                                            {{--                        <option value="">Select Team</option>--}}
                                            {{--                        @if($teamDetails)--}}
                                            {{--                            @foreach($teamDetails as $team)--}}
                                            {{--                                <option value="{{ $team->id }}">{{ $team->team_name }}</option>--}}
                                            {{--                            @endforeach--}}
                                            {{--                        @endif--}}
                                            {{--                    </select>--}}
                                            {{--                    @if($errors->has('team'))--}}
                                            {{--                    <span style="color: red" class="help-block">--}}
                                            {{--                        <strong>{{ $errors->first('team') }}</strong>--}}
                                            {{--                </span>--}}
                                            {{--                    @endif--}}
                                            {{--                </div>--}}

                                            {{--                <div class="form-group">--}}
                                            {{--                    <label for="exampleSelectCard">Card</label>--}}
                                            {{--                    <select class="form-control" id="exampleSelectCard">--}}
                                            {{--                        <option>Select From Available Cards</option>--}}
                                            {{--                        <option>Card Name</option>--}}
                                            {{--                        <option>Card Name</option>--}}
                                            {{--                        <option>Card Name</option>--}}
                                            {{--                        <option>Card Name</option>--}}
                                            {{--                    </select>--}}

                                            {{--                    <select class="custom-select form-control" name="card" id="card">--}}
                                            {{--                        <option value="">Select From Available Cards</option>--}}
                                            {{--                    </select>--}}
                                            {{--                </div>--}}
                                            {{--                <div class="form-group">--}}
                                            {{--                    <label for="exampleSelectPurpose">Purpose</label>--}}
                                            {{--                    <select class="form-control" id="exampleSelectPurpose">--}}
                                            {{--                        <option>Select Purpose</option>--}}
                                            {{--                        <option>Purpose Name</option>--}}
                                            {{--                        <option>Purpose Name</option>--}}
                                            {{--                        <option>Purpose Name</option>--}}
                                            {{--                        <option>Purpose Name</option>--}}
                                            {{--                        <option>Purpose Name</option>--}}
                                            {{--                    </select>--}}
                                            {{--                    <select class="custom-select form-control" name="purpose" id="purpose">--}}
                                            {{--                        <option value="">Select Purpose</option>--}}
                                            {{--                        <option value="SUPPLY">SUPPLY</option>--}}
                                            {{--                        <option value="MEETING">MEETING</option>--}}
                                            {{--                        <option value="WALKIN">WALK IN</option>--}}
                                            {{--                    </select>--}}
                                            {{--                </div>--}}
                                            {{--            @if($errors->has('purpose'))--}}
                                            {{--                <span class="help-block">--}}
                                            {{--                        <strong>{{ $errors->first('purpose') }}</strong>--}}
                                            {{--                    </span>--}}
                                            {{--            @endif--}}
                                            {{--                <div class="form-group">--}}
                                            {{--                    <label for="exampleSelectDivision">Division</label>--}}
                                            {{--                    <select class="form-control" id="exampleSelectDivision">--}}
                                            {{--                        <option>Select Division</option>--}}
                                            {{--                        <option>Division Name</option>--}}
                                            {{--                        <option>Division Name</option>--}}
                                            {{--                        <option>Division Name</option>--}}
                                            {{--                        <option>Division Name</option>--}}
                                            {{--                    </select>--}}
                                            {{--                    <select class="custom-select form-control" name="division" id="division">--}}
                                            {{--                        <option value="">Select Division</option>--}}
                                            {{--                        @if($divisionDetails)--}}
                                            {{--                            @foreach($divisionDetails as $division)--}}
                                            {{--                                <option value="{{ $division->id }}">{{ $division->division_code }}</option>--}}
                                            {{--                            @endforeach--}}
                                            {{--                        @endif--}}
                                            {{--                    </select>--}}
                                            {{--                </div>--}}
                                            {{--            @if($errors->has('division'))--}}
                                            {{--                <span class="help-block">--}}
                                            {{--                        <strong>{{ $errors->first('division') }}</strong>--}}
                                            {{--                    </span>--}}
                                            {{--            @endif--}}
                                            <div class="form-group">
                                                <label for="fiel">Visitor Image</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="visitor_img" name="visitor_img">
                                                    <label  class="custom-file-label" for="customFile">Choose file</label>
                                                    <p style="margin-top: 3px;color:green"  id="visitorText"></p>
                                                </div>

                                                {{--                <div class="input-group col-xs-12">--}}
                                                {{--                    <input type="text" class="form-control file-upload-info" style="height: 50px;" disabled="" placeholder="Choose Image">--}}
                                                {{--                    <span class="input-group-append">--}}
                                                {{--                        <button class="file-upload-browse btn btn-primary btn-rounded" type="button">Upload</button>--}}
                                                {{--                    </span>--}}
                                                {{--                </div>--}}
                                            </div>
                                            <div class="form-group">
                                                <label for="fiel">Visitor NIC Image</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="nic_img" name="nic_img">
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                    <p style="margin-top: 3px;color:green"  id="NICText"></p>
                                                </div>

                                                {{--                <div class="input-group col-xs-12">--}}
                                                {{--                    <input type="text" class="form-control file-upload-info" style="height: 50px;" disabled="" placeholder="Choose Image">--}}
                                                {{--                    <span class="input-group-append">--}}
                                                {{--                        <button class="file-upload-browse btn btn-primary btn-rounded" type="button">Upload</button>--}}
                                                {{--                    </span>--}}
                                                {{--                </div>--}}
                                            </div>

                                            {{--                <div class="form-group">--}}
                                            {{--                    <label for="exampleInputvalidTime">Valid Time (Days)</label>--}}
                                            {{--                    <input type="text" class="form-control" id="exampleInputvalidTime" placeholder="">--}}
                                            {{--                    <input type="number" class="form-control" name="valid_till" id="valid_till">--}}
                                            {{--                </div>--}}
                                            <div class="form-group">
                                                <label for="exampleNotes">Notes</label>
                                                <textarea class="form-control" name="notes" id="notes"> </textarea>
                                            </div>
                                            <button id="createVModal" type="submit" class="btn btn-primary btn-rounded mr-2">&nbsp; &nbsp; &nbsp; &nbsp; Save &nbsp; &nbsp; &nbsp; &nbsp;</button>
                                            <button id="SaveAndMake" type="button" class="btn btn-info btn-rounded">Save & Create App</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                {{--                                <button type="button" class="btn btn-info btn-rounded">Save</button>--}}
                                {{--                                <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>--}}
                            </div>
                        </div>
                    </div>
                </div>

                <div style="margin-top: 40px;" id="show-contacts-button">
                    <button class="create-meeting btn btn-danger btn-lg btn-rounded" data-toggle="modal" data-target="#showContactsModal"><i class="mdi mdi-account-multiple"></i></button>
                </div>
                <div  class="modal fade" id="showContactsModal" tabindex="3" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content" style="width: 80%!important;position: absolute;left: 8%">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">SHOW CONTACTS</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">VIEW CONTACTS</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Organization</th>
                                            <th>Email</th>
                                            <th>Ref Number</th>
                                            <th>Contact Number</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($visitors)
                                            @foreach($visitors as $visitor)
                                                <tr>
                                                    <td>{{$visitor->first_name}}</td>
                                                    <td>{{$visitor->last_name}}</td>
                                                    <td>{{$visitor->organization}}</td>
                                                    <td>{{$visitor->email}}</td>
                                                    <td>{{$visitor->ref_number}}</td>
                                                    <td>{{$visitor->contact_number}}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Organization</th>
                                            <th>Email</th>
                                            <th>Ref Number</th>
                                            <th>Contact Number</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                            {{--                            <div class="modal-footer">--}}
                            {{--                                <button type="button" class="btn btn-info btn-rounded">Save</button>--}}
                            {{--                                <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>--}}
                            {{--                            </div>--}}
                        </div>
                    </div>
                </div>
                <div style="margin-top: 20px;" id="view-meetings-button">
                    <button class="create-meeting btn btn-danger btn-lg btn-rounded" data-toggle="modal" data-target="#viewMeetingModal"><i class="mdi mdi-bulletin-board"></i></button>
                </div>
                <div class="modal fade" id="viewMeetingModal" tabindex="4" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content" style="width: 80%!important;position: absolute;left: 8%">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">VIEW MEETINGS</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="meetingpop-listing" class="table dataTable no-footer" role="grid" aria-describedby="order-listing_info">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Order #: activate to sort column descending" style="width: 113.77px;">ID #</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased On: activate to sort column ascending" style="width: 180.02px;">Meeting Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Customer: activate to sort column ascending" style="width: 136.27px;">Meeting Facility</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Ship to: activate to sort column ascending" style="width: 113.77px;">Meeting Starts</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Base Price: activate to sort column ascending" style="width: 147.52px;">Meeting Ends</th>
                                                <th class="sorting" tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Purchased Price: activate to sort column ascending" style="width: 205.02px;">Arranged By</th>
                                                <th tabindex="0" aria-controls="order-listing" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 116.27px;">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if($nextMeetingsPopUp)
                                                @foreach($nextMeetingsPopUp as $meeting)
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">{{$meeting->id}}</td>
                                                        <td>{{$meeting->meeting_name}}</td>
                                                        <td>{{$meeting->facility_name}}</td>
                                                        <td>{{$meeting->start}}</td>
                                                        <td>{{$meeting->end}}</td>
                                                        <td>{{$meeting->first_name}} - {{$meeting->last_name}}</td>
                                                        <td>
                                                            <a style="display: block;" href="meeting-edit/{{$meeting->id}}" class="btn btn-info btn-rounded">&nbsp; Edit Meeting &nbsp;</a>
                                                            <a style="display: block;" href="" class="btn btn-danger btn-rounded">Delete Meeting</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        {{--                                        {{$nextMeetingsPopUp->links()}}--}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="order-listing_info" role="status" aria-live="polite">Showing 1 to 10 of 10 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="order-listing_paginate">
                                            <ul class="pagination">
                                                {{$nextMeetings->links()}}
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-info btn-rounded">Save</button>
                                <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="margin-left: 695px;" class="d-flex align-items-center">
                    <h5 class="mb-0 font-weight-bold pr-3">VERIFY YOUR MEETING</h5>
                    <div class="add-items d-flex pt-2">
                        <input  id ="refnumber" onkeyup="addHyphen(this)" maxlength="9" type="text" class="form-control" placeholder="Meeting Ref. Number">
                        <button id="renumberBtn" class="btn btn-rounded btn-info font-weight-bold mr-5 todo-list-add-btn">&nbsp;Verify&nbsp;</button>
                    </div>

                </div>

            </div>
        </div>

        <div class="row">
            <div style="margin-left: 50px;!important;" class=""></div>
            <div class="col-lg-5 grid-margin stretch-card">
                {{--                <div class="card">--}}
                {{--                    <div class="card-body text-center">--}}
                {{--                        <div>--}}
                {{--                            <h4 class="card-title">MEETING INFORMATION</h4>--}}
                {{--                            <p class="text-muted mb-0">12:00 PM To 1:00 PM</p>--}}
                {{--                        </div>--}}
                {{--                        <p class="mt-2 card-text">--}}
                {{--                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.--}}
                {{--                            Aenean commodo ligula eget dolor. Lorem <br><br>--}}
                {{--                        </p>--}}
                {{--                        <div class="border-top pt-3">--}}
                {{--                            <div class="row">--}}
                {{--                                <div class="col-4">--}}
                {{--                                    <h6>20</h6>--}}
                {{--                                    <p class="mb-0">Total Members</p>--}}
                {{--                                </div>--}}
                {{--                                <div class="col-4">--}}
                {{--                                    <h6>16</h6>--}}
                {{--                                    <p class="mb-0">Confirmed</p>--}}
                {{--                                </div>--}}
                {{--                                <div class="col-4">--}}
                {{--                                    <h6>4</h6>--}}
                {{--                                    <p class="mb-0">Rejected</p>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">TODAY'S MEETINGS (2 HRS) | <?php echo date('d'); ?><code><?php echo date('M'); ?> <?php echo date('Y'); ?></code></h4>
                        <p class="card-description"></p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Host</th>
                                    <th>Status</th>

                                </tr>
                                </thead>
                                <tbody>
                                @if(!isset($nextMeetings[0]->first_name))
                                    <tr>
                                        <td colspan="4">
                                            <p align="left">No Meetings to show</p>
                                        </td>
                                    </tr>

                                @endif
                                @if($nextMeetings)

                                    @foreach($nextMeetings as $loopM)
                                        <tr>
                                            <td>@php echo date("H:i:s",strtotime($loopM->start));  @endphp</td>
                                            <td>@php echo date("H:i:s",strtotime($loopM->end));  @endphp</td>
                                            <td>{{$loopM->first_name}}</td>
                                            <td class="d-flex align-items-center justify-content-between">
                                            @switch($loopM->status)
                                                @case(1)
                                                <!-- 1 = in future -->
                                                    <label class="badge badge-primary">&nbsp;&nbsp;&nbsp; Ongoing &nbsp;&nbsp;&nbsp;</label>
                                                @break

                                                @case(2)
                                                <!-- 2 = on going -->
                                                    <span class="badge badge-success">On going</span>
                                                @break
                                                @case(3)
                                                <!-- 3 = finished meetings -->
                                                    <span class="badge badge-warning">Finished</span>
                                                    @break

                                                    @default
                                                    <span class="badge badge-danger">Cancelled</span>

                                                @endswitch
                                                <input name="hiddenRef" id="hiddenRef" type="hidden" value="{{$loopM->ref_number}}">

                                                <button onclick="viewMeeting({{$loopM->ref_number}})"  class="btn btn-link btn-fw">More</button></td>
                                        </tr>
                                    @endforeach
                                @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">PENDING APPROVAL | <?php echo date('d'); ?><code><?php echo date('M'); ?> <?php echo date('Y'); ?></code> </h4>
                        <p style="display: none;" class="alert alert-success" id="resendMsg"></p>
                        <div class="table-responsive">
                            <table width="100%" style="overflow-y: scroll;" class="table">
                                <thead>
                                <tr>
                                    <th class="text-center">Host</th>
                                    <th class="text-center">Reference</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody style="overflow: scroll;">
                                @if($nextPendingMeetings)
                                    @foreach($nextPendingMeetings as $pendingM)
                                        <tr>
                                            <td class="text-center">{{$pendingM->first_name}}</td>
                                            <td class="text-center">{{$pendingM->ref_number}}</td>
                                            <td class="text-center align-items-center justify-content-between"><label class="text-centerbadge badge-info">&nbsp;&nbsp;&nbsp; Pending &nbsp;&nbsp;&nbsp;</label></td>
                                            <td onclick="ResendNotification({{$pendingM->id}})" class="text-center align-items-center justify-content-between"><label class="badge">Resend</label></td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-1 grid-margin stretch-card"></div>
        </div>

        {{--        <div class="row">--}}
        {{--            <div class="col-xl-1 grid-margin stretch-card"></div>--}}
        {{--            <div class="col-lg-5 grid-margin stretch-card">--}}
        {{--                <div class="card">--}}
        {{--                    <div class="row">--}}
        {{--                        <div class="col-sm-12">--}}
        {{--                            <div class="card-body text-center">--}}
        {{--                                <div>--}}
        {{--                                    <h4 class="card-title">VERIFIED MEETING INFORMATION</h4>--}}
        {{--                                    <p class="text-muted mb-0">12:00 PM To 1:00 PM</p>--}}
        {{--                                </div>--}}
        {{--                                <p class="mt-2 card-text">--}}
        {{--                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit.--}}
        {{--                                    Aenean commodo ligula eget dolor. Lorem--}}
        {{--                                </p>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <div class="row">--}}
        {{--                        <div class="col-sm-12">--}}
        {{--                            <div class="card-body">--}}
        {{--                                <h4 class="card-title">Visitor Details</h4>--}}
        {{--                                <ul class="bullet-line-list pt-2 mb-0">--}}
        {{--                                    <li>--}}
        {{--                                        <h6>Visitor Name</h6>--}}
        {{--                                        <p>Visitor Information </p>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <h6>Visitor Name</h6>--}}
        {{--                                        <p>Visitor Information </p>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <h6>Visitor Name</h6>--}}
        {{--                                        <p>Visitor Information </p>--}}
        {{--                                    </li>--}}
        {{--                                </ul>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}

        {{--            </div>--}}
        {{--            <div class="col-lg-6 grid-margin stretch-card">--}}

        {{--            </div>--}}
        {{--            <div class="col-xl-1 grid-margin stretch-card"></div>--}}
        {{--        </div>--}}
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
@include("layouts.footer")
<!-- partial -->
</div>


{{--// new model--}}

<div class="modal fade" id="verifyUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <form method="post" id="upload_form" name="upload_form" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-content">
                <div class="modal-header">



                    <h5  class="modal-title" id="exampleModalLabel">VISITOR INFORMATION</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-2 col-xl-3 grid-margin stretch-card d-none d-md-flex">
                            <div>
                                <div>
                                    <img  id="VImagehere" src="images/img-placeholder.png" alt="" style="width:290px;">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 col-xl-3 grid-margin stretch-card d-none d-md-flex">

                            <table style="background: #eee" valign="middle" class="table">
                                <tr>
                                    <th style="background-color: #00cccc" colspan="2">Meeting Info</th>

                                </tr>
                                <tr>
                                    <td>Meeting Subject</td>
                                    <td id="MSubjectHere"></td>
                                </tr>
                                <tr>
                                    <td>Meeting Location</td>
                                    <td id="MLocationHere"></td>
                                </tr>
                                <tr>
                                    <td>Reference Number</td>
                                    <td id="MRefHere"></td>
                                </tr>
                                <tr>
                                    <td>Arranged By</td>
                                    <td id="MArrangeHere"></td>
                                </tr><tr>
                                    <td>Start</td>
                                    <td id="MStart"></td>
                                </tr>
                                <tr>
                                    <td>End</td>
                                    <td id="MEnd"></td>
                                </tr>

                            </table>
                        </div>
                        <div class="col-md-5 col-xl-3 grid-margin stretch-card d-none d-md-flex">
                            <table style="background: #eee" valign="middle" class="table">
                                <tr>
                                    <th style="background-color: #00cccc" colspan="2">Visitor Info</th>
                                </tr>
                                <tr>
                                    <td>Visitor Name</td>
                                    <td id="VNameHere"></td>
                                </tr>
                                <tr>
                                    <td>Visitor Email</td>
                                    <td class="set-string-lenght" data-toggle="tooltip" data-placement="top" title="Tooltip on top" id="VEmailHere"></td>
                                </tr>
                                <tr>
                                    <td>Organization</td>
                                    <td id="VOrgHere"></td>
                                </tr>
                                <tr>
                                    <td>Valid Till</td>
                                    <td id="VValidHere"></td>
                                </tr>
                                <tr>
                                    <td>NIC</td>
                                    <td id="VNicHere"></td>
                                </tr>
                                <tr>
                                    <td>Reference Number</td>
                                    <td id="VRefHere"></td>
                                </tr>
                                <input id="imagePathHidden" type="hidden" value="{{url('/visitors/')}}/">

                            </table>
                        </div>
                        <div style="" class="col-md-5 col-xl-3 grid-margin stretch-card d-none d-md-flex">
                            <table style="background: #eee" valign="middle" class="table">
                                <tr>
                                    <th style="background-color: #00cccc" colspan="3">Device Info</th>

                                </tr>
                                <tbody id="devicetbaleBody">

                                </tbody>
                                <tr>
                                    <th style="background-color: #00cccc" colspan="3">Pre-requisites</th>

                                </tr>
                                <tr id="preTableRaw">


                                </tr>
                            </table>
                        </div>


                    </div>
                    <div id="sucMsg" style="color: green">

                    </div>
                    <button id="visitorIDBtn" name="visitorIDBtn" style="margin-left: 89px;margin-bottom: 12px;" class="btn btn-warning">Visitor ID</button>
                    <button id="visitorIMGBtn" name="visitorIMGBtn" style="display:none;margin-left: 89px;margin-bottom: 12px;" class="btn btn-warning">Visitor Image</button>
                    <div class="modal-footer" id="confirmDiv">
                        <input id="cardIDVeryfy" name="cardIDVeryfy" type="text" class="form-control">

                        <button id="confirmVisitor" name="confirmVisitor" type="submit" class="btn btn-success">Confirm</button>
                        <button type="button" class="btn btn-light btn-warning" data-dismiss="modal">Cancel</button>
                        <input type="hidden" name="hiddenMeetingID_relocated" id="hiddenMeetingID_relocated">
                        <input type="hidden" name="hiddenvisitorID_relocated" id="hiddenvisitorID_relocated">

                        <label style="display:none;"  id="lableImage">Visitor Image</label>
                        <input onchange="previewFile()" style="display:none;"  class="form-control" type="file"  name="visitor_img_model" id="visitor_img_model">
                        <label style="display:none;" id="lableNic">Visitor NIC</label>
                        <input style="display:none;"  class="form-control" type="file" name="visitor_nic_model" id="visitor_nic_model">
                    </div>

                    <div style="display: none" class="modal-footer" id="checkoutDiv">
                        {{--                    <input id="cardIDVeryfy" type="text" class="form-control">--}}
                        <button id="checkoutVisitor" type="button" class="btn btn-success">Checkout</button>
                        <button type="button" class="btn btn-light btn-warning" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
        </form>
    </div>
</div>



@endrole

@role('employee')



{{--  model Stars --}}
<div class="modal fade right" id="notificationView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->


    <div class="modal-dialog modal-full-height modal-right" role="document">


        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalLabel">Meeting Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-condensed table-responsive table-user-information">
                    <tbody>
                    <tr>
                        Notification Details
                    </tr>
                    <tr>
                        <td>Meeting Name</td>
                        <td id="meetingName-notification"> Meeting Name</td>
                        <input style="display: none" type="text" id="hiddenMeetingID">
                        <input style="display: none" type="text" id="hiddenVisiID">
                    </tr>
                    <tr>
                        <td>Meeting Starts</td>
                        <td id="meetingStart-notification">Meeting Start Time</td>
                    </tr>
                    <tr>
                        <td>Meeting Ends</td>
                        <td id="meetingEnd-notification">end time</td>
                    </tr>
                    <tr>
                        <td>Meeting Date</td>
                        <td id="meetingDate-notification2">end time</td>
                    </tr>

                    <tr id="1n">
                        <td>Visitor Name</td>
                        <td id="visitor-notification">end time</td>
                    </tr>
                    <tr id="2n">
                        <td>Visitor Email</td>
                        <td id="Email-notification">end time</td>
                        <input type="hidden" id="hiddenvisitorIDModel">
                    </tr>
                    <tr id="3n">
                        <td>NIC</td>
                        <td id="NIC-notification">end time</td>
                    </tr>
                    {{--                    <tr id="4n">--}}
                    {{--                        <td>Organization</td>--}}
                    {{--                        <td id="Organization-notification">end time</td>--}}
                    {{--                    </tr>--}}

                    <table width="100%" class="table-bordered" border="1" id="deviceTable">

                    </table>

                    </tbody>
                </table>
            </div>
            <div class="modal-footer justify-content-center">
                <button id="approveVisitor" type="button" class="btn btn-primary">Approve</button>
                <button id="re-register" type="button" class="btn btn-primary">Re-Register</button>
                <br>


            </div>
            <div class="modal-footer justify-content-center">
                {{--                <button id="parking" type="button" class="btn btn-primary">Approve Parking</button>--}}
                <button id="parking-to-admin" type="button" class="btn btn-primary">Refer Parking to Admin</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<div class="modal fade right" id="PendingMeetingView" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->


    <div class="modal-dialog modal-full-height modal-right" role="document">


        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalLabel">Meeting Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-condensed table-responsive table-user-information">
                    <tbody>
                    <tr>
                        Meeting Details
                    </tr>
                    <tr>
                        <td>Meeting Name</td>
                        <td id="meetingName-notification"> Meeting Name</td>
                        <input type="hidden" id="hiddenMeetingID2">
                        <input type="hidden" id="hiddenVisiID">
                    </tr>
                    <tr>
                        <td>Meeting Starts</td>
                        <td id="meetingStart-notification">Meeting Start Time</td>
                    </tr>
                    <tr>
                        <td>Meeting Ends</td>
                        <td id="meetingEnd-notification">end time</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer justify-content-center">
                <button id="approve-2" type="button" class="btn btn-primary">Approve</button>
                <button id="re-register-2" type="button" class="btn btn-primary">Re-Register</button>
                <br>
            </div>
            <div class="modal-footer justify-content-center">
                {{--                <button id="parking" type="button" class="btn btn-primary">Approve Parking</button>--}}
                <button id="parking-to-admin-2" type="button" class="btn btn-primary">Refer Parking to Admin</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

{{--                <a href="{{ route('person.view-all-today') }}"  style="margin-bottom: 35px;" class="btn btn-warning" value="View All Meetings" type="button" id="viewAllMeetingEmployee" name="viewAllMeetingEmployee">View All Meetings</a>--}}
{{--                    <br><br>--}}


{{--<table class="table table-dark">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th scope="col">#</th>--}}
{{--        <th scope="col">Meeting Name</th>--}}
{{--        <th scope="col">Facility</th>--}}
{{--        <th scope="col">Reference</th>--}}
{{--        <th scope="col">Start Time</th>--}}
{{--        <th scope="col">Meeting Status</th>--}}
{{--        <th scope="col">Action</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @if($personalMeetingData)--}}
{{--        @foreach($personalMeetingData as $meeting)--}}
{{--            <tr>--}}
{{--                <td>{{$meeting->id}}</td>--}}
{{--                <td>{{$meeting->meeting_name}}</td>--}}
{{--                <td>{{$meeting->facility_name}}</td>--}}
{{--                <td>{{$meeting->ref_number}}</td>--}}
{{--                <td>{{$meeting->start}}</td>--}}
{{--                <td align="center">--}}
{{--                @switch($meeting->status)--}}
{{--                    @case(1)--}}
{{--                    <!-- 1 = in future -->--}}
{{--                        <span class="badge badge-primary">In Future</span>--}}
{{--                    @break--}}

{{--                    @case(2)--}}
{{--                    <!-- 2 = on going -->--}}
{{--                        <span class="badge badge-warning">On going</span>--}}
{{--                    @break--}}
{{--                    @case(3)--}}
{{--                    <!-- 3 = finished meetings -->--}}
{{--                        <span class="badge badge-success">Finished</span>--}}
{{--                        @break--}}

{{--                        @default--}}
{{--                        <span class="badge badge-dark">Cancelled</span>--}}

{{--                    @endswitch--}}

{{--                </td>--}}
{{--                <td>--}}
{{--                    <a onclick="viewMeeting({{$meeting->id}})" class="btn btn-success">View More</a><br>--}}
{{--                    @if(Auth::user()->id == $meeting->arranged_by && $meeting->status == 1)--}}
{{--                        <a class="btn btn-sm btn-info btn-block" href="meeting-edit/{{$meeting->id}}" data-toggle="tooltip" title="Edit">--}}
{{--                            {!! trans('organization.buttons.editMeeting') !!}--}}
{{--                        </a>--}}
{{--                    @endif--}}

{{--                </td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    @endif--}}
{{--    </tbody>--}}
{{--</table>--}}


<div class="main-panel">
    <div class="content-wrapper">

        <div class="dashboard-header d-flex flex-column grid-margin">
            <div class="d-flex justify-content-between flex-wrap border-bottom pb-3">

                {{--                    <div class="d-flex align-items-center">--}}
                {{--                        <div class="dropdown">--}}
                {{--                            <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Next Two Hour Meetings</button>--}}
                {{--                            <div class="dropdown-menu sho" aria-labelledby="dropdownMenuButton1">--}}
                {{--                                @if($meetingData)--}}
                {{--                                    @foreach($meetingData as $meeting)--}}
                {{--                                        <h6 class="dropdown-header">{{$meeting->meeting_name}} - {{$meeting->start}}</h6>--}}
                {{--                                        <div class="dropdown-divider"></div>--}}
                {{--                                    @endforeach--}}
                {{--                                @endif--}}
                {{--                                @if(!isset($meetingData[0]->start))--}}
                {{--                                    <h6 class="dropdown-header">No Meetings To Show</h6>--}}
                {{--                                    <div class="dropdown-divider"></div>--}}
                {{--                                @endif--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}


            </div>
        </div>
        <div id="alertSuccess" style="display: none" class="alert alert-success">
            <strong>Success!</strong> Meeting Approved
        </div>
        <div id="alertSuccessRe" style="display: none" class="alert alert-success">
            <strong>Success!</strong> Re Register Successful !
        </div>
        <div class="row mt-5">

            <div class="col-xl-1 grid-margin stretch-card"></div>

            <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                    {{--                        <div class="card-body">--}}
                    {{--                            <h4 class="card-title">NEXT MEETINGS (2 Hrs )</h4>--}}
                    {{--                            <div class="table-responsive">--}}
                    {{--                                <table class="table">--}}
                    {{--                                    <thead>--}}
                    {{--                                    <tr>--}}
                    {{--                                        <th>Subject</th>--}}
                    {{--                                        <th>Host</th>--}}
                    {{--                                        <th>Start Time</th>--}}
                    {{--                                        <th>End Time</th>--}}
                    {{--                                    </tr>--}}
                    {{--                                    </thead>--}}
                    {{--                                    <tbody>--}}

                    {{--                                    @if($meetingData)--}}
                    {{--                                        @foreach($meetingData as $meeting)--}}
                    {{--                                            <tr>--}}
                    {{--                                                <td>{{$meeting->meeting_name}}</td>--}}
                    {{--                                                <td>{{$meeting->first_name}}</td>--}}
                    {{--                                                <td>{{$meeting->start}}</td>--}}
                    {{--                                                <td>{{$meeting->end}}</td>--}}
                    {{--                                            </tr>--}}
                    {{--                                        @endforeach--}}
                    {{--                                    @endif--}}

                    {{--                                    @if(!isset($meetingData[0]->meeting_name))--}}

                    {{--                                        <tr>--}}
                    {{--                                            <td colspan="4">No Meetings To Show</td>--}}
                    {{--                                        </tr>--}}
                    {{--                                    @endif--}}
                    {{--                                    </tbody>--}}
                    {{--                                </table>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    <div class="card-body">
                        <h4 class="card-title">TODAY'S MEETINGS | <?php echo date('d'); ?><code><?php echo date('M'); ?> <?php echo date('Y'); ?></code></h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Host</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if($personalMeetingData)
                                    @foreach($personalMeetingData as $nextmeeting)
                                        <tr>
                                            <td>{{$nextmeeting->meeting_name}}</td>
                                            <td>{{$nextmeeting->first_name}}</td>
                                            <td>{{$nextmeeting->start}}</td>
                                            <td>{{$nextmeeting->end}}</td>
                                            <td><a onclick="viewMeeting({{$nextmeeting->id}})" class="btn btn-success">View More</a><br></td>
                                        </tr>
                                    @endforeach
                                @endif
                                @if(!isset($personalMeetingData[0]->start))

                                    <tr>
                                        <td colspan="4">No Meetings To Show</td>

                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-1 grid-margin stretch-card"></div>
        </div>

        <div id="create-meeting-button">
            <button class="create-meeting btn btn-danger btn-lg btn-rounded" data-toggle="modal" data-target="#createMeetingModal"><i class="mdi mdi-access-point-network"></i></button>
        </div>
        <div class="modal fade" id="createMeetingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div style="width: 950px!important;
  margin: auto; overflow-y: scroll; height: 700px;!important;" class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">CREATE MEETING</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    {{--                                        <h4 class="card-title">CREATE MEETING</h4>--}}
                                    @if (session('success'))
                                        <div class="alert alert-success alert-dismissable fade show" role="alert">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

                                            <h4><i class="icon fa fa-check fa-fw" aria-hidden="true"></i> Success</h4>
                                            {{ session('success') }}
                                        </div>
                                    @endif


                                    {!! Form::open(array('route' => 'meeting-create-project','id'=>'meetingForm', 'method' => 'POST', 'role' => 'form', 'class' => 'needs-validation forms-sample')) !!}

                                    {!! csrf_field() !!}


                                    <div class="form-group">
                                        <label for="exampleInputMeetingName">Meeting Subject</label>
                                        <input type="hidden" name="branch" id="branch" value="{{ Auth::user()->branch_id }}">
                                        {{--                                <input type="text" class="form-control" id="exampleInputMeetingName" placeholder="Meeting Name">--}}
                                        {!! Form::text('meeting_name','', array('id' => 'meeting_name', 'class' => 'form-control', 'placeholder' => trans('forms.meeting_name'))) !!}

                                        @if($errors->has('meeting_name'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('meeting_name') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectFacility">Facility</label>
                                        <select class="custom-select form-control" name="facility_id" id="facility_id">
                                            <option value="">Select Location</option>
                                            @if($facilities)
                                                @foreach($facilities as $facility)
                                                    <option value="{{$facility->id}}">{{$facility->facility_name}}</option>
                                                @endforeach
                                            @endif
                                        </select>

                                    </div>
                                    @if($errors->has('facility_id'))
                                        <span class="help-block">
                            <strong>{{ $errors->first('facility_id') }}</strong>
                            </span>
                                    @endif

                                    {{--                                        <div  class="form-group">--}}
                                    {{--                                            <label for="exampleSelectFacility">Project</label>--}}
                                    {{--                                            <select class="custom-select form-control" name="project_id" id="project_id">--}}

                                    {{--                                                @if(session('projectId'))--}}
                                    {{--                                                    <option value="{{ Session::get('projectId')}}">{{ Session::get('projectName')}}</option>--}}

                                    {{--                                                @else--}}
                                    {{--                                                    <option value="">Select Project</option>--}}
                                    {{--                                                    @if($projects)--}}
                                    {{--                                                        @foreach($projects as $project)--}}
                                    {{--                                                            <option value="{{$project->id}}">{{$project->project_name}}</option>--}}
                                    {{--                                                        @endforeach--}}
                                    {{--                                                    @endif--}}
                                    {{--                                                @endif--}}
                                    {{--                                            </select>--}}

                                    {{--                                        </div>--}}

                                    <div class="form-group">
                                        <label for="exampleInputStartTime">Meeting Date</label>
                                        {{--                                <input type="text" class="form-control" id="exampleInputStartTime" placeholder="Start Time">--}}
                                        {!! Form::text('date','', array('id' => 'date', 'class' => 'form-control', 'placeholder' => 'Meeting Date')) !!}


                                        @if($errors->has('date'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputStartTime">Start Time</label>
                                        {{--                                <input type="text" class="form-control" id="exampleInputStartTime" placeholder="Start Time">--}}
                                        {!! Form::text('start','', array('id' => 'start', 'class' => 'form-control', 'placeholder' => trans('forms.start'))) !!}


                                        @if($errors->has('start'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('start') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEndTime">End Time</label>
                                        {{--                                <input type="text" class="form-control" id="exampleInputEndTime" placeholder="End Time">--}}
                                        {!! Form::text('end','', array('id' => 'end', 'class' => 'form-control', 'placeholder' => trans('forms.end'))) !!}
                                    </div>

                                    <div class="form-group" style="">
                                        <label for="exampleInputPartners">Internal Guests</label>

                                        <select  multiple name="users[]" id="partnerSelect" class="form-control" multiple="multiple">
                                            @if($users)
                                                @foreach($users as $user)
                                                    <option value="{{$user->id}}">{{$user->first_name}} - {{$user->last_name}}</option>
                                                @endforeach
                                            @endif

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputVisitors">External Guests</label>
                                        {{--                                <input type="text" class="form-control" id="exampleInputVisitors" placeholder="">--}}
                                        <select multiple name="visitors[]" id="selectVisitors" class="form-control" multiple="multiple">--}}
                                            @if($visitors)
                                                @foreach($visitors as $visitor)
                                                    <option value="{{$visitor->id}}">{{$visitor->first_name}} - {{$visitor->business_name}}</option>
                                                @endforeach
                                            @endif

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleSelectAssets">Prerequisites</label>
                                        <select multiple name="assets[]" id="assetsSelect" class="form-control" multiple="multiple">--}}
                                            @if($assets)
                                                @foreach($assets as $asset)
                                                    <option value="{{$asset->id}}">{{$asset->asset_name}}</option>
                                                @endforeach
                                            @endif

                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleComments">Description</label>
                                        <textarea class="form-control" id="exampleComments" rows="4"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-rounded mr-2">&nbsp; &nbsp; &nbsp; &nbsp; Save &nbsp; &nbsp; &nbsp; &nbsp;</button>
                                    <button class="btn btn-light btn-rounded">&nbsp; &nbsp; &nbsp; &nbsp; Cancel &nbsp; &nbsp; &nbsp; &nbsp;</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{--                                <button type="button" class="btn btn-info btn-rounded">Save</button>--}}
                        {{--                                <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>--}}
                    </div>
                </div>
            </div>
        </div>
        <div id="show-contacts-button">
            <button class="create-meeting btn btn-danger btn-lg btn-rounded" data-toggle="modal" data-target="#showContactsModal"><i class="mdi mdi-account-multiple"></i></button>
        </div>
        <div class="modal fade" id="showContactsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">SHOW CONTACTS</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <div class="modal-body">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Organization</th>
                                    <th>Email</th>
                                    <th>Ref Number</th>
                                    <th>Contact Number</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($visitors)
                                    @foreach($visitors as $visitor )
                                        <tr>
                                            <td>{{$visitor->first_name}}</td>
                                            <td>{{$visitor->last_name}}</td>
                                            <td>{{$visitor->organization}}</td>
                                            <td>{{$visitor->email}}</td>
                                            <td>{{$visitor->ref_number}}</td>
                                            <td>{{$visitor->contact_number}}</td>
                                        </tr>
                                    @endforeach
                                @endif

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Organization</th>
                                    <th>Email</th>
                                    <th>Ref Number</th>
                                    <th>Contact Number</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{--                            <button type="button" class="btn btn-info btn-rounded">Save</button>--}}
                        {{--                            <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-xl-1 grid-margin stretch-card"></div>
            <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">PENDING APPROVAL MEETINGS</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Host</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if($pendingMeetings)
                                    @foreach($pendingMeetings as $nextmeeting)
                                        <tr id="{{$nextmeeting->id}}">
                                            <td>{{$nextmeeting->meeting_name}}</td>
                                            <td>{{$nextmeeting->first_name}}</td>
                                            <td>{{$nextmeeting->start}}</td>
                                            <td>{{$nextmeeting->end}}</td>
                                            <td ><a onclick="getNotification({{$nextmeeting->id}})" class="btn btn-success">View More</a><br></td>
                                        </tr>
                                    @endforeach
                                @endif
                                @if(!isset($pendingMeetings[0]->start))

                                    <tr>
                                        <td colspan="4">No Meetings To Show</td>

                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-1 grid-margin stretch-card"></div>
        </div>
        {{--            <div class="row mt-5">--}}
        {{--                <div class="col-xl-1 grid-margin stretch-card"></div>--}}
        {{--                <div class="col-lg-10 grid-margin stretch-card">--}}
        {{--                    <div class="card">--}}
        {{--                        <div class="card-body">--}}
        {{--
        {{--                            <div class="table-responsive">--}}
        {{--                                <table class="table">--}}
        {{--                                    <thead>--}}
        {{--                                    <tr>--}}
        {{--                                        <th>Subject</th>--}}
        {{--                                        <th>Host</th>--}}
        {{--                                        <th>Start Time</th>--}}
        {{--                                        <th>End Time</th>--}}
        {{--                                        <th>Actions</th>--}}
        {{--                                    </tr>--}}
        {{--                                    </thead>--}}
        {{--                                    <tbody>--}}

        {{--                                    @if($personalMeetingData)--}}
        {{--                                        @foreach($personalMeetingData as $nextmeeting)--}}
        {{--                                            <tr>--}}
        {{--                                                <td>{{$nextmeeting->meeting_name}}</td>--}}
        {{--                                                <td>{{$nextmeeting->first_name}}</td>--}}
        {{--                                                <td>{{$nextmeeting->start}}</td>--}}
        {{--                                                <td>{{$nextmeeting->end}}</td>--}}
        {{--                                                <td><a onclick="viewMeeting({{$nextmeeting->id}})" class="btn btn-success">View More</a><br></td>--}}
        {{--                                            </tr>--}}
        {{--                                        @endforeach--}}
        {{--                                    @endif--}}
        {{--                                    @if(!isset($personalMeetingData[0]->start))--}}

        {{--                                        <tr>--}}
        {{--                                            <td colspan="4">No Meetings To Show</td>--}}

        {{--                                        </tr>--}}
        {{--                                    @endif--}}
        {{--                                    </tbody>--}}
        {{--                                </table>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="col-xl-1 grid-margin stretch-card"></div>--}}
        {{--            </div>--}}
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
@include("layouts.footer")
<!-- partial -->
</div>


<!-- model content -->
<div class="modal fade right" id="fullHeightModalRight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">

    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class="modal-dialog modal-full-height modal-right" role="document">


        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalLabel">Meeting Details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-condensed table-responsive table-user-information">
                    <tbody>
                    <tr>
                        <td>User Email:</td>
                        <td id="visitorEmaila">Email Goes Here</td>
                        <input value="" type="hidden" id="hiddenMeetingIDa">
                        <input value="" type="hidden" id="hiddenvisitorIDa">
                    </tr>
                    <tr>
                        <td>Meeting Name</td>
                        <td id="meetingNamea"> Meeting Name</td>
                    </tr>
                    <tr>
                        <td>Meeting Starts</td>
                        <td id="meetingStarta">Meeting Start Time</td>
                    </tr>
                    <tr>
                        <td>Meeting Ends</td>
                        <td id="meetingEnda">end time</td>
                    </tr>
                    <tr>
                        <td>Meeting Date</td>
                        <td id="meetingdatea">end time</td>
                    </tr>


                    </tbody>
                </table>
            </div>
            &nbsp;<span id="alreadyhide" style="display: none;">Already Requested to Delay</span>
            &nbsp;<span id="alreadycancel" style="display: none;">Already Requested to Cancel</span>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{--                <button type="button" class="btn btn-primary">Save changes</button>--}}
                <button id="request_delay" type="button" class="btn btn-primary">Request delay</button>

                <button id="request_cancel" type="button" class="btn btn-primary">Can't Attend</button>
            </div>
        </div>
    </div>
</div>


{{--<p>Notifications</p>--}}
{{--<table class="table">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th scope="col">#</th>--}}
{{--        <th scope="col">Description</th>--}}
{{--        <th scope="col">Action</th>--}}

{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @if($notificationData)--}}
{{--        @foreach($notificationData as $each)--}}
{{--            <tr id="{{$each->id}}" @if($each->status != 0) class="btn-success"   @endif>--}}
{{--                <th scope="row">{{$each->id}}</th>--}}
{{--                <td id="notification">{{$each->description}}</td>--}}
{{--                <td id="notification"><input onclick="viewNotification({{$each->id}})" type="button" class="btn btn-warning" value="view more"></td>--}}
{{--            </tr>--}}
{{--        @endforeach--}}
{{--    @endif--}}

{{--    </tbody>--}}
{{--</table>--}}


@endrole

@role('meeting_room')


{{--<div id="oderModel" class="modal" tabindex="-1" role="dialog">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h5 class="modal-title">Order Refreshments</h5>--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body">--}}
{{--                <select id="goodsAdd" name="goodsAdd">--}}
{{--                    <option>Food 1</option>--}}
{{--                    <option>Food 2</option>--}}
{{--                    <option>Food 3</option>--}}
{{--                    <option>Food 4</option>--}}
{{--                    <option>Food 5</option>--}}
{{--                </select>--}}
{{--                <select id="qtyAdd" name="qtyAdd">--}}
{{--                    <option>1</option>--}}
{{--                    <option>2</option>--}}
{{--                    <option>3</option>--}}
{{--                    <option>4</option>--}}
{{--                    <option>5</option>--}}
{{--                </select>--}}
{{--                <input id="addItem" type="button" value="Add" name="add" class="btn btn-success">--}}
{{--                <select name="facility_id" id="facility_id">--}}
{{--                    <option value="2">Meeting Room</option>--}}
{{--                </select>--}}
{{--                <div id="orderTable">--}}

{{--                </div>--}}

{{--            </div>--}}
{{--            <div class="modal-footer">--}}
{{--                <button id="orderSave" type="button" class="btn btn-primary">Order</button>--}}
{{--                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

{{--<div class="modal fade" id="loginModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"--}}
{{--     aria-hidden="true">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header text-center">--}}
{{--                <h4  class="modal-title w-100 btn-dropbox font-weight-bold">Sign in</h4>--}}
{{--                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                    <span aria-hidden="true">&times;</span>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <div class="modal-body mx-3">--}}
{{--                <div class="md-form mb-5">--}}
{{--                    <i class="fa fa-envelope prefix grey-text"></i>--}}
{{--                    <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>--}}
{{--                    <input type="email" id="user-email" class="form-control validate">--}}

{{--                </div>--}}

{{--                <div class="md-form mb-4">--}}
{{--                    <i class="fa fa-lock prefix grey-text"></i>--}}
{{--                    <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>--}}
{{--                    <input type="password" id="password" class="form-control validate">--}}

{{--                </div>--}}

{{--            </div>--}}
{{--            <div class="modal-footer d-flex justify-content-center">--}}
{{--                <button id="loginBtn" class="btn btn-success">Login</button>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}



{{--<a id="extend_meeting"  class="btn btn-warning">Extend Meeting</a> &nbsp; &nbsp;--}}
{{--<a id="order_refreshments" class="btn btn-warning">Order Refreshments</a>--}}

<div class="main-panel">
    <div class="content-wrapper">

        <div class="dashboard-header d-flex flex-column grid-margin">
            <div class="d-flex justify-content-between flex-wrap border-bottom pb-3">

                {{--                <div class="d-flex align-items-center">--}}
                {{--                    <div class="dropdown">--}}
                {{--                        <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Next Two Hour Meetings</button>--}}
                {{--                        <div class="dropdown-menu sho" aria-labelledby="dropdownMenuButton1">--}}

                {{--                            @if($meetingData)--}}
                {{--                                @foreach($meetingData as $meeting)--}}
                {{--                                    <h6 class="dropdown-header">{{$meeting->meeting_name}} - {{$meeting->start}}</h6>--}}
                {{--                                    <div class="dropdown-divider"></div>--}}
                {{--                                @endforeach--}}
                {{--                            @endif--}}
                {{--                            @if(!isset($meetingData[0]->start))--}}
                {{--                                    <h6 class="dropdown-header">No Meetings To Show</h6>--}}
                {{--                                    <div class="dropdown-divider"></div>--}}
                {{--                            @endif--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}

                <div class="d-flex align-items-center">
                    <div id="refreshments-button">
                        <button class="create-meeting btn btn-danger btn-lg btn-rounded" data-toggle="modal" data-target="#refreshmentsModal"><i class="mdi mdi-coffee"></i></button>
                    </div>
                    <div class="modal fade" id="refreshmentsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">ORDER REFRESHMENTS</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <span style="color:green;margin-left: 25px; margin-top: 9px;" id="showmsgDiv">

                                        </span>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="email"  class="form-control" id="user-email" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <input type="password" class="form-control" id="password" placeholder="Password">
                                        </div>

                                        <div class="col-md-3">
                                            <button id="loginBtn" class="create-meeting btn btn-danger btn-rounded mr-2 d-md-block">&nbsp;&nbsp;&nbsp;&nbsp; Login &nbsp;&nbsp;&nbsp;&nbsp;</button>

                                        </div>

                                        {{--                                        <div class="col-md-3 pull-right">--}}
                                        {{--                                        <button id="clearMenu" class="create-meeting btn btn-danger btn-rounded mr-2 d-md-block">&nbsp;&nbsp;&nbsp;&nbsp; Clear Menu &nbsp;&nbsp;&nbsp;&nbsp;</button>--}}
                                        {{--                                        </div>--}}

                                    </div>

                                    <div class="row">

                                        <div class="col-md-12 col-xl-6 grid-margin stretch-card d-none d-md-flex">
                                            <div class="card">
                                                {!! Form::open(array('method' => 'POST', 'role' => 'form', 'class' => 'needs-validation')) !!}

                                                {!! csrf_field() !!}
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <ul class="nav nav-pills nav-pills-vertical nav-pills-info" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                                <li class="nav-item">
                                                                    <a class="nav-link active" id="v-pills-hotdrinks-tab" data-toggle="pill" href="#v-pills-hotdrinks" role="tab" aria-controls="v-pills-hotdrinks" aria-selected="true">
                                                                        <i class="mdi mdi-home-outline"></i>
                                                                        Hot Drinks
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" id="v-pills-cooldrinks-tab" data-toggle="pill" href="#v-pills-cooldrinks" role="tab" aria-controls="v-pills-cooldrinks" aria-selected="false">
                                                                        <i class="mdi mdi-account-outline"></i>
                                                                        Cool Drinks
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link" id="v-pills-snack-tab" data-toggle="pill" href="#v-pills-snack" role="tab" aria-controls="v-pills-snack" aria-selected="false">
                                                                        <i class="mdi mdi-email-open-outline"></i>
                                                                        Snacks
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-8">
                                                            <div class="tab-content tab-content-vertical" id="v-pills-tabContent">
                                                                <div class="tab-pane fade show active" id="v-pills-hotdrinks" role="tabpanel" aria-labelledby="v-pills-hotdrinks-tab">
                                                                    <div class="media">
                                                                        <img class="mr-5 rounded" src="https://via.placeholder.com/115x115" alt="sample image">
                                                                        <div class="media-body">
                                                                            <div class="btn-group-vertical" role="group" aria-label="Basic example">
                                                                                <button value="Tea" onclick="addFoods('Tea')" type="button" class="btn btn-outline-secondary">Tea</button>
                                                                                <button value="Coffee" onclick="addFoods('Coffee')" type="button" class="btn btn-outline-secondary">Coffee</button>
                                                                                <button value="Hot Chocolate" onclick="addFoods('Hot Chocolate')" type="button" class="btn btn-outline-secondary">Hot Chocolate</button>
                                                                                <input type="hidden" id="hiddenArray" value="">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane fade" id="v-pills-cooldrinks" role="tabpanel" aria-labelledby="v-pills-cooldrinks-tab">
                                                                    <div class="media">
                                                                        <img class="mr-5 rounded" src="https://via.placeholder.com/115x115" alt="sample image">
                                                                        <div class="media-body">
                                                                            <div class="btn-group-vertical" role="group" aria-label="Basic example">
                                                                                <button value="Pepsi" onclick="addFoods('Pepsi')" type="button" class="btn btn-outline-secondary">Pepsi</button>
                                                                                <button value="Coke Cola" onclick="addFoods('Coke Cola')" type="button" class="btn btn-outline-secondary">Coke Cola</button>
                                                                                <button value="Fanta" onclick="addFoods('Fanta')" type="button" class="btn btn-outline-secondary">Fanta</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="v-pills-snack" role="tabpanel" aria-labelledby="v-pills-snack-tab">
                                                                    <div class="media">
                                                                        <img class="mr-5 rounded" src="https://via.placeholder.com/115x115" alt="sample image">
                                                                        <div class="media-body">
                                                                            <div class="btn-group-vertical" role="group" aria-label="Basic example">
                                                                                <button value="Veggie Patty" onclick="addFoods('Veggie Patty')" type="button" class="btn btn-outline-secondary">Veggie Patty</button>
                                                                                <button value="Fish Patty" onclick="addFoods('Fish Patty')" type="button" class="btn btn-outline-secondary">Fish Patty</button>
                                                                                <button value="Hot Chicken Patty" onclick="addFoods('Hot Chicken Patty')" type="button" class="btn btn-outline-secondary">Hot Chicken Patty</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-xl-6 grid-margin stretch-card d-none d-md-flex">
                                            <div class="table-responsive">
                                                <table border="0" class="table">
                                                    <thead>
                                                    <tr>
                                                        <th>Item</th>
                                                        <th style="text-align: center;">Add/Remove</th>
                                                        <th  style="text-align: center;">Quantity</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="MenuDiv">
                                                    {{--                                                    <tr>--}}
                                                    {{--                                                        <td>--}}
                                                    {{--                                                            Item Name--}}
                                                    {{--                                                            <button type="button" class="btn btn-inverse-info btn-icon ml-5"><i class="mdi mdi-minus"></i></button>--}}
                                                    {{--                                                            <button type="button" class="btn btn-inverse-info btn-icon ml-3"><i class="mdi mdi-plus"></i></button>--}}
                                                    {{--                                                        </td>--}}
                                                    {{--                                                        <td>1</td>--}}
                                                    {{--                                                    </tr>--}}
                                                    {{--                                                    <tr>--}}
                                                    {{--                                                        <td>--}}
                                                    {{--                                                            Item Name--}}
                                                    {{--                                                            <button type="button" class="btn btn-inverse-info btn-icon ml-5"><i class="mdi mdi-minus"></i></button>--}}
                                                    {{--                                                            <button type="button" class="btn btn-inverse-info btn-icon ml-3"><i class="mdi mdi-plus"></i></button>--}}
                                                    {{--                                                        </td>--}}
                                                    {{--                                                        <td>1</td>--}}
                                                    {{--                                                    </tr>--}}
                                                    {{--                                                    <tr>--}}
                                                    {{--                                                        <td>--}}
                                                    {{--                                                            Item Name--}}
                                                    {{--                                                            <button type="button" class="btn btn-inverse-info btn-icon ml-5"><i class="mdi mdi-minus"></i></button>--}}
                                                    {{--                                                            <button type="button" class="btn btn-inverse-info btn-icon ml-3"><i class="mdi mdi-plus"></i></button>--}}
                                                    {{--                                                        </td>--}}
                                                    {{--                                                        <td>1</td>--}}
                                                    {{--                                                    </tr>--}}
                                                    {{--                                                    <tr>--}}
                                                    {{--                                                        <td>--}}
                                                    {{--                                                            Item Name--}}
                                                    {{--                                                            <button type="button" class="btn btn-inverse-info btn-icon ml-5"><i class="mdi mdi-minus"></i></button>--}}
                                                    {{--                                                            <button type="button" class="btn btn-inverse-info btn-icon ml-3"><i class="mdi mdi-plus"></i></button>--}}
                                                    {{--                                                        </td>--}}
                                                    {{--                                                        <td>1</td>--}}
                                                    {{--                                                    </tr>--}}
                                                    {{--                                                    <tr>--}}
                                                    {{--                                                        <td>--}}
                                                    {{--                                                            Item Name--}}
                                                    {{--                                                            <button type="button" class="btn btn-inverse-info btn-icon ml-5"><i class="mdi mdi-minus"></i></button>--}}
                                                    {{--                                                            <button type="button" class="btn btn-inverse-info btn-icon ml-3"><i class="mdi mdi-plus"></i></button>--}}
                                                    {{--                                                        </td>--}}
                                                    {{--                                                        <td>1</td>--}}
                                                    {{--                                                    </tr>--}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button id="orderSave" type="button" class="btn btn-info btn-rounded">Confirm</button>
                                    {{--                                    <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>--}}

                                    <button type="button" id="clearMenu" class="create-meeting btn btn-danger btn-rounded mr-2 d-md-block">&nbsp;&nbsp;&nbsp;&nbsp; Clear Menu &nbsp;&nbsp;&nbsp;&nbsp;</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="contacts-button">
                        <button type="button" class="reate-meeting btn btn-danger btn-lg btn-rounded" data-toggle="modal" data-target="#viewContactModalOne"><i class="mdi mdi-contact-mail mx-0"></i></button></div>
                    <div class="modal fade" id="viewContactModalOne" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">

                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">VIEW CONTACTS</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <div class="modal-body">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Organization</th>
                                            <th>Email</th>
                                            <th>Ref Number</th>
                                            <th>Contact Number</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if($visitors)
                                            @foreach($visitors as $visitor )
                                                <tr>
                                                    <td>{{$visitor->first_name}}</td>
                                                    <td>{{$visitor->last_name}}</td>
                                                    <td>{{$visitor->organization}}</td>
                                                    <td>{{$visitor->email}}</td>
                                                    <td>{{$visitor->ref_number}}</td>
                                                    <td>{{$visitor->contact_number}}</td>
                                                </tr>
                                            @endforeach
                                        @endif

                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Organization</th>
                                            <th>Email</th>
                                            <th>Ref Number</th>
                                            <th>Contact Number</th>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light btn-rounded" data-dismiss="modal">Cancel</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-xl-1 grid-margin stretch-card"></div>
            <div class="col-lg-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body ">
                        <div>
                            <h4 class="card-title">TODAY</h4>
                        </div>
                        <div class="border-top pt-3 text-center">
                            <h2 class="display-2"><?php echo date('d M Y'); ?></h2>
                        </div>
                        <div class="border-top pt-3 text-center">
                            <h1 class="display-1"><?php echo date("h:i A"); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">CURRENT MEETINGS</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Host</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if($currentData)
                                    @foreach($currentData as $meeting)
                                        <tr>
                                            <td>{{$meeting->meeting_name}}</td>
                                            <td>{{$meeting->first_name}}</td>
                                            <td>{{$meeting->start}}</td>
                                            <td>{{$meeting->end}}</td>
                                        </tr>
                                    @endforeach
                                @endif

                                @if(!isset($currentData[0]->start))
                                    <tr>
                                        <td>
                                            <p style="margin-left: 0px;" align="left"> No Meetings To Show</p>
                                        </td>
                                    </tr>


                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-1 grid-margin stretch-card"></div>
        </div>

        <div class="row mt-5">
            <div class="col-xl-1 grid-margin stretch-card"></div>
            <div class="col-lg-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">NEXT MEETINGS</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Host</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                </tr>
                                </thead>
                                <tbody>

                                @if($nextMeetings)
                                    @foreach($nextMeetings as $nextmeeting)
                                        <tr>
                                            <td>{{$nextmeeting->meeting_name}}</td>
                                            <td>{{$nextmeeting->first_name}}</td>
                                            <td>{{$nextmeeting->start}}</td>
                                            <td>{{$nextmeeting->end}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-1 grid-margin stretch-card"></div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
@include("layouts.footer")
<!-- partial -->
</div>

@endrole

@role('project')

<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">

        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
@include("layouts.footer")
<!-- partial -->
</div>

@endrole


@role('vendor')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="dashboard-header d-flex flex-column grid-margin">
            <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom pb-3 mb-3">
                <div class="d-flex align-items-center">
                    <h4 class="mb-0 font-weight-bold">Welcome &nbsp;</h4>
                    <h3 class="mb-0 font-weight-light">{{{ isset(Auth::user()->first_name) ? Auth::user()->first_name : Auth::user()->name }}}</h3>
                </div>
            </div>
            <div class="d-md-flex align-items-center justify-content-between flex-wrap">
                <div class="d-flex align-items-center">

                </div>
            </div>
{{--            {{ Breadcrumbs::render('home') }}--}}
        </div>

        <div class="row">
            <h3>{{$projectData[0]->project_name}}</h3>

            </br>
            <br><br><br>

            <table style="margin-bottom: 20px;" class="table table-bordered table-dark">

                @if($internal)
                    @foreach($internal as $staff)
                        <tr>
                            <td>
                                {{$staff->first_name}}
                            </td>
                            <td>
                                {{$staff->last_name}}
                            </td>
                        </tr>
                    @endforeach
                @endif

            </table>

            </br>
            <br><br><br>
            <div>
                Visitors involved to the project
            </div>

            <table class="table table-bordered table-dark">
                @if($outsiders)
                    @foreach($outsiders as $visitorusers)
                        <tr>
                            <td>
                                {{$visitorusers->first_name}}
                            </td>
                            <td>
                                {{$visitorusers->last_name}}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>



    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
@include("layouts.footer")
<!-- partial -->
</div>
<!-- partial -->


@endrole

<!-- scripts -->
<script src="{{ mix('/js/all.js') }}"></script>

@section('footer_scripts')
    @include('scripts.styles')
    @include('scripts.dashboardjs')

    @role('meeting_room')
    @include('scripts.collapasenav')
    @endrole

    @include('scripts.datetimepicker')
    @include('scripts.fSelect')

@endsection