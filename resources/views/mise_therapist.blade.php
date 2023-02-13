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
<h1 class="h2">{{ $therapist->business_name }}さん詳細</h1>

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

<!-- ヒアリングシート -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">ヒアリングシート</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        @if ( !empty($mes6) )
        <div class="alert alert-info d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
            </svg>
            <div class="align-items-center">{{ $mes6 }}</div>
        </div>
        @endif
        <p>{!! nl2br(e($mise->hearing_sheet)) !!}</p>
        @component('componets.modal')
            @slot('type', 'hearingSheet')
            @slot('text', $mise->hearing_sheet)
            @slot('url', url()->current().'/hearingsheetedit')
        @endcomponent
    </div>
</div>
@stop