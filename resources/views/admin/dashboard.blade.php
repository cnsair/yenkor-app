@extends('layouts.app-admin')

@section('content')
    
    <div class="app-inner-layout__wrapper">
        <div class="app-inner-layout__sidebar">
            <div class="app-layout__sidebar-inner dropdown-menu-rounded">
                <div class="nav flex-column">
                    <div class="nav-item-header text-primary nav-item">
                        Dashboard Shortcuts
                    </div>
                    <a class="dropdown-item active" href="analytics-dashboard.html">Analytics</a>
                    <a class="dropdown-item" href="management-dashboard.html">Management</a>
                    <a class="dropdown-item" href="advertisement-dashboard.html">Advertisement</a>
                    <a class="dropdown-item" href="index-2.html">Helpdesk</a>
                    <a class="dropdown-item" href="monitoring-dashboard.html">Monitoring</a>
                    <a class="dropdown-item" href="crypto-dashboard.html">Cryptocurrency</a>
                    <a class="dropdown-item" href="pm-dashboard.html">Project Management</a>
                    <a class="dropdown-item" href="product-dashboard.html">Product</a>
                    <a class="dropdown-item" href="statistics-dashboard.html">Statistics</a>
                </div>                            
            </div>
        </div>
        <div class="app-inner-layout__content">
            <div class="tab-content">
                <div class="container-fluid">
                    <div class="mb-3 card">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                                Portfolio Performance
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
                                        <i class="lnr-laptop-phone text-dark opacity-8"></i></div>
                                    <div class="widget-chart-content">
                                        <div class="widget-subheading">Cash Deposits</div>
                                        <div class="widget-numbers">1,7M</div>
                                        <div class="widget-description opacity-8 text-focus">
                                            <div class="d-inline text-danger pr-1">
                                                <i class="fa fa-angle-down"></i>
                                                <span class="pl-1">54.1%</span>
                                            </div>
                                            less earnings
                                        </div>
                                    </div>
                                </div>
                                <div class="divider m-0 d-md-none d-sm-block"></div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-xl-4">
                                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                    <div class="icon-wrapper rounded-circle">
                                        <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                        <i class="lnr-graduation-hat text-white"></i></div>
                                    <div class="widget-chart-content">
                                        <div class="widget-subheading">Invested Dividents</div>
                                        <div class="widget-numbers"><span>9M</span></div>
                                        <div class="widget-description opacity-8 text-focus">
                                            Grow Rate:
                                            <span class="text-info pl-1">
                            <i class="fa fa-angle-down"></i>
                            <span class="pl-1">14.1%</span>
                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider m-0 d-md-none d-sm-block"></div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-xl-4">
                                <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                    <div class="icon-wrapper rounded-circle">
                                        <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                        <i class="lnr-apartment text-white"></i></div>
                                    <div class="widget-chart-content">
                                        <div class="widget-subheading">Capital Gains</div>
                                        <div class="widget-numbers text-success"><span>$563</span></div>
                                        <div class="widget-description text-focus">
                                            Increased by
                                            <span class="text-warning pl-1">
                            <i class="fa fa-angle-up"></i>
                            <span class="pl-1">7.35%</span>
                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center d-block p-3 card-footer">
                            <button class="btn-pill btn-wide fsize-1 btn btn-primary">
            <span class="mr-2 opacity-7">
                <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
            </span>
                                <span class="mr-1">View Complete Report</span>
                            </button>
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-success border-success">
                                <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-content pt-3 pl-3 pb-1">
                                        <div class="widget-chart-flex">
                                            <div class="widget-numbers">
                                                <div class="widget-chart-flex">
                                                    <div class="fsize-4">
                                                        <small class="opacity-5">$</small>
                                                        <span>874</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="widget-subheading mb-0 opacity-5">sales last
                                            month</h6></div>
                                    <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                        <div class="col-md-9">
                                            <div id="dashboard-sparklines-1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-primary border-primary">
                                <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-content pt-3 pl-3 pb-1">
                                        <div class="widget-chart-flex">
                                            <div class="widget-numbers">
                                                <div class="widget-chart-flex">
                                                    <div class="fsize-4">
                                                        <small class="opacity-5">$</small>
                                                        <span>1283</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="widget-subheading mb-0 opacity-5">sales Income</h6>
                                    </div>
                                    <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                        <div class="col-md-9">
                                            <div id="dashboard-sparklines-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-warning border-warning">
                                <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-content pt-3 pl-3 pb-1">
                                        <div class="widget-chart-flex">
                                            <div class="widget-numbers">
                                                <div class="widget-chart-flex">
                                                    <div class="fsize-4">
                                                        <small class="opacity-5">$</small>
                                                        <span>1286</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="widget-subheading mb-0 opacity-5">last month
                                            sales</h6></div>
                                    <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                        <div class="col-md-9">
                                            <div id="dashboard-sparklines-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-danger border-danger">
                                <div class="widget-chat-wrapper-outer">
                                    <div class="widget-chart-content pt-3 pl-3 pb-1">
                                        <div class="widget-chart-flex">
                                            <div class="widget-numbers">
                                                <div class="widget-chart-flex">
                                                    <div class="fsize-4">
                                                        <small class="opacity-5">$</small>
                                                        <span>564</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <h6 class="widget-subheading mb-0 opacity-5">total revenue</h6>
                                    </div>
                                    <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                        <div class="col-md-9">
                                            <div id="dashboard-sparklines-4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                <i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Easy
                                Dynamic Tables
                            </div>
                            <div class="btn-actions-pane-right actions-icon-btn">
                                <div class="btn-group dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false"
                                            class="btn-icon btn-icon-only btn btn-link"><i
                                            class="pe-7s-menu btn-icon-wrapper"></i></button>
                                    <div tabindex="-1" role="menu" aria-hidden="true"
                                            class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                        <h6 tabindex="-1" class="dropdown-header">
                                            Header</h6>
                                        <button type="button" tabindex="0" class="dropdown-item"><i
                                                class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                        </button>
                                        <button type="button" tabindex="0" class="dropdown-item"><i
                                                class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                        </button>
                                        <button type="button" tabindex="0" class="dropdown-item"><i
                                                class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                        </button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <div class="p-3 text-right">
                                            <button class="mr-2 btn-shadow btn-sm btn btn-link">View
                                                Details
                                            </button>
                                            <button class="mr-2 btn-shadow btn-sm btn btn-primary">
                                                Action
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table style="width: 100%;" id="example"
                                    class="table table-hover table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Michael Bruce</td>
                                    <td>Javascript Developer</td>
                                    <td>Singapore</td>
                                    <td>29</td>
                                    <td>2011/06/27</td>
                                    <td>$183,000</td>
                                </tr>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-lg-6">
                            <div class="card-hover-shadow-2x mb-3 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                        <i class="header-icon lnr-database icon-gradient bg-malibu-beach"> </i>Tasks
                                        List
                                    </div>
                                    <div class="btn-actions-pane-right text-capitalize actions-icon-btn">
                                        <div class="btn-group dropdown">
                                            <button type="button" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    class="btn-icon btn-icon-only btn btn-link"><i
                                                    class="pe-7s-menu btn-icon-wrapper"></i></button>
                                            <div tabindex="-1" role="menu" aria-hidden="true"
                                                    class="dropdown-menu-right rm-pointers dropdown-menu-shadow dropdown-menu-hover-link dropdown-menu">
                                                <h6 tabindex="-1"
                                                    class="dropdown-header">
                                                    Header</h6>
                                                <button type="button" tabindex="0"
                                                        class="dropdown-item"><i
                                                        class="dropdown-icon lnr-inbox"> </i><span>Menus</span>
                                                </button>
                                                <button type="button" tabindex="0"
                                                        class="dropdown-item"><i
                                                        class="dropdown-icon lnr-file-empty"> </i><span>Settings</span>
                                                </button>
                                                <button type="button" tabindex="0"
                                                        class="dropdown-item"><i
                                                        class="dropdown-icon lnr-book"> </i><span>Actions</span>
                                                </button>
                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                <div class="p-3 text-right">
                                                    <button class="mr-2 btn-shadow btn-sm btn btn-link">
                                                        View Details
                                                    </button>
                                                    <button class="mr-2 btn-shadow btn-sm btn btn-primary">
                                                        Action
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="scroll-area-lg">
                                    <div class="scrollbar-container">
                                        <div class="p-2">
                                            <ul class="todo-list-wrapper list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <div class="todo-indicator bg-warning"></div>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-2">
                                                                <div class="custom-checkbox custom-control">
                                                                    <input type="checkbox"
                                                                            id="exampleCustomCheckbox12"
                                                                            class="custom-control-input"><label
                                                                        class="custom-control-label"
                                                                        for="exampleCustomCheckbox12">&nbsp;</label>
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Wash the car
                                                                    <div class="badge badge-danger ml-2">
                                                                        Rejected
                                                                    </div>
                                                                </div>
                                                                <div class="widget-subheading"><i>Written
                                                                    by Bob</i></div>
                                                            </div>
                                                            <div class="widget-content-right widget-content-actions">
                                                                <button class="border-0 btn-transition btn btn-outline-success">
                                                                    <i class="fa fa-check"></i>
                                                                </button>
                                                                <button class="border-0 btn-transition btn btn-outline-danger">
                                                                    <i class="fa fa-trash-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                                <li class="list-group-item">
                                                    <div class="todo-indicator bg-primary"></div>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-2">
                                                                <div class="custom-checkbox custom-control">
                                                                    <input type="checkbox"
                                                                            id="exampleCustomCheckbox4"
                                                                            class="custom-control-input"><label
                                                                        class="custom-control-label"
                                                                        for="exampleCustomCheckbox4">&nbsp;</label>
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">Badge on the
                                                                    right task
                                                                </div>
                                                                <div class="widget-subheading">This task
                                                                    has show on hover actions!
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-right widget-content-actions">
                                                                <button class="border-0 btn-transition btn btn-outline-success">
                                                                    <i class="fa fa-check"></i>
                                                                </button>
                                                            </div>
                                                            <div class="widget-content-right ml-3">
                                                                <div class="badge badge-pill badge-success">
                                                                    Latest Task
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                                <li class="list-group-item">
                                                    <div class="todo-indicator bg-success"></div>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-2">
                                                                <div class="custom-checkbox custom-control">
                                                                    <input type="checkbox"
                                                                            id="exampleCustomCheckbox3"
                                                                            class="custom-control-input"><label
                                                                        class="custom-control-label"
                                                                        for="exampleCustomCheckbox3">&nbsp;</label>
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">Development
                                                                    Task
                                                                </div>
                                                                <div class="widget-subheading">Finish
                                                                    React ToDo List App
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="badge badge-warning mr-2">
                                                                    69
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <button class="border-0 btn-transition btn btn-outline-success">
                                                                    <i class="fa fa-check"></i>
                                                                </button>
                                                                <button class="border-0 btn-transition btn btn-outline-danger">
                                                                    <i class="fa fa-trash-alt"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-block text-right card-footer">
                                    <button class="mr-2 btn btn-link btn-sm">Cancel</button>
                                    <button class="btn btn-primary">Add Task</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <div class="card-hover-shadow-2x mb-3 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                        <i class="header-icon lnr-printer icon-gradient bg-ripe-malin"> </i>Chat
                                        Box
                                    </div>
                                </div>
                            </div>
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
                                                            <div class="widget-heading">Total Orders
                                                            </div>
                                                            <div class="widget-subheading">Last year
                                                                expenses
                                                            </div>
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
                                                            <div class="widget-heading">Clients</div>
                                                            <div class="widget-subheading">Total Clients
                                                                Profit
                                                            </div>
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
                                                            <div class="widget-heading">Followers</div>
                                                            <div class="widget-subheading">People
                                                                Interested
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-danger">
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
                                                            <div class="widget-heading">Products Sold
                                                            </div>
                                                            <div class="widget-subheading">Total revenue
                                                                streams
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right">
                                                            <div class="widget-numbers text-warning">
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
                                                            <div class="widget-heading">Total Orders
                                                            </div>
                                                            <div class="widget-subheading">Last year
                                                                expenses
                                                            </div>
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
                                                            <div class="widget-heading">Clients</div>
                                                            <div class="widget-subheading">Total Clients
                                                                Profit
                                                            </div>
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