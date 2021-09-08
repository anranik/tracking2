{{--<x-app-layout>--}}

{{--    <div style="padding: 20px">--}}

{{--    <div class="card m-b-30">--}}
{{--        <div class="card-header">--}}
{{--            <div class="card-title"></div>--}}
{{--        </div>--}}

{{--    </div>--}}

{{--    <div class="card m-b-30">--}}
{{--        <div class="card-header">--}}
{{--            <div class="card-title"></div>--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}

{{--            <div class="form-group">--}}
{{--                <a href="newContainer" class="btn btn-primary">New Container</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!--card ends-->--}}
{{--    </div>--}}
{{--</x-app-layout>--}}





@extends('layouts.admin')

@section('content')
    <section class="admin-content ">
        <div class="jumbotron">
            <livewire:datatable
                model="App\Models\Car"
                sort="id|asc"
                include="id,plate_number,model,color,type,description,status,created_at|Created"
                searchable="plate_number,type,model,color"
                dates="created_at"
                exportable
            />
        </div>
    </section>
@endsection





