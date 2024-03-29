@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{ url("/i") }}">店舗一覧</a></li>
<li class="breadcrumb-item"><a href="{{ url("/i/".$mise->id) }}">{{ $mise->name }}</a></li>
<li class="breadcrumb-item active">{{ $therapist->business_name }} さん</li>
@stop

@section('content')

@php
$week = ['日', '月', '火', '水', '木', '金', '土'];
$valueCnt = 1;
@endphp 

<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

<!-- タイトル -->
<h1 class="h2">{{ $therapist->business_name }}さん過去予約一覧</h1>


@include('common.validator')
@include('common.error')
@include('common.success')


{{ Form::open(['url' => url('/i/'.$mise->id.'/'.$therapist->id.'/befor_day')]) }}
            
<!-- 開始時間 -->
<label class="row text-nowrap mb-4 text-end">
    <div class="mt-2 col-sm-1 text-end">日付選択<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
    <div class="col-sm-2">
        {{ Form::date('day', null, ['class'=>'form-control', 'required']) }}
    </div>
    <div class="col-sm-1">{{ Form::submit('検索',["class"=>"btn btn-info"]) }}</div>
</label>
<!-- フォームの終わり -->
{{ Form::close() }}

<!-- 初期表示 -->
@if($card === 0)
    @foreach($yoyakuDaysList  as $yd)
        @php $valueCnt = 1; @endphp
        <!-- 過去予約リスト -->
        <div class="card my-4">
            <!-- カードのタイトル -->
            <h2 class="card-header h5">{{ date('Y-m-d', strtotime($yd)).'('.$week[date('w', strtotime(date('Y-m-d', strtotime($yd))))].')' }}</h2>
            <!-- カードの要素 -->
            <div class="card-body table-responsive text-nowrap">
                <!-- テーブル -->
                <table class="table table-hover">
                    <thead>
                        <!-- カテゴリ -->
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">日付</th>
                            <th scope="col">コース</th>
                            <th scope="col">指名</th>
                            <th scope="col">顧客名</th>
                            <th scope="col">電話番号</th>
                            <th scope="col">給料</th>
                        </tr>
                    </thead>
                        @foreach($yoyakuList  as $y)
                            @if($yd == $y->working_day)
                                <tbody>
                                    <tr>
                                        <th>{{ $valueCnt }}</th>

                                        <!-- 終了時間を来店日時＋コース時間で表示 -->
                                        <td>
                                            {{ date('Y-m-d H:i',strtotime(" $y->visit_day")) }} ~ 
                                            {{ date('H:i',strtotime(" $y->visit_day +$y->courseTime min ")) }}
                                        </td>
                                        
                                        
                                        <td>{{ $y->courseName }}</td>
                                            
                                        <td>{{ $y->courseShimei }}</td>

                                        <td><a href="{{ url('/k/'.$mise->id.'/'.$y->kokyaku_id.'/') }}">{{ $kokyakuList[$y->kokyaku_id]->name }}</a> 様</td>
                                        
                                        <td>{{ $y->phone }}</td>

                                        <td>{{ number_format($y->totalBack) }}円</td>
                                    </tr>
                                </tbody>
                                @php $valueCnt += 1; @endphp
                            @endif
                        @endforeach
                </table>            
            </div>
        </div>
    @endforeach
@endif

<!-- 日付選択(予約あり) -->
@if($card === 1)
    <!-- 過去予約リスト -->
    <div class="card my-4">
        <!-- カードのタイトル -->
        <h2 class="card-header h5">{{ $day }} ( {{ number_format($dailyPrice) }}円 )</h2>
        <!-- カードの要素 -->
        <div class="card-body table-responsive text-nowrap">
            <!-- テーブル -->
            <table class="table table-hover">
                <thead>
                    <!-- カテゴリ -->
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">時間</th>
                        <th scope="col">コース</th>
                        <th scope="col">指名</th>
                        <th scope="col">顧客名</th>
                        <th scope="col">電話番号</th>
                        @if($accesslevel != 'therapist')
                            <th scope="col">給料</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach($yoyakuList  as $y)
                    <tr>
                        <th>{{ $loop->index+1 }}</th>

                        <!-- 終了時間を来店日時＋コース時間で表示 -->
                        <td>
                            {{ date('Y-m-d H:i',strtotime(" $y->visit_day")) }} ~ 
                            {{ date('H:i',strtotime(" $y->visit_day +$y->courseTime min ")) }}
                        </td>

                        <td>{{ $y->courseName }}</td>
                            
                        <td>{{ $y->courseShimei }}</td>

                        <td><a href="{{ url('/k/'.$mise->id.'/'.$y->kokyaku_id.'/') }}">{{ $kokyakuList[$y->kokyaku_id]->name }}</a> 様</td>

                        <td>{{ $y->phone }}</td>

                        <td>{{ number_format($y->totalBack) }}円</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <a class="m-2 btn btn-dark" href="{{ url('/i/'.$mise->id.'/'.$therapist->id) }}" >戻る</a>
            
        </div>
    </div>
@endif

<!-- 日付選択(予約なし) -->
@if($card === 2)
    <!-- 過去予約リスト -->
    <div class="card my-4">
        <!-- カードのタイトル -->
        <h2 class="card-header h5">{{ $day }} ( {{ number_format($dailyPrice) }}円 )</h2>
        <!-- カードの要素 -->
        <div class="card-body table-responsive text-nowrap">
            @if(count($adjustList) != 0)
                <!-- テーブル -->
                <table class="table table-hover">
                    <thead>
                        <!-- カテゴリ -->
                        <tr>
                            <th></th>
                            <th scope="col">お茶名</th>
                            <th scope="col">給料</th>
                        </tr>
                    </thead>
                    <tbody>
                            <!-- お茶 -->
                            @foreach($adjustList  as $a)
                                
                                <th>{{ $loop->index+1 }}</th>
                                
                                <!-- 項目名 -->
                                <th>{{ $a->adjust_name }}</th>

                                <!-- 金額 -->
                                <th>{{ number_format($a->adjust_many) }}円</th>
                            @endforeach

                    </tbody>
                </table>
            @elseif(count($shift) != 0)
                <h2>※お茶がありません</h2>
            @else
                <h2>※出勤がありません</h2>
            @endif
            <a class="m-2 btn btn-dark" href="{{ url('/i/'.$mise->id.'/'.$therapist->id) }}" >戻る</a>
            
        </div>
    </div>
@endif

@stop