<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" name="viewport">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <title>Atmos Admin Panel- Bootstrap 4 Based Admin Panel</title>
    <link rel="icon" type="image/x-icon" href="assets/img/logo3.png"/>
    <link rel="icon" href="assets/img/logo.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="assets/vendor/pace/pace.css">
    <script src="assets/vendor/pace/pace.min.js"></script>
    <!--vendors-->
    <link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/jquery-scrollbar/jquery.scrollbar.css">
    <link rel="stylesheet" href="assets/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="assets/vendor/timepicker/bootstrap-timepicker.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600" rel="stylesheet">
    <!--Material Icons-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/materialdesignicons/materialdesignicons.min.css">
    <!--Material Icons-->
    <link rel="stylesheet" type="text/css" href="assets/fonts/feather/feather-icons.css">
    <!--Bootstrap + atmos Admin CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/atmos.min.css">
    <!-- Additional library for page -->

</head>
<body class="jumbo-page">

<main class="admin-main  ">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-4  bg-white">
                <div class="row align-items-center m-h-100">
                    <div class="mx-auto col-md-8">
                        <div class="p-b-20 text-center">
                            <p>
                                <img src="assets/img/logo3.png" width="160" alt="">

                            </p>
                            <p class="admin-brand-content">
                                Tracking
                            </p>
                        </div>
                        <h3 class="text-center p-b-20 fw-400">Login</h3>
                        <form class="needs-validation"  method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group floating-label col-md-12">
                                    <label>Email</label>
                                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                </div>
                                <div class="form-group floating-label col-md-12">
                                    <label>Password</label>
                                    <x-input id="password" class="form-control"
                                             type="password"
                                             name="password"
                                             required autocomplete="current-password" />
                                </div>

                            </div>

                            <x-button class="btn btn-primary btn-block btn-lg">
                                {{ __('Log in') }}
                            </x-button>

                        </form>
                        <p class="text-right p-t-10">
                            <a href="#!" class="text-underline">Forgot Password?</a>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-lg-8 d-none d-md-block bg-cover" style="background-image: url('assets/img/bg.jpeg');">

            </div>
        </div>
    </div>
</main>

<div class="modal modal-slide-left  fade" id="siteSearchModal" tabindex="-1" role="dialog" aria-labelledby="siteSearchModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body p-all-0" id="site-search">
                <button type="button" class="close light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="form-dark bg-dark text-white p-t-60 p-b-20 bg-dots" >
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
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"   src="assets/img/users/user-3.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Eric Chen</div>
                                <div class="text-muted">Developer</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-4.jpg" alt="user-image"></div>
                            </div>
                            <div class="">
                                <div class="name">Sean Valdez</div>
                                <div class="text-muted">Marketing</div>
                            </div>


                        </div>
                        <div class="list-group-item d-flex  align-items-center">
                            <div class="m-r-20">
                                <div class="avatar avatar-sm "><img class="avatar-img rounded-circle"
                                                                    src="assets/img/users/user-8.jpg" alt="user-image"></div>
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


<script src="assets/vendor/jquery/jquery.min.js"   ></script>
<script src="assets/vendor/jquery-ui/jquery-ui.min.js"   ></script>
<script src="assets/vendor/popper/popper.js"   ></script>
<script src="assets/vendor/bootstrap/js/bootstrap.min.js"   ></script>
<script src="assets/vendor/select2/js/select2.full.min.js"   ></script>
<script src="assets/vendor/jquery-scrollbar/jquery.scrollbar.min.js"   ></script>
<script src="assets/vendor/listjs/listjs.min.js"   ></script>
<script src="assets/vendor/moment/moment.min.js"></script>
<script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/vendor/bootstrap-notify/bootstrap-notify.min.js"   ></script>
<script src="assets/js/atmos.min.js"></script>
<!--page specific scripts for demo-->

</body>
</html>
