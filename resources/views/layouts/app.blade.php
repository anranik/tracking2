<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <title>Atmos Admin Panel- Bootstrap 4 Based Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/logo.png') }}"/>
    <link rel="icon" href="{{ asset('assets/img/logo.png" type="image/png') }}" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('assets/vendor/pace/pace.css') }}">
    <script src="{{ asset('assets/vendor/pace/pace.min.js') }}"></script>
    <!--vendors-->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/jquery-scrollbar/jquery.scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/timepicker/bootstrap-timepicker.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600" rel="stylesheet">
    <!--Material Icons-->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('assets/fonts/materialdesignicons/materialdesignicons.min.css') }}">
    <!--Material Icons-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/feather/feather-icons.css') }}">
    <!--Bootstrap + atmos Admin CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/atmos.min.css') }}">
    <livewire:styles />
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

    <!-- Additional library for page -->

</head>
<!--body with default sidebar pinned -->
<body class="sidebar-pinned">
<!--sidebar Begins-->
<aside class="admin-sidebar">
    <div class="admin-sidebar-brand">
        <!-- begin sidebar branding-->
        <img class="admin-brand-logo" src="{{ asset('assets/img/logo.svg') }}" width="40" alt="atmos Logo">
        <span class="admin-brand-content"><a href="index.html">  atmos</a></span>
        <!-- end sidebar branding-->
        <div class="ml-auto">
            <!-- sidebar pin-->
            <a href="#" class="admin-pin-sidebar btn-ghost btn btn-rounded-circle"></a>
            <!-- sidebar close for mobile device-->
            <a href="#" class="admin-close-sidebar"></a>
        </div>
    </div>
    <div class="admin-sidebar-wrapper js-scrollbar">
        <!-- Menu List Begins-->
        <ul class="menu">
            <!--list item begins-->
            <li class="menu-item active">
                <a href="dashboard" class="menu-link">
                  <span class="menu-label">
                  <span class="menu-name">Dashboard
                  </span>
                  </span>
                    <span class="menu-icon">
{{--                  <span class="icon-badge badge-success badge badge-pill">1</span>--}}
                  <i class="icon-placeholder fe fe-activity "></i>
                  </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="client" class="menu-link">
                  <span class="menu-label">
                  <span class="menu-name">Clients
                  </span>
                  </span>
                    <span class="menu-icon">
                  <i class="icon-placeholder mdi mdi-account"></i>
                  </span>
                </a>
            </li>


            <li class="menu-item">
                <a href="service" class="menu-link">
                  <span class="menu-label">
                  <span class="menu-name">Services
                  </span>
                  </span>
                    <span class="menu-icon">
                  <i class="icon-placeholder mdi mdi-settings"></i>
                  </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="client" class="menu-link">
                  <span class="menu-label">
                  <span class="menu-name">Reports
                  </span>
                  </span>
                    <span class="menu-icon">
                  <i class="icon-placeholder mdi mdi-chart-line-variant"></i>
                  </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="driver" class="menu-link">
                  <span class="menu-label">
                  <span class="menu-name">Drivers
                  </span>
                  </span>
                    <span class="menu-icon">
                  <i class="icon-placeholder mdi mdi-buffer"></i>
                  </span>
                </a>
            </li>
            <li class="menu-item">
                <a href="task" class="menu-link">
                  <span class="menu-label">
                  <span class="menu-name">Tasks
                  </span>
                  </span>
                    <span class="menu-icon">
                  <i class="icon-placeholder mdi mdi-buffer"></i>
                  </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="car" class="menu-link">
                  <span class="menu-label">
                  <span class="menu-name">Cars
                  </span>
                  </span>
                    <span class="menu-icon">
                  <i class="icon-placeholder mdi mdi-car"></i>
                  </span>
                </a>
            </li>

            <li class="menu-item">
                <a href="container" class="menu-link">
                  <span class="menu-label">
                  <span class="menu-name">Containers
                  </span>
                  </span>
                    <span class="menu-icon">
                  <i class="icon-placeholder mdi mdi-snowflake"></i>
                  </span>
                </a>
            </li>


            <li class="menu-item">
                <a href="client" class="menu-link">
                  <span class="menu-label">
                  <span class="menu-name">Geofence
                  </span>
                  </span>
                    <span class="menu-icon">
                  <i class="icon-placeholder mdi mdi-map"></i>
                  </span>
                </a>
            </li>


            <li class="menu-item">
                <a href="client" class="menu-link">
                  <span class="menu-label">
                  <span class="menu-name">Settings
                  </span>
                  </span>
                    <span class="menu-icon">
                  <i class="icon-placeholder mdi mdi-settings"></i>
                  </span>
                </a>
            </li>
            <!--list item ends-->

        </ul>
        <!-- Menu List Ends-->
    </div>
</aside>
<!--sidebar Ends-->
<main class="admin-main">
    <!--site header begins-->
    <header class="admin-header">
        <a href="#" class="sidebar-toggle" data-toggleclass="sidebar-open" data-target="body"> </a>
        <nav class=" mr-auto my-auto">
            <ul class="nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link  " data-target="#siteSearchModal" data-toggle="modal" href="#">
                        <i class=" mdi mdi-magnify mdi-24px align-middle"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <nav class=" ml-auto">
            <ul class="nav align-items-center">

                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-sm avatar-online">
                            <span class="avatar-title rounded-circle bg-dark">V</span>
                        </div>
                    </a>
                    <div class="dropdown-menu  dropdown-menu-right">
                        <a class="dropdown-item" href="#"> Add Account
                        </a>
                        <a class="dropdown-item" href="#"> Reset Password</a>
                        <a class="dropdown-item" href="#"> Help </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"> Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <!--site header ends -->
    <section class="admin-content">
        <!-- BEGIN PlACE PAGE CONTENT HERE -->
        <!--  container or container-fluid as per your need           -->
    @yield('content')
    <!-- END PLACE PAGE CONTENT HERE -->
    </section>
</main>
<div class="modal modal-slide-left  fade" id="siteSearchModal" tabindex="-1" role="dialog"
     aria-labelledby="siteSearchModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-all-0" id="site-search">
                <button type="button" class="close light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="form-dark bg-dark text-white p-t-60 p-b-20 bg-dots">
                    <h3 class="text-uppercase    text-center  fw-300 "> Search</h3>
                    <div class="container-fluid">
                        <div class="col-md-10 p-t-10 m-auto">
                            <input type="search" placeholder="Search Something"
                                   class=" search form-control form-control-lg">
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="bg-dark text-muted container-fluid p-b-10 text-center text-overline">
                        results
                    </div>
                    <div class="list-group list  ">
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-3.jpg" alt="user-image">
                                </div>
                            </div>
                            <div class="">
                                <div class="name">Eric Chen</div>
                                <div class="text-muted">Developer</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-4.jpg" alt="user-image">
                                </div>
                            </div>
                            <div class="">
                                <div class="name">Sean Valdez</div>
                                <div class="text-muted">Marketing</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-8.jpg" alt="user-image">
                                </div>
                            </div>
                            <div class="">
                                <div class="name">Marie Arnold</div>
                                <div class="text-muted">Developer</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i class="mdi mdi-24px mdi-file-pdf"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">SRS Document</div>
                                <div class="text-muted">25.5 Mb</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar-title bg-dark rounded"><i
                                            class="mdi mdi-24px mdi-file-document-box"></i></div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">Design Guide.pdf</div>
                                <div class="text-muted">9 Mb</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm  ">
                                        <div class="avatar-title bg-primary rounded"><i
                                                class="mdi mdi-24px mdi-code-braces"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">response.json</div>
                                <div class="text-muted">15 Kb</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm ">
                                    <div class="avatar avatar-sm ">
                                        <div class="avatar-title bg-info rounded"><i
                                                class="mdi mdi-24px mdi-file-excel"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="name">June Accounts.xls</div>
                                <div class="text-muted">6 Mb</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/vendor/popper/popper.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendor/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/vendor/listjs/listjs.min.js') }}"></script>
<script src="{{ asset('assets/vendor/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendor/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/js/atmos.min.js') }}"></script>
<script src="{{ asset('assets/vendor/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboard-02.js') }}" type="text/javascript"></script>



{{--datatable js--}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<!--page specific scripts for demo-->

<livewire:scripts />
</body>
</html>
