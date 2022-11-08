@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{url("/i")}}">店舗一覧</a></li>
<li class="breadcrumb-item"><a href="{{url("/i/".$mise->id)}}">{{$mise->name}}</a></li>
<li class="breadcrumb-item"><a href="{{url('/i/'.$mise->id.'/'.$therapist->id.'/')}}">{{$therapist->business_name}}</a></li>
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
                    <h2 class="card-header h5">{{$therapist->business_name}}(給与形態)</h2>

                    <!-- カードの要素 -->
                    <div class="card-body">

                    <!-- フォームの開始 -->
                    {{ Form::open(['url' => url('/i/'.$mise->id.'/'.$therapist->id.'/calculation')]) }}

                    @include('common.validator')
                    @include('common.error')
                    @include('common.success')

                    <!-- ポーチ -->
                    <label class="row text-nowrap mb-4 text-end">
                        <div class="col-sm-2 lh2 text-end">ポーチ朝一<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                        <div class="col-sm-10">
                            {{ Form::text('pouch', null, ['class'=>'form-control', 'required'])}}
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
                    
                    <!-- 送信ボタン -->
                    {{ Form::submit('給料計算',["class"=>"m-2 btn btn-info"])}}

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
                
                <!-- コピペ用 -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">コピペ用(詳細)</h2>
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

@stop