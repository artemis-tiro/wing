@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')

@section('pan2')

@stop

@section('content')

@if(isset($t)){!!nl2br($t)!!}@endif


@stop