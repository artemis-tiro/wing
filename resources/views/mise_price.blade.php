@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{url("/c/".$client->id)}}">{{$client->name}}様</a></li>
<li class="breadcrumb-item"><a href="{{url("/c/".$client->id.'/'.$mise->id)}}">{{$mise->name}}</a></li>
<li class="breadcrumb-item active">料金システム登録</li>
@stop

@section('content')

                <h1 class="h2">料金システム登録</h1>

                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">お客様から頂く料金</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        <p>料金を頂かない項目は未入力で大丈夫です。<br>
                        割引の場合は「-1000」などマイナスで入力して下さい。<br></p>
                        <br>
                        @include('common.validator')
                        @include('common.error')
                        @include('common.success')

                        {{ Form::open(['url' => url('/c/'.$client->id.'/'.$mise->id.'/priceedit'),'class'=>'form-horizontal']) }}
                        <h3 class="h5">基本料金</h3>
                        @component('componets.mise_price_form')
                            @slot('form', 4)
                            @slot('type', 'course')
                            @slot('formData', $formData)
                            @slot('th', ['コース名', '分数', '料金'])
                            @slot('placeholder', [
                                "例）60分コース" => "12000",
                                "例）90分コース" => "16000",
                                "例）120分コース" => "20000",
                                "例）60分エグゼクティブコース" => "16000",
                                "例）〇〇分〇〇コース" => "24000",
                            ])
                        @endcomponent

                        <hr><br>

                        <h3 class="h5">割引</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>全コース自動割引</th>
                                    <td>割引額</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @php
                                        $name = isset($formData['waribikiAuto'][0]['name_data'])? $formData['waribikiAuto'][0]['name_data']: '';
                                        $price = isset($formData['waribikiAuto'][0]['price_data'])? $formData['waribikiAuto'][0]['price_data']: '';
                                    @endphp
                                    <td>{{ Form::text('waribikiAuto_name', $name, ['class'=>'form-control', 'placeholder'=>'例）全コース〇〇円割引'])}}</td>
                                    <td class="input-group">{{ Form::number('waribikiAuto_price', $price, ['class'=>'form-control', 'placeholder'=>'例）-2000'])}}<span class="input-group-text">円</span></td>
                                </tr>
                            </tbody>
                        </table>

                        <br>

                        @component('componets.mise_price_form')
                            @slot('form', 1)
                            @slot('type', 'waribiki')
                            @slot('formData', $formData)
                            @slot('th', ['特別割引', '割引額'])
                            @slot('placeholder', [
                                "例）ツイッター見た" => "-2000",
                                "例）メンエスランキング見た" => "-1000",
                                "例）新人割引" => "1000",
                            ])
                        @endcomponent

                        <br>

                        <h3 class="h5">クレーム時に割引対応の許可</h3>
                            @php 
                                $claim1000Check = isset($formData['claim1000'])? true: false;
                                $claim2000Check = isset($formData['claim2000'])? true: false;
                            @endphp
                        <label class="form-check form-check-label">
                            {{ Form::checkbox('claim1000', null, $claim1000Check, ['class'=>'form-check-input'])}}
                            クレーム対応時に1,000円の割引を許可（やむを得ない場合に限る）
                        </label>
                        <label class="form-check form-check-label">
                            {{ Form::checkbox('claim2000', null, $claim2000Check, ['class'=>'form-check-input'])}}
                            クレーム対応時に2,000円の割引を許可（やむを得ない場合に限る）
                        </label>

                        <hr><br>

                        <h3 class="h5">入会金</h3>
                        @component('componets.mise_price_form')
                            @slot('form', 2)
                            @slot('type', 'firster')
                            @slot('th', '初回')
                            @slot('placeholder', '例）1000')
                            @slot('formData', $formData)
                        @endcomponent

                        @component('componets.mise_price_form')
                            @slot('form', 2)
                            @slot('type', 'repeater')
                            @slot('th', 'リピーター')
                            @slot('placeholder', '例）0')
                            @slot('formData', $formData)
                        @endcomponent

                        <hr><br>

                        <h3 class="h5">指名料</h3>
                        @component('componets.mise_price_form')
                            @slot('form', 2)
                            @slot('type', 'free')
                            @slot('th', 'フリー')
                            @slot('placeholder', '例）0')
                            @slot('formData', $formData)
                        @endcomponent

                        @component('componets.mise_price_form')
                            @slot('form', 2)
                            @slot('type', 'net')
                            @slot('th', 'ネット指名')
                            @slot('placeholder', '例）0')
                            @slot('formData', $formData)
                        @endcomponent

                        @component('componets.mise_price_form')
                            @slot('form', 2)
                            @slot('type', 'shimei')
                            @slot('th', '本指名')
                            @slot('placeholder', '例）1000')
                            @slot('formData', $formData)
                        @endcomponent

                        <hr><br>

                        <h3 class="h5">追加料金</h3>
                        @component('componets.mise_price_form')
                            @slot('form', 1)
                            @slot('type', 'more')
                            @slot('formData', $formData)
                            @slot('th', ['名目', '金額'])
                            @slot('placeholder', [
                                "例）プラチナセラピスト" => "1000",
                                "例）プラチナセラピスト本指名" => "2000",
                                "例）延長30分" => "6000",
                            ])
                        @endcomponent

                        <hr><br>

                        <h3 class="h5">オプション</h3>
                        @component('componets.mise_price_form')
                            @slot('form', 1)
                            @slot('type', 'option')
                            @slot('formData', $formData)
                            @slot('th', ['オプション', '金額'])
                            @slot('placeholder', [
                                "例）ディープリンパ" => "2000",
                                "例）衣装チェンジ1" => "2000",
                                "例）衣装チェンジ2" => "5000",
                                "例）ドバドバオイル" => "2000",
                                "例）オプションセット" => "6000",
                            ])
                        @endcomponent

                        <label class="form-check form-check-label">
                            @php 
                                $therapistCheck = true;
                                $inputerCheck = false;
                                $optionGet = isset($formData['optionGet'][0]['name_data'])? $formData['optionGet'][0]['name_data']: 'therapist';
                                if($optionGet == 'inputer'){
                                    $therapistCheck = false;
                                    $inputerCheck = true;
                                }
                            @endphp
                            {{ Form::radio('optionGet', 'therapist', $therapistCheck, ['class'=>'form-check-input'])}}
                            オプションは来店時にセラピストが営業する
                        </label>
                        <label class="form-check form-check-label">
                            {{ Form::radio('optionGet', 'inputer', $inputerCheck, ['class'=>'form-check-input'])}}
                            オプションは電話予約時に確定させる
                        </label>

                        <hr><br>

                        {{ Form::submit('保存',["class"=>"m-2 btn btn-info"])}}
                        {{ Form::close() }}

                        <a href="{{url('/c/'.$client->id.'/'.$mise->id)}}" class="m-2 btn btn-primary">← 戻る</a>

                    </div>
                </div>
@stop