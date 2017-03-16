@extends('User.user_view')


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
    {{--jquerry--}}
    <link rel="stylesheet" type="text/css" href="{{asset('components/jquery/jquery-ui.structure.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('components/jquery/jquery-ui.theme.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('components/jquery/jquery.appendGrid-1.6.2.css')}}"/>
@endsection
@section('content')
    <?php
            $classes = array(6,7,8,9,10,11);
            $subjects = array(
                    $classes[0]=>array("Sinhala","English","Mathematics","History","Environmental Studies","Tamil"),
                    $classes[1]=>array("Sinhala","English","Mathematics","History","Science","Tamil"),
                    $classes[2]=>array("Sinhala","English","Mathematics","History","Science","Tamil"),
                    $classes[3]=>array("Sinhala","English","Mathematics","History","Science","Tamil"),
                    $classes[4]=>array("Sinhala","English","Mathematics","History","Science","Tamil","ICT","Literature","Geography"),
                    $classes[5]=>array("Sinhala","English","Mathematics","History","Science","Tamil","ICT","Literature","Geography"),
            );
            $subjectClassSet = array();
    ?>
<div class="page-title">
    <div class="title_left">
        <h3>Teacher Details</h3>
    </div>
</div>

<div class="col-md-12 col-sm-12 col-xs-12">

    <div class="x_panel">
        <div class="x_title">
            {{--<h2>Button Example <small>Users</small></h2>--}}
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <?php
            $positions = array("Vice Principal", "Assistant Principal","Supervisor","Adviser","Class Teacher", "Teacher","Principal");
            $titles = array("Mr","Ms","Ven");
            $workload = array(


                    $positions[0] => 10,
                    $positions[1] => 12,
                    $positions[2] => 16,
                    $positions[3] => 15,
                    $positions[4] => 33,
                    $positions[5] => 35,

            )
            ?>
            <table id="datatable-buttons" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Index Number</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Position</th>
                </tr>
                </thead>


                <tbody>

                <tr>
                    <td>132</td>
                    <td>Mr.</td>
                    <td>A.B.C.Perera</td>
                    <td><?php echo $workload[$positions[0]]?></td>

                </tr>

                </tbody>
            </table>
        </div>
        <!-- Large modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Add</button>

        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Add Teacher Details</h4>
                    </div>
                    <div class="modal-body">

                        <div class="x_panel">

                            <div class="x_content">
                                <br />
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                    {{--title--}}
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Title</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div id="title" class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="title" value="ven"> &nbsp; Ven. &nbsp;
                                                </label>
                                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="title" value="mr"> &nbsp; Mr. &nbsp;
                                                </label>
                                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                    <input type="radio" name="title" value="ms"> Ms.
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    {{--name--}}
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="name" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    {{--position--}}
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Position</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control">
                                                <option>Choose Option</option>
                                                <?php
                                                    foreach ($positions as $position){
                                                ?>
                                                    <option> <?php echo $position?></option>
                                                <?php
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    {{--subjects--}}


                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Subjects and Classes <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <div class="x_content">

                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>

                                                        <th>Subject</th>
                                                        <th>Class</th>

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>

                                                        <td>Sinhala</td>
                                                        <td>6</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>


                                        </div>
                                    </div>


                                    {{--classes--}}
                                    {{--maximum periods--}}
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="periods">Maximum Periods</label>                                     </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="name" value="//select from workload using position" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>


                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            {{--<button class="btn btn-primary" type="button">Cancel</button>--}}
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /modals -->
            </div>


        </div>
        {{--@include("User.Principal.TeacherDetails.subjects");--}}
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

            <!-- Custom Theme Scripts -->
{{--<script src="{{asset('components/gentelella/build/js/custom.min.js')}}"></script>--}}
            {{--jquerry--}}
            <script type="text/javascript" src="{{asset('components/jquery/jquery-1.11.1.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('components/jquery/jquery-ui-1.11.1.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('components/jquery/jquery.appendGrid-1.6.2.js')}}"></script>

@endsection