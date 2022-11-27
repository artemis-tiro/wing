@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{ url("/c/".$client->id) }}">{{ $client->name }}様</a></li>
<li class="breadcrumb-item"><a href="{{ url("/c/".$client->id.'/'.$mise->id) }}">{{ $mise->name }}</a></li>
<li class="breadcrumb-item active">料金システム登録</li>
@stop

@section('content')

                <h1 class="h2">料金システム編集</h1>

                <!-- 料金システム編集 -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">お客様から頂く料金とバック額</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        <p>料金を頂かない項目は未入力で大丈夫です。<br>
                        割引の場合は「-1000」などマイナスで入力して下さい。<br></p>
                        <br>
                        @include('common.validator')
                        @include('common.error')
                        @include('common.success')

                        {{ Form::open(['url' => url('/c/'.$client->id.'/'.$mise->id.'/priceedit'),'class'=>'form-horizontal']) }}
                        {{Form::hidden('backName', 'default')}}
                        <h3 class="h5">基本料金</h3>
                        @component('componets.mise_price_form')
                            @slot('form', 5)
                            @slot('type', 'course')
                            @slot('formData', $formData)
                            @slot('time', 'on')
                            @slot('add', 'on')
                            @slot('th', ['コース名', '分数', '料金', 'バック'])
                            @slot('placeholder', [
                                ["例）60分コース", "60", "12000", "6000"],
                                ["例）90分コース", "90", "16000", "8000"],
                                ["例）120分コース", "120", "20000", "10000"],
                                ["例）60分エグゼクティブコース", "60", "16000", "8000"],
                                ["例）〇〇分〇〇コース", "〇〇", "24000", "12000"],
                            ])
                        @endcomponent

                        <hr><br>

                        <h3 class="h5">割引</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th style="width:50%;">全コース自動割引</th>
                                    <th>割引額</th>
                                    <th>セラピスト負担額</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @php
                                        $name = isset($formData['waribikiAuto'][0]['name_data'])? $formData['waribikiAuto'][0]['name_data']: '';
                                        $price = isset($formData['waribikiAuto'][0]['price_data'])? $formData['waribikiAuto'][0]['price_data']: '';
                                        $back = isset($formData['waribikiAuto'][0]['back_data'])? $formData['waribikiAuto'][0]['back_data']: '';
                                    @endphp
                                    <td>{{ Form::text('waribikiAuto_name', $name, ['class'=>'form-control', 'placeholder'=>'例）全コース〇〇円割引']) }}</td>
                                    <td><div class="input-group">{{ Form::number('waribikiAuto_price', $price, ['class'=>'form-control', 'placeholder'=>'例）-2000']) }}<span class="input-group-text">円</span></div></td>
                                    <td><div class="input-group">{{ Form::number('waribikiAuto_back', $back, ['class'=>'form-control', 'placeholder'=>'例）0']) }}<span class="input-group-text">円</span></div></td>
                                </tr>
                            </tbody>
                        </table>

                        <br>

                        @component('componets.mise_price_form')
                            @slot('form', 5)
                            @slot('type', 'waribiki')
                            @slot('formData', $formData)
                            @slot('time', 'off')
                            @slot('add', 'on')
                            @slot('th', ['特別割引', '割引額', 'セラピスト負担額'])
                            @slot('placeholder', [
                                ["例）ツイッター見た", null, "-2000", "-1000"],
                                ["例）メンエスランキング見た", null, "-1000", "-500"],
                                ["例）新人割引", null, "-1000", "0"],
                            ])
                        @endcomponent

                        <br>

                        <h3 class="h5">クレーム時に割引対応の許可</h3>
                            @php 
                                $claim1000Check = isset($formData['claim1000'])? true: false;
                                $claim2000Check = isset($formData['claim2000'])? true: false;
                            @endphp
                        <label class="form-check form-check-label">
                            {{ Form::checkbox('claim1000', null, $claim1000Check, ['class'=>'form-check-input']) }}
                            クレーム対応時に1,000円の割引を許可（やむを得ない場合に限る）
                        </label>
                        <label class="form-check form-check-label">
                            {{ Form::checkbox('claim2000', null, $claim2000Check, ['class'=>'form-check-input']) }}
                            クレーム対応時に2,000円の割引を許可（やむを得ない場合に限る）
                        </label>

                        <hr><br>

                        <h3 class="h5">入会金</h3>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>名目</th>
                                        <th>料金</th>
                                        <th>バック</th>
                                    </tr>
                                </thead>
                                <tbody class="courceTbody">
                                    <tr>
                                        <td>初回{{Form::hidden('visit_name_1', '初回')}}</td>
                                        @php
                                            $price = isset($formData['visit'][0]['price_data'])? $formData['visit'][0]['price_data']: null;
                                            $back = isset($formData['visit'][0]['back_data'])? $formData['visit'][0]['back_data']: null;
                                        @endphp
                                        <td><div class="input-group">{{ Form::number('visit_price_1', $price, ['class'=>'form-control', 'placeholder'=>1000])}}<span class="input-group-text">円</span></div></td>
                                        <td><div class="input-group">{{ Form::number('visit_back_1', $back, ['class'=>'form-control', 'placeholder'=>0])}}<span class="input-group-text">円</span></div></td>
                                    </tr>
                                    <tr>
                                        <td>リピーター{{Form::hidden('visit_name_2', 'リピーター')}}</td>
                                        @php
                                            $price = isset($formData['visit'][1]['price_data'])? $formData['visit'][1]['price_data']: null;
                                            $back = isset($formData['visit'][1]['back_data'])? $formData['visit'][1]['back_data']: null;
                                        @endphp
                                        <td><div class="input-group">{{ Form::number('visit_price_2', $price, ['class'=>'form-control', 'placeholder'=>0])}}<span class="input-group-text">円</span></td>
                                        <td><div class="input-group">{{ Form::number('visit_back_2', $back, ['class'=>'form-control', 'placeholder'=>0])}}<span class="input-group-text">円</span></td>
                                    </tr>
                                </tbody>
                            </table>

                        <hr><br>

                        <h3 class="h5">指名料</h3>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>名目</th>
                                        <th>料金</th>
                                        <th>バック</th>
                                    </tr>
                                </thead>
                                <tbody class="courceTbody">
                                    <tr>
                                        <td>フリー{{Form::hidden('shimei_name_1', 'フリー')}}</td>
                                        @php
                                            $price = isset($formData['shimei'][0]['price_data'])? $formData['shimei'][0]['price_data']: null;
                                            $back = isset($formData['shimei'][0]['back_data'])? $formData['shimei'][0]['back_data']: null;
                                        @endphp
                                        <td><div class="input-group">{{ Form::number('shimei_price_1', $price, ['class'=>'form-control', 'placeholder'=>0])}}<span class="input-group-text">円</span></div></td>
                                        <td><div class="input-group">{{ Form::number('shimei_back_1', $back, ['class'=>'form-control', 'placeholder'=>0])}}<span class="input-group-text">円</span></div></td>
                                    </tr>
                                    <tr>
                                        <td>ネット指名{{Form::hidden('shimei_name_2', 'ネット指名')}}</td>
                                        @php
                                            $price = isset($formData['shimei'][1]['price_data'])? $formData['shimei'][1]['price_data']: null;
                                            $back = isset($formData['shimei'][1]['back_data'])? $formData['shimei'][1]['back_data']: null;
                                        @endphp
                                        <td><div class="input-group">{{ Form::number('shimei_price_2', $price, ['class'=>'form-control', 'placeholder'=>1000])}}<span class="input-group-text">円</span></td>
                                        <td><div class="input-group">{{ Form::number('shimei_back_2', $back, ['class'=>'form-control', 'placeholder'=>500])}}<span class="input-group-text">円</span></td>
                                    </tr>
                                    <tr>
                                        <td>本指名{{Form::hidden('shimei_name_3', '本指名')}}</td>
                                        @php
                                            $price = isset($formData['shimei'][2]['price_data'])? $formData['shimei'][2]['price_data']: null;
                                            $back = isset($formData['shimei'][2]['back_data'])? $formData['shimei'][2]['back_data']: null;
                                        @endphp
                                        <td><div class="input-group">{{ Form::number('shimei_price_3', $price, ['class'=>'form-control', 'placeholder'=>1000])}}<span class="input-group-text">円</span></td>
                                        <td><div class="input-group">{{ Form::number('shimei_back_3', $back, ['class'=>'form-control', 'placeholder'=>1000])}}<span class="input-group-text">円</span></td>
                                    </tr>
                                </tbody>
                            </table>

                        <hr><br>

{{--
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
--}}
                        <h3 class="h5">オプション</h3>
                        @component('componets.mise_price_form')
                            @slot('form', 5)
                            @slot('type', 'option')
                            @slot('formData', $formData)
                            @slot('time', 'off')
                            @slot('add', 'on')
                            @slot('th', ['オプション', '金額', 'バック'])
                            @slot('placeholder', [
                                ["例）ディープリンパ", null, "2000", "2000"],
                                ["例）衣装チェンジ1", null, "2000", "2000"],
                                ["例）衣装チェンジ2", null, "5000", "5000"],
                                ["例）ドバドバオイル", null, "2000", "2000"],
                                ["例）オプションセット", null, "6000", "6000"],
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
                            {{ Form::radio('optionGet', 'therapist', $therapistCheck, ['class'=>'form-check-input']) }}
                            オプションは来店時にセラピストが営業する
                        </label>
                        <label class="form-check form-check-label">
                            {{ Form::radio('optionGet', 'inputer', $inputerCheck, ['class'=>'form-check-input']) }}
                            オプションは電話予約時に確定させる
                        </label>

                        <hr><br>

                        {{ Form::submit('保存',["class"=>"btn btn-info"]) }}
                        {{ Form::close() }}

                        <a href="{{ url('/c/'.$client->id.'/'.$mise->id) }}" class="mt-2 btn btn-secondary">← 戻る</a>

                    </div>
                </div>
@stop