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
                                        {{ \Carbon\Carbon::createFromTimeString($y->visit_day)->format('m/d H:i') }} ~ 
                                        
                                    </td>

                                    <!-- priceテーブル作成まで仮 -->
                                    <td>{{ $y->courseName }}</td>
                                     
                                    <td>
                                        @switch($y->shimei)
                                            @case (1)
                                                フリー
                                                @break
                                            @case (2)
                                                ネット指名
                                                @break
                                            @case (3)
                                                本指名
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
                                        フリー
                                        @break
                                    @case (2)
                                        ネット指名
                                        @break
                                    @case (3)
                                        本指名
                                        @break
                                @endswitch
                            </span>

                            <!-- コース -->
                            <span>{{ $y->courseName }}</span>

                            <!-- お客様名 -->
                            <span>{{ $kokyakuList[$y->kokyaku_id]->name.' 様' }}</span>

                            <!-- 発生料金 -->
                            <span>合計 ..</span>

                            <!-- 予約時間 -->
                            <span>
                                {{ \Carbon\Carbon::createFromTimeString($y->visit_day)->format('m/d H:i') }} ~ 
                                
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

                    @if($formflag == 0)     
                    <!-- 電話検索フォーム -->
                    {{ Form::open(['url' => url('/i/'.$mise->id.'/'.$therapist->id.'/reservation')]) }}
                                   
                    <!-- 電話番号 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="mt-2 col-sm-2 text-end">電話番号<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        <div class="col-sm-2">
                            {{ Form::number('telsearch', null, ['class'=>'form-control', 'autocomplete'=>'off', 'required'])}}
                        </div>
                        <div class="col-sm-1">{{ Form::submit('検索',["class"=>"btn btn-info"]) }}</div>
                    </label>

                    <!-- フォームの終わり -->
                    {{ Form::close() }}
                    @endif

                    @if($formflag == 1) 

                    <!-- 新規入力フォーム -->
                    {{ Form::open(['url' => url('/i/'.$mise->id.'/'.$therapist->id.'/reservation')]) }}

                    @include('common.validator')
                    @include('common.error')
                    @include('common.success')

                    <!-- 電話番号 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="mt-2 col-sm-2 text-end">電話番号<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        <div class="col-sm-2">
                            {{ Form::number('tel', null, ['class'=>'form-control', 'autocomplete'=>'off', 'required'])}}
                        </div>
                    </label>
                    
                    <!-- 開始時間 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 text-end">開始時間<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        <div class="col-sm-2">
                            {{ Form::date('start_day', null, ['class'=>'form-control', 'max'=>'2032-12-31', 'required'])}}
                        </div>
                        <div class="col-sm-2">
                            {{ Form::time('start_time', null, ['class'=>'form-control', 'step'=>'300', 'required'])}}
                        </div>
                    </label>

                    <!-- 顧客名 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 text-end">顧客名<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        <div class="col-sm-10">
                            {{ Form::text('name', null, ['class'=>'form-control', 'autocomplete'=>'off', 'required'])}}
                        </div>
                    </label>

                    <!-- メール -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 text-end">Email<span class="mx-2 badge rounded-pill bg-secondary">任意</span></div>
                        <div class="col-sm-10">
                            {{ Form::text('mail', null, ['class'=>'form-control', 'autocomplete'=>'off'])}}
                        </div>
                    </label>

                    <!-- 来店 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 text-end">来店<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        
                        @foreach($visitList  as $v)
                            <div class="col-sm-1">
                                {{ Form::radio('visit', $v->id, false, ['class'=>'form-check-input', 'onclick'=>'displayMany()', 'required'] )}}
                                {{ $v->name }}
                            </div>
                        @endforeach
                        <div class="col-sm-1" id="many1">
                            +1,000
                        </div>
                        <div class="col-sm-1" id="many2">
                            
                        </div>
                    </label>

                    <!-- コース -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 text-end">コース<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        
                        @foreach($courseList  as $c)
                            <div class="col-sm-1">
                                {{ Form::radio('course', $c->id, false, ['class'=>'form-check-input'])}}
                                {{ $c->name }}
                            </div>
                        @endforeach

                    </label>

                    <!-- 指名 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 text-end">指名<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        
                        @foreach($shimeiList  as $s)
                            <div class="col-sm-1">
                                {{ Form::radio('shimei', $s->id, false, ['class'=>'form-check-input'])}}
                                {{ $s->name }}
                            </div>
                        @endforeach

                    </label>

                    <!-- 追加料金 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 text-end">特別<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        
                        @foreach($moreList  as $m)
                            <div class="col-sm-1">
                                {{ Form::radio('more', $m->id, false, ['class'=>'form-check-input'])}}
                                {{ $m->name }}
                            </div>
                        @endforeach

                    </label>

                    <!-- オプション -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 text-end">オプション<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        
                        @foreach($optionList  as $o)
                            <div class="col-sm-1">
                                {{ Form::radio('option', $o->id, false, ['class'=>'form-check-input'])}}
                                {{ $o->name }}
                            </div>
                        @endforeach

                    </label>

                    <!-- 自動割引 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 text-end">自動割引<span class="mx-2 badge rounded-pill bg-secondary">自動選択</span></div>
                        
                        @foreach($waribikiAutoList  as $wa)
                            <div class="col-sm-1">
                                {{ Form::radio('waribikiAuto', $wa->id, false, ['class'=>'form-check-input'])}}
                                {{ $wa->name }}
                            </div>
                        @endforeach

                    </label>

                    <!-- 追加割引 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 text-end">追加割引<span class="mx-2 badge rounded-pill bg-secondary">任意</span></div>
                        
                        @foreach($waribikiList  as $w)
                            <div class="col-sm-1">
                                {{ Form::radio('waribiki', $w->id, false, ['class'=>'form-check-input'])}}
                                {{ $w->name }}
                            </div>
                        @endforeach

                    </label>

                    @if(!(isset($claimList)))
                    <!-- クレーム対応 -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 text-end">クレーム対応<span class="mx-2 badge rounded-pill bg-secondary">任意</span></div>
                        
                        @foreach($claimList  as $cl)
                            <div class="col-sm-1">
                                {{ Form::radio('claim', $cl->id, false, ['class'=>'form-check-input'])}}
                                {{ $cl->name }}
                            </div>
                        @endforeach

                    </label>
                    @endif

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
                    @endif
                    </div>
                </div>

@stop