@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{url("/i")}}">店舗一覧</a></li>
<li class="breadcrumb-item active">{{$mise->name}}</li>

@stop

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

<!-- タイトル -->
<h1 class="h2">{{$mise->name}}</h1>

<!-- セラピスト一覧 -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">セラピストを選択してください。</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        <!-- テーブル -->
        <table class="table table-hover">
            <thead>
                <!-- カテゴリ -->
                <tr>
                    <th scope="col"></th>
                    <th scope="col">出勤</th>
                    <th scope="col">セラピスト名</th>
                    <th scope="col">年齢</th>
                    <th scope="col">バスト</th>
                    <th scope="col">身長</th>
                    <th scope="col">給料形態</th>
                </tr>
            </thead>
            <tbody>
                @foreach($zenTherapistList as $t)
                    <tr>
                        <th>{{ $loop->index+1 }}</th>
                        <th>{{ $t->time ?? '-' }}</th>
                        <td><a href="{{ url('/i/'.$mise->id.'/'.$t->id.'/' )}}">{{$t->business_name }}</a></td>
                        <td>{{ $t->business_age }}</td>
                        <td>{{ $t->cup }}</td>
                        <td>{{ $t->tall }}</td>
                        <td>{{ $t->back_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ url('/i/') }}" class="btn btn-dark">戻る</a>
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