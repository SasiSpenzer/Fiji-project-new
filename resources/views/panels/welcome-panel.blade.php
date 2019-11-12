@php

    $levelAmount = 'level';

    if (Auth::User()->level() >= 2) {
        $levelAmount = 'levels';

    }

@endphp

<div class="card">
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
    <div class="card-body">
        <h2 class="lead">
            {{ trans('auth.loggedIn') }}
        </h2>
        <div class="mb-3">
            <div style="background-color: #6c757d" class="card-deck">
                <div class="card card-inverse card-success text-center">
                    <div class="card-body">
                        <blockquote class="card-blockquote">
                            <h5>Agents Monthly Shipping Schedule</h5>

                        </blockquote>
                    </div>
                </div>
                <div class="card card-inverse card-success text-center">
                    <div class="card-body">
                        <blockquote class="card-blockquote">
                            <h5>Vessel Berthing Application</h5>

                        </blockquote>
                    </div>
                </div>
                <div class="card card-inverse card-success text-center">
                    <div class="card-body">
                        <blockquote class="card-blockquote">
                            <h5>Cargo Status Change Request</h5>

                        </blockquote>
                    </div>
                </div>
                <div class="card card-inverse card-success text-center">
                    <div class="card-body">
                        <blockquote class="card-blockquote">
                            <h5>Port Of Discharge Change Request</h5>

                        </blockquote>
                    </div>
                </div>

            </div>
            <br>

            <div style="background-color: #6c757d" class="card-deck">
                <div class="card card-inverse card-success text-center">
                    <div class="card-body">
                        <blockquote class="card-blockquote">
                            <h5>Reefer Unplugging Request</h5>

                        </blockquote>
                    </div>
                </div>
                <div class="card card-inverse card-success text-center">
                    <div class="card-body">
                        <blockquote class="card-blockquote">
                            <h5>Domestic Reefer Plugging Request</h5>

                        </blockquote>
                    </div>
                </div>

                <div class="card card-inverse card-success text-center">
                    <div class="card-body">
                        <blockquote class="card-blockquote">
                            <h5>Cargo Receiving Request</h5>

                        </blockquote>
                    </div>
                </div>
                <div class="card card-inverse card-success text-center">
                    <div class="card-body">
                        <blockquote class="card-blockquote">
                            <h5>On Carrier Change Request</h5>

                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: #6c757d" class="card-deck">
            <div class="card card-inverse card-success text-center">
                <div class="card-body">
                    <blockquote class="card-blockquote">
                        <h5>Berthing Window application</h5>

                    </blockquote>
                </div>
            </div>
            <div class="card card-inverse card-success text-center">
                <div class="card-body">
                    <blockquote class="card-blockquote">
                        <h5>Vessel Deposit Form</h5>

                    </blockquote>
                </div>
            </div>

        </div>
    </div>

        <hr>

        <p style="margin-left: 20px;">
            You have
                <strong>
                    @role('admin')
                       Admin
                    @endrole
                    @role('user')
                       User
                    @endrole
                </strong>
            Access
        </p>

        <hr>

        <p style="margin-left: 20px;">
            You have access to {{ $levelAmount }}:
            @level(5)
                <span class="badge badge-primary margin-half">5</span>
            @endlevel

            @level(4)
                <span class="badge badge-info margin-half">4</span>
            @endlevel

            @level(3)
                <span class="badge badge-success margin-half">3</span>
            @endlevel

            @level(2)
                <span class="badge badge-warning margin-half">2</span>
            @endlevel

            @level(1)
                <span class="badge badge-default margin-half">1</span>
            @endlevel
        </p>

        @role('admin')

            <hr>

            <p style="margin-left: 20px;">
                You have permissions:
                @permission('view.users')
                    <span class="badge badge-primary margin-half margin-left-0">
                        {{ trans('permsandroles.permissionView') }}
                    </span>
                @endpermission

                @permission('create.users')
                    <span class="badge badge-info margin-half margin-left-0">
                        {{ trans('permsandroles.permissionCreate') }}
                    </span>
                @endpermission

                @permission('edit.users')
                    <span class="badge badge-warning margin-half margin-left-0">
                        {{ trans('permsandroles.permissionEdit') }}
                    </span>
                @endpermission

                @permission('delete.users')
                    <span class="badge badge-danger margin-half margin-left-0">
                        {{ trans('permsandroles.permissionDelete') }}
                    </span>
                @endpermission

            </p>

        @endrole

    </div>
</div>
