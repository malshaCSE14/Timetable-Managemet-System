@extends('User.Teacher.teacher_view')


@section('styles')

    <link href="{{asset('components/gentelella/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{asset('components/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('components/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('components/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('components/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('components/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">

@endsection
@section('content')

    {{--<div class="row">--}}
        {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
            {{--<div class="x_panel">--}}
                {{--<div class="x_title">--}}
                    {{--<h2>School Timetable <small>Class View</small></h2>--}}
                    {{--<div class="clearfix"></div>--}}
                {{--</div>--}}
                {{--<div class="x_content">--}}
                    {{--<table id="datatable" class="table table-striped table-bordered">--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                            {{--<th>Grade</th>--}}
                            {{--<th colspan="8">Monday</th>--}}
                            {{--<th colspan="8">Tuesday</th>--}}
                            {{--<th colspan="8">Wednesday</th>--}}
                            {{--<th colspan="8">Thursday</th>--}}
                            {{--<th colspan="8">Friday</th>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                            {{--<th> </th>--}}
                            {{--<th>1</th>--}}
                            {{--<th>2</th>--}}
                            {{--<th>3</th>--}}
                            {{--<th>4</th>--}}
                            {{--<th>5</th>--}}
                            {{--<th>6</th>--}}
                            {{--<th>7</th>--}}
                            {{--<th>8</th>--}}

                            {{--<th>1</th>--}}
                            {{--<th>2</th>--}}
                            {{--<th>3</th>--}}
                            {{--<th>4</th>--}}
                            {{--<th>5</th>--}}
                            {{--<th>6</th>--}}
                            {{--<th>7</th>--}}
                            {{--<th>8</th>--}}

                            {{--<th>1</th>--}}
                            {{--<th>2</th>--}}
                            {{--<th>3</th>--}}
                            {{--<th>4</th>--}}
                            {{--<th>5</th>--}}
                            {{--<th>6</th>--}}
                            {{--<th>7</th>--}}
                            {{--<th>8</th>--}}
                            {{--<th>1</th>--}}
                            {{--<th>2</th>--}}
                            {{--<th>3</th>--}}
                            {{--<th>4</th>--}}
                            {{--<th>5</th>--}}
                            {{--<th>6</th>--}}
                            {{--<th>7</th>--}}
                            {{--<th>8</th>--}}
                            {{--<th>1</th>--}}
                            {{--<th>2</th>--}}
                            {{--<th>3</th>--}}
                            {{--<th>4</th>--}}
                            {{--<th>5</th>--}}
                            {{--<th>6</th>--}}
                            {{--<th>7</th>--}}
                            {{--<th>8</th>--}}

                        {{--</tr>--}}
                        {{--</thead>--}}


                        {{--<tbody>--}}

                        {{--<tr>--}}
                            {{--<td>6A</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}

                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>6B</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}

                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>6C</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}

                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>6D</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}

                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>7A</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}

                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>7B</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}

                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>7C</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}

                        {{--</tr>--}}
                        {{--<tr>--}}
                            {{--<td>7D</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}
                            {{--<td>1</td>--}}
                            {{--<td>2</td>--}}
                            {{--<td>3</td>--}}
                            {{--<td>4</td>--}}
                            {{--<td>5</td>--}}
                            {{--<td>6</td>--}}
                            {{--<td>7</td>--}}
                            {{--<td>8</td>--}}

                        {{--</tr>--}}

                        {{--</tbody>--}}
                    {{--</table>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}
    @include('Timetables.school_timetable_class')
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

    <!-- Custom Theme Scripts -->
    {{--<script src="{{asset('components/gentelella/build/js/custom.min.js')}}"></script>--}}


@endsection

