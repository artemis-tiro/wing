@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{ url("/c/".$client->id) }}">{{ $client->name }}様店舗一覧</a></li>
<li class="breadcrumb-item active">{{ $mise->name }}編集</li>
@stop

@section('content')

<!-- タイトル -->
<h1 class="h2">{{ $mise->name }}編集</h1>

<!-- セラピスト一覧 -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">セラピスト一覧</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        @if ( !empty($mes1) )
        <div class="alert alert-info d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
            </svg>
            <div class="align-items-center">{{ $mes1 }}</div>
        </div>
        @endif
        <!-- テーブル -->
        <table class="table table-hover">
            <thead>
                <!-- カテゴリ -->
                <tr>
                    <th scope="col"></th>
                    <th scope="col">ID</th>
                    <th scope="col">源氏名</th>
                    <th scope="col">給料形態</th>
                    <th scope="col">ステータス</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($therapistList as $i)
                <?php 
                        $active = $i->active?'アクティブ':'停止中'; 
                        $action = $i->active?'stop':'go'; 
                        $actionComment = $i->active?'停止':'再開'; 
                ?>

                <tr class="account_{{ $action }}">
                    <th>{{ $loop->index+1 }}</th>
                    <td>{{ $i->loginId }}</td>
                    <td><a href="{{ url('/c/'.$client->id.'/'.$mise->id.'/'.$i->id) }}">{{ $i->business_name }}</a></td>
                    <td>{{ Form::open(['url' => url()->current().'/'.$i->id."/edit/backchange",'class'=>'form-horizontal']) }}{{ Form::select('back_name', ['default'=>'default']+$backList, $i->back_name, ['class'=>'form-select form-select-sm pass', 'onchange'=>'submit(this.form)']) }}{{ Form::close() }}</td>
                    <td>{{ $active }}</td>
                    <td><a class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#edit{{ $i->id }}">編集</a></td>
                    <div class="modal fade" id="edit{{ $i->id }}" tabindex="-1" aria-labelledby="edit{{ $i->id }}" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                
                                <div class="modal-header">
                                    <h1 class="modal-title h4" id="edit{{ $i->id }}">セラピスト情報編集</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                                </div>

                                {{ Form::open(['url' => url()->current().'/newtherapist']) }}
                                {{ Form::hidden('edit', $i->id) }}
                                
                                <div class="modal-body">
                                    <label class="row text-nowrap mb-4">
                                        <span class="col-sm-2 lh2">年齢</span>
                                        <div class="col-sm-10">
                                            {{ Form::text('age', $i->business_age, ['class'=>'form-control pass', 'pattern'=>'^([0-9][0-9]|[0-9])$', 'style'=>'width:70px;display:inline;', 'title'=>'0～99']) }} 歳
                                        </div>
                                    </label>

                                    <label class="row text-nowrap mb-4">
                                        <span class="col-sm-2 lh2">カップ数</span>
                                        <div class="col-sm-10">
                                            {{ Form::text('cup', $i->cup, ['class'=>'form-control pass', 'pattern'=>'^[A-Za-z]$', 'style'=>'width:70px;display:inline;', 'title'=>'アルファベット一文字']) }} カップ
                                        </div>
                                    </label>

                                    <label class="row text-nowrap mb-4">
                                        <span class="col-sm-2 lh2">身長</span>
                                        <div class="col-sm-10">
                                            {{ Form::text('tall', $i->tall, ['class'=>'form-control pass', 'pattern'=>'^([12][0-9][0-9])$', 'style'=>'width:70px;display:inline;', 'title'=>'100～299']) }} cm
                                        </div>
                                    </label>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                                    {{ Form::submit('更新',["class"=>"btn btn-info"])}}
                                </div>
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                    <td><a class="btn btn-sm btn-success" href="{{ url()->current() }}/{{ $i->id }}/edit/{{ $action }}">{{ $actionComment }}</a></td>
                    <td>
                        @if(!$i->yoyaku)
                        @component('componets.modal')
                            @slot('type', 'del')
                            @slot('name', $i->business_name)
                            @slot('id', $i->business_name.$loop->index)
                            @slot('text', "予約が一回もないので削除できます。")
                            @slot('url', url()->current().'/'.$i->id."/edit/del")
                        @endcomponent
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        ※フェーズ2以降追加機能
        <ul>
            <li>順番の入れ替え</li>
            <li>シフト管理</li>
        </ul>

    </div>
</div>

<!-- セラピスト新規作成 -->
<div class="card my-4 mb-5">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">セラピスト新規作成</h2>
    <!-- カードの要素 -->
    <div class="card-body">
        @include('common.validator')
        @include('common.error')
        @include('common.success')

        {{ Form::open(['url' => url('/c/'.$client->id.'/'.$mise->id.'/newtherapist'),'class'=>'form-horizontal']) }}
        <label class="row text-nowrap mb-4 text-end">
            <div class="col-sm-2 lh2 text-end">源氏名 *</div>
            <div class="col-sm-10">
                {{ Form::text('business_name', null, ['class'=>'form-control jq_idToPass', 'autocomplete'=>'off', 'required'=>'required']) }}
            </div>
        </label>

        <label class="row text-nowrap mb-4 text-end">
            <div class="col-sm-2 lh2 text-end">ログインID *</div>
            <div class="col-sm-10">
                {{ Form::text('login_id', null, ['class'=>'form-control jq_idToPass', 'autocomplete'=>'off', 'required'=>'required', 'pattern'=>'^[0-9a-zA-Z\\-\\_]+$', 'title'=>'半角英数、ハイフン、アンダーバーのみ']) }}
                <div class="form-text">「店名_源氏名」半角英数字。</div>
            </div>
        </label>

        <label class="row text-nowrap mb-4">
            <span class="col-sm-2 lh2">パスワード *</span>
            <div class="col-sm-10">
                {{ Form::text('pass', null, ['class'=>'form-control pass', 'required'=>'required', 'disabled'=>'disabled']) }}
                <div class="form-text">初期値はログインIDと同じ。</div>
            </div>
        </label>

        <label class="row text-nowrap mb-4">
            <span class="col-sm-2 lh2">給料形態 *</span>
            <div class="col-sm-10">
                {{ Form::select('back_name', ['default'=>'default']+$backList, 'default', ['class'=>'form-select pass', 'required'=>'required']) }}
            </div>
        </label>

        <label class="row text-nowrap mb-4">
            <span class="col-sm-2 lh2">年齢</span>
            <div class="col-sm-10">
                {{ Form::text('age', null, ['class'=>'form-control pass', 'pattern'=>'^([0-9][0-9]|[0-9])$', 'style'=>'width:70px;display:inline;', 'title'=>'0～99']) }} 歳
            </div>
        </label>

        <label class="row text-nowrap mb-4">
            <span class="col-sm-2 lh2">カップ数</span>
            <div class="col-sm-10">
                {{ Form::text('cup', null, ['class'=>'form-control pass', 'pattern'=>'^[A-Za-z]$', 'style'=>'width:70px;display:inline;', 'title'=>'アルファベット一文字']) }} カップ
            </div>
        </label>

        <label class="row text-nowrap mb-4">
            <span class="col-sm-2 lh2">身長</span>
            <div class="col-sm-10">
                {{ Form::text('tall', null, ['class'=>'form-control pass', 'pattern'=>'^([12][0-9][0-9])$', 'style'=>'width:70px;display:inline;', 'title'=>'100～299']) }} cm
            </div>
        </label>

        {{ Form::submit('セラピスト作成',["class"=>"btn btn-info"]) }}
        {{ Form::close() }}
    </div>
</div>

<!-- バック一覧 -->
@php
    $priceRequest = $courseExist? null: '<span class="priceRequest">※料金システムを登録して下さい。</span>';
    $lockMes = $courseExist? null: '<span class="priceRequest">※料金システムdefaultを設定して下さい。</span>';
    $backNotComplete = '<span class="priceRequest">※料金システムを登録してください。</span>';
    $ccc = $courseExist? null: 'ccc';
@endphp
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">料金システム一覧</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        @if ( !empty($mes4) )
        <div class="alert alert-info d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
            </svg>
            <div class="align-items-center">{{ $mes4 }}</div>
        </div>
        @endif

        <table class="table table-hover">
            <thead>
                <!-- カテゴリ -->
                <tr>
                    <th scope="col">名称</th>
                    <th scope="col"></th>
                    <!-- ボタン表示 -->
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($backList2 as $b)
                <tr>
                    <th>{{ $b['name'] }}</th>
                    <td><a class="btn btn-sm btn-info" href="{{ url()->current() }}/price/{{ $b['name'] }}">編集</a></td>
                    <td>
                    @if($b['name'] != 'default')
                    @component('componets.modal')
                        @slot('type', 'del')
                        @slot('name', $b['name'])
                        @slot('id', $b['name'])
                        @slot('text', $b['name']."のセラピストはdefaultになります。")
                        @slot('url', url()->current()."/back/".$b['name']."/del")
                    @endcomponent
                    @endif
                    </td>
                    <td>@if(!$b['complete']) {!!$backNotComplete!!} @endif</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- バック新規作成 -->
<div class="card my-4 {{ $ccc }}">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">料金システム新規作成 {!!$lockMes!!}</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        @if ( !empty($newBackMessage) )
        <div class="alert alert-info d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
            </svg>
            <ul><li>{{ $newBackMessage }}</li></ul>
        </div>
        @endif
        {{ Form::open(['url' => url('/c/'.$client->id.'/'.$mise->id.'/newback'),'class'=>'form-horizontal', 'autocomplete'=>'off']) }}
        <label class="row text-nowrap mb-4 text-end">
            <div class="col-sm-2 lh2 text-end">料金システム名 *</div>
            <div class="col-sm-10">
                {{ Form::text('back_name', null, ['class'=>'form-control jq_idToPass', 'required'=>'required']) }}
            </div>
        </label>

        <label class="row text-nowrap mb-4 text-end">
            <div class="col-sm-2 lh2 text-end">defaultをコピーする</div>
            <div class="col-sm-10">
                {{ Form::checkbox('copy', null, true, ['class'=>'form-check-input', 'autocomplete'=>'off']) }}
            </div>
        </label>
        {{ Form::submit('バック作成',["class"=>"btn btn-info"]) }}
        {{ Form::close() }}
    </div>
</div>

<!-- ヒアリングシート -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">ヒアリングシート</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        @if ( !empty($mes6) )
        <div class="alert alert-info d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
            </svg>
            <div class="align-items-center">{{ $mes6 }}</div>
        </div>
        @endif
        <p>{!! nl2br(e($mise->hearing_sheet)) !!}</p>
        @component('componets.modal')
            @slot('type', 'hearingSheet')
            @slot('text', $mise->hearing_sheet)
            @slot('url', url()->current().'/hearingsheetedit')
        @endcomponent
    </div>
</div>

<!-- 店舗情報 -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">店舗情報</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        @if ( !empty($mes7) )
        <div class="alert alert-info d-flex align-items-center" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
            </svg>
            <div class="align-items-center">{{ $mes7 }}</div>
        </div>
        @endif

            <!-- 名前 -->
            <label class="row">
                <!-- ラベル -->
                <div class="text-info text-end">店舗名</div>
                <div class="col-sm-3">
                    <label>{{ $mise->name }}</label>
                </div>
            </label>

            <!-- フリガナ -->
            <label class="row">
                <!-- ラベル -->
                <div class="text-info text-end">フリガナ</div>
                <div class="col-sm-3">
                    <label>{{ $mise->yomi }}</label>
                </div>
            </label>

            <!-- 住所 -->
            <label class="row">
                <!-- ラベル -->
                <div class="mt-2 text-info text-end">住所</div>
                <div class="col-sm-3">
                    <label>{{ $mise->area }}</label>
                </div>
            </label>

            <!-- 電話番号 -->
            <label class="row">
                <!-- ラベル -->
                <div class="mt-2 text-info text-end">電話番号</div>
                <div class="col-sm-3">
                    <label>
                        @if($mise->tel)
                            {{ 
                                substr($mise->tel, 0, 3).'-'.
                                substr($mise->tel, 3, 4).'-'.
                                substr($mise->tel, -4, 4)
                            }}
                        @endif
                    </label>
                </div>
            </label>

            <!-- メールアドレス -->
            <label class="row">
                <!-- ラベル -->
                <div class="mt-2 text-info text-end">メールアドレス</div>
                <div class="col-sm-3">
                    <label>{{ $mise->hp }}</label>
                </div>
            </label>
        @php
            $miseData = [
                '店舗名'=>'name',
                'フリガナ'=>'yomi',
                '地域'=>'area',
                '電話番号'=>'tel',
                'ホームページ'=>'hp',
            ];
        @endphp
        @component('componets.modal')
            @slot('type', 'miseData')
            @slot('miseData', $miseData)
            @slot('mise', $mise)
            @slot('url', url()->current().'/misedataedit')
        @endcomponent
    </div>
</div>

<!-- ルーム一覧 -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">ルーム一覧</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        ※実装はフェーズ2以降
        <ul>
            <li>ポーチ朝一、最終の管理</li>
            <li>部屋の清掃状況の管理</li>
            <li>備品管理</li>
            <li>案内文言の登録</li>
        </ul>
    </div>
</div>

<!-- ルーム新規作成 -->
{{--
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">ルーム新規作成</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
    </div>
</div>
--}}
@stop