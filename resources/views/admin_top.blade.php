@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

                <h1 class="h2">{{$teamName}}管理者トップページ</h1>

                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">売上</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        本日、前日、今月、先月の売上が表示されます。<br>
                        （フェーズ2以降）
                    </div>
                </div>

                <div class="card my-4 mb-5">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">メンバー管理</h2>
                    <!-- カードの要素 -->
                    <div class="card-body">
                        メンバーの稼働状況が確認できます。<br>
                        （フェーズ2以降）<br><br>
                        <a class="btn btn-sm btn-info" href="{{url('/admin/inputer')}}">メンバー管理画面へ</a></td>
                    </div>
                </div>

                <div class="card my-4 mb-5">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">クライアント管理</h2>
                    <!-- カードの要素 -->
                    <div class="card-body">
                        <a class="btn btn-sm btn-info" href="{{url('/admin/client')}}">クライアント管理画面へ</a></td>
                    </div>
                </div>

@stop