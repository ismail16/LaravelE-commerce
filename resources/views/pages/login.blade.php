@extends('master')
@section('content')
<script type="text/javascript">
    $(document).ready(function(){
        $('.is-home').css('display', 'none');
    });
</script>
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Authentication</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Authentication</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="box-authentication">
                        <h3>Create an account</h3>
                        <p>Please enter your email address to create an account.</p>
                        <label for="emmail_register">Email address</label>
                        <input id="emmail_register" type="text" class="form-control">
                        <button class="button"><i class="fa fa-user"></i> Create an account</button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="box-authentication">
                        <h3>Already registered?</h3>
                        <label for="emmail_login">Email address</label>
                        <input id="emmail_login" type="text" class="form-control">
                        <label for="password_login">Password</label>
                        <input id="password_login" type="password" class="form-control">
                        <p class="forgot-pass"><a href="#">Forgot your password?</a></p>
                        <button class="button"><i class="fa fa-lock"></i> Sign in</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection