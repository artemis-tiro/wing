@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{url("/i")}}">店舗一覧</a></li>
<li class="breadcrumb-item"><a href="{{url("/i/".$mise->id)}}">{{$mise->name}}</a></li>
<li class="breadcrumb-item active">{{$therapist->business_name}}</li>
@stop

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

                <h1 class="h2">{{$therapist->business_name}}スケジュール</h1>

                <!-- 予約リスト -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">予約一覧</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        <!-- テーブル -->
                        <table class="table table-hover">
                            <thead>
                                <!-- カテゴリ -->
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">ステータス</th>
                                    <th scope="col">時間</th>
                                    <th scope="col">コース</th>
                                    <th scope="col">指名</th>
                                    <th scope="col">顧客名</th>
                                    <th scope="col">電話番号</th>
                                    <!-- ボタン用 -->
                                    <!-- 権限者のみ可視化 -->
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($yoyakuList  as $y)
                                <tr>
                                    <th>{{$loop->index+1}}</th>

                                    <!-- 非同期処理 -->
                                    <!-- で来店日時とコース時間を参照してステータスを変動 -->
                                    <td>未実装</td>

                                    <!-- 終了時間を来店日時＋コース時間で表示 -->
                                    <td>
                                        {{ \Carbon\Carbon::createFromTimeString($y->visit_day)->format('m/d H:i') }}.' ~ '
                                        
                                    </td>

                                    <!-- priceテーブル作成まで仮 -->
                                    <td>{{$y->price_id_list}}</td>
                                     
                                    <td>
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
                                    </td>

                                    <td>{{ $kokyakuList[$y->kokyaku_id]->name.' 様' }}</td>
                                    
                                    <td>
                                        {{ 
                                            substr($kokyakuList[$y->kokyaku_id]->tel, 0, 3).'-'.
                                            substr($kokyakuList[$y->kokyaku_id]->tel, 3, 4).'-'.
                                            substr($kokyakuList[$y->kokyaku_id]->tel, -4, 4)
                                        }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                        <a class="m-2 btn btn-info" href="{{url('/i/'.$mise->id.'/'.$therapist->id.'/kyuryo')}}">給料計算へ</a>


                    </div>
                </div>

                <!-- コピペ用 -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">コピペ用</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        @foreach($yoyakuList  as $y)
                            <span>{{$loop->index+1}}</span>
                            
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

                <!-- 予約フォーム -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">予約フォーム</h2>

                    <!-- カードの要素 -->
                    <div class="card-body">

                    <!-- フォームの開始 -->
                    {{ Form::open(['url' => url('/i/'.$mise->id.'/'.$therapist->id.'/reservation')]) }}

                    @include('common.validator')
                    @include('common.error')
                    @include('common.success')

                    <!-- 開始時間 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">開始時間<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        <div class="col-sm-2">
                            {{ Form::date('start_day', null, null, ['class'=>'form-control', 'max'=>'2032-12-31', 'required'])}}
                        </div>
                        <div class="col-sm-2">
                            {{ Form::time('start_time', null, null, ['class'=>'form-control', 'required'])}}
                        </div>
                    </label>

                    <!-- 顧客名 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">顧客名<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        <div class="col-sm-10">
                            {{ Form::text('name', null, ['class'=>'form-control', 'required'])}}
                        </div>
                    </label>

                    <!-- 電話番号 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">電話番号<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        <div class="col-sm-10">
                            {{ Form::text('tel', null, ['class'=>'form-control', 'required'])}}
                        </div>
                    </label>

                    <!-- メール -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">Email<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        <div class="col-sm-10">
                            {{ Form::text('mail', null, ['class'=>'form-control', 'required'])}}
                        </div>
                    </label>

                    <!-- 来店 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">来店<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        <div class="col-sm-1">
                            {{ Form::radio('visit', 'first', true, ['class'=>'form-check-input'])}}
                            新規
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('visit', 'again', false, ['class'=>'form-check-input'])}}
                            リピーター
                        </div>
                    </label>

                    <!-- コース -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">コース<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        <div class="col-sm-1">
                            {{ Form::radio('plan', 'ノーマル', true, ['class'=>'form-check-input'])}}
                            ノーマル
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('plan', 'エグゼクティブ', false, ['class'=>'form-check-input'])}}
                            エグゼクティブ
                        </div>
                    </label>

                    <!-- 時間 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">時間<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        <div class="col-sm-1">
                            {{ Form::radio('time', 'time1', true, ['class'=>'form-check-input'])}}
                            60分
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('time', 'time2', false, ['class'=>'form-check-input'])}}
                            90分
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('time', 'time3', false, ['class'=>'form-check-input'])}}
                            120分
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('time', 'time4', false, ['class'=>'form-check-input'])}}
                            150分
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('time', 'time5', false, ['class'=>'form-check-input'])}}
                            180分
                        </div>
                    </label>

                    <!-- 自動割引 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">自動割引<span class="mx-2 badge rounded-pill bg-secondary">自動選択</span></div>
                        <div class="col-sm-1">
                            {{ Form::radio('autosell', 'autosell', true, ['class'=>'form-check-input', 'disabled'])}}
                            -2000円(全コース2000円オフ)
                        </div>
                    </label>

                    <!-- 指名 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">指名<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        <div class="col-sm-1">
                            {{ Form::radio('shimei', '1', true, ['class'=>'form-check-input'])}}
                            本指名
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('shimei', '2', false, ['class'=>'form-check-input'])}}
                            ネット指名
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('shimei', '3', false, ['class'=>'form-check-input'])}}
                            フリー
                        </div>
                    </label>

                    <!-- オプション -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">オプション<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        <div class="col-sm-1">
                            {{ Form::radio('option', 'option1', true, ['class'=>'form-check-input'])}}
                            DR
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('option', 'option2', false, ['class'=>'form-check-input'])}}
                            衣装
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('option', 'option3', false, ['class'=>'form-check-input'])}}
                            MB
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('option', 'option4', false, ['class'=>'form-check-input'])}}
                            オイル
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('option', 'option5', false, ['class'=>'form-check-input'])}}
                            ヘッドスパ
                        </div>
                    </label>

                    <!-- 追加割引 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">追加割引<span class="mx-2 badge rounded-pill bg-secondary">任意</span></div>
                        <div class="col-sm-2">
                            {{ Form::text('discount_many', null, ['class'=>'form-control'])}}
                        </div>
                        <div class="col-sm-2 lh2">理由</div>
                        <div class="col-sm-2">
                            {{ Form::text('discount_reason', null, ['class'=>'form-control'])}}
                        </div>
                    </label>

                    <!-- メモ -->
                    <label class="row text-nowrap mb-4">
                            <span class="col-sm-2 lh2">メモ<span class="mx-2 badge rounded-pill bg-secondary">任意</span></span>
                            <div class="col-sm-10">
                                {{ Form::textarea('memo', null, ['class'=>'form-control'])}}
                            </div>
                    </label>
                    
                    <!-- 送信ボタン -->
                    {{ Form::submit('新規予約',["class"=>"m-2 btn btn-info"])}}

                    <!-- フォームの終わり -->
                    {{ Form::close() }}
                    </div>
                </div>

@stop