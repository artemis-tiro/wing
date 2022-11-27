@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{ url("/c/".$client->id) }}">{{ $client->name }}様</a></li>
<li class="breadcrumb-item"><a href="{{ url("/c/".$client->id.'/'.$mise->id) }}">{{ $mise->name }}</a></li>
<li class="breadcrumb-item active">バック編集({{ $backName }})</li>
@stop

@section('content')

                <h1 class="h2">バック編集</h1>

                <!-- バック編集 -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">セラピストに払うお金</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        <p>雑費などセラピストの給料から引く場合は「-1000」とマイナスで入力して下さい。<br>
                            空欄はバック0円になります。
                        </p>
                        @include('common.validator')
                        @include('common.error')
                        @include('common.success')
                        <br>
                        {{ Form::open(['url' => url()->current().'/edit', 'class'=>'form-horizontal']) }}

                        <h3 class="h5">基本料金</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>コース名</th>
                                    <td>金額</td>
                                    <td>バック額</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($price as $p)
                                @php if($p->type!='course') continue; @endphp
                                <tr>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->price }}円</td>
                                    @php $v=isset($back[$p->name])?$back[$p->name]:null; @endphp
                                    <td class="input-group">{{ Form::number($p->name, $v, ['class'=>'form-control']) }}<span class="input-group-text">円</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <hr><br>

                        @if(in_array('waribikiAuto', $typeList))
                        <h3 class="h5">自動割引</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>割引名</th>
                                    <td>割引額</td>
                                    <td>セラピスト負担額</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($price as $p)
                                @php if($p->type!='waribikiAuto') continue; @endphp
                                <tr>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->price }}円</td>
                                    @php $v=isset($back[$p->name])?$back[$p->name]:null; @endphp
                                    <td class="input-group">{{ Form::number($p->name, $v, ['class'=>'form-control']) }}<span class="input-group-text">円</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr><br>
                        @endif

                        @if(in_array('waribiki', $typeList))
                        <h3 class="h5">特別割引</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>割引名</th>
                                    <td>割引額</td>
                                    <td>セラピスト負担額</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($price as $p)
                                @php if($p->type!='waribiki') continue; @endphp
                                <tr>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->price }}円</td>
                                    @php $v=isset($back[$p->name])?$back[$p->name]:null; @endphp
                                    <td class="input-group">{{ Form::number($p->name, $v, ['class'=>'form-control']) }}<span class="input-group-text">円</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr><br>
                        @endif


                        @if(in_array('claim1000', $typeList) || in_array('claim2000', $typeList))
                        <h3 class="h5">クレームの割引対応</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>割引名</th>
                                    <td>割引額</td>
                                    <td>セラピスト負担額</td>
                                </tr>
                            </thead>
                            <tbody>
                                @if(in_array('claim1000', $typeList))
                                <tr>
                                    <td>クレーム対応時に1,000円の割引</td>
                                    <td>-1000円</td>
                                    @php $v=isset($back['claim1000'])?$back['claim1000']:null; @endphp
                                    <td class="input-group">{{ Form::number('claim1000', $v, ['class'=>'form-control']) }}<span class="input-group-text">円</span></td>
                                </tr>
                                @endif
                                @if(in_array('claim2000', $typeList))
                                <tr>
                                    <td>クレーム対応時に2,000円の割引</td>
                                    <td>-2000円</td>
                                    @php $v=isset($back['claim2000'])?$back['claim2000']:null; @endphp
                                    <td class="input-group">{{ Form::number('claim2000', $v, ['class'=>'form-control']) }}<span class="input-group-text">円</span></td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                        <hr><br>
                        @endif

                        @if(in_array('visit', $typeList))
                        <h3 class="h5">入会金</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>名目</th>
                                    <td>金額</td>
                                    <td>バック額</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($price as $p)
                                @php if($p->type!='visit') continue; @endphp
                                <tr>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->price }}円</td>
                                    @php $v=isset($back[$p->name])?$back[$p->name]:null; @endphp
                                    <td class="input-group">{{ Form::number($p->name, $v, ['class'=>'form-control']) }}<span class="input-group-text">円</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr><br>
                        @endif

                        @if(in_array('shimei', $typeList))
                        <h3 class="h5">指名料</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>名目</th>
                                    <td>金額</td>
                                    <td>バック額</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($price as $p)
                                @php if($p->type!='free' && $p->type!='net' && $p->type!='shimei') continue; @endphp
                                <tr>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->price }}円</td>
                                    @php $v=isset($back[$p->name])?$back[$p->name]:null; @endphp
                                    <td class="input-group">{{ Form::number($p->name, $v, ['class'=>'form-control']) }}<span class="input-group-text">円</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr><br>
                        @endif

                        @if(in_array('more', $typeList))
                        <h3 class="h5">追加料金</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>名目</th>
                                    <td>金額</td>
                                    <td>バック額</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($price as $p)
                                @php if($p->type!='more') continue; @endphp
                                <tr>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->price }}円</td>
                                    @php $v=isset($back[$p->name])?$back[$p->name]:null; @endphp
                                    <td class="input-group">{{ Form::number($p->name, $v, ['class'=>'form-control']) }}<span class="input-group-text">円</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr><br>
                        @endif

                         @if(in_array('option', $typeList))
                        <h3 class="h5">オプション</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>名目</th>
                                    <td>金額</td>
                                    <td>バック額</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($price as $p)
                                @php if($p->type!='option') continue; @endphp
                                <tr>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ $p->price }}円</td>
                                    @php $v=isset($back[$p->name])?$back[$p->name]:null; @endphp
                                    <td class="input-group">{{ Form::number($p->name, $v, ['class'=>'form-control']) }}<span class="input-group-text">円</span></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr><br>
                        @endif

                        <h3 class="h5">お茶保障</h3>
                        @component('componets.mise_price_form')
                            @slot('form', 1)
                            @slot('type', 'ocha')
                            @slot('formData', $formData)
                            @slot('th', ['名目', '保障額'])
                            @slot('placeholder', [
                                "例）3時間シフト、2時間待機" => "1000",
                                "例）5時間シフト、4時間待機" => "2000",
                                "例）7時間シフト、6時間待機" => "3000",
                            ])
                        @endcomponent


                        {{ Form::submit('保存',["class"=>"btn btn-info"]) }}
                        {{ Form::close() }}

                        <a href="{{ url('/c/'.$client->id.'/'.$mise->id) }}" class="mt-2 btn btn-secondary">← 戻る</a>

                    </div>
                </div>

@stop