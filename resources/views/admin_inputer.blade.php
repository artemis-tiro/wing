@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item active">メンバー編集</li>
@stop

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

<!-- タイトル -->
<h1 class="h2">メンバー編集</h1>

<!-- メンバ一覧 -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">一覧</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        <!-- テーブル -->
        <table class="table table-hover">
            <thead>
                <!-- カテゴリ -->
                <tr>
                    <th scope="col"></th>
                    <th scope="col">ID</th>
                    <th scope="col">名前</th>
                    <th scope="col">権限</th>
                    <th scope="col"></th>
                    <th scope="col">状態</th>
                    <!-- ボタンのための空白 -->
                    <!-- 一般ユーザでは表示しない -->
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($inputerList as $i)
                <?php 
                        $level = $i->access_level=='admin'?'管理者':'メンバー'; 
                        $action2 = $i->access_level=='admin'?'toInputer':'toAdmin'; 
                        $active = $i->active?'アクティブ':'停止中'; 
                        $action = $i->active?'stop':'go'; 
                        $actionComment = $i->active?'停止':'再開'; 
                ?>

                <tr class="account_{{$action}}">
                    <th>{{$loop->index+1}}</th>
                    <td>{{$i->name}}</td>
                    <td><a href="{{url('/admin/inputer/'.$i->id)}}">{{$i->inputer->name}}</a></td>
                    <td>{{$level}}</td>
                    <td><a class="btn btn-sm btn-info" href="{{url('/admin/editinputer')}}/{{$i->id}}/{{$action2}}">権限切り替え</a></td>
                    <td>{{$active}}</td>
                    <td><a class="btn btn-sm btn-info" href="{{url('/admin/editinputer')}}/{{$i->id}}/{{$action}}">{{$actionComment}}</a></td>
                    <td>
                        @if(!$i->yoyakuExist)
                            @component('componets.modal')
                                @slot('type', 'del')
                                @slot('name', $i->name)
                                @slot('id', $i->name.$loop->index)
                                @slot('text', $i->name."はまだ予約の入力がないので削除できます。")
                                @slot('url', url('/admin/editinputer').'/'.$i->id.'/del')
                            @endcomponent
                        @endif
                        {{--<a class="btn btn-sm btn-danger" href="{{url('/admin/editinputer')}}/{{$i->id}}/del">削除</a>--}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- メンバ新規作成 -->
<div class="card my-4 mb-5">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">新規作成</h2>
    <!-- カードの要素 -->
    <div class="card-body">
        @include('common.validator')
        @include('common.error')
        @include('common.success')
        {{ Form::open(['url' => url('/admin/newinputer'),'class'=>'form-horizontal']) }}
        <label class="row text-nowrap mb-4 text-end">
            <div class="col-sm-2 lh2 text-end">ログインID<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
            <div class="col-sm-10">
                {{ Form::text('login_id', null, ['class'=>'form-control jq_idToPass', 'autocomplete'=>'off', 'required'=>'required']) }}
                <div class="form-text">半角英数字。ユニーク。</div>
            </div>
        </label>

        <label class="row text-nowrap mb-4">
            <span class="col-sm-2 lh2">パスワード<span class="mx-2 badge rounded-pill bg-danger">自動入力</span></span>
            <div class="col-sm-10">
                {{ Form::text('pass', null, ['class'=>'form-control', 'autocomplete'=>'off', 'required'=>'required', 'disabled'=>'disabled']) }}
                <div class="form-text">初期値はログインIDと同じ。</div>
            </div>
        </label>

        <label class="row text-nowrap mb-4">
            <span class="col-sm-2 lh2">名前<span class="mx-2 badge rounded-pill bg-danger">必須</span></span>
            <div class="col-sm-10">
                {{ Form::text('name', null, ['class'=>'form-control', 'autocomplete'=>'off', 'required'=>'required'])}}
                <div class="form-text">初期設定で入力し直すので「〇〇さん」でも大丈夫です。</div>
            </div>
        </label>

        {{ Form::submit('新規作成',["class"=>"m-2 btn btn-info"]) }}
        {{ Form::close() }}
    </div>
</div>
@stop