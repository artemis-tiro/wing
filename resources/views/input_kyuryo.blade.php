@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{ url("/i") }}">店舗一覧</a></li>
<li class="breadcrumb-item"><a href="{{ url("/i/".$mise->id) }}">{{ $mise->name }}</a></li>
<li class="breadcrumb-item"><a href="{{ url('/i/'.$mise->id.'/'.$therapist->id.'/') }}">{{ $therapist->business_name }}</a></li>
<li class="breadcrumb-item active">給与計算</li>

<li class="breadcrumb-item active"></li>
@stop

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

                <h1 class="h2">給与計算</h1>

                <!-- 予約フォーム -->
                <div class="card my-4">


                    <!-- 調整金の後ろに給与形態も出す -->

                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">調整金</h2>

                    <!-- カードの要素 -->
                    <div class="card-body">

                    <!-- フォームの開始 -->
                    {{ Form::open(['url' => url('/i/'.$mise->id.'/'.$therapist->id.'/calculation')]) }}

                    @include('common.validator')
                    @include('common.error')
                    @include('common.success')

                    <!-- ポーチ -->
                    <div class="row text-nowrap text-end">
                        <h3 class="col-sm-2 lh2 h6 text-end">ポーチ朝一</h3>
                    </div>

                    <div class="row text-nowrap mb-4 text-end">
                        <div class="col input-group">
                            {{ Form::number('pouch', null, ['class'=>'form-control']) }}
                            <span class="input-group-text">円</span>
                        </div>

                        <!-- input-groupの大きさを調整 -->
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>

                    <!-- 調整金 -->
                    <div class="row text-nowrap text-end">
                        <h3 class="col-sm-2 lh2 h6 text-end">調整金</h3>
                    </div>

                    <div class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-5">
                            {{ Form::text('name', null, ['class'=>'form-control']) }}
                        </div>
                        <div class="col input-group">
                            {{ Form::number('name', null, ['class'=>'form-control']) }}
                            <span class="input-group-text">円</span>
                        </div>
                        <div class="col"></div>
                    </div>

                    <div class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-5">
                            {{ Form::text('name', null, ['class'=>'form-control']) }}
                        </div>
                        <div class="col input-group">
                            {{ Form::number('name', null, ['class'=>'form-control']) }}
                            <span class="input-group-text">円</span>
                        </div>
                        <div class="col"></div>
                    </div>

                    <div class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-5">
                            {{ Form::text('name', null, ['class'=>'form-control']) }}
                        </div>
                        <div class="col input-group">
                            {{ Form::number('name', null, ['class'=>'form-control']) }}
                            <span class="input-group-text">円</span>
                        </div>
                        <div class="col"></div>
                    </div>
                    
                    <!-- 送信ボタン -->
                    {{ Form::submit('給料計算',["class"=>"btn btn-info"]) }}

                    <!-- フォームの終わり -->
                    {{ Form::close() }}
                    </div>
                </div>

                <!-- コピペ用 -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">コピペ用</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">

                        <!-- セラピスト名 -->
                        {{ $therapist->business_name }}

                        <br>
                        <br>

                        <!-- タイトル -->
                        <!-- 日付　＋　お給料 -->

                        <!-- ループで当日の件数と金額を出す -->
                        <!-- 〇件目　△△△△円 -->

                        <!-- 端数金？ -->
                        <!-- 前回もらい忘れ？ -->

                        <!-- 日当金額 -->

                        <!-- ポーチ朝一金額 -->
                        <!-- ポスト投函金額 -->
                        <!-- ポーチ最終金額 -->

                        @foreach($yoyakuList  as $y)
                            <span>{{ $loop->index+1 }}</span>
                            
                            <!-- 指名 -->
                            <span>
                                @switch($y->shimei)
                                    @case (1)
                                        本指名
                                        @break
                                    @case (2)
                                        ネット指名
                                        @break
                                    @case (3)
                                        フリー
                                        @break
                                @endswitch
                            </span>

                            <!-- コース -->
                            <span>{{ $y->price_id_list }}</span>

                            <!-- お客様名 -->
                            <span>{{ $kokyakuList[$y->kokyaku_id]->name.' 様' }}</span>

                            <!-- 発生料金 -->
                            <span>合計 ..</span>

                            <!-- 予約時間 -->
                            <span>
                                {{ \Carbon\Carbon::createFromTimeString($y->visit_day)->format('m/d H:i') }}.' ~ '
                                
                            </span>

                            <br>
                            <br>


                        @endforeach
                        
                        今日も一日お疲れ様でした。
                        
                    </div>
                </div>
                
                <!-- コピペ用(詳細) -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">コピペ用(詳細)</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        @foreach($yoyakuList  as $y)
                            <span>{{ $loop->index+1 }}</span>
                            
                            <!-- ループして各施術？の詳細表示 -->
                            <!-- 〇件目 -->

                            <!-- 時間　＋　指名　＋　コース　＋　お客様名　＋　電話？ -->
                            <!-- ・お客様支払 -->
                            <!-- 基本料金　（コース金額） -->
                            <!-- 指名      （金額） -->
                            <!-- オプション（総額） -->
                            <!-- ・バック -->
                            <!-- 基本料金　（コース*給与形態のパーセント） -->
                            <!-- 指名      （金額*給与形態のパーセント） -->
                            <!-- オプション（総額*給与形態のパーセント） -->

                            <!-- 指名 -->
                            <span>
                                @switch($y->shimei)
                                    @case (1)
                                        本指名
                                        @break
                                    @case (2)
                                        ネット指名
                                        @break
                                    @case (3)
                                        フリー
                                        @break
                                @endswitch
                            </span>

                            <!-- コース -->
                            <span>{{ $y->price_id_list }}</span>

                            <!-- お客様名 -->
                            <span>{{ $kokyakuList[$y->kokyaku_id]->name.' 様' }}</span>

                            <!-- 発生料金 -->
                            <span>合計 ..</span>

                            <!-- 予約時間 -->
                            <span>
                                {{ \Carbon\Carbon::createFromTimeString($y->visit_day)->format('m/d H:i') }}.' ~ '
                                
                            </span>

                            <br>
                            <br>
                        @endforeach
                    </div>
                </div> 

@stop