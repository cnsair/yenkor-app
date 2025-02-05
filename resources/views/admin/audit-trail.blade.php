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
                                Audit Trail Logs
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Page Visited</th>
                                        <th>IP Address</th>
                                        <th>Registered</th>
                                        <th>Timestamp</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($auditTrails as $log)
                                        <tr>
                                            <td>{{ $log->user_id ? $log->user->name : 'Guest' }}</td>
                                            <td>{{ $log->page_visited }}</td>
                                            <td>{{ $log->ip_address }}</td>
                                            <td>{{ $log->is_registered ? 'Yes' : 'No' }}</td>
                                            <td>{{ $log->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

@endsection