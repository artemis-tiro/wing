@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
{{--@include('common.pan')--}}
@section('pan2')
<li class="breadcrumb-item active">マイページ</li>
@stop

@section('content')

                <!-- タイトル -->
                <h1 class="h2">マイページ</h1>

                <!-- 売上 -->
                <div class="card my-4 col-12 col-xl-10 mb-lg-0">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">売上、成績の確認</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
			        売上や成績の確認ができます。(フェーズ4以降)
                    </div>
                </div>

                <!-- パスワード変更 -->
                <div class="card my-4 col-12 col-xl-10 mb-lg-0">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">パスワード変更</h2>


                    <!-- カードの要素 -->
                    <div class="card-body">

                        <!-- フォームの開始 -->
                        {{ Form::open(['url' => url('/mypage/newpassword')]) }}

                        @include('common.validator')
                        @include('common.error')
                        @include('common.success')

                        <!-- 新しいパスワード入力 -->
                        <label class="row mb-4">
                            <div class="col-sm-2 lh2 text-end">新しいパスワード</div>
                            <div class="col-sm-10">

                                <!-- 半角などのチェック -->
                                <!-- Form::タイプ -->
                                <!-- 第一引数は「name=""」 -->
                                {{ Form::password('newpassword', ['class'=>'form-control', 'autocomplete'=>'current-password'])}}

                                <div class="form-text">半角英数字。 a ~ Z 、0 ~ 9。</div>
                            </div>
                        </label>

                        <!-- 新しいパスワードの確認 -->
                        <label class="row mb-4">
                            <div class="col-sm-2 lh2 text-end">新しいパスワード(確認用)</div>
                            <div class="col-sm-10">

                                <!-- 上のパスワードと同じかの確認をする -->
                                {{ Form::password('checkpassword', ['class'=>'form-control', 'autocomplete'=>'current-password'])}}

                                <div class="form-text">確認のためもう一度入力してください。</div>
                            </div>
                        </label>

                        <!-- 現在のパスワードの確認 -->
                        <label class="row mb-4">
                            <div class="col-sm-2 lh2 text-end">現在のパスワード</div>
                            <div class="col-sm-10">

                                <!-- 現在ログインしているIDのパスワードと同じからチェックする -->
                                {{ Form::password('nowpassword', ['class'=>'form-control', 'autocomplete'=>'current-password'])}}

                                <div class="form-text">現在設定しているパスワードを入力してください。</div>
                            </div>
                        </label>

                        <!-- 送信ボタン -->
                        {{ Form::submit('更新',["class"=>"btn btn-info"])}}

                        <!-- フォームの終わり -->
                        {{ Form::close() }}
                    </div>

                </div>

                <!-- 登録情報変更 -->
                <div class="card my-4 col-12 col-xl-10 mb-lg-0">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">登録情報の変更</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
			            登録情報の変更ができます。(フェーズ2以降)
                    </div>
                </div>

@stop
@include('common.footer')