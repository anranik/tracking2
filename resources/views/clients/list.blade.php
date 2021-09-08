
@extends('layouts.admin')

@section('content')

    <!--card begins-->
    <div class="card m-b-30">
        <div class="card-header">
            <div class="card-title"></div>
        </div>
        <div class="card-body">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab-z" data-toggle="tab" href="#home" role="tab"
                       aria-controls="home" aria-selected="true">Clients</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab-z" data-toggle="tab" href="#profile" role="tab"
                       aria-controls="profile" aria-selected="false">Locations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab-z" data-toggle="tab" href="#contact" role="tab"
                       aria-controls="contact" aria-selected="false">Services</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent1">
                <div class="tab-pane fade show active" id="home" role="tabpanel"
                     aria-labelledby="home-tab">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <div class="card-title"></div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('client.store') }}">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputArabicName">Arabic Name</label>
                                        <input type="text" class="form-control" id="inputArabicName" placeholder="Arabic Name">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputEnglishName">English Name</label>
                                        <input type="text" class="form-control" id="inputEnglishName" placeholder="English Name">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Address</label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <p class="p-t-20 m-b-0"></p>
                    <table id="example" class="table   " style="width:100%">
                        <thead>
                        <tr>
                            <th>Arabic Name</th>
                            <th>English Name</th>
                            <th>Status</th>
                            <th>Created date</th>
                            <th>Updated date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Client 11</td>
                            <td>System Architect</td>
                            <td>Enabled</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                        </tr>
                        <tr>
                            <td>Client 11</td>
                            <td>System Architect</td>
                            <td>Enabled</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                        </tr>
                        <tr>
                            <td>Client 11</td>
                            <td>System Architect</td>
                            <td>Enabled</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                        </tr>
                        <tr>
                            <td>Client 11</td>
                            <td>System Architect</td>
                            <td>Enabled</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                        </tr>
                        <tr>
                            <td>Client 11</td>
                            <td>System Architect</td>
                            <td>Enabled</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                        </tr>
                        <tr>
                            <td>Client 11</td>
                            <td>System Architect</td>
                            <td>Enabled</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                        </tr>


                        </tfoot>
                    </table>

                    <div class="card-footer">
                        <a href="newClient" class="btn btn-primary">New Client</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                    <p class="p-t-20 m-b-0"></p>
                    <table id="example" class="table   " style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Created date</th>
                            <th>Updated date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Location A</td>
                            <td>Description .....</td>
                            <td>Enabled</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                        </tr>


                        </tfoot>
                    </table>

                    <div class="card-footer">
                        <a href="#!" class="btn btn-primary">New Location</a>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <p class="p-t-20 m-b-0"></p>
                    <table id="example" class="table   " style="width:100%">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Created date</th>
                            <th>Updated date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Service 1</td>
                            <td>Now</td>
                            <td>Enabled</td>
                            <td>2011/04/25</td>
                            <td>2011/04/25</td>
                        </tr>


                        </tfoot>
                    </table>

                    <div class="card-footer">
                        <a href="#!" class="btn btn-primary">New Service</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}




{{--    --}}
{{--    <!--card ends-->--}}

{{--</x-app-layout>--}}
