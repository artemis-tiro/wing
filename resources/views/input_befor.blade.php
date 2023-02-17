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
// シフトを入力できる日数
$week = ['日', '月', '火', '水', '木', '金', '土']
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

<!-- 初期表示(過去10日) -->
@if($card === 0)
    <!-- 過去予約リスト -->
    <div class="card my-4">
        <!-- カードのタイトル -->
        <h2 class="card-header h5">最近の出勤</h2>
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
                        
                        <td>
                            <!-- mb_strlen()文字数カウント -->
                            @if(mb_strlen($kokyakuList[$y->kokyaku_id]->tel) === 11)
                            {{ 
                                substr($kokyakuList[$y->kokyaku_id]->tel, 0, 3).'-'.
                                substr($kokyakuList[$y->kokyaku_id]->tel, 3, 4).'-'.
                                substr($kokyakuList[$y->kokyaku_id]->tel, -4, 4)
                            }}
                            @else
                            {{ 
                                substr($kokyakuList[$y->kokyaku_id]->tel, 0, 2).'-'.
                                substr($kokyakuList[$y->kokyaku_id]->tel, 3, 4).'-'.
                                substr($kokyakuList[$y->kokyaku_id]->tel, -4, 4)
                            }}
                            @endif
                        </td>

                        <td>{{ number_format($y->totalBack) }}円</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <a class="m-2 btn btn-dark" href="{{ url('/i/'.$mise->id.'/'.$therapist->id) }}" >戻る</a>
            
        </div>
    </div>
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

                        <td>
                            <!-- mb_strlen()文字数カウント -->
                            @if(mb_strlen($kokyakuList[$y->kokyaku_id]->tel) === 11)
                            {{ 
                                substr($kokyakuList[$y->kokyaku_id]->tel, 0, 3).'-'.
                                substr($kokyakuList[$y->kokyaku_id]->tel, 3, 4).'-'.
                                substr($kokyakuList[$y->kokyaku_id]->tel, -4, 4)
                            }}
                            @else
                            {{ 
                                substr($kokyakuList[$y->kokyaku_id]->tel, 0, 2).'-'.
                                substr($kokyakuList[$y->kokyaku_id]->tel, 3, 4).'-'.
                                substr($kokyakuList[$y->kokyaku_id]->tel, -4, 4)
                            }}
                            @endif
                        </td>

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