@extends('User.Zone.zone_view')
@section('styles')
    <link href="{{asset('components/gentelella/vendors/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet">
@endsection

@section('content')
    <div class="col-md-8 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Register School</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form class="form-horizontal form-label-left" action="{{route('register-school-post')}}" method="post">
                    <span class="section">School</span>
                    {{--school name--}}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">School Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="school_name" name="school_name" required="required" class="form-control col-md-7 col-xs-12">
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
                    {{--title1--}}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Title</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div id="title1" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="title1" value="ven"> &nbsp; Ven. &nbsp;
                                </label>
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="title1" value="mr"> &nbsp; Mr. &nbsp;
                                </label>
                                <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="title1" value="ms"> Ms.
                                </label>
                            </div>
                        </div>
                    </div>
                    {{--name--}}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>
                    {{--email--}}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input type="text" id="email" name="email" class="form-control col-md-7 col-xs-12">
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
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-12 col-xs-12">
        <div>
            <div class="x_title">
                <h2>Schools <small>Hakmana Zone</small></h2>
                <div class="clearfix"></div>
            </div>
            <ul class="list-unstyled top_profiles scroll-view">

                <?php foreach ($schools as $school){
                ?>
                <li class="media event">
                    <a class="pull-left border-aero profile_thumb">
                        <i class="fa fa-user aero"></i>
                    </a>
                    <div class="media-body">
                        <a class="title" href="#"><?php  echo $school['school_name']?></a>
                        <p>Principal Name</p>
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