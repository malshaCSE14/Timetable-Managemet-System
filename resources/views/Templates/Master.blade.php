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
    <!-- bootstrap-wysiwyg -->
    <link href="{{asset('components/gentelella/vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">


    @yield('styles')
    <!-- Custom styling plus plugins -->
    <link href="{{asset('components/gentelella/build/css/custom.min.css')}}" rel="stylesheet">




</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        @yield('maincontent')
        <!-- top navigation -->
        <!-- /page content -->
            <div class="right_col" role="main">
                <div class="">

                    <div class="clearfix"></div>

                    <div class="row">



                        @yield('content')




                    </div>
                </div>
            </div>





    @yield('footercontent')


        <!-- /footer content -->
    </div>
</div>
@yield('compose')

<!-- /compose -->

<!-- jQuery -->
<script src="{{asset('components/gentelella/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('components/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('components/gentelella/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('components/gentelella/vendors/nprogress/nprogress.js')}}"></script>
<!-- bootstrap-wysiwyg -->
<script src="{{asset('components/gentelella/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
<script src="{{asset('components/gentelella/vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
<script src="{{asset('components/gentelella/vendors/google-code-prettify/src/prettify.js')}}"></script>
@yield('scripts')
<!-- Custom Theme Scripts -->
<script src="{{asset('components/gentelella/build/js/custom.min.js')}}"></script>

</body>
</html>