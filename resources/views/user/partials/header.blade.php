<nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
        </div><a class="navbar-brand" href="{{ route('home') }}">
            <div class="d-flex align-items-center py-3"><img class="me-2"
                    src="{{ asset('assets/img/logos/finsol.png') }}" alt="" width="120" /></div>
        </a>
    </div>
    <div class="collapse navbggrad navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content navbggrad scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <!-- <li class="nav-item">
                   
                    <a class="nav-link" href="#dashboard" role="button"
                        data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-chart-pie"></span></span><span
                                class="nav-link-text ps-1">Dashboard</span></div>
                    </a>
                    
                </li> -->
                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#registration" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="registration">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-chart-pie"></span></span><span
                                class="nav-link-text ps-1">Registration</span></div>
                    </a>
                    <ul class="nav collapse show" id="registration">
                        <?php $rowcount = App\Models\User::getAnyoftheformshasrecord(); ?>
                        @if (isset($rowcount) && $rowcount > 0)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('form_dashboard') }}">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Dashboard</span></div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pan.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">PAN</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tan.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">TAN</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('gst') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">GST</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('epf.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">EPF</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('esic.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">ESIC</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('trademark.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Trade
                                        Mark</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('company.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Company</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('partnership.register_form') }}">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Partnership</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('huf.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">HUF</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('trust.register_form') }}">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Trust/NGO</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('udamy.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Udamy</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('importexport.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Import Export
                                        Code</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('labour.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Labour
                                        Licence</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('shop.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Shop and
                                        Establishment</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('iso.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">ISO</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('isi.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">ISI</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('fssai.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">FSSAI
                                        License</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('factorylicense.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Factory
                                        License</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#gstact" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="gstact">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-graduation-cap"></span></span><span class="nav-link-text ps-1">GST
                                Act</span></div>
                    </a>
                    <ul class="nav collapse" id="gstact">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('gst') }}">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Dashboard</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('gst.business_status') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Status</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('gst.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">New
                                        Registration</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('gst.existing_register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Exisitng
                                        Registration</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="dashboard/analytics.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Upload
                                        Documents</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard/analytics.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Copy of
                                        Returns</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard/analytics.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Hearing &
                                        Appeal</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li> --}}

                    </ul>
                </li>
                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#itact" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="itact">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">IT
                                Act</span></div>
                    </a>
                    <ul class="nav collapse" id="itact">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('it_act.dashboard') }}">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Dashboard</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('itr.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">ITR</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('tds.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">TDS/TCS
                                        Returns</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('taxaudit.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tax
                                        Audit</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>

                        {{-- <li class="nav-item">
                            <a class="nav-link" href="dashboard/analytics.html">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Hearing &
                                        Appeal</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li> --}}

                    </ul>
                </li>
                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#companiesact" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="companiesact">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-calendar-day"></span></span><span
                                class="nav-link-text ps-1">Companies Act</span></div>
                    </a>
                    <ul class="nav collapse" id="companiesact">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('companiesact_dashboard') }}">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Dashboard</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('statutoryaudit.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Statutory
                                        Audit</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('dinkyc.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">DIN KYC</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('aoc.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">AOC-4</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('mgt.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">MGT-7</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('adt.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">ADT-1</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('minutes.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Minutes</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#legalwork" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="legalwork">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fab fa-trello"></span></span><span class="nav-link-text ps-1">Legal
                                Work</span></div>
                    </a>
                    <ul class="nav collapse" id="legalwork">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('legalwork.dashboard') }}">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Dashboard</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('legalwork.register_form') }}">
                                <div class="d-flex align-items-center">
                                    <span class="nav-link-text ps-1">
                                        Legal Form
                                    </span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#loan" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="loan">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-ticket-alt"></span></span><span class="nav-link-text ps-1">Loan &
                                Finance</span></div>
                    </a>
                    <ul class="nav collapse" id="loan">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('loan_dashboard') }}">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Dashboard</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('estimated.register_form') }}">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Estimated/Projected</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('cma.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">CMA</span>
                                </div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('projectReport.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Project
                                        Report</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#certification" role="button"
                        data-bs-toggle="collapse" aria-expanded="false" aria-controls="certification">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="far fa-window-restore"></span></span><span
                                class="nav-link-text ps-1">Certification</span></div>
                    </a>
                    <ul class="nav collapse" id="certification">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('certification_dashboard') }}">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Dashboard</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('ca.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">CA
                                        Certificate</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('networth.register_form') }}">
                                <div class="d-flex align-items-center"><span
                                        class="nav-link-text ps-1">Networth</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('turnover.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Turnover
                                        Certificate</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#payments" role="button" data-bs-toggle="collapse"
                        aria-expanded="false" aria-controls="payments">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-shopping-cart"></span></span><span
                                class="nav-link-text ps-1">Payments</span></div>
                    </a>
                    <ul class="nav collapse" id="payments">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('pay.register_form') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Custom
                                        Payment</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('form_payment') }}">
                                <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Payment
                                        History</span></div>
                            </a>
                            <!-- more inner pages-->
                        </li>

                    </ul>
                </li>

            </ul>

        </div>
    </div>
</nav>

<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">

</nav>

<div class="content">
    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">

        <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item px-2">
                <div class="theme-control-toggle fa-icon-wait"><input
                        class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                        type="checkbox" data-theme-control="theme" value="dark" /><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span
                            class="fas fa-sun fs-0"></span></label><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span
                            class="fas fa-moon fs-0"></span></label></div>
            </li>
            <!-- <li class="nav-item d-none d-sm-block">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                    href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
                        data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
                        class="notification-indicator-number">1</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                    id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
                        data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                    aria-labelledby="navbarDropdownNotification">
                    <div class="card card-notification shadow-none">
                        <div class="card-header">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <h6 class="card-header-title mb-0">Notifications</h6>
                                </div>
                                <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as
                                        read</a>
                                </div>
                            </div>
                        </div>
                        <div class="scrollbar-overlay" style="max-height:19rem">
                            <div class="list-group list-group-flush fw-normal fs--1">
                                <div class="list-group-title border-bottom">NEW</div>
                                <div class="list-group-item">
                                    <a class="notification notification-flush notification-unread" href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-2xl me-3">
                                                <img class="rounded-circle" src="../../../assets/img/team/1-thumb.png"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="notification-body">
                                            <p class="mb-1"><strong>Emma Watson</strong> replied to your comment :
                                                "Hello world 😍"</p>
                                            <span class="notification-time"><span class="me-2" role="img"
                                                    aria-label="Emoji">💬</span>Just now</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group-item">
                                    <a class="notification notification-flush notification-unread" href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-2xl me-3">
                                                <div class="avatar-name rounded-circle"><span>AB</span></div>
                                            </div>
                                        </div>
                                        <div class="notification-body">
                                            <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia
                                                    Khalifa's</strong>
                                                status</p>
                                            <span class="notification-time"><span
                                                    class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group-title border-bottom">EARLIER</div>
                                <div class="list-group-item">
                                    <a class="notification notification-flush" href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-2xl me-3">
                                                <img class="rounded-circle"
                                                    src="../../../assets/img/icons/weather-sm.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="notification-body">
                                            <p class="mb-1">The forecast today shows a low of 20&#8451; in California.
                                                See today's
                                                weather.</p>
                                            <span class="notification-time"><span class="me-2" role="img"
                                                    aria-label="Emoji">🌤️</span>1d</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group-item">
                                    <a class="border-bottom-0 notification-unread  notification notification-flush"
                                        href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-xl me-3">
                                                <img class="rounded-circle" src="../../../assets/img/logos/oxford.png"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="notification-body">
                                            <p class="mb-1"><strong>University of Oxford</strong> created an event :
                                                "Causal Inference
                                                Hilary 2019"</p>
                                            <span class="notification-time"><span class="me-2" role="img"
                                                    aria-label="Emoji">✌️</span>1w</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group-item">
                                    <a class="border-bottom-0 notification notification-flush" href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-xl me-3">
                                                <img class="rounded-circle" src="../../../assets/img/team/10.jpg"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="notification-body">
                                            <p class="mb-1"><strong>James Cameron</strong> invited to join the group:
                                                United Nations
                                                International Children's Fund</p>
                                            <span class="notification-time"><span class="me-2" role="img"
                                                    aria-label="Emoji">🙋‍</span>2d</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top"><a class="card-link d-block"
                                href="app/social/notifications.html">View all</a></div>
                    </div>
                </div>
            </li> -->

            <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-xl">
                        <img class="rounded-circle" src="{{ asset('assets/img/team/3-thumb.png') }}"
                            alt="" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                    aria-labelledby="navbarDropdownUser">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                        <!-- <a class="dropdown-item fw-bold text-warning" href="#!"><span
                                class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                        <div class="dropdown-divider"></div> -->
                        {{-- <a class="dropdown-item" href="{{url('settings')}}">Settings</a> --}}
                        <a class="dropdown-item" href="{{ url('profile') }}">Profile &amp; account</a>

                        <div class="dropdown-divider"></div>

                        <!-- <a class="dropdown-item" href="pages/authentication/card/logout.html">Logoutdd</a> -->
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;"
        data-move-target="#navbarVerticalNav" data-navbar-top="combo">
        <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse"
            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                    class="toggle-line"></span></span></button>

        <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item px-2">
                <div class="theme-control-toggle fa-icon-wait"><input
                        class="form-check-input ms-0 theme-control-toggle-input" id="themeControlToggle"
                        type="checkbox" data-theme-control="theme" value="dark" /><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-light" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to light theme"><span
                            class="fas fa-sun fs-0"></span></label><label
                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark" for="themeControlToggle"
                        data-bs-toggle="tooltip" data-bs-placement="left" title="Switch to dark theme"><span
                            class="fas fa-moon fs-0"></span></label></div>
            </li>
            <li class="nav-item d-none d-sm-block">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
                    href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart"
                        data-fa-transform="shrink-7" style="font-size: 33px;"></span><span
                        class="notification-indicator-number">1</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
                    id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span
                        class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                    aria-labelledby="navbarDropdownNotification">
                    <div class="card card-notification shadow-none">
                        <div class="card-header">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <h6 class="card-header-title mb-0">Notifications</h6>
                                </div>
                                <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark
                                        all as
                                        read</a>
                                </div>
                            </div>
                        </div>
                        <div class="scrollbar-overlay" style="max-height:19rem">
                            <div class="list-group list-group-flush fw-normal fs--1">
                                <div class="list-group-title border-bottom">NEW</div>
                                <div class="list-group-item">
                                    <a class="notification notification-flush notification-unread" href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-2xl me-3">
                                                <img class="rounded-circle" src="../../../assets/img/team/1-thumb.png"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="notification-body">
                                            <p class="mb-1"><strong>Emma Watson</strong> replied to your comment :
                                                "Hello world 😍"</p>
                                            <span class="notification-time"><span class="me-2" role="img"
                                                    aria-label="Emoji">💬</span>Just now</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group-item">
                                    <a class="notification notification-flush notification-unread" href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-2xl me-3">
                                                <div class="avatar-name rounded-circle"><span>AB</span></div>
                                            </div>
                                        </div>
                                        <div class="notification-body">
                                            <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia
                                                    Khalifa's</strong>
                                                status</p>
                                            <span class="notification-time"><span
                                                    class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group-title border-bottom">EARLIER</div>
                                <div class="list-group-item">
                                    <a class="notification notification-flush" href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-2xl me-3">
                                                <img class="rounded-circle"
                                                    src="../../../assets/img/icons/weather-sm.jpg" alt="" />
                                            </div>
                                        </div>
                                        <div class="notification-body">
                                            <p class="mb-1">The forecast today shows a low of 20&#8451; in
                                                California.
                                                See today's
                                                weather.</p>
                                            <span class="notification-time"><span class="me-2" role="img"
                                                    aria-label="Emoji">🌤️</span>1d</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group-item">
                                    <a class="border-bottom-0 notification-unread  notification notification-flush"
                                        href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-xl me-3">
                                                <img class="rounded-circle" src="../../../assets/img/logos/oxford.png"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="notification-body">
                                            <p class="mb-1"><strong>University of Oxford</strong> created an event :
                                                "Causal Inference
                                                Hilary 2019"</p>
                                            <span class="notification-time"><span class="me-2" role="img"
                                                    aria-label="Emoji">✌️</span>1w</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-group-item">
                                    <a class="border-bottom-0 notification notification-flush" href="#!">
                                        <div class="notification-avatar">
                                            <div class="avatar avatar-xl me-3">
                                                <img class="rounded-circle" src="../../../assets/img/team/10.jpg"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="notification-body">
                                            <p class="mb-1"><strong>James Cameron</strong> invited to join the group:
                                                United Nations
                                                International Children's Fund</p>
                                            <span class="notification-time"><span class="me-2" role="img"
                                                    aria-label="Emoji">🙋‍</span>2d</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center border-top"><a class="card-link d-block"
                                href="app/social/notifications.html">View all</a></div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown px-1">
                <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button"
                    data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg"
                        width="16" height="43" viewBox="0 0 16 16" fill="none">
                        <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                        <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                        <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                        <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                        <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                        <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                        <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                        <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                        <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                    </svg></a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg"
                    aria-labelledby="navbarDropdownMenu">
                    <div class="card shadow-none">
                        <div class="scrollbar-overlay nine-dots-dropdown">
                            <div class="card-body px-3">
                                <div class="row text-center gx-0 gy-0">
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="pages/user/profile.html" target="_blank">
                                            <div class="avatar avatar-2xl"> <img class="rounded-circle"
                                                    src="../../../assets/img/team/3.jpg" alt="" /></div>
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2">Account</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="https://themewagon.com/" target="_blank"><img class="rounded"
                                                src="../../../assets/img/nav-icons/themewagon.png" alt=""
                                                width="40" height="40" />
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Themewagon</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="https://mailbluster.com/" target="_blank"><img class="rounded"
                                                src="../../../assets/img/nav-icons/mailbluster.png" alt=""
                                                width="40" height="40" />
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Mailbluster</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="#!" target="_blank"><img class="rounded"
                                                src="../../../assets/img/nav-icons/google.png" alt=""
                                                width="40" height="40" />
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Google</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="#!" target="_blank"><img class="rounded"
                                                src="../../../assets/img/nav-icons/spotify.png" alt=""
                                                width="40" height="40" />
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Spotify</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="#!" target="_blank"><img class="rounded"
                                                src="../../../assets/img/nav-icons/steam.png" alt=""
                                                width="40" height="40" />
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Steam</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="#!" target="_blank"><img class="rounded"
                                                src="../../../assets/img/nav-icons/github-light.png" alt=""
                                                width="40" height="40" />
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Github</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="#!" target="_blank"><img class="rounded"
                                                src="../../../assets/img/nav-icons/discord.png" alt=""
                                                width="40" height="40" />
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Discord</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="#!" target="_blank"><img class="rounded"
                                                src="../../../assets/img/nav-icons/xbox.png" alt=""
                                                width="40" height="40" />
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">xbox</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="#!" target="_blank"><img class="rounded"
                                                src="../../../assets/img/nav-icons/trello.png" alt=""
                                                width="40" height="40" />
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Kanban</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="#!" target="_blank"><img class="rounded"
                                                src="../../../assets/img/nav-icons/hp.png" alt=""
                                                width="40" height="40" />
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Hp</p>
                                        </a></div>
                                    <div class="col-12">
                                        <hr class="my-3 mx-n3 bg-200" />
                                    </div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="#!" target="_blank"><img class="rounded"
                                                src="../../../assets/img/nav-icons/linkedin.png" alt=""
                                                width="40" height="40" />
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Linkedin</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="#!" target="_blank"><img class="rounded"
                                                src="../../../assets/img/nav-icons/twitter.png" alt=""
                                                width="40" height="40" />
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Twitter</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="#!" target="_blank"><img class="rounded"
                                                src="../../../assets/img/nav-icons/facebook.png" alt=""
                                                width="40" height="40" />
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Facebook</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="#!" target="_blank"><img class="rounded"
                                                src="../../../assets/img/nav-icons/instagram.png" alt=""
                                                width="40" height="40" />
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Instagram</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="#!" target="_blank"><img class="rounded"
                                                src="../../../assets/img/nav-icons/pinterest.png" alt=""
                                                width="40" height="40" />
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Pinterest</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="#!" target="_blank"><img class="rounded"
                                                src="../../../assets/img/nav-icons/slack.png" alt=""
                                                width="40" height="40" />
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Slack</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="#!" target="_blank"><img class="rounded"
                                                src="../../../assets/img/nav-icons/deviantart.png" alt=""
                                                width="40" height="40" />
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2 pt-1">Deviantart</p>
                                        </a></div>
                                    <div class="col-4"><a
                                            class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                            href="app/events/event-detail.html" target="_blank">
                                            <div class="avatar avatar-2xl">
                                                <div class="avatar-name rounded-circle bg-primary-subtle text-primary">
                                                    <span class="fs-2">E</span>
                                                </div>
                                            </div>
                                            <p class="mb-0 fw-medium text-800 text-truncate fs--2">Events</p>
                                        </a></div>
                                    <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4"
                                            href="#!">Show
                                            more</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-xl">
                        <img class="rounded-circle" src="{{ asset('../../../assets/img/team/3-thumb.png') }}"
                            alt="" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                    aria-labelledby="navbarDropdownUser">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                        <a class="dropdown-item fw-bold text-warning" href="#!"><span
                                class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#!">Set status</a>
                        <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>
                        <a class="dropdown-item" href="#!">Feedback</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                        <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout4</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
