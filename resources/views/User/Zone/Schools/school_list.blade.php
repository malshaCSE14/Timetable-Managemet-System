@extends('User.Zone.zone_view')
@section('content')
<!-- page content -->
<div class="left_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        {{--<div class="row">--}}
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h1>Schools <small> Hakmana Zone</small></h1>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                            <tr>
                                <th style="width: 1%">#</th>
                                <th style="width: 30%">School Name</th>
                                <th>Principal</th>
                                <th>Timetable</th>
                                <th style="width: 30%">#Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                   foreach ($schools as $school){
                            ?>
                            <tr>
                                <td>#</td>
                                <td>
                                    <a><?php echo $school['school_name']?></a>
                                </td>
                                <td>
                                    Principal Name
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-xs">2017</button>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                    <a href="#" type="button" data-target=".bs-example-modal-lg" data-toggle="modal" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                                    {{--<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">--}}
                                        {{--<div class="modal-dialog modal-lg">--}}
                                            {{--<div class="modal-content">--}}

                                                {{--<div class="modal-header">--}}
                                                    {{--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>--}}
                                                    {{--</button>--}}
                                                    {{--<h4 class="modal-title" id="myModalLabel">Modal title</h4>--}}
                                                {{--</div>--}}
                                                {{--<div class="modal-body">--}}
                                                    {{--<h4>Text in a modal</h4>--}}
                                                    {{--<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>--}}
                                                    {{--<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>--}}
                                                {{--</div>--}}
                                                {{--<div class="modal-footer">--}}
                                                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                                                    {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                                                {{--</div>--}}

                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>
                            <?php }?>

                            </tbody>
                        </table>
                        <!-- end project list -->

                    </div>
                </div>
            </div>
        </div>
    {{--</div>--}}
</div>
<!-- /page content -->
    @endsection