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
                        <table class="table table-striped projects school-table">
                            <thead>
                            <tr>

                                <th style="width: 30%">School Name</th>
                                <th>Principal</th>
                                <th>Timetable</th>
                                <th style="width: 30%">#Edit</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($schools as $school)
                            <tr class="school-row" data-schoolid ="{{$school->id}}">

                                <td>
                                    <a id="school-name"><?php echo $school['school_name']?></a>
                                </td>
                                <td>
                                    <a id="principal-name"><?php echo $school['principal_name']?></a>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-xs year">2017</button>
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                    <a href="#" type="button" data-target=".bs-example-modal-lg" data-toggle="modal" class="btn btn-info btn-xs" id="edit-button"><i class="fa fa-pencil"></i> Edit </a>
                                    <form action="{{}}"></form>
                                    <a href="{{route('school.delete' , ['school_id' => $school->id])}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                                </td>
                            </tr>
                            @endforeach



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
{{--modal--}}
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Edit School</h4>
            </div>
            <div class="modal-body">
                {{--<div class="x_panel">--}}
                    {{--<div class="x_title">--}}
                        {{--<h2>Edit School</h2>--}}
                        {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                    {{--<div class="x_content">--}}
                        <br />
                        <form class="form-horizontal form-label-left" action="{{route('register-school-post')}}" method="post">
                            @if(count($errors)>0)
                                <div class="row">
                                    <div class="col-md-6">
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
                            <span class="section">School</span>
                            {{--school name--}}
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">School Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="school_name" name="school_name" required="required" value="{{ Request::old('school_name') }}" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            {{--school logo--}}
                            {{--<div class="form-group">--}}
                            {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">School Logo</label>--}}
                            {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                            {{--<input type="text" id="logo" class="form-control col-md-7 col-xs-12">--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <span class="section">Principal</span>
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
                                    <input type="text" id="name" name="name" value="{{ Request::old('name') }}" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            {{--email--}}
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="email" name="email" value="{{ Request::old('email') }}" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                    <button type="button" class="btn btn-primary">Cancel</button>
                                    <button type="reset" class="btn btn-primary">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <input type="hidden" name="_token" value="{{Session::token() }}">
                                </div>
                            </div>

                        </form>
                    {{--</div>--}}
                {{--</div>--}}
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>

        </div>
    </div>
</div>
    @section('scripts')
        <script src="{{URL::to('js/scripts.js')}}"></script>
        @endsection

    @endsection