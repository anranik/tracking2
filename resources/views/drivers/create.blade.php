

@extends('layouts.admin')

@section('content')
    <section class="admin-content">
        <div class="bg-dark">
            <div class="container  m-b-30">
                <div class="row">
                    <div class="col-12 text-white p-t-40 p-b-90">
                        <h5 style="font-weight:bold;font-size: large">
                            New Driver
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="container  pull-up">
            <div class="row">
                <div class="col-12">
                    <div class="card">

{{--                        @if ($errors->any())--}}
{{--                            @foreach ($errors->all() as $error)--}}
{{--                                <div class="alert alert-danger" role="alert">--}}
{{--                                    {{ $error }}--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        @endif--}}

                        @if(session()->has("success"))
                                <div class="alert alert-success" role="alert">
                                    {{ session()->get("success") }}
                                </div>
                        @elseif(session()->has("error"))
                                <div class="alert alert-danger" role="alert">
                                    >{{ session()->get("error") }}
                                </div>
                        @endif
                        <form class="card-body" method="POST" action="{{route('drivers.store')}}">
                            @csrf
                            <div class="table-responsive p-t-10">

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Name</label>
                                            <input type="text"  class="form-control @error('name') is-invalid @enderror"  id="name" name="name"
                                                   placeholder="Name" >
                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="password">Password</label>
{{--                                            <div class="input-group">--}}
{{--                                                <div class="input-group-prepend">--}}
{{--                                                    <span class="input-group-text" id="inputGroupPrepend3"> <i class="mdi mdi-cellphone-settings"></i>--}}
{{--                                                    </span>--}}
{{--                                                </div>--}}
                                                <input type="password"  class="form-control @error('username') is-invalid @enderror" id="password" name="password" >

                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
{{--                                            </div>--}}
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="username">Username</label>
{{--                                            <div class="input-group">--}}
{{--                                                <div class="input-group-prepend">--}}
{{--                                                    <span class="input-group-text" id="inputGroupPrepend3">@</span>--}}
{{--                                                </div>--}}
                                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                                       id="username" placeholder="Username" name="username" >
                                                @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
{{--                                            </div>--}}
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="mobile">Mobile</label>
                                            <input type="text" class="form-control @error('mobile') is-invalid @enderror"  id="mobile" name="mobile"
                                                   placeholder="05xxxxxxxx"  >
                                            @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Create</button>
                                        <button type="button" class="btn btn-danger" onclick="window.location='{{ url("driver") }}'">Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

@endsection
