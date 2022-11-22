@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item active" aria-current="page">{{ $client->name }}様</li>
@stop

@section('content')

                <h1 class="h2">{{ $client->name }}様 店舗編集</h1>

                <!-- 店舗一覧 -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">一覧</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        @component('componets.message')
                            @slot('type', 'info')
                            @slot('mes', $mes1)
                        @endcomponent
                        <!-- テーブル -->
                        <table class="table table-hover">
                            <thead>
                                <!-- カテゴリ -->
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">店名</th>
                                    <th scope="col">地域</th>
                                    <th scope="col">部屋数</th>
                                    <th scope="col">在籍</th>
                                    <th scope="col">状態</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($myMiseList as $i)
                                <?php 
                                     $active = $i->active?'アクティブ':'停止中'; 
                                     $action = $i->active?'stop':'go'; 
                                     $actionComment = $i->active?'停止':'再開'; 
                                ?>

                                <tr class="account_{{ $action }}">
                                    <th>{{ $loop->index+1 }}</th>
                                    <td><a href="{{ url('/c/'.$client->id.'/'.$i->id) }}">{{ $i->name }}</a></td>
                                    <td>{{ $i->area }}</td>
                                    <td>{{ $i->room->count() }}</td>
                                    <td>{{ $i->therapistCount }}</td>
                                    <td>{{ $active }}</td>
                                    <td><a class="btn btn-sm btn-info" href="{{ url()->current().'/'.$i->id.'/edit/'.$action }}">{{ $actionComment }}</a></td>
                                    <td>
                                    @if($i->therapist->count()==0)
                                        @component('componets.modal')
                                            @slot('type', 'del')
                                            @slot('name', $i->name)
                                            @slot('id', $i->name.$loop->index)
                                            @slot('text', $i->name."はセラピストの登録がないので削除できます。")
                                            @slot('url', url()->current().'/'.$i->id.'/edit/del')
                                        @endcomponent
                                    @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- 売上一覧 -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">売上</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        <!-- テーブル -->
                        <table class="table table-hover">
                            <thead>
                                <!-- カテゴリ -->
                                <tr>
                                    <th ></th>
                                    <th >店名</th>
                                    <th>今月売上</th>
                                    <th>先月売上</th>
                                    <th title="直近30日間の一部屋辺り">平均純利</th>
                                    <th title="直近30日間の一部屋辺り">平均来客</th>
                                    <th title="直近30日間の一部屋辺り">平均出勤</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                @foreach($myMiseList as $i)
                                    <th>{{ $loop->index+1 }}</th>
                                    <td>{{ $i->name }}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- 店舗新規作成フォーム -->
                <div class="card my-4 mb-5">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">新規作成</h2>
                    <!-- カードの要素 -->
                    <div class="card-body">
                        @include('common.error')
                        {{ Form::open(['url' => url('/c/'.$client->id.'/newmise'),'class'=>'form-horizontal']) }}
                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">店名 *</div>
                            <div class="col-sm-10">
                                {{ Form::text('name', null, ['class'=>'form-control', 'autocomplete'=>'off', 'required'=>'required']) }}
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">フリガナ</div>
                            <div class="col-sm-10">
                                {{ Form::text('yomi', null, ['class'=>'form-control', 'autocomplete'=>'off',]) }}
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">地域 *</div>
                            <div class="col-sm-10">
                                {{ Form::text('area', null, ['class'=>'form-control', 'autocomplete'=>'off', 'required'=>'required']) }}
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">電話番号 *</div>
                            <div class="col-sm-10">
                                {{ Form::text('tel', null, ['class'=>'form-control', 'autocomplete'=>'off', 'required'=>'required']) }}
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">ホームページ *</div>
                            <div class="col-sm-10">
                                {{ Form::text('hp', null, ['class'=>'form-control', 'autocomplete'=>'off', 'required'=>'required']) }}
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4">
                            <span class="col-sm-2 lh2">ヒアリングシート *</span>
                            <div class="col-sm-10">
                                {{ Form::textarea('hearing_sheet', null, ['class'=>'form-control', 'autocomplete'=>'off', 'required'=>'required']) }}
                            </div>
                        </label>

                        {{ Form::submit('新規作成',["class"=>"m-2 btn btn-info"]) }}
                        {{ Form::close() }}
                    </div>
                </div>



@stop