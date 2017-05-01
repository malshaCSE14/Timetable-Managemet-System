<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

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

    <div id="register" class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <h3>Register Zone</h3>
                @include('Templates.message-block')
                @if(count($errors)>0)
                    <div class="row">
                        <div class="col-md-9">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>
                                        {{$error}}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <form action="{{route('register-zone-post')}}" method="post">
                    {{--<div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">--}}
                        {{--<input class="form-control" type="text" name="type" id="type" placeholder="Type" value="{{ Request::old('type') }}">--}}
                    {{--</div>--}}
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <input class="form-control" type="text" name="email" id="email" placeholder="Email" value="{{ Request::old('email') }}">
                    </div>
                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <input class="form-control" type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                    <input type="hidden" name="_token" value="{{Session::token() }}">
                </form>
                {{--<h3>Login</h3>--}}
                {{--<form action="{{ route('login') }}" method="post">--}}
                    {{--<div class="form-group">--}}
                        {{--<input class="form-control" type="text" name="email" id="email" placeholder="Email">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<input class="form-control" type="password" name="password" id="password" placeholder="Password">--}}
                    {{--</div>--}}
                    {{--<button type="submit" class="btn btn-primary">Login</button>--}}
                    {{--<a class="reset_pass" href="#">Forgot password?</a>--}}
                    {{--<input type="hidden" name="_token" value="{{Session::token() }}">--}}

                {{--</form>--}}
            </section>
        </div>

    </div>
</div>
</body>
</html>
