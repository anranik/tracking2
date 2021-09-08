@extends('layouts.admin')

@section('content')

    <div style="padding: 20px">

    <div class="card m-b-30">
        <div class="card-header">
            <div class="card-title"></div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('services.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" id="type" placeholder="Type">
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
                    <th>Type</th>
                    <th>Status</th>
                    <th>Created date</th>
                    <th>Updated date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>122 wrqw</td>
                    <td>Type1</td>
                    <td>Enabled</td>
                    <td>2011/04/25</td>
                    <td>2011/04/25</td>
                    <td> <span style="align-content: center"><i class="mdi mdi-eye"></i></span></td>
                </tr>
                <tr>
                    <td>122 wrqw</td>
                    <td>Type1</td>
                    <td>Enabled</td>
                    <td>2011/04/25</td>
                    <td>2011/04/25</td>
                    <td> <span style="align-content: center"><i class="mdi mdi-eye"></i></span></td>
                </tr>

                <tr>
                    <td>122 wrqw</td>
                    <td>Type1</td>
                    <td>Enabled</td>
                    <td>2011/04/25</td>
                    <td>2011/04/25</td>
                    <td> <span style="align-content: center"><i class="mdi mdi-eye"></i></span></td>
                </tr>

                <tr>
                    <td>122 wrqw</td>
                    <td>Type1</td>
                    <td>Enabled</td>
                    <td>2011/04/25</td>
                    <td>2011/04/25</td>
                    <td> <span style="align-content: center"><i class="mdi mdi-eye"></i></span></td>
                </tr>
                <tr>
                    <td>122 wrqw</td>
                    <td>Type1</td>
                    <td>Enabled</td>
                    <td>2011/04/25</td>
                    <td>2011/04/25</td>
                    <td> <span style="align-content: center"><i class="mdi mdi-eye"></i></span></td>
                </tr>
                <tr>
                    <td>122 wrqw</td>
                    <td>Type1</td>
                    <td>Enabled</td>
                    <td>2011/04/25</td>
                    <td>2011/04/25</td>
                    <td> <span style="align-content: center"><i class="mdi mdi-eye"></i></span></td>
                </tr>


                </tfoot>
            </table>

            <div class="form-group">
                <a href="newCar" class="btn btn-primary">New Service</a>
            </div>
        </div>
    </div>

    <!--card ends-->
    </div>
@endsection
