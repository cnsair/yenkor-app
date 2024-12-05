@extends('layouts.app-admin')

@section('content')
    
    <div class="app-inner-layout__wrapper">
        <div class="app-inner-layout__content">
            <div class="tab-content">
                <div class="container-fluid">
                    <div class="mb-3 card">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                                Audit Trail
                            </div>
                            <div class="btn-actions-pane-right text-capitalize">
                                <button class="btn-wide btn-outline-2x mr-md-2 btn btn-outline-focus btn-sm">
                                    View All
                                </button>
                            </div>
                        </div>
                        <div class="no-gutters row">
                            <div class="col-sm-6 col-md-4 col-xl-4">
                                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                    <div class="icon-wrapper rounded-circle">
                                        <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                        <i class="pe-7s-mouse text-dark opacity-8"></i>
                                    </div>
                                    <div class="widget-chart-content">
                                        <div class="widget-subheading">Total Clicks</div>
                                        <div class="widget-numbers">1.7M</div>
                                    </div>
                                </div>
                                <div class="divider m-0 d-md-none d-sm-block"></div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-4">
                                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                    <div class="icon-wrapper rounded-circle">
                                        <div class="icon-wrapper-bg opacity-9 bg-warning"></div>
                                        <i class="pe-7s-users text-dark opacity-8"></i></div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">Registered Users</div>
                                            <div class="widget-numbers"><span>9M</span></div>
                                        </div>
                                </div>
                                <div class="divider m-0 d-md-none d-sm-block"></div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-xl-4">
                                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                    <div class="icon-wrapper rounded-circle">
                                        <div class="icon-wrapper-bg opacity-9 bg-warning"></div>
                                        <i class="pe-7s-map-2 text-dark opacity-8"></i>
                                    </div>
                                    <div class="widget-chart-content">
                                        <div class="widget-subheading">Unique Clicks</div>
                                        <div class="widget-numbers">
                                            <span>563</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center d-block p-3 card-footer">
                            <button class="btn-wide btn-pill btn-shadow fsize-1 btn btn-focus btn-lg">
                                <span class="mr-2 opacity-7">
                                    <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                                </span>
                                <span class="mr-1">View Complete Report</span>
                            </button>
                        </div>
                    </div>
                    
                    <div class="card mb-3">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                <i class="metismenu-icon pe-7s-users mr-3 text-muted opacity-6"> </i>
                                Registered Users
                            </div>
                        </div>
                        <div class="card-body">
                            <table style="width: 100%;" id="example"
                                    class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Name/ID</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>User Type</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $user_data as $user )
                                        <tr>
                                            <td>
                                                {{ $user->firstname ." ". $user->lastname }} 
                                                <small><b>{{ $user->yenkor_id }}</b></small>
                                            </td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if ($user->gender)
                                                    {{ $user->gender }}
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>
                                                @if ( $user->is_rider == 1 )
                                                    Rider
                                                @elseif ( $user->is_driver == 1 )
                                                   Driver
                                                @elseif ( $user->is_admin == 1 )
                                                    Admin
                                                @endif
                                            </td>
                                            <td>
                                                @if ($user->status == "4")
                                                    <button class="btn btn-sm btn-success">Active</button>
                                                @elseif ($user->status == "3")
                                                    <button class="btn btn-sm btn-primary">Inactive</button>
                                                @elseif ($user->status == "2")
                                                    <button class="btn btn-sm btn-default">Susupended</button>
                                                @elseif ($user->status == "1")
                                                    <button class="btn btn-sm btn-danger">Banned</button>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name/ID</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>User Type</th>
                                    <th>Status</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    
                    <div class="card no-shadow bg-transparent no-border rm-borders mb-3">
                        <div class="card">
                            <div class="no-gutters row">
                                <div class="col-md-12 col-lg-4">
                                    <ul class="list-group list-group-flush">
                                        <li class="bg-transparent list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Total Rides</div>
                                                            <div class="widget-subheading">All time</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-success">
                                                                3696
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="bg-transparent list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Total Fare Amount</div>
                                                            <div class="widget-subheading">Net Income</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-primary">
                                                                $12.6k
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <ul class="list-group list-group-flush">
                                        <li class="bg-transparent list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Total Drivers</div>
                                                            <div class="widget-subheading">Registered</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-success">
                                                                45,9%
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="bg-transparent list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Total Payouts</div>
                                                            <div class="widget-subheading">All time</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-danger">
                                                                $3M
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <ul class="list-group list-group-flush">
                                        <li class="bg-transparent list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Total Riders</div>
                                                            <div class="widget-subheading">Registered</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-success">
                                                                1896
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="bg-transparent list-group-item">
                                            <div class="widget-content p-0">
                                                <div class="widget-content-outer">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">Total Bonuses</div>
                                                            <div class="widget-subheading">All time</div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-primary">
                                                                $12.6k
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection