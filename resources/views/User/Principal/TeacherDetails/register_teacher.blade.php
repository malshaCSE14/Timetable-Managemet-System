<?php
$positions = array("Principal","Vice Principal","Assistant Principal","Supervisor","Adviser (students greater than 300)","Adviser (students less than 300)","Class Teacher","Subject Head","Teacher");
$periods = array(
        $positions[0]=>0,
        $positions[1]=>10,
        $positions[2]=>12,
        $positions[3]=>16,
        $positions[4]=>0,
        $positions[5]=>15,
        $positions[6]=>33,
        $positions[7]=>33,
        $positions[8]=>35);
?>


@extends('User.Principal.principal_view')
@section('styles')
    <link href="{{asset('components/gentelella/vendors/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="col-md-8 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Add Teacher</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />

                <form action="{{route('register-teacher-post')}}" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    <span class="section">Teacher</span>
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
                    {{--title--}}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Title</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div id="title" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="title" value="Ven."> &nbsp; Ven. &nbsp;
                                </label>
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="title" value="Mr."> &nbsp; Mr. &nbsp;
                                </label>
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="title" value="Ms."> Ms.
                                </label>
                            </div>
                        </div>
                    </div>
                    {{--name--}}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="name" value="{{ Request::old('name') }}" id="name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    {{--position--}}
                    {{--<script type="text/javascript">--}}
                        {{--function changeFunction(){--}}
                            {{--var position = document.getElementById("position");--}}
                            {{--var selectedValue = position.options[position.selectedIndex].value;--}}
{{--//                            alert(selectedValue);--}}
                            {{--var text = selectedValue;--}}
                            {{--document.getElementById("maximum_periods").value = text;--}}
                        {{--}--}}
                    {{--</script>--}}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Position</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <select name="position" id="position" class="form-control">
                                <option>Choose Option</option>
                                <?php

                                foreach ($positions as $position){

                                ?>
                                <option value="<?php echo $position?>"> <?php echo $position?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="periods">Email Address</label>                                     </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="email" value="{{ Request::old('email') }}" id="email" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    {{--subjects--}}

                    <span class="section">Subjects Teaching</span>
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
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                    </tr>
                                    <tr>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                    </tr><tr>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                    </tr><tr>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                    </tr><tr>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                    </tr><tr>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                    </tr><tr>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                    </tr><tr>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                    </tr><tr>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                    </tr><tr>
                                        <td contenteditable="true"></td>
                                        <td contenteditable="true"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>


                    {{--classes--}}
                    {{--maximum periods--}}
                    {{--<div class="form-group">--}}
                        {{--<label class="control-label col-md-3 col-sm-3 col-xs-12" for="periods">Maximum Periods</label>--}}
                        {{--<div class="col-md-6 col-sm-6 col-xs-12">--}}
                            {{--<input type="text" name="maximum_periods" id="maximum_periods" class="form-control col-md-7 col-xs-12">--}}
                        {{--</div>--}}
                    {{--</div>--}}


                    <div class="ln_solid"></div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            {{--<button class="btn btn-primary" type="button">Cancel</button>--}}
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                            <input type="hidden" name="_token" value="{{Session::token() }}">
                        </div>
                    </div>

                </form>




            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12 col-xs-12">
        <div>
            <div class="x_title">
                <h2>Teachers</h2>
                <div class="clearfix"></div>
            </div>
            <ul class="list-unstyled top_profiles scroll-view">

                <?php foreach ($teachers as $teacher){
                ?>
                    <li class="media event">
                        <a class="pull-left border-aero profile_thumb">
                            <i class="fa fa-user aero"></i>
                        </a>
                        <div class="media-body">
                            <a class="title" href="#"><?php  echo $teacher['title']." ".$teacher['name']?></a>
                            <p><?php  echo $teacher['position']?></p>
                            </p>
                        </div>
                    </li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </div>

@section('scripts')
    <script src="{{asset('components/gentelella/vendors/dropzone/dist/min/dropzone.min.js')}}"></script>

@endsection
@endsection