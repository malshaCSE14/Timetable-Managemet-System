@extends('Templates.Master')
@section('maincontent')
    <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
                <a href="index.html" class="site_title"><span>Timetable Manager</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
                <div class="profile_pic">
                    <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                </div>
                <div class="profile_info">
                    <span>Zonal Education Office</span>
                    <h2>Hakmana</h2>
                </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                        <li><a href="{{ route('school-list') }}"><i class="fa fa-home"></i> Schools </a></li>
                        <li><a href="{{ route('register-school') }}"><i class="fa fa-plus"></i> Register School </a></li>
                        <li><a href="{{ route('unwatched-timetable') }}"><i class="fa fa-folder-open"></i> Unwatched Timetables </a></li>
                    </ul>
                </div>


            </div>
            <!-- /sidebar menu -->
        </div>
    </div>
    {{--@include('Templates.left_col')--}}

    {{--@include('Templates.top_nav')--}}
    @include('Templates.top_nav')
@endsection

@section('footercontent')
    @include('Templates.footer')
@endsection

@section('compose')
    @include('Templates.compose')
@endsection