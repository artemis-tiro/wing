@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{ url("/c/".$client->id) }}">{{ $client->name }}様</a></li>
<li class="breadcrumb-item"><a href="{{ url("/c/".$client->id.'/'.$mise->id) }}">{{ $mise->name }}</a></li>
<li class="breadcrumb-item active">料金システム編集</li>
@stop

@section('content')


{{--
        <div class="number-container">
            <input type="number" class="number-input canma">
            <span class="number-overlap"></span>
        </div>
--}}
                <h1 class="h2">{{$backName}} の料金システム編集</h1>

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
                        {{Form::hidden('backName', $backName)}}
                        @component('componets.mise_price_form')
                            @slot('form', 5)
                            @slot('type', 'course')
                            @slot('formData', $formData)
                            @slot('time', 'on')
                            @slot('add', 'on')
                            @slot('th', ['コース名', '分数', 'お客様料金', 'セラピストバック'])
                            @slot('placeholder', [
                                ["例）60分コース", "60", "12000", "6000"],
                                ["例）90分コース", "90", "16000", "8000"],
                                ["例）120分コース", "120", "20000", "10000"],
                                ["例）60分エグゼクティブコース", "60", "16000", "8000"],
                                ["例）〇〇分〇〇コース", "〇〇", "24000", "12000"],
                            ])
                        @endcomponent

                        <hr><br>

                        @component('componets.mise_price_form')
                            @slot('form', 5)
                            @slot('type', 'waribikiAuto')
                            @slot('formData', $formData)
                            @slot('minus', 'on')
                            @slot('th', ['全コース自動割引', 'お客様割引額', 'セラピスト負担額'])
                            @slot('placeholder', [
                                ["例）全コース2000円割引", null, "-2000", "0"],
                            ])
                        @endcomponent

                        <br>

                        @component('componets.mise_price_form')
                            @slot('form', 5)
                            @slot('type', 'waribiki')
                            @slot('formData', $formData)
                            @slot('add', 'on')
                            @slot('minus', 'on')
                            @slot('th', ['特別割引', 'お客様割引額', 'セラピスト負担額'])
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

                        @component('componets.mise_price_form')
                            @slot('form', 5)
                            @slot('type', 'visit')
                            @slot('formData', $formData)
                            @slot('name', ['初回', 'リピーター'])
                            @slot('th', ['入会金', 'お客様料金', 'セラピストバック'])
                            @slot('placeholder', [
                                [null, null, "1000", "0"],
                                [null, null, "0", "0"],
                            ])
                        @endcomponent

                        <hr><br>

                        @component('componets.mise_price_form')
                            @slot('form', 5)
                            @slot('type', 'shimei')
                            @slot('formData', $formData)
                            @slot('name', ['フリー', 'ネット指名', '本指名'])
                            @slot('th', ['指名料', 'お客様料金', 'セラピストバック'])
                            @slot('placeholder', [
                                [null, null, "0", "0"],
                                [null, null, "1000", "0"],
                                [null, null, "1000", "1000"],
                            ])
                        @endcomponent

                        <hr><br>

                        @component('componets.mise_price_form')
                            @slot('form', 5)
                            @slot('type', 'option')
                            @slot('formData', $formData)
                            @slot('add', 'on')
                            @slot('th', ['オプション', 'お客様料金', 'セラピストバック'])
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

                        @component('componets.mise_price_form')
                            @slot('form', 5)
                            @slot('type', 'ocha')
                            @slot('formData', $formData)
                            @slot('add', 'on')
                            @slot('nonPrice', 'on')
                            @slot('th', ['お茶保障', '保障額'])
                            @slot('placeholder', [
                                ["例）3時間シフト、2時間待機", null, null, "1000"],
                                ["例）5時間シフト、4時間待機", null, null, "2000"],
                                ["例）7時間シフト、6時間待機", null, null, "3000"],
                            ])
                        @endcomponent

                        {{ Form::submit('保存',["class"=>"btn btn-info"]) }}
                        {{ Form::close() }}

                        <hr><br>

                        <a href="{{ url('/c/'.$client->id.'/'.$mise->id) }}" class="mt-2 btn btn-secondary">← 戻る</a>

                    </div>
                </div>
@stop