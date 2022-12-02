@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item active">クライアント一覧</li>
@stop

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

                <h1 class="h2">クライアント一覧</h1>

                <!-- クライアント一覧 -->
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
                                    <th scope="col">代表者</th>
                                    <th scope="col">店舗数</th>
                                    <th scope="col">メイン店舗</th>
                                    <th scope="col">状態</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($clientList as $c)
                                <?php 
                                     $level = $c->access_level=='admin'?'管理者':'メンバー'; 
                                     $active = $c->active?'アクティブ':'停止中'; 
                                     $action = $c->active?'stop':'go'; 
                                     $actionComment = $c->active?'停止':'再開'; 
                                ?>

                                <tr class="account_{{ $action }}">
                                    <th>{{ $loop->index+1 }}</th>
                                    <td><a href="{{ url('/c/'.$c->id) }}">{{ $c->client->name }}</a></td>
                                    <td>{{ $c->miseCountActive }}</td>
                                    <td>{{ $c->miseMain }}</td>
                                    <td>{{ $active }}</td>
                                    <td><a class="btn btn-sm btn-info" href="{{ url('/admin/editclient') }}/{{ $c->id }}/{{ $action }}">{{ $actionComment }}</a></td>
                                    <td>
                                        @if($c->miseCount==0)
                                            @component('componets.modal')
                                                @slot('type', 'del')
                                                @slot('name', $c->client->name)
                                                @slot('id', $c->client->name.$loop->index)
                                                @slot('text', $c->client->name."は店舗の登録がないので削除できます。")
                                                @slot('url', url('/admin/editclient').'/'.$c->id.'/del')
                                            @endcomponent
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- クライアント新規作成 -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">新規作成</h2>
                    <!-- カードの要素 -->
                    <div class="card-body">
                        @include('common.validator')
                        @include('common.error')
                        @include('common.success')
                        {{ Form::open(['url' => url('/admin/newclient'),'class'=>'form-horizontal']) }}
                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">ログインID *</div>
                            <div class="col-sm-10">
                                {{ Form::text('login_id', null, ['class'=>'form-control jq_idToPass', 'autocomplete'=>'off', 'required'=>'required']) }}
                                <div class="form-text">半角英数字。ユニーク。</div>
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4">
                            <span class="col-sm-2 lh2">パスワード *</span>
                            <div class="col-sm-10">
                                {{ Form::text('pass', null, ['class'=>'form-control', 'required'=>'required', 'autocomplete'=>'off', 'disabled'=>'disabled']) }}
                                <div class="form-text">初期値はログインIDと同じ。</div>
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4">
                            <span class="col-sm-2 lh2">名前 *</span>
                            <div class="col-sm-10">
                                {{ Form::text('name', null, ['class'=>'form-control', 'autocomplete'=>'off', 'required'=>'required']) }}
                                <div class="form-text">初期設定で入力し直すので「〇〇さん」でも大丈夫です。</div>
                            </div>
                        </label>

                        {{ Form::submit('新規作成',["class"=>"m-2 btn btn-info"]) }}
                        {{ Form::close() }}
                    </div>
                </div>

@stop