@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')

@section('pan2')
<li class="breadcrumb-item active" aria-current="page">クライアント一覧</li>
@stop

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

<!-- タイトル -->
<h1 class="h2">クライアント一覧</h1>

<!-- クライアント一覧 -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">クライアントを選択してください。</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">

        <!-- テーブル -->
        <table class="table table-hover">
            <thead>
                <!-- カテゴリ -->
                <tr>
                    <th scope="col"></th>
                    <th scope="col">ID</th>
                    <th scope="col">代表者名</th>
                    <th scope="col">店舗数</th>
                    <th scope="col">メイン店舗</th>
                    <th scope="col">状態</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientList as $c)
                    <?php 
                        $level = $c->access_level=='admin'?'管理者':'メンバー'; 
                        $active = $c->active?'アクティブ':'停止中'; 
                        $action = $c->active?'stop':'go'; 
                        $actionComment = $c->active?'停止':'再開'; 
                    ?>

                    <tr class="account_{{ $action }}">
                        <th>{{ $loop->index+1 }}</th>
                        <td>{{ $c->name }}</td>
                        <td><a href="{{ url('/shift/'.$c->id) }}">{{ $c->client->name }}</a></td>
                        <td>{{ $c->miseCountActive }}</td>
                        <td>{{ $c->miseMain }}</td>
                        <td>{{ $active }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop