<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Finsol | Admin Dashboard</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link href="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/simplebar.min.js') }}"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
</head>

<body>
    <div id="app">
        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <main class="main" id="top">
            <div class="container-fluid" data-layout="container">
                <!-- ===============================================-->
                <!--    Sidebar Content-->
                <!-- ===============================================-->
                <nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
                    <div class="d-md-flex d-none align-items-center">
                        <div class="toggle-icon-wrapper">
                            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle"
                                data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation">
                                <span class="navbar-toggle-icon">
                                    <span class="toggle-line"></span>
                                </span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="{{ url('admin') }}">
                            <div class="d-flex align-items-center py-3">
                                <a href="{{ url('admin') }}">
                                    <img class="me-2" src="{{ asset('assets/img/logos/finsol.png') }}" alt=""
                                        width="120" />
                                </a>
                            </div>
                        </a>
                    </div>
                    <!-- Current Sidebar -->
                    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
                        <div class="navbar-vertical-content scrollbar">
                            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                                <li class="nav-item">
                                    <!-- parent pages-->
                                    <a class="nav-link" href="{{ url('admin') }}">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-icon">
                                                <span class="fas fa-chart-pie"></span>
                                            </span>
                                            <span class="nav-link-text ps-1">Dashboard</span>
                                        </div>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link dropdown-indicator" href="#users" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    class="fas fa-file-alt"></span></span><span
                                                class="nav-link-text ps-1">Users</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse" id="users">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/users/all') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">All Users</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        @if (Auth::user()->type_of_user === 'Head Office')
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url('admin/employee/all') }}">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text ps-1">All
                                                            Offices</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url('admin/users/addform') }}">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text ps-1">Add
                                                            Office</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        @endif
                                    </ul>
                                </li>
                                @if (Auth::user()->type_of_user === 'Head Office')
                                    <li class="nav-item">
                                        <a class="nav-link dropdown-indicator" href="#payment" role="button"
                                            data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                        class="fas fa-rupee-sign"></span></span><span
                                                    class="nav-link-text ps-1">Payment</span>
                                            </div>
                                        </a>
                                        <ul class="nav collapse" id="payment">
                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ url('admin/payment/history') }}">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text ps-1">History</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                            </li>

                                            <li class="nav-item"><a class="nav-link"
                                                    href="{{ url('admin/payment/form-value') }}">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text ps-1">Form
                                                            Value</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                        <ul class="nav collapse" id="all-forms">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url('admin/forms/GST') }}">
                                                    <div class="d-flex align-items-center">
                                                        <span class="nav-link-text ps-1">GST</span>
                                                    </div>
                                                </a><!-- more inner pages-->
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                                <li class="nav-item">
                                    <a class="nav-link dropdown-indicator" href="#forms" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    class="fas fa-file-alt"></span></span><span
                                                class="nav-link-text ps-1">All
                                                Forms</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse" id="forms">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/forms/PAN?form_type=pan') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">PAN</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/forms/TAN?form_type=tan') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">TAN</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/forms/GST?form_type=gst') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">GST</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/forms/EPF?form_type=epf') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">EPF</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/forms/ESIC?form_type=esic') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">ESIC</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/trademark?form_type=trademark') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Trade
                                                        Mark</span></div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/company?form_type=company') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Company</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/partnership?form_type=partnership') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Partnership</span></div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/forms/HUF?form_type=huf') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">HUF</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/trust?form_type=trust') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Trust/NGO</span></div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/udamy?form_type=udamy') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Udamy</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/import-export?form_type=import') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Import Export
                                                        Code</span></div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/labour?form_type=labour') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Labour
                                                        Licence</span></div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/forms/shop?form_type=shop') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Shop and
                                                        Establishment</span></div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/forms/ISO?form_type=iso') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">ISO</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/forms/ISI?form_type=isi') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">ISI</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/FSSAI?form_type=fssai') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">FSSAI
                                                        License</span></div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/factory-license?form_type=factory') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Factory
                                                        License</span></div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/forms/ITR?form_type=itr') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">ITR</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/forms/TDS?form_type=tds') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">TDS/TCS
                                                        Returns</span></div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/tax-audit?form_type=tax') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Tax
                                                        Audit</span></div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/statutory-audit?form_type=sa') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Statutory
                                                        Audit</span></div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/DIN-KYC?form_type=din_kyc') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">DIN KYC</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/forms/AOC?form_type=aoc') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">AOC-4</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/forms/MGT?form_type=mgt') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">MGT-7</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/forms/ADT?form_type=adt') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">ADT-1</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/minute?form_type=minute') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Minutes</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/legal-form?form_type=legal') }}">
                                                <div class="d-flex align-items-center">
                                                    <span class="nav-link-text ps-1">
                                                        Legal Form
                                                    </span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/estimated?form_type=estimated') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Estimated/Projected</span></div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/forms/CMA?form_type=cma') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">CMA</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/project-report?form_type=project_report') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Project
                                                        Report</span></div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/forms/CA?form_type=ca') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">CA
                                                        Certificate</span></div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/net-worth?form_type=worth') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Networth</span></div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ url('admin/forms/turnover?form_type=turnover') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Turnover
                                                        Certificate</span></div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dropdown-indicator" href="#status" role="button"
                                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                                    class="fas fa-file-alt"></span></span><span
                                                class="nav-link-text ps-1">Status</span>
                                        </div>
                                    </a>
                                    <ul class="nav collapse" id="status">

                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/status/processing') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Processing</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/status/query-raised') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Query
                                                        Raised</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/status/query-updated') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Query
                                                        Updated</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('admin/status/approved') }}">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text ps-1">Approved</span>
                                                </div>
                                            </a><!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="content">
                    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand">
                        <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                            aria-controls="navbarVerticalCollapse" aria-expanded="false"
                            aria-label="Toggle Navigation">
                            <span class="navbar-toggle-icon">
                                <span class="toggle-line"></span>
                            </span>
                        </button>
                        <a class="navbar-brand me-1 me-sm-3" href="{{ url('admin') }}">
                            <div class="d-flex align-items-center">
                                <img class="me-2" src="{{ asset('assets/img/logos/finsol.png') }}" alt=""
                                    width="80" />
                            </div>
                        </a>
                        <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                            <li class="nav-item px-2">
                                <div class="theme-control-toggle fa-icon-wait"><input
                                        class="form-check-input ms-0 theme-control-toggle-input"
                                        id="themeControlToggle" type="checkbox" data-theme-control="theme"
                                        value="dark" /><label
                                        class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="Switch to light theme"><span
                                            class="fas fa-sun fs-0"></span></label><label
                                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="Switch to dark theme"><span class="fas fa-moon fs-0"></span></label>
                                </div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <div class="avatar avatar-xl">
                                        <img class="rounded-circle" src="{{ asset('assets/img/team/3-thumb.png') }}"
                                            alt="" />
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                                    aria-labelledby="navbarDropdownUser">
                                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                        <!-- <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout1</a> -->
                                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                            style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        <a class="dropdown-item"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- ===============================================-->
                    <!--   End of Sidebar Content-->
                    <!-- ===============================================-->
                    @yield('content')

                    <footer class="footer">
                        <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                            <div class="col-12 col-sm-auto text-center">
                                <p class="mb-0 text-600">All Rights Reserved <span class="d-none d-sm-inline-block">|
                                    </span><br class="d-sm-none" /> 2024 &copy; <a href="https://kwad.in/">Kwad</a>
                                </p>
                            </div>
                            <div class="col-12 col-sm-auto text-center">
                                <p class="mb-0 text-600">v1.0.0</p>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </main><!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->

    </div>
    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs5/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('vendors/lodash/lodash.min.js') }}"></script>
    <script src="{{ asset('vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
    <script src="{{ mix('js/dashboard.js') }}"></script>
    <script>
        var urlpath = "{{ url('/register') }}";

        $(document).ready(function() {
            $('#filter-select-state').change(function() {
                var stateId = $(this).val();
                console.log(urlpath);
                if (stateId) {
                    $.ajax({
                        url: urlpath + '/get-districts/' + stateId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#filter-select-district').empty().append(
                                '<option value="">Select District</option>');
                            $.each(data, function(key, value) {
                                $('#filter-select-district').append('<option value="' +
                                    value
                                    .d_code + '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#filter-select-district').empty().append(
                        '<option value="">Select District</option>');
                    $('#filter-select-block').empty().append('<option value="">Select Block</option>');
                }
            });

            $('#filter-select-district').change(function() {
                var districtId = $(this).val();
                if (districtId) {
                    $.ajax({
                        url: urlpath + '/get-blocks/' + districtId,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            $('#filter-select-block').empty().append(
                                '<option value="">Select Block</option>');
                            $.each(data, function(key, value) {
                                $('#filter-select-block').append('<option value="' +
                                    value.id +
                                    '">' + value.name + '</option>');
                            });
                        }
                    });
                } else {
                    $('#filter-select-block').empty().append('<option value="">Select Block</option>');
                }
            });
        });
    </script>
</body>

</html>
