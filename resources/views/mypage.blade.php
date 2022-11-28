@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
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

                <!-- プロフィール変更 -->
                <div class="card my-4 col-12 col-xl-10 mb-lg-0">

                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">プロフィール変更</h2>

                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">

                        <!-- モーダルラベル/ボタンの設定 -->
                        <!-- ユーザーでログイン時 -->
                        @if( $accessLevel != 'tiro' )

                            <!-- 名前 -->
                            <label class="row">
                                <!-- ラベル -->
                                <div class="text-info text-end">名前</div>
                                <div class="col-sm-3">
                                    <label class="mt-2">{{ $mydeta->name }}</label>
                                </div>
                                <!-- ボタン -->
                                <button type="button" class="col-sm-1 btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#nameModal">
                                    編集
                                </button>
                            </label>

                            <!-- 住所 -->
                            <label class="row">
                                <!-- ラベル -->
                                <div class="mt-2 text-info text-end">住所</div>
                                <div class="col-sm-3">
                                    <label class="mt-2">{{ $mydeta->address }}</label>
                                </div>
                                <!-- ボタン -->
                                <button type="button" class="col-sm-1 btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#addressModal">
                                    編集
                                </button>
                            </label>

                            <!-- 電話番号 -->
                            <label class="row">
                                <!-- ラベル -->
                                <div class="mt-2 text-info text-end">電話番号</div>
                                <div class="col-sm-3">
                                    <label class="mt-2">
                                        {{ 
                                            substr($mydeta->tel, 0, 3).'-'.
                                            substr($mydeta->tel, 3, 4).'-'.
                                            substr($mydeta->tel, -4, 4)
                                        }}
                                    </label>
                                </div>
                                <!-- ボタン -->
                                <button type="button" class="col-sm-1 btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#telModal">
                                    編集
                                </button>
                            </label>

                            <!-- メールアドレス -->
                            <label class="row">
                                <!-- ラベル -->
                                <div class="mt-2 text-info text-end">メールアドレス</div>
                                <div class="col-sm-3">
                                    <label class="mt-2">{{ $mydeta->mail }}</label>
                                </div>
                                <!-- ボタン -->
                                <button type="button" class="col-sm-1 btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#mailModal">
                                    編集
                                </button>
                            </label>

                            <!-- 生年月日 -->
                            <label class="row">
                                <!-- ラベル -->
                                <div class="mt-2 text-info text-end">生年月日</div>
                                <div class="col-sm-3">
                                    <label class="mt-2">
                                        {{ 
                                            substr(str_replace('-', '', $mydeta->birthday), 0, 4).'年'.
                                            substr(str_replace('-', '', $mydeta->birthday), 4, 2).'月'.
                                            substr(str_replace('-', '', $mydeta->birthday), -2, 2).'日'
                                        }}
                                    </label>
                                </div>
                                <!-- ボタン -->
                                <button type="button" class="col-sm-1 btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#birthdayModal">
                                    編集
                                </button>
                            </label>

                        @endif

                        <!-- セラピストのみ編集する -->
                        @if( $accessLevel === 'therapist' )
                            <!-- 営業プロフィール -->
                            <label class="row">
                                <!-- ラベル -->
                                <div class="mt-2 text-info text-end">営業プロフィール</div>
                                <div class="col-sm-3">
                                    <label for="">「営業プロフィール」を表示</label>
                                </div>
                                <!-- ボタン -->
                                <button type="button" class="col-sm-1 btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#profileModal">
                                    編集
                                </button>
                            </label>
                        @endif

                        <!-- パスワード -->
                        <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#passwordModal">
                            パスワードを変更
                        </button>

                        <!-- モーダルの設定 -->
                        <!-- 名前 -->
                        <div class="modal fade" id="nameModal" tabindex="-1" aria-labelledby="nameModalLabel" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    
                                    <!-- モーダルのヘッダー -->
                                    <div class="modal-header">
                                        <!-- モーダルタイトル -->
                                        <h1 class="modal-title h4" id="nameModalLabel">名前変更</h1>
                                    </div>

                                    <!-- フォームの開始 -->
                                    {{ Form::open(['url' => url('/mypage/namechange')]) }}
                                    
                                    <!-- モーダルの内容 -->
                                    <div class="modal-body">

                                        <!-- 名前 -->
                                        <label class="row">

                                            <!-- ラベルにエラーメッセージを出す -->
                                            @if ($errors->has('name'))
                                                <div class="mt-2 text-danger text-end">{{ $errors->first('name') }}</div>
                                            @else
                                                <div class="mt-2 text-info text-end">名前</div>
                                            @endif

                                            <div class="col-sm-12">

                                                <!-- 半角などのチェック -->
                                                <!-- Form::タイプ('NAME', VALUE, ['class'=>'クラス']) -->
                                                {{ Form::text('name', $mydeta->name, ['class'=>'form-control', 'autocomplete'=>'off', 'required'=>'required', 'placeholder'=>'(例) 山田沙也加']) }}
                                            </div>
                                        </label>

                                        <!-- かな -->
                                        <label class="row">
                                            @if ($errors->has('kana'))
                                                <div class="mt-2 text-danger text-end">{{ $errors->first('kana') }}</div>
                                            @else
                                                <div class="mt-2 text-info text-end">かな</div>
                                            @endif
                                            <div class="col-sm-12">

                                                <!-- 上のパスワードと同じかの確認をする -->
                                                {{ Form::text('kana', $mydeta->yomi, ['class'=>'form-control', 'autocomplete'=>'off', 'required'=>'required', 'placeholder'=>'(例) やまださやか']) }}
                                            </div>
                                        </label>

                                    </div>

                                    <!-- モーダルのフッター -->
                                    <div class="modal-footer">

                                        <!-- 各ボタン -->
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                                        {{ Form::submit('更新',["class"=>"btn btn-info"])}}

                                    </div>

                                    <!-- フォームの終わり -->
                                    {{ Form::close() }}

                                </div>
                            </div>
                        </div>

                        <!-- 住所 -->
                        <div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="addressModalLabel" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    
                                    <!-- モーダルのヘッダー -->
                                    <div class="modal-header">
                                        <!-- モーダルタイトル -->
                                        <h1 class="modal-title h4" id="addressModalLabel">住所変更</h1>
                                    </div>

                                    <!-- フォームの開始 -->
                                    {{ Form::open(['url' => url('/mypage/addresschange')]) }}
                                    
                                    <!-- モーダルの内容 -->
                                    <div class="modal-body">

                                        <!-- 新しいパスワード入力 -->
                                        <label class="row">

                                            <!-- ラベルにエラーメッセージを出す -->
                                            @if ($errors->has('address'))
                                                <div class="mt-2 text-danger text-end">{{ $errors->first('address') }}</div>
                                            @else
                                                <div class="mt-2 text-info text-end">住所</div>
                                            @endif

                                            <div class="col-sm-12">

                                                <!-- 半角などのチェック -->
                                                <!-- Form::タイプ -->
                                                <!-- 第一引数は「name=""」 -->
                                                {{ Form::text('address', $mydeta->address, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'(例) 東京都新宿区西新宿2丁目8-1']) }}
                                            </div>
                                        </label>
                                    </div>

                                    <!-- モーダルのフッター -->
                                    <div class="modal-footer">

                                        <!-- 各ボタン -->
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                                        {{ Form::submit('更新',["class"=>"btn btn-info"])}}

                                    </div>

                                    <!-- フォームの終わり -->
                                    {{ Form::close() }}

                                </div>
                            </div>
                        </div>

                        <!-- 電話番号 -->
                        <div class="modal fade" id="telModal" tabindex="-1" aria-labelledby="telModalLabel" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    
                                    <!-- モーダルのヘッダー -->
                                    <div class="modal-header">
                                        <!-- モーダルタイトル -->
                                        <h1 class="modal-title h4" id="telModalLabel">電話番号変更</h1>
                                    </div>

                                    <!-- フォームの開始 -->
                                    {{ Form::open(['url' => url('/mypage/telchange')]) }}
                                    
                                    <!-- モーダルの内容 -->
                                    <div class="modal-body">

                                        <!-- 電話番号入力 -->
                                        <label class="row">

                                            <!-- ラベルにエラーメッセージを出す -->
                                            @if ($errors->has('tel'))
                                                <div class="mt-2 text-danger text-end">{{ $errors->first('tel') }}</div>
                                            @else
                                                <div class="mt-2 text-info text-end">電話番号</div>
                                            @endif

                                            <div class="col-sm-12">

                                                <!-- 半角などのチェック -->
                                                <!-- Form::タイプ -->
                                                <!-- 第一引数は「name=""」 -->
                                                {{ Form::number('tel', $mydeta->tel, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'(例) 08021210007']) }}
                                            </div>
                                        </label>
                                    </div>

                                    <!-- モーダルのフッター -->
                                    <div class="modal-footer">

                                        <!-- 各ボタン -->
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                                        {{ Form::submit('更新',["class"=>"btn btn-info"])}}

                                    </div>

                                    <!-- フォームの終わり -->
                                    {{ Form::close() }}

                                </div>
                            </div>
                        </div>

                        <!-- メールアドレス -->
                        <div class="modal fade" id="mailModal" tabindex="-1" aria-labelledby="mailModalLabel" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    
                                    <!-- モーダルのヘッダー -->
                                    <div class="modal-header">
                                        <!-- モーダルタイトル -->
                                        <h1 class="modal-title h4" id="mailModalLabel">メールアドレス変更</h1>
                                    </div>

                                    <!-- フォームの開始 -->
                                    {{ Form::open(['url' => url('/mypage/mailchange')]) }}
                                    
                                    <!-- モーダルの内容 -->
                                    <div class="modal-body">

                                        <!-- メールアドレス入力 -->
                                        <label class="row">

                                            <!-- ラベルにエラーメッセージを出す -->
                                            @if ($errors->has('mail'))
                                                <div class="mt-2 text-danger text-end">{{ $errors->first('mail') }}</div>
                                            @else
                                                <div class="mt-2 text-info text-end">メールアドレス</div>
                                            @endif

                                            <div class="col-sm-12">

                                                <!-- 半角などのチェック -->
                                                <!-- Form::タイプ -->
                                                <!-- 第一引数は「name=""」 -->
                                                {{ Form::email('mail', $mydeta->mail, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'(例) anya@gmail.com']) }}
                                            </div>
                                        </label>
                                    </div>

                                    <!-- モーダルのフッター -->
                                    <div class="modal-footer">

                                        <!-- 各ボタン -->
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                                        {{ Form::submit('更新',["class"=>"btn btn-info"])}}

                                    </div>

                                    <!-- フォームの終わり -->
                                    {{ Form::close() }}

                                </div>
                            </div>
                        </div>

                        <!-- 生年月日 -->
                        <div class="modal fade" id="birthdayModal" tabindex="-1" aria-labelledby="birthdayModalLabel" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    
                                    <!-- モーダルのヘッダー -->
                                    <div class="modal-header">
                                        <!-- モーダルタイトル -->
                                        <h1 class="modal-title h4" id="birthdayModalLabel">生年月日を変更</h1>
                                    </div>

                                    <!-- フォームの開始 -->
                                    {{ Form::open(['url' => url('/mypage/birthdaychange')]) }}
                                    
                                    <!-- モーダルの内容 -->
                                    <div class="modal-body">

                                        <!-- メールアドレス入力 -->
                                        <label class="row">

                                            <!-- ラベルにエラーメッセージを出す -->
                                            @if ($errors->has('birthday'))
                                                <div class="mt-2 text-danger text-end">{{ $errors->first('birthday') }}</div>
                                            @else
                                                <div class="mt-2 text-info text-end">生年月日</div>
                                            @endif

                                            <div class="col-sm-12">

                                                <!-- 半角などのチェック -->
                                                <!-- Form::タイプ -->
                                                <!-- 第一引数は「name=""」 -->
                                                {{ Form::number('birthday', str_replace('-', '', $mydeta->birthday), ['class'=>'form-control', 'autocomplete'=>'current-password', 'placeholder'=>'(例) 2005-01-21']) }}
                                            </div>
                                        </label>
                                    </div>

                                    <!-- モーダルのフッター -->
                                    <div class="modal-footer">

                                        <!-- 各ボタン -->
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                                        {{ Form::submit('更新',["class"=>"btn btn-info"])}}

                                    </div>

                                    <!-- フォームの終わり -->
                                    {{ Form::close() }}

                                </div>
                            </div>
                        </div>

                        <!-- セラピストのみ表示 -->
                        <!-- 営業プロフィール -->
                        <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    
                                    <!-- モーダルのヘッダー -->
                                    <div class="modal-header">
                                        <!-- モーダルタイトル -->
                                        <h1 class="modal-title h4" id="profileModalLabel">営業プロフィール編集</h1>
                                    </div>

                                    <!-- フォームの開始 -->
                                    {{ Form::open(['url' => url('/mypage/profilechange')]) }}
                                    
                                    <!-- モーダルの内容 -->
                                    <div class="modal-body">

                                        <!-- 営業年齢入力 -->
                                        <label class="row">

                                            <!-- ラベルにエラーメッセージを出す -->
                                            @if ($errors->has('age'))
                                                <div class="mt-2 text-danger text-end">{{ $errors->first('age') }}</div>
                                            @else
                                                <div class="mt-2 text-info text-end">営業年齢</div>
                                            @endif

                                            <div class="col-sm-12">

                                                <!-- 半角などのチェック -->
                                                <!-- Form::タイプ -->
                                                <!-- 第一引数は「name=""」 -->
                                                {{ Form::number('age', $mydeta->age, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'(例) 21']) }}
                                            </div>
                                        </label>

                                        <!-- 源氏名 -->


                                        <!-- 3サイズ入力 -->
                                        <label class="row">
                                            @if ($errors->has('3size'))
                                                <div class="mt-2 text-danger text-end">{{ $errors->first('3size') }}</div>
                                            @else
                                                <div class="mt-2 text-info text-end">3サイズ</div>
                                            @endif
                                            <div class="col-sm-12">

                                                <!-- 上のパスワードと同じかの確認をする -->
                                                {{ Form::text('3size', null, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'(例) 81-63-87']) }}
                                            </div>
                                        </label>

                                        <!-- カップ数入力 -->
                                        <label class="row">
                                            @if ($errors->has('cup'))
                                                <div class="mt-2 text-danger text-end">{{ $errors->first('cup') }}</div>
                                            @else
                                                <div class="mt-2 text-info text-end">カップ</div>
                                            @endif
                                            <div class="col-sm-12">

                                                <!-- 上のパスワードと同じかの確認をする -->
                                                {{ Form::text('cup', $mydeta->cup, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'(例) A']) }}
                                            </div>
                                        </label>

                                        <!-- LINE ID入力 -->
                                        <label class="row">
                                            @if ($errors->has('line'))
                                                <div class="mt-2 text-danger text-end">{{ $errors->first('line') }}</div>
                                            @else
                                                <div class="mt-2 text-info text-end">LINE ID</div>
                                            @endif
                                            <div class="col-sm-12">

                                                <!-- 上のパスワードと同じかの確認をする -->
                                                {{ Form::text('line', $mydeta->line, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'(例) anya0121']) }}
                                            </div>
                                        </label>
                                    </div>

                                    <!-- モーダルのフッター -->
                                    <div class="modal-footer">

                                        <!-- 各ボタン -->
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                                        {{ Form::submit('更新',["class"=>"btn btn-info"])}}

                                    </div>

                                    <!-- フォームの終わり -->
                                    {{ Form::close() }}

                                </div>
                            </div>
                        </div>

                        <!-- パスワード -->
                        <div class="modal fade" id="passwordModal" tabindex="-1" aria-labelledby="passwordModalLabel" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    
                                    <!-- モーダルのヘッダー -->
                                    <div class="modal-header">
                                        <!-- モーダルタイトル -->
                                        <h1 class="modal-title h4" id="passwordModalLabel">パスワード変更</h1>
                                    </div>

                                    <!-- フォームの開始 -->
                                    {{ Form::open(['url' => url('/mypage/newpassword')]) }}
                                    
                                    <!-- モーダルの内容 -->
                                    <div class="modal-body">

                                        <!-- 新しいパスワード入力 -->
                                        <label class="row">

                                            <!-- ラベルにエラーメッセージを出す -->
                                            @if ($errors->has('newpassword'))
                                                <div class="mt-2 text-danger text-end">{{ $errors->first('newpassword') }}</div>
                                            @else
                                                <div class="mt-2 text-info text-end">新しいパスワード</div>
                                            @endif

                                            <div class="col-sm-12">

                                                <!-- 半角などのチェック -->
                                                <!-- Form::タイプ -->
                                                <!-- 第一引数は「name=""」 -->
                                                {{ Form::password('newpassword', ['class'=>'form-control', 'autocomplete'=>'current-password']) }}
                                            </div>
                                        </label>

                                        <!-- 新しいパスワードの確認 -->
                                        <label class="row">
                                            @if ($errors->has('checkpassword'))
                                                <div class="mt-2 text-danger text-end">{{ $errors->first('checkpassword') }}</div>
                                            @else
                                                <div class="mt-2 text-info text-end">新しいパスワード(確認)</div>
                                            @endif
                                            <div class="col-sm-12">

                                                <!-- 上のパスワードと同じかの確認をする -->
                                                {{ Form::password('checkpassword', ['class'=>'form-control', 'autocomplete'=>'current-password']) }}
                                            </div>
                                        </label>

                                        <!-- 現在のパスワードの確認 -->
                                        <label class="row">
                                            @if ($errors->has('nowpassword'))
                                                <div class="mt-2 text-danger text-end">{{ $errors->first('nowpassword') }}</div>
                                            @else
                                                <div class="mt-2 text-info text-end">新しいパスワード(確認)</div>
                                            @endif
                                            <div class="col-sm-12">

                                                <!-- 現在ログインしているIDのパスワードと同じからチェックする -->
                                                {{ Form::password('nowpassword', ['class'=>'form-control', 'autocomplete'=>'current-password'])}}
                                            </div>
                                        </label>
                                    </div>

                                    <!-- モーダルのフッター -->
                                    <div class="modal-footer">

                                        <!-- 各ボタン -->
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                                        {{ Form::submit('更新',["class"=>"btn btn-info"])}}

                                    </div>

                                    <!-- フォームの終わり -->
                                    {{ Form::close() }}

                                </div>
                            </div>
                        </div>


                    </div>

                </div>

@stop
@include('common.footer')