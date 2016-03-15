@extends('base')

@section('browsertitle', 'Acme: Register')


@section('content')
<div class="row">
    <div class="col-md-2">

    </div>

    <div class="col-md-8">

        <h1>Register</h1>

        <hr>

        <form class="form-horizontal" name="registerform" id="registerform" action="/register" method="post" novalidate>
            <div class="form-group">
                <label for="first_name" class="col-sm-2 control-label">Firstname</label>
                <div class="col-sm-10">
                    <input type="text" name="first_name" class="form-control required" id="first_name" placeholder="Firstname">
                </div>
            </div>
            <div class="form-group">
                <label for="last_name" class="col-sm-2 control-label">Lastname</label>
                <div class="col-sm-10">
                    <input type="text" name="last_name" class="form-control required" id="last_name" placeholder="Lastname">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control required email" id="email" placeholder="user@example.com">
                </div>
            </div>
            <div class="form-group">
                <label for="verify_email" class="col-sm-2 control-label">Verify Email</label>
                <div class="col-sm-10">
                    <input type="email" name="verify_email" class="form-control" id="verify_email" placeholder="user@example.com">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <label for="verify_password" class="col-sm-2 control-label">Verify Password</label>
                <div class="col-sm-10">
                    <input type="password" name="verify_password" class="form-control" id="verify_password" placeholder="Verify Password">
                </div>
            </div>

            <hr>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </div>
        </form>


    </div>

    <div class="col-md-2">

    </div>
</div>
@stop

@section('bottomjs')
<script>
    $(document).ready(function() {
        $("#registerform").validate({
            rules: {
                verify_email: {
                    required: true,
                    email: true,
                    equalTo: "#email"
                },
                verify_password: {
                    required: true,
                    equalTo: "#password"
                }
            }
        });
    });
</script>
@stop