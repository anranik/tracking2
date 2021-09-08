@extends('layouts.admin')

@section('content')

    <!--card begins-->
    <div class="card m-b-30">
        <div class="card-header">
            <div class="card-title"></div>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('car.store') }}">
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
                <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
    <!--card ends-->

@endsection
