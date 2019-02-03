<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link href="{{URL::to('public/back_end/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{URL::to('public/back_end/assets/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet" />
        <link href="{{URL::to('public/back_end/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        <link href="{{URL::to('public/back_end/css/style.css')}}" rel="stylesheet" />
        <link href="{{URL::to('public/back_end/css/style-responsive.css')}}" rel="stylesheet" />
        <link href="{{URL::to('public/back_end/css/style-default.css')}}" rel="stylesheet" id="style_color" />
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="lock">
        <div class="lock-header">
            <!-- BEGIN LOGO -->
            <h1 style="color: white; font-weight: bold;">Welcome to Admin Panel</h1>
            <h4 style="color: green; font-weight: bold;">Please Input Your UserName & Password</h4>
            <a class="center" id="logo" href="index.html">
               <!--  <img class="center" alt="logo" src="{{URL::to('public/back_end/img/logo.png')}}"> -->
            </a>
            <!-- END LOGO -->
        </div>


        <div class="login-wrap">
            <h3 align="center" style="color:red">
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo $message;
                    Session::put('message', null);
                }
                ?>
            </h3>
            <div class="metro single-size red">
                <div class="locked">
                    <i class="icon-lock"></i>
                    <span>Login</span>
                </div>
            </div>
            {!! Form::open(['url' => '/admin-login-check', 'method'=>'post']) !!}
            <div class="metro double-size green">

                <div class="input-append lock-input">
                    {!! Form::text('admin_email_address',null,['placeholder'=>'Username'])!!}
<!--                        <input type="text" class="" placeholder="Username">-->
                </div>

            </div>
            <div class="metro double-size yellow">

                <div class="input-append lock-input">
                    {!! Form::password('admin_password',['placeholder'=>'Password'])!!}
<!--                        <input type="password" class="" placeholder="Password">-->
                </div>

            </div>
            <div class="metro single-size terques login">

                <button type="submit" class="btn login-btn">
                    Login
                    <i class=" icon-long-arrow-right"></i>
                </button>

            </div>
            {!! Form::close() !!}

            <!--  <div class="metro double-size navy-blue ">
                 <a href="index.html" class="social-link">
                     <i class="icon-facebook-sign"></i>
                     <span>Facebook Login</span>
                 </a>
             </div>
             <div class="metro single-size deep-red">
                 <a href="index.html" class="social-link">
                     <i class="icon-google-plus-sign"></i>
                     <span>Google Login</span>
                 </a>
             </div>
             <div class="metro double-size blue">
                 <a href="index.html" class="social-link">
                     <i class="icon-twitter-sign"></i>
                     <span>Twitter Login</span>
                 </a>
             </div>
             <div class="metro single-size purple">
                 <a href="index.html" class="social-link">
                     <i class="icon-skype"></i>
                     <span>Skype Login</span>
                 </a>
             </div> -->
            <div class="login-footer">
                <div class="remember-hint pull-left">
                    <input type="checkbox" id=""> Remember Me
                </div>
                <div class="forgot-hint pull-right">
                    <a id="forget-password" class="" href="javascript:;">Forgot Password?</a>
                </div>
            </div>
        </div>
    </body>
    <!-- END BODY -->
</html>