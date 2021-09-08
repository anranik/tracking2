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
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="m-b-0">
                                    Validation Server Side
                                </h5>
                                <p class="m-b-0 text-muted">
                                    You can add server side validation using you can indicate invalid and valid form fields
                                    with .is-invalid and .is-valid. Note that .invalid-feedback is also supported with these
                                    classes.
                                </p>
                            </div>
                            <div class="card-body ">
                                <form>
                                    <div class="form-row">
                                        <div class="col-md-4 mb-3">
                                            <label for="validationServer01">First name</label>
                                            <input type="text" class="form-control is-valid" id="validationServer01"
                                                   placeholder="First name" value="Mark" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationServer02">Last name</label>
                                            <input type="text" class="form-control is-valid" id="validationServer02"
                                                   placeholder="Last name" value="Otto" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="validationServerUsername">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend3">@</span>
                                                </div>
                                                <input type="text" class="form-control is-invalid"
                                                       id="validationServerUsername" placeholder="Username"
                                                       aria-describedby="inputGroupPrepend3" required>
                                                <div class="invalid-feedback">
                                                    Please choose a username.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationServer03">City</label>
                                            <input type="text" class="form-control is-invalid" id="validationServer03"
                                                   placeholder="City" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationServer04">State</label>
                                            <input type="text" class="form-control is-invalid" id="validationServer04"
                                                   placeholder="State" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="validationServer05">Zip</label>
                                            <input type="text" class="form-control is-invalid" id="validationServer05"
                                                   placeholder="Zip" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input is-invalid" type="checkbox" value=""
                                                   id="invalidCheck3" required>
                                            <label class="form-check-label" for="invalidCheck3">
                                                Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>
                            </div>
                        </div>
{{--                        --}}
{{--                        <form class="card-body">--}}
{{--                            <div class="table-responsive p-t-10">--}}
{{--                                <form id="needs-validation" class="form-horizontal group-border-dashed" method="post" action="{{route('drivers.store')}}" enctype="multipart/form-data">--}}
{{--                                    {{csrf_field()}}--}}
{{--                                        <div class="form-row">--}}
{{--                                            <div class="form-group col-md-6">--}}
{{--                                                <label for="name">Name</label>--}}
{{--                                                <input type="text" class="form-control" id="name" placeholder="Name">--}}
{{--                                            </div>--}}
{{--                                            <div class="form-group col-md-6">--}}
{{--                                                <label for="password">Password</label>--}}
{{--                                                <input type="password" class="form-control"  id="password"  >--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="form-row">--}}
{{--                                            <div class="form-group col-md-6">--}}
{{--                                                <label for="username">Username</label>--}}
{{--                                                <input type="text" class="form-control" id="username" placeholder="Username">--}}
{{--                                            </div>--}}

{{--                                            <div class="form-group col-md-6">--}}
{{--                                                <label for="mobile">Mobile</label>--}}
{{--                                                <input type="text" class="form-control" id="mobile"  placeholder="Mobile" >--}}
{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <div class="form-group">--}}
{{--                                            <button class="btn btn-primary">Submit</button>--}}
{{--                                        </div>--}}
{{--                                </form>--}}
{{--                                    </div>--}}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
