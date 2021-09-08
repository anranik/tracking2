@extends('layouts.admin')

@section('content')
    <div style="padding: 20px">

    <div class="card m-b-30">
        <div class="card-header">
            <div class="card-title"></div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('drivers.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="clientName">ClientName</label>
                        <input type="text" class="form-control" id="clientName" placeholder="ClientName">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="driver">Driver</label>
                        <input type="text" class="form-control" id="driver" placeholder="Driver">
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="status">Status</label>
                        <select name="status" id="cars" class="form-control" placeholder="Status">
                            <option value="volvo">Opened</option>
                            <option value="saab">Closed</option>
                        </select>

                    </div>

                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card m-b-30">
        <div class="card-header">
            <div class="card-title"></div>
        </div>
        <div class="card-body">
            <table id="example" class="table   " style="width:100%">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Created date</th>
                    <th>Updated date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Driver 1</td>
                    <td>05546768323</td>
                    <td>shijazi</td>
                    <td>Enabled</td>
                    <td>2011/04/25</td>
                    <td>2011/04/25</td>
                    <td> <span style="align-content: center"><i class="mdi mdi-eye"></i></span></td>
                </tr>




                </tfoot>
            </table>
        </div>
    </div>

    <!--card ends-->
    </div>
@endsection
