@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')

@section('pan2')
<li class="breadcrumb-item"><a href="{{ url("/shift") }}">シフト入力クライアント一覧</a></li>
<li class="breadcrumb-item"><a href="{{ url('/shift/'.$client->id) }}">{{ $client->name }}様店舗一覧</a></li>

<li class="breadcrumb-item active" aria-current="page">{{ $mise->name }}</li>
@stop

@section('content')

@php
//  シフトを入力できる日数
$days = 10;
$week = ['日', '月', '火', '水', '木', '金', '土']
@endphp

<h1 class="h2">シフト入力</h1>



    @include('common.validator')
    @include('common.error')
    @include('common.success')




<!-- シフト一覧 -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">{{ date('m-d') }}~</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">

        <!-- フォームの開始 -->
        <!-- 現在のURL「url()->current()」 -->
        {{ Form::open(['url' => url()->current().'/addshift']) }}

        <!-- テーブル -->
        <table class="table table-hover">
            <thead>
                <!-- カテゴリ -->
                <tr>
                    <th scope="col">源氏名</th>
                    @for($i=0; $i<$days; $i++)
                        @switch(date('N', strtotime(date('Y-m-d', strtotime("+".$i." day")))))
                            @case (6)
                    <th scope="col" class="text-primary" style="text-align: center">{{ date('m/d', strtotime("+".$i." day")).'('.$week[date('w', strtotime(date('Y-m-d', strtotime("+".$i." day"))))].')' }}</th>
                                @break
                            @case (7)
                    <th scope="col" class="text-danger" style="text-align: center">{{ date('m/d', strtotime("+".$i." day")).'('.$week[date('w', strtotime(date('Y-m-d', strtotime("+".$i." day"))))].')' }}</th>
                                @break
                            @default
                    <th scope="col" style="text-align: center">{{ date('m/d', strtotime("+".$i." day")).'('.$week[date('w', strtotime(date('Y-m-d', strtotime("+".$i." day"))))].')' }}</th>
                        @endswitch
                    @endfor
                </tr>
            </thead>
            <tbody>
                @foreach($therapistList as $t)
                    <tr>
                        <td>{{ $t->business_name }}</td>
                        @for($i=0; $i<$days; $i++)
                        @php 
                            $date = date('Ymd', strtotime("+".$i." day"));
                            $key = 'shiftTime'.$date;
                            $shifuto = isset($t->$key) ? $t->$key : null;
                        @endphp
                        <td>{{ Form::text('shift-'.$t->id.'-'.$date, $shifuto, ['class'=>'form-control shiftTime','autocomplete'=>'off']) }}</td>
                        @endfor
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- 送信ボタン -->
        {{ Form::submit('確定',["class"=>"btn btn-info"]) }}
        ※「SHIFT」+「矢印」を押すと入力欄を移動できます。
        ※「.」を押すと開始時間では「5」と「-」が終了時間では「5」が自動入力されます。

        <!-- フォームの終わり -->
        {{ Form::close() }}

    </div>
</div>

@stop