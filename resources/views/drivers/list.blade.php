@extends('layouts.admin')

@section('content')


    <section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">

                        <h5 style="font-weight:bold;font-size: large">
                            Drivers Information
                        </h5>

                    </div>
                </div>
            </div>
        </div>

        <div class="container  pull-up">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive p-t-10">

{{--                                <livewire:livewire-driver-datatable/>--}}
                                <livewire:livewire-driver-datatable
                                    model="App\Models\Driver"
                                    sort="id|asc"
                                    include="id,name,username,mobile,status,created_at|Created"
                                    searchable="name,username,mobile"
                                    dates="created_at"
                                    exportable
                                />

                            </div>
                            <div class="card-footer">
                                <a href="newDriver" class="btn btn-primary">New Driver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
