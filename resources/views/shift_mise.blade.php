@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
@if($level != 'client')
<li class="breadcrumb-item"><a href="{{ url("/shift") }}">クライアント一覧</a></li>
@endif

<li class="breadcrumb-item active" aria-current="page">{{ $client->name }}様店舗一覧</li>
@stop

@section('content')

<!-- タイトル -->
<h1 class="h2">{{ $client->name }}様 店舗一覧</h1>

<!-- 店舗一覧 -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">店舗を選択してください。</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">

        <!-- テーブル -->
        <table class="table table-hover">
            <thead>
                <!-- カテゴリ -->
                <tr>
                    <th scope="col"></th>
                    <th scope="col">店舗名</th>
                    <th scope="col">地域</th>
                    <th scope="col">部屋数</th>
                    <th scope="col">在籍</th>
                    <th scope="col">状態</th>
                </tr>
            </thead>
            <tbody>
                @foreach($myMiseList as $i)
                <?php 
                    $active = $i->active?'アクティブ':'停止中'; 
                    $action = $i->active?'stop':'go'; 
                    $actionComment = $i->active?'停止':'再開'; 
                ?>
                <tr class="account_{{ $action }}">
                    <th>{{ $loop->index+1 }}</th>
                    <td><a href="{{ url('/shift/'.$client->id.'/'.$i->id) }}">{{ $i->name }}</a></td>
                    <td>{{ $i->area }}</td>
                    <td>{{ $i->room->count() }}</td>
                    <td>{{ $i->therapistCount }}</td>
                    <td>{{ $active }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        @if($level != 'client')
        <a class="btn btn-dark" href="{{ url('/shift') }}" >戻る</a>
        @endif

    </div>    
</div>

@stop