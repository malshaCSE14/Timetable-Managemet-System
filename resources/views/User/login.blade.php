<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Timetable Manager | </title>

    <!-- Bootstrap -->
    <link href="{{asset('components/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('components/gentelella/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('components/gentelella/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('components/gentelella/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('components/gentelella/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">

            <section class="login_content">


                <form action="{{ route('login') }}" method="post">
                    <h1>Login</h1>
                    <div class="form-group">
                        <input class="form-control" type="text" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a class="reset_pass" href="#">Forgot password?</a>
                    <input type="hidden" name="_token" value="{{Session::token() }}">

                </form>
            </section>
        </div>

        {{--<div id="register" class="animate form registration_form">--}}
            {{--<section class="login_content">--}}
                {{--<form>--}}
                    {{--<h1>Create Account</h1>--}}
                    {{--<div>--}}
                        {{--<input type="text" class="form-control" placeholder="Username" required="" />--}}
                    {{--</div>--}}
                    {{--<div>--}}
                        {{--<input type="email" class="form-control" placeholder="Email" required="" />--}}
                    {{--</div>--}}
                    {{--<div>--}}
                        {{--<input type="password" class="form-control" placeholder="Password" required="" />--}}
                    {{--</div>--}}
                    {{--<div>--}}
                        {{--<a class="btn btn-default submit" href="index.html">Submit</a>--}}
                    {{--</div>--}}

                    {{--<div class="clearfix"></div>--}}

                    {{--<div class="separator">--}}
                        {{--<p class="change_link">Already a member ?--}}
                            {{--<a href="#signin" class="to_register"> Log in </a>--}}
                        {{--</p>--}}

                        {{--<div class="clearfix"></div>--}}
                        {{--<br />--}}

                        {{--<div>--}}
                            {{--<h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>--}}
                            {{--<p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</form>--}}
            {{--</section>--}}
        {{--</div>--}}
    </div>
</div>
</body>
</html>
