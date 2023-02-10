@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{ url("/i") }}">店舗一覧</a></li>
<li class="breadcrumb-item"><a href="{{ url("/i/".$mise->id) }}">{{ $mise->name }}</a></li>
<li class="breadcrumb-item"><a href="{{ url('/i/'.$mise->id.'/'.$therapist->id.'/') }}">{{ $therapist->business_name }} さん</a></li>
<li class="breadcrumb-item active">給与計算</li>
@stop

@section('content')

@php
    $check = false;
@endphp

<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

<h1 class="h2">{{ $therapist->business_name }}さん 給与明細</h1>

@include('common.validator')
@include('common.error')
@include('common.success')

<!-- 給料調整 -->
<div class="card my-4">

    <!-- 調整金の後ろに給与形態も出す -->

    <!-- カードのタイトル -->
    <h2 class="card-header h5">給与計算</h2>

    <!-- カードの要素 -->
    <div class="card-body">

    <!-- フォームの開始 -->

    <!-- 予約が1件もない場合 -->
    @if(count($yoyakuList) === 0)
        {{ Form::open(['url' => url('/i/'.$mise->id.'/'.$therapist->id.'/calculation2')]) }}
        <!-- お茶 -->
        <div class="row text-nowrap text-end">
            <div class="col-sm-2 text-end">お茶</div>
            
            @foreach($otyaList  as $ot)
                @if($otyacheck != null)
                    @php $check = $otyacheck->adjust_name == $ot->name? true: false; @endphp
                @endif
                @if($loop->index == 0)
                    <label class="col-sm-2">
                        {{ Form::radio('ocha', $ot->id, $check, ['class'=>'form-check-input', 'required']) }}
                        {{ $ot->name }}
                    </label>
        <!-- 項目縦表示のためここで１つ目のdivをとじる -->
        </div>
                @else
        <div class="row text-nowrap mb-3 text-end">
                    <!-- 項目の場所合わせ -->
                    <div class="col-sm-2"></div>
                    <label class="col-sm-2">
                        {{ Form::radio('ocha', $ot->id, $check, ['class'=>'form-check-input', 'required']) }}
                        {{ $ot->name }}
                    </label>
        </div>
                @endif
            @endforeach
    @endif
    
    @if(count($yoyakuList) != 0)
        {{ Form::open(['url' => url('/i/'.$mise->id.'/'.$therapist->id.'/calculation')]) }}
        <!-- 調整金 -->
        <div class="row text-nowrap text-end">
            <h3 class="col-sm-2 lh2 h6 text-end">調整金</h3>
        </div>
        
        @for($i=0; $i<3; $i++)
            <div class="row text-nowrap mb-4 text-end">
                <div class="col-sm-5">
                    @php $name=isset($adjustList[$i]->adjust_name)? $adjustList[$i]->adjust_name: ''; @endphp
                    {{ Form::text('adjust_name'.$i + 1, $name, ['class'=>'form-control', 'autocomplete'=>'off']) }}
                </div>
                <div class="col input-group">
                    @php $many=isset($adjustList[$i]->adjust_many)? $adjustList[$i]->adjust_many: ''; @endphp
                    {{ Form::number('adjust_many'.$i + 1, $many, ['class'=>'form-control', 'autocomplete'=>'off']) }}
                    <span class="input-group-text">円</span>
                </div>
                <div class="col"></div>
            </div>
        @endfor
    @endif

    <!-- 送信ボタン -->
    {{ Form::submit('給料計算',["class"=>"btn btn-info"]) }}

    <!-- 戻る -->
    <a href="{{ url("/i/".$mise->id) }}" class="btn btn-dark">戻る</a>

    <!-- フォームの終わり -->
    {{ Form::close() }}
    </div>
</div>

<!-- 予約がない場合 -->
@if(count($yoyakuList) === 0 && count($adjustList) != 0)
    <!-- コピペ用 -->
    <div class="card my-4">
        <!-- カードのタイトル -->
        <h2 class="card-header h5">コピペ用</h2>
        <!-- カードの要素 -->
        <div class="card-body table-responsive text-nowrap">

            <!-- セラピスト名 -->
            {{ $therapist->business_name }}さん

            <br>
            <br>
            
            <!-- お茶 -->
            @foreach($adjustList  as $a)
                <!-- 項目名 -->
                <span>{{ $a->adjust_name }}</span>

                <!-- 金額 -->
                <span>{{ number_format($a->adjust_many) }}円</span>

                <br>
            @endforeach
            

            <br>

            <!-- お茶金 -->
            <span>合計{{ number_format($a->adjust_many) }}円</span>

            <br>
            <br>
            
            今日も一日お疲れ様でした。
            
        </div>
    </div>
@endif

<!-- 予約がある場合 -->
@if(count($yoyakuList) != 0)
    <!-- コピペ用 -->
    <div class="card my-4">
        <!-- カードのタイトル -->
        <h2 class="card-header h5">コピペ用</h2>
        <!-- カードの要素 -->
        <div class="card-body table-responsive text-nowrap">

            <!-- セラピスト名 -->
            {{ $therapist->business_name }}さん

            <br>
            <br>

            @foreach($yoyakuList as $y)
                <!-- 件数 -->
                <span>{{ number_format($loop->index+1) }}件目</span>

                <!-- 発生料金 -->
                <span>{{ number_format($y->totalBack) }}円</span>

                <br>
            @endforeach

            <br>
            
            <!-- 調整金 -->
            @foreach($adjustList  as $a)
                <!-- 項目名 -->
                @if($a->adjust_name != null)
                    <span>{{ $a->adjust_name }}</span>

                    <!-- 金額 -->
                    <span>{{ number_format($a->adjust_many) }}円</span>

                    <br>
                @else
                    <span>調整金無し</span>
                    <br>
                @endif
            @endforeach

            <br>

            <!-- 予約　＋　調整金 -->
            <span>合計{{ number_format($y->dailyPrice) }}円</span>


            <!-- 　　　　今回未実装 　　　　　-->
            <!-- ポーチ朝一 -->
            <!-- ポスト投函 -->
            <!-- ポーチ最終 -->
            <!-- 　　　　今回未実装　　　　　-->

            <br>
            <br>
            
            今日も一日お疲れ様でした。
            
        </div>
    </div>
    
    <!-- コピペ用(詳細) -->
    <div class="card my-4">
        <!-- カードのタイトル -->
        <h2 class="card-header h5">コピペ用(詳細)</h2>
        <!-- カードの要素 -->
        <div class="row card-body table-responsive text-nowrap">
            @foreach($yoyakuList  as $y)

                <!-- 件数 -->
                <span>-------{{ $loop->index+1 }}件目-------</span>

                <!-- 時間　＋　指名　＋　コース　＋　お客様名　＋　電話 -->
                <span>
                    <!-- 予約時間 -->
                    {{ \Carbon\Carbon::createFromTimeString($y->visit_day)->format('H:i') }}~ 

                    <!-- 指名 -->
                    {{ $y->courseShimei }}

                    <!-- コース -->
                    {{ $y->courseName }}

                    <!-- お客様名 -->
                    {{ $kokyakuList[$y->kokyaku_id]->name.' 様' }}

                    <!-- お客様電話番号(下四桁のみ表示) -->
                    {{ substr($kokyakuList[$y->kokyaku_id]->tel, -4, 4) }}
                </span>

                <!-- お客様支払 -->
                <span>・お客様支払</span>

                <!-- コース金額 -->
                <span>基本料金  {{ $y->coursePrice->price }}円</span>

                <!-- 指名 -->
                <span>{{ $y->courseShimei }}    {{ $y->shimeiPrice->price }}円</span>
                
                <!-- オプション -->
                @if(isset($y->optionPrice->price))
                    <span>オプション    {{ $y->optionPrice->price }}円</span>
                @else
                    <span>オプション    無し</span>
                @endif
                
                <!-- バック -->
                <span>・バック</span>
                
                <!-- コース金額 -->
                <span>基本料金  {{ $y->coursePrice->back }}円</span>

                <!-- 指名 -->
                <span>{{ $y->courseShimei }}    {{ $y->shimeiPrice->back }}円</span>
                
                <!-- オプション -->
                @if(isset($y->optionPrice->back))
                    <span>オプション    {{ $y->optionPrice->back }}円</span>
                @else
                    <span>オプション    無し</span>
                @endif

                <br>
                <br>
            @endforeach
        </div>
    </div> 
@endif

@stop