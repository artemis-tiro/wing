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
                        @include('common.error')
                        {{ Form::open(['url' => url('/c/'.$client->id.'/'.$mise->id.'/price'),'class'=>'form-horizontal']) }}
                        <h3 class="h5">基本料金</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>コース名</th>
                                    <td>料金</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'例）60分コース'])}}</td>
                                    <td class="input-group">{{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）12000'])}}<span class="input-group-text">円</span></td>
                                </tr>
                                <tr>
                                    <td>{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'例）90分コース'])}}</td>
                                    <td class="input-group">{{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）16000'])}}<span class="input-group-text">円</span></td>
                                </tr>
                                <tr>
                                    <td>{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'例）120分コース'])}}</td>
                                    <td class="input-group">{{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）20000'])}}<span class="input-group-text">円</span></td>
                                </tr>
                                <tr>
                                    <td>{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'例）60分エグゼクティブコース'])}}</td>
                                    <td class="input-group">{{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）14000'])}}<span class="input-group-text">円</span></td>
                                </tr>
                                <tr>
                                    <td>{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'例）〇〇分〇〇コース'])}}</td>
                                    <td class="input-group">{{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）12000'])}}<span class="input-group-text">円</span></td>
                                </tr>
                                <tr><td colspan='2' class="text-center form-text">＋ 行追加 ＋</td></tr>
                            </tbody>
                        </table>

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
                                    <td>{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'例）全コース〇〇円割引'])}}</td>
                                    <td class="input-group">{{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）-2000'])}}<span class="input-group-text">円</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>特別割引</th>
                                    <td>割引額</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'例）ツイッター見た'])}}</td>
                                    <td class="input-group">{{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）-2000'])}}<span class="input-group-text">円</span></td>
                                </tr>
                                <tr>
                                    <td>{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'例）メンエスランキング見た'])}}</td>
                                    <td class="input-group">{{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）-1000'])}}<span class="input-group-text">円</span></td>
                                </tr>
                                <tr>
                                    <td>{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'例）新人割引'])}}</td>
                                    <td class="input-group">{{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）-1000'])}}<span class="input-group-text">円</span></td>
                                </tr>
                                <tr><td colspan='2' class="text-center form-text">＋ 行追加 ＋</td></tr>
                            </tbody>
                        </table>
                        <br>

                        <h3 class="h5">クレーム時に割引対応の許可</h3>
                        <label class="form-check form-check-label">
                            {{ Form::checkbox('name', null, false, ['class'=>'form-check-input'])}}
                            クレーム対応時に1,000円の割引を許可（やむを得ない場合に限る）
                        </label>
                        <label class="form-check form-check-label">
                            {{ Form::checkbox('name', null, false, ['class'=>'form-check-input'])}}
                            クレーム対応時に2,000円の割引を許可（やむを得ない場合に限る）
                        </label>

                        <hr><br>

                        <h3 class="h5">入会金</h3>
                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">初回</div>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    {{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）1000'])}}
                                    <span class="input-group-text">円</span>
                                </div>
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">リピーター</div>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    {{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）0'])}}
                                    <span class="input-group-text">円</span>
                                </div>
                            </div>
                        </label>

                        <hr><br>

                        <h3 class="h5">指名料</h3>
                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">フリー</div>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    {{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）0'])}}
                                    <span class="input-group-text">円</span>
                                </div>
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">ネット指名</div>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    {{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）0'])}}
                                    <span class="input-group-text">円</span>
                                </div>
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">本指名</div>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    {{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）1000'])}}
                                    <span class="input-group-text">円</span>
                                </div>
                            </div>
                        </label>

                        <hr><br>

                        <h3 class="h5">追加料金</h3>
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>名目</td>
                                    <td>金額</td>
                                </tr>
                                <tr>
                                    <td>{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'例）プラチナセラピスト'])}}</td>
                                    <td class="input-group">{{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）1000'])}}<span class="input-group-text">円</span></td>
                                </tr>
                                <tr>
                                    <td>{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'例）プラチナセラピスト本指名'])}}</td>
                                    <td class="input-group">{{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）2000'])}}<span class="input-group-text">円</span></td>
                                </tr>
                                <tr>
                                    <td>{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'例）No.1セラピスト特別料金'])}}</td>
                                    <td class="input-group">{{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）3000'])}}<span class="input-group-text">円</span></td>
                                </tr>
                                <tr><td colspan='2' class="text-center form-text">＋ 行追加 ＋</td></tr>
                            </tbody>
                        </table>
                        <hr><br>

                        <h3 class="h5">オプション</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>オプション</th>
                                    <th>料金</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'例）ディープリンパ'])}}</th>
                                    <th class="input-group">{{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）2000'])}}<span class="input-group-text">円</span></th>
                                </tr>
                                <tr>
                                    <th>{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'例）衣装チェンジ1'])}}</th>
                                    <th class="input-group">{{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）2000'])}}<span class="input-group-text">円</span></th>
                                </tr>
                                <tr>
                                    <th>{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'例）衣装チェンジ2'])}}</th>
                                    <th class="input-group">{{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）5000'])}}<span class="input-group-text">円</span></th>
                                </tr>
                                <tr>
                                    <th>{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'例）ドバドバオイル'])}}</th>
                                    <th class="input-group">{{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）2000'])}}<span class="input-group-text">円</span></th>
                                </tr>
                                <tr>
                                    <th>{{ Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'例）オプションセット'])}}</th>
                                    <th class="input-group">{{ Form::number('name', null, ['class'=>'form-control', 'placeholder'=>'例）6000'])}}<span class="input-group-text">円</span></th>
                                </tr>
                                <tr><td colspan='2' class="text-center form-text">＋ 行追加 ＋</td></tr>
                            </tbody>
                        </table>

                        <label class="form-check form-check-label">
                            {{ Form::radio('optionGet', null, true, ['class'=>'form-check-input'])}}
                            オプションは来店時にセラピストが営業する
                        </label>
                        <label class="form-check form-check-label">
                            {{ Form::radio('optionGet', null, false, ['class'=>'form-check-input'])}}
                            オプションは電話予約時に確定させる
                        </label>

                        <hr><br>

                        {{ Form::submit('登録',["class"=>"m-2 btn btn-info"])}}
                        {{ Form::close() }}
                    </div>
                </div>



@stop