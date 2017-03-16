@extends('Templates.Master')
@section('maincontent')
    @include('Templates.left_col')
    @include('Templates.top_nav')
    @endsection

@section('footercontent')
    @include('Templates.footer')
    @endsection

@section('compose')
    @include('Templates.compose')
    @endsection