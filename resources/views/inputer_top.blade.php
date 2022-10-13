@extends('common.layout')
@include('common.header')
@include('common.topmenu')
@include('common.pan')

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

        <h1>{{$teamName}}トップページ</h1>
        <h2>メンバー一覧</h2>
     




@stop
@include('common.footer')