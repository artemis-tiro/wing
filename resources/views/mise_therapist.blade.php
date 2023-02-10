@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{ url("/c/".$client->id) }}">{{ $client->name }}様</a></li>
<li class="breadcrumb-item"><a href="{{ url("/c/".$client->id.'/'.$mise->id) }}">{{ $mise->name }}編集</a></li>
<li class="breadcrumb-item active">{{ $therapist->business_name }}</li>
@stop

@section('content')

<!-- タイトル -->
<h1 class="h2">{{ $therapist->business_name }}さんデータ</h1>

<!-- 成績 -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">成績</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        <!-- テーブル -->
        <table class="table table-hover">
            <thead>
                <!-- カテゴリ -->
                <tr>
                    <th>月</th>
                    <th>出勤</th>
                    <th>お茶</th>
                    <th>当欠</th>
                    <th>接客(本指名)</th>
                    <th>純利</th>
                    <th>給料</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>〇月</th>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th>〇月</th>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th>〇月</th>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th>〇月</th>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th>〇月</th>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- 詳細 -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">詳細</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        ※実装はフェーズ2以降
        <ul>
            <li>シフト</li>
            <li>住所氏名年齢などの本人確認情報</li>
        </ul>
    </div>
</div>
@stop