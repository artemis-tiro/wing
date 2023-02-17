@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{ url('/t/') }}">{{ $therapist->business_name }} さん</a></li>
<li class="breadcrumb-item active">{{ $therapist->business_name }}さん過去予約一覧</li>
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


{{ Form::open(['url' => url('/t/'.$mise->id.'/'.$therapist->id.'/befor_day')]) }}
            
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
                    </tr>
                </thead>
                <tbody>
                    @foreach($yoyakuList  as $y)
                    <tr>
                        <th>{{ $loop->index+1 }}</th>

                        <!-- 終了時間を来店日時＋コース時間で表示 -->
                        <td>
                            {{ date('Y-m-d H:i',strtotime(" $y->visit_day")) }}
                        </td>
                        
                        
                        <td>{{ $y->courseName }}</td>
                            
                        <td>{{ $y->courseShimei }}</td>

                        <td>{{ $kokyakuList[$y->kokyaku_id]->name }} 様</td>
                        
                        <td>{{ substr($kokyakuList[$y->kokyaku_id]->tel, -4, 4) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <a class="m-2 btn btn-dark" href="{{ url('/t/') }}" >戻る</a>
            
        </div>
    </div>
@endif

<!-- 日付選択(予約あり) -->
@if($card === 1)
    <!-- 過去予約リスト -->
    <div class="card my-4">
        <!-- カードのタイトル -->
        <h2 class="card-header h5">{{ date('Y-m-d', strtotime($day)).'('.$week[date('w', strtotime(date('Y-m-d', strtotime($day))))].')' }}</h2>
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
                    </tr>
                </thead>
                <tbody>
                    @foreach($yoyakuList  as $y)
                    <tr>
                        <th>{{ $loop->index+1 }}</th>

                        <!-- 終了時間を来店日時＋コース時間で表示 -->
                        <td>{{ date('Y-m-d H:i',strtotime(" $y->visit_day")) }}</td>

                        <td>{{ $y->courseName }}</td>
                            
                        <td>{{ $y->courseShimei }}</td>

                        <td>{{ $kokyakuList[$y->kokyaku_id]->name }} 様</td>

                        <td>{{ substr($kokyakuList[$y->kokyaku_id]->tel, -4, 4) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <a class="m-2 btn btn-dark" href="{{ url('/t/') }}" >戻る</a>
            
        </div>
    </div>
@endif

<!-- 日付選択(予約なし) -->
@if($card === 2)
    <!-- 過去予約リスト -->
    <div class="card my-4">
        <!-- カードのタイトル -->
        <h2 class="card-header h5">{{ date('Y-m-d', strtotime($day)).'('.$week[date('w', strtotime(date('Y-m-d', strtotime($day))))].')' }}</h2>
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
                        </tr>
                    </thead>
                    <tbody>
                            <!-- お茶 -->
                            @foreach($adjustList  as $a)
                                
                                <th>{{ $loop->index+1 }}</th>
                                
                                <!-- 項目名 -->
                                <th>{{ $a->adjust_name }}</th>
                            @endforeach

                    </tbody>
                </table>
            @elseif(count($shift) != 0)
                <h2>※お茶がありません</h2>
            @else
                <h2>※出勤がありません</h2>
            @endif
            <a class="m-2 btn btn-dark" href="{{ url('/t/') }}" >戻る</a>
            
        </div>
    </div>
@endif

@stop