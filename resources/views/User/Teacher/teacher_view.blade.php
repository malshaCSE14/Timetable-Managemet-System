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
                    <span>Teacher</span>
                    <h2>Hakmana Zone</h2>
                </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                        <li><a href="{{ route('teacher-profile') }}"><i class="fa fa-user"></i> Profile </a></li>
                        <li><a href="{{ route('teacher-timetable') }}"><i class="fa fa-home"></i> My Timetable </a></li>
                        <li><a href="{{ route('school-timetable-class-for-teacher') }}"><i class="fa fa-table"></i> School Timetable (Class) </a></li>
                        <li><a href="{{ route('school-timetable-teacher-for-teacher') }}"><i class="fa fa-th"></i> School Timetable (Teacher)</a></li>
                    </ul>
                </div>


            </div>
            <!-- /sidebar menu -->
        </div>
    </div>
    {{--@include('Templates.left_col')--}}

    @include('Templates.top_nav')
@endsection

@section('footercontent')
    @include('Templates.footer')
@endsection

@section('compose')
    @include('Templates.compose')
@endsection