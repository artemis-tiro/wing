@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
{{--@include('common.pan')--}}
@section('pan2')
<li class="breadcrumb-item active">マイページ</li>
@stop

@section('content')

                <!-- タイトル -->
                <h1 class="h2">マイページ</h1>

                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">売上、成績の確認</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
			売上や成績の確認ができます。(フェーズ2以降)
                    </div>
                </div>

                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">パスワード変更</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
			パスワード変更ができます。(フェーズ2以降)
                    </div>
                </div>

                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">登録情報の変更</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
			登録情報の変更ができます。(フェーズ2以降)
                    </div>
                </div>

@stop
@include('common.footer')