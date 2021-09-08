
@extends('layouts.admin')

@section('content')

    <div style="padding: 20px">

    <div class="card m-b-30">
        <div class="card-header">
            <div class="card-title"></div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('cars.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputArabicName">Plate Number</label>
                        <input type="text" class="form-control" id="inputArabicName" placeholder="Plate Number">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputEnglishName">Model</label>
                        <input type="text" class="form-control" id="inputEnglishName" placeholder="Model">
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputArabicName">Type</label>
                        <input type="text" class="form-control" id="inputArabicName" placeholder="Type">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="inputEnglishName">Color</label>
                        <input type="text" class="form-control" id="inputEnglishName" placeholder="Color">
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
                    <th>Plate Number</th>
                    <th>Model</th>
                    <th>Color</th>
                    <th>Type</th>
                    <th>Contact Person</th>
                    <th>Status</th>
                    <th>Created date</th>
                    <th>Updated date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>122 wrqw</td>
                    <td>Toyota</td>
                    <td>Red</td>
                    <td>Type1</td>
                    <td>966xxxxxx</td>
                    <td>Enabled</td>
                    <td>2011/04/25</td>
                    <td>2011/04/25</td>
                    <td> <span style="align-content: center"><i class="mdi mdi-eye"></i></span></td>
                </tr>

                <tr>
                    <td>122 wrqw</td>
                    <td>Toyota</td>
                    <td>Red</td>
                    <td>Type1</td>
                    <td>966xxxxxx</td>
                    <td>Enabled</td>
                    <td>2011/04/25</td>
                    <td>2011/04/25</td>
                </tr>

                <tr>
                    <td>122 wrqw</td>
                    <td>Toyota</td>
                    <td>Red</td>
                    <td>Type1</td>
                    <td>966xxxxxx</td>
                    <td>Enabled</td>
                    <td>2011/04/25</td>
                    <td>2011/04/25</td>
                </tr>

                <tr>
                    <td>122 wrqw</td>
                    <td>Toyota</td>
                    <td>Red</td>
                    <td>Type1</td>
                    <td>966xxxxxx</td>
                    <td>Enabled</td>
                    <td>2011/04/25</td>
                    <td>2011/04/25</td>
                </tr>

                <tr>
                    <td>122 wrqw</td>
                    <td>Toyota</td>
                    <td>Red</td>
                    <td>Type1</td>
                    <td>966xxxxxx</td>
                    <td>Enabled</td>
                    <td>2011/04/25</td>
                    <td>2011/04/25</td>
                </tr>



                </tfoot>
            </table>

            <div class="form-group">
                <a href="newCar" class="btn btn-primary">New Car</a>
            </div>
        </div>
    </div>

    <!--card ends-->
    </div>
@endsection
