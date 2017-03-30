@extends('User.Principal.principal_view')

@section('styles')

    <link href="{{asset('components/gentelella/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('components/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('components/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('components/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('components/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('components/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('components/gentelella/vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('components/gentelella/vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{asset('components/gentelella/vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('components/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

@endsection
@section('content')
<div class="page-title">
    <div class="title_left">
        <h3>Class Details</h3>
    </div>
</div>
<?php
        $grades = array(6,7,8,9,10,11);
        $classes = array(
                        $grades[0] => array("A","B","C", "D"),
                        $grades[1] => array("A","B","C"),
                        $grades[2] => array("A","B","C", "D","E"),
                        $grades[3] => array("A","B","C", "D"),
                        $grades[4] => array("A","B","C", "D"),
                        $grades[5] => array("A","B","C", "D")

        );
        $subjects = array(
                $grades[0] => array("Sinhala","English","Maths", "Science"),
                $grades[1] => array("Sinhala","English","Maths", "Science"),
                $grades[2] => array("Sinhala","English","Maths", "Science"),
                $grades[3] => array("Sinhala","English","Maths", "Science", "Aesthetic"),
                $grades[4] => array("Sinhala","English","Maths", "Science", "History","Category 1"),
                $grades[5] => array("Sinhala","English","Maths", "Science", "History","Category 1")

        );
?>

<div class="col-md-9 col-sm-9 col-xs-12">
    <div class="x_panel">

        <div class="x_content">



            <div class="col-xs-3">

                <!-- required for floating -->
                <!-- Nav tabs -->
                <ul class="nav nav-tabs tabs-left">
                    <li class="active"><a href="#6" data-toggle="tab">Grade 6</a>
                    </li>
                    <li><a href="#7" data-toggle="tab">Grade 7</a>
                    </li>
                    <li><a href="#8" data-toggle="tab">Grade 8</a>
                    </li>
                    <li><a href="#9" data-toggle="tab">Grade 9</a>
                    </li>
                    <li><a href="#10" data-toggle="tab">Grade 10</a>
                    </li>
                    <li><a href="#11" data-toggle="tab">Grade 11</a>
                    </li>
                </ul>
            </div>

            <div class="col-xs-9">

                <!-- Tab panes -->
                <div class="tab-content">
                    @include('User.Principal.GradeDetails.grade_six')
                    @include('User.Principal.GradeDetails.grade_seven')
                    @include('User.Principal.GradeDetails.grade_eight')
                    @include('User.Principal.GradeDetails.grade_nine')
                    @include('User.Principal.GradeDetails.grade_ten')
                    @include('User.Principal.GradeDetails.grade_eleven')







                </div>
            </div>

            <div class="clearfix"></div>

        </div>
    </div>
</div>




        @endsection

@section('scripts')

            <script src="{{asset('components/gentelella/vendors/iCheck/icheck.min.js')}}"></script>
            <!-- Datatables -->
            <script src="{{asset('components/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('components/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
            <script src="{{asset('components/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
            <script src="{{asset('components/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
            <script src="{{asset('components/gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
            <script src="{{asset('components/gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
            <script src="{{asset('components/gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
            <script src="{{asset('components/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
            <script src="{{asset('components/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
            <script src="{{asset('components/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
            <script src="{{asset('components/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
            <script src="{{asset('components/gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
            <script src="{{asset('components/gentelella/vendors/jszip/dist/jszip.min.js')}}"></script>
            <script src="{{asset('components/gentelella/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
            <script src="{{asset('components/gentelella/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
            <script src="{{asset('components/gentelella/vendors/select2/dist/js/select2.full.min.js')}}"></script>

            <script src="{{asset('components/gentelella/vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
            <script src="{{asset('JavaScript/addSubject.js')}}"></script>

            <!-- Custom Theme Scripts -->
{{--<script src="{{asset('components/gentelella/build/js/custom.min.js')}}"></script>--}}


@endsection