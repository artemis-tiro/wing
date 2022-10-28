@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{url("/i")}}">店舗一覧</a></li>
<li class="breadcrumb-item active">{{$therapist->id}}</li>
@stop

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

                <h1 class="h2">予約一覧</h1>

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
                                @foreach($yoyakuList as $y)
                                <tr>
                                    <th>{{$loop->index+1}}</th>
                                    <td>ステ</a></td>
                                    <td>時間</a></td>
                                    <td>{{$y->price_id_list}}</td>
                                    <td>{{$y->simei}}</td>
                                    <td>電話</a></td>
                                    <td></a></td>
                                    <td></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>




                <!-- 予約リストから１レコードずつ抽出 -->
                <!-- 下記をセラピストIDで全て -->

                <!-- simei price_id_list kokyaku_id(でname) kokyaku_id(でtel) (コースの金額？) -->
                <!-- visit_day price_id_list(でprice1) -->


                <!-- コピペ用 -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">コピペ用</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">

                    </div>
                </div>

                <!-- 予約フォーム -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">予約フォーム</h2>

                    <!-- カードの要素 -->
                    <div class="card-body">

                    <!-- フォームの開始 -->
                    {{ Form::open(['url' => url('/mypage/reservation')]) }}

                    @include('common.error')

                    <!-- 開始時間 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">開始時間 *</div>
                        <div class="col-sm-1">
                            {{ Form::radio('today', null, ['class'=>'form-check-input', 'required'=>'required'])}}
                            本日
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('anyday', null, ['class'=>'form-check-input', 'required'=>'required'])}}
                        </div>
                        <div class="col-sm-1 lh2">
                            {{ Form::text('anytime', null, ['class'=>'form-control', 'required'=>'required'])}}
                        </div>
                        <div class="col-sm-2 lh2">時間</div>
                        <div class="col-sm-1">
                            {{ Form::text('time', null, ['class'=>'form-control', 'required'=>'required'])}}
                        </div>
                    </label>

                    <!-- 顧客名 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">顧客名 *</div>
                        <div class="col-sm-10">
                            {{ Form::text('name', null, ['class'=>'form-control', 'required'=>'required'])}}
                        </div>
                    </label>

                    <!-- 電話番号 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">電話番号 *</div>
                        <div class="col-sm-10">
                            {{ Form::text('tel', null, ['class'=>'form-control', 'required'=>'required'])}}
                        </div>
                    </label>

                    <!-- メール -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">Email *</div>
                        <div class="col-sm-10">
                            {{ Form::text('mail', null, ['class'=>'form-control', 'required'=>'required'])}}
                        </div>
                    </label>

                    <!-- 来店 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">来店 *</div>
                        <div class="col-sm-1">
                            {{ Form::radio('first', null, ['class'=>'form-control', 'required'=>'required'])}}
                            新規
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('again', null, ['class'=>'form-control', 'required'=>'required'])}}
                            リピーター
                        </div>
                    </label>

                    <!-- コース -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">コース *</div>
                        <div class="col-sm-1">
                            {{ Form::radio('normal', null, ['class'=>'form-control'])}}
                            ノーマル
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('executive', null, ['class'=>'form-control'])}}
                            エグゼクティブ
                        </div>
                    </label>

                    <!-- 時間 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">時間 *</div>
                        <div class="col-sm-1">
                            {{ Form::radio('time1', null, ['class'=>'form-control'])}}
                            60分
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('time2', null, ['class'=>'form-control'])}}
                            90分
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('time3', null, ['class'=>'form-control'])}}
                            120分
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('time4', null, ['class'=>'form-control'])}}
                            150分
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('time5', null, ['class'=>'form-control'])}}
                            180分
                        </div>
                    </label>

                    <!-- 自動割引 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">自動割引 *</div>
                        <div class="col-sm-1">
                            {{ Form::radio('sell', null, ['class'=>'form-check-input', 'id'=>'formRadioCheckedDisabled'])}}
                            <label class="form-check-label" for="formRadioCheckedDisabled">
                                -2000円(全コース2000円オフ)
                            </label>
                        </div>
                    </label>

                    <!-- 指名 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">指名 *</div>
                        <div class="col-sm-1">
                            {{ Form::radio('simei', null, ['class'=>'form-control'])}}
                            本指名
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('netsimei', null, ['class'=>'form-control'])}}
                            ネット指名
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('free', null, ['class'=>'form-control'])}}
                            フリー
                        </div>
                    </label>

                    <!-- オプション -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">オプション *</div>
                        <div class="col-sm-1">
                            {{ Form::radio('option1', null, ['class'=>'form-control'])}}
                            DR
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('option2', null, ['class'=>'form-control'])}}
                            衣装
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('option3', null, ['class'=>'form-control'])}}
                            MB
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('option4', null, ['class'=>'form-control'])}}
                            オイル
                        </div>
                        <div class="col-sm-1">
                            {{ Form::radio('option5', null, ['class'=>'form-control'])}}
                            ヘッドスパ
                        </div>
                    </label>

                    <!-- 追加割引 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">追加割引 *</div>
                        <div class="col-sm-2">
                            {{ Form::text('discount', null, ['class'=>'form-control', 'required'=>'required'])}}
                        </div>
                        <div class="col-sm-2 lh2">理由</div>
                        <div class="col-sm-2">
                            {{ Form::text('discount', null, ['class'=>'form-control', 'required'=>'required'])}}
                        </div>
                    </label>

                    <!-- メモ -->
                    <label class="row text-nowrap mb-4">
                            <span class="col-sm-2 lh2">メモ</span>
                            <div class="col-sm-10">
                                {{ Form::textarea('memo', null, ['class'=>'form-control', 'required'=>'required'])}}
                            </div>
                    </label>
                    
                    <!-- 送信ボタン -->
                    {{ Form::submit('新規予約',["class"=>"m-2 btn btn-info"])}}

                    <!-- フォームの終わり -->
                    {{ Form::close() }}
                    </div>
                </div>
                



@stop