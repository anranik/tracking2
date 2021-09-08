{{--@extends('layout.master')--}}
{{--@section('parentPageTitle', 'Services')--}}
{{--@section('title', 'Update')--}}
{{--@section('content')--}}
{{--    <div class="row clearfix">--}}
{{--        <div class="col-md-12">--}}
{{--            <div class="card">--}}
{{--                <div class="header">--}}
{{--                    <h2>Update Service</h2>--}}
{{--                </div>--}}
{{--                <div class="body">--}}
{{--                    <form id="basic-form" method="post" novalidate action="{{route('subscription.update', ['id' => $subscription->id])}}">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Name</label>--}}
{{--                            <input type="text" name="name" class="form-control" required value="{{$subscription->name}}">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Description</label>--}}
{{--                            <textarea name="description" class="form-control" rows="5" cols="30" required>{{$subscription->description}}</textarea>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Period</label>--}}
{{--                            <div class="input-group mb-3">--}}
{{--                                <input data-provide="datepicker" name="period" data-date-autoclose="true" class="form-control" value="{{$subscription->period}}">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Cost</label>--}}
{{--                            <input type="number" name="cost" class="form-control" required value="{{$subscription->cost}}">--}}
{{--                        </div>--}}
{{--                        <br>--}}
{{--                        <button type="submit" class="btn btn-primary">Update</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@stop--}}

{{--@section('page-styles')--}}
{{--    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">--}}
{{--@stop--}}

{{--@section('page-script')--}}
{{--    <script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>--}}
{{--    <script src="{{ asset('assets/js/pages/forms/advanced-form-elements.js') }}"></script>--}}
{{--@stop--}}
@extends('layouts.admin')

@section('content')
    test edit page
@endsection
