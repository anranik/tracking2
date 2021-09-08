
@extends('layouts.admin')

@section('content')



    <section class="admin-content ">
        <div class="jumbotron">
            <div class="row">

                <div class="col-xlg-6  m-b-30 col-lg-8">
                    <div class="row">

                        <div class=" col-md-4">  <!--widget card begin-->
                            <div class="card m-b-30">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h6 class="fw-600">Revenue</h6>
                                            <p class="text-muted">
                                                All Sales
                                            </p>
                                        </div>
                                        <div class="col-md-5 my-auto text-right">
                                            <h4 class="text-danger">$1M</h4>

                                        </div>
                                    </div>
                                    <div class="progress" style="height: 5px">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="0"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-7">

                                            <p class="text-muted">
                                                Monthly
                                            </p>
                                        </div>
                                        <div class="col-md-5 text-right">
                                            <p class="text-danger">82%</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--widget card ends-->
                        </div>
                        <div class=" col-md-4">  <!--widget card begin-->
                            <div class="card m-b-30">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h6 class="fw-600">Affiliates</h6>
                                            <p class="text-muted">
                                                Direct
                                            </p>
                                        </div>
                                        <div class="col-md-5 my-auto text-right">
                                            <h4 class="text-success">$25K</h4>

                                        </div>
                                    </div>
                                    <div class="progress" style="height: 5px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 37%" aria-valuenow="0"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-7">

                                            <p class="text-muted">
                                                Monthly
                                            </p>
                                        </div>
                                        <div class="col-md-5 text-right">
                                            <p class="text-success">37%</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--widget card ends-->
                        </div>
                        <div class=" col-md-4">  <!--widget card begin-->
                            <div class="card m-b-30">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <h6 class="fw-600">Burn Rate</h6>
                                            <p class="text-muted">
                                                Overview
                                            </p>
                                        </div>
                                        <div class="col-md-5 my-auto text-right">
                                            <h4 class="text-primary">$16K</h4>

                                        </div>
                                    </div>
                                    <div class="progress" style="height: 5px">
                                        <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="0"
                                             aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div class="row m-t-10">
                                        <div class="col-md-7">

                                            <p class="text-muted">
                                                Monthly
                                            </p>
                                        </div>
                                        <div class="col-md-5 text-right">
                                            <p class="text-primary">45%</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--widget card ends-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card m-b-30">
                                <div class="card-body bg-dark rounded ">
                                    <h3 class="text-white"> <i class="mdi mdi-chart-gantt"></i> Overview </h3>
                                    <div id="chart-01" class="invert-colors"></div>
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-3 m-b-20 ">
                                                <div class="rounded p-all-15 text-white text-center bg-white-translucent">
                                                    <div class="h1 fw-300">16K</div>
                                                    <h6 class="text-white-50"> Weekly Visitors</h6>
                                                </div>

                                            </div>
                                            <div class="col-md-3 m-b-20 ">
                                                <div class="rounded p-all-15 text-white text-center bg-white-translucent">
                                                    <div class="h1 fw-300">205</div>
                                                    <h6 class="text-white-50">Average Conversions</h6>
                                                </div>

                                            </div>
                                            <div class="col-md-3 m-b-20 ">
                                                <div class="rounded p-all-15 text-white text-center bg-white-translucent">
                                                    <div class="h1 fw-300">680</div>
                                                    <h6 class="text-white-50">New Sign Ups</h6>
                                                </div>

                                            </div>
                                            <div class="col-md-3 m-b-20 ">
                                                <div class="rounded p-all-15 text-white text-center bg-white-translucent">
                                                    <div class="h1 fw-300">19k</div>
                                                    <h6 class="text-white-50">IO Request</h6>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card m-b-30">
                                <div class="card-header">
                                    <h5 class=" m-b-0">Daily Analysis</h5>

                                    <div class="card-controls">

                                        <a href="#" class="js-card-refresh icon"></a>
                                        <div class="dropdown">
                                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                    class="icon mdi  mdi-dots-vertical"></i> </a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item" type="button">Action</button>
                                                <button class="dropdown-item" type="button">Another action</button>
                                                <button class="dropdown-item" type="button">Something else here</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="" id="chart-02"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xlg-6 col-lg-4">
                    <div class="row">
                        <div class=" col-md-12 col-xlg-6">
                            <!--widget card begin-->
                            <div class="card m-b-30">

                                <div class="card-body">

                                    <div class="row p-t-10 ">
                                        <div class="col-sm-12 my-auto ">
                                            <h5 class="m-0">Total Sales Report<a href="#"
                                                                                 class="mdi mdi-information text-muted"></a></h5>
                                        </div>

                                    </div>

                                    <div class="row p-t-10">
                                        <div class="col-sm-6 my-auto ">
                                            <h3 class="">$45K</h3>
                                        </div>
                                        <div class="col-sm-6 my-auto  text-right ">
                                            <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 2.6%</h3>
                                        </div>
                                    </div>

                                    <div id="chart-03"></div>
                                    <div class="row text-center">
                                        <div class="col-6">
                                            <h6 class="text-truncate d-block">Last Month</h6>
                                            <p class="m-0">358</p>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-truncate d-block">Current Month</h6>
                                            <p class="m-0">194</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--widget card ends-->

                        </div>
                        <div class=" col-md-12 col-xlg-6">
                            <!--widget card begin-->
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <div class="row p-t-10 ">
                                        <div class="col-sm-12 my-auto ">
                                            <h5 class="m-0">Affiliate Report <a href="#"
                                                                                class="mdi mdi-information text-muted"></a></h5>
                                        </div>

                                    </div>

                                    <div class="row p-t-10">
                                        <div class="col-sm-6 my-auto ">
                                            <h3 class="">$1500</h3>
                                        </div>
                                        <div class="col-sm-6 my-auto  text-right ">
                                            <h3 class="text-success"><i class="mdi mdi-arrow-up"></i> 2.6%</h3>
                                        </div>
                                    </div>

                                    <div id="chart-04"></div>
                                    <div class="row text-center">
                                        <div class="col-6">
                                            <h6 class="text-truncate d-block">Last Month</h6>
                                            <p class="m-0">200</p>
                                        </div>
                                        <div class="col-6">
                                            <h6 class="text-truncate d-block">Current Month</h6>
                                            <p class="m-0">356</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--widget card ends-->

                        </div>
                        <div class="col-xlg-12 col-md-12">
                            <!--widget card begin-->

                            <div class="card m-b-30">
                                <div class="card-header">
                                    <h5 class=" m-b-0">Overall Progress</h5>

                                    <div class="card-controls">

                                        <a href="#" class="js-card-fullscreen icon"></a>
                                        <a href="#" class="js-card-refresh icon"></a>
                                        <div class="dropdown">
                                            <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                                    class="icon mdi  mdi-dots-vertical"></i> </a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <button class="dropdown-item" type="button">Action</button>
                                                <button class="dropdown-item" type="button">Another action</button>
                                                <button class="dropdown-item" type="button">Something else here</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div id="chart-05" ></div>
                                    <div class="row text-center">
                                        <div class="col">
                                            <div class="m-b-5">
                                                <div class="avatar avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-info"><i
                                                            class="mdi mdi-circle"></i></div>
                                                </div>
                                            </div>
                                            <h5 class="m-0">Total</h5>
                                            <p class="text-muted">Progress</p>
                                        </div>
                                        <div class="col">
                                            <div class="m-b-5">
                                                <div class="avatar avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-success"><i
                                                            class="mdi mdi-circle"></i></div>
                                                </div>
                                            </div>
                                            <h5 class="m-0">In Progress</h5>
                                            <p class="text-muted">Tasks</p>
                                        </div>
                                        <div class="col">
                                            <div class="m-b-5">
                                                <div class="avatar avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-warning"><i
                                                            class="mdi mdi-circle"></i></div>
                                                </div>
                                            </div>
                                            <h5 class="m-0">Due</h5>
                                            <p class="text-muted">Tasks</p>
                                        </div>
                                        <div class="col">
                                            <div class="m-b-5">
                                                <div class="avatar avatar-xs">
                                                    <div class="avatar-title rounded-circle bg-danger"><i
                                                            class="mdi mdi-circle"></i></div>
                                                </div>
                                            </div>
                                            <h5 class="m-0">Blocked</h5>
                                            <p class="text-muted">Tasks</p>
                                        </div>


                                    </div>

                                </div>
                            </div>
                            <!--widget card ends-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
{{--</x-app-layout>--}}
@endsection




