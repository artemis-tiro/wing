@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@section('pan2')
<li class="breadcrumb-item"><a href="/">Tiro</a></li>
@stop


@section('content')

{{--
<a href='".url('log?action=del')."'>ログ削除</a>　　
<a href='".url('log')."'>更新</a>　　
--}}
<a href='/'>戻る</a>
<br><br>

@include('log')




@stop
@include('common.footer')