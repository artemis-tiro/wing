@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{ url("/k/".$mise->id) }}">顧客一覧</a></li>
<li class="breadcrumb-item active">{{ $kokyaku->name }}</li>

@stop

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

<h1 class="h2">{{ $kokyaku->name }} 様</h1>

<!-- プロフィール変更 -->
<div class="card my-4 col-12 col-xl-10 mb-lg-0">

    <!-- カードのタイトル -->
    <h2 class="card-header h5">プロフィール変更</h2>

    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">

        <!-- モーダルラベル/ボタンの設定 -->
        <!-- ユーザーでログイン時 -->
        
        <!-- 名前 -->
        <label class="row">
            <!-- ラベル -->
            <div class="text-info text-end">名前</div>
            <div class="col-sm-3">
                <label class="mt-2">{{ $kokyaku->name }}</label>
            </div>
            <!-- ボタン -->
            <button type="button" class="col-sm-1 btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#nameModal">
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
                        substr($kokyaku->tel, 0, 3).'-'.
                        substr($kokyaku->tel, 3, 4).'-'.
                        substr($kokyaku->tel, -4, 4)
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
                <label class="mt-2">{{ $kokyaku->mail }}</label>
            </div>
            <!-- ボタン -->
            <button type="button" class="col-sm-1 btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#mailModal">
                編集
            </button>
        </label>

        <!-- NG -->
        <label class="row">
            <!-- ラベル -->
            <div class="mt-2 text-info text-end">NGセラピスト</div>
            <div class="col-sm-3">
                <label class="mt-2">{{ $kokyaku->ngName }}</label>
            </div>
            <!-- ボタン -->
            <button type="button" class="col-sm-1 btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#ngModal">
                編集
            </button>
        </label>

        <!-- メモ -->
        <label class="row">
            <!-- ラベル -->
            <div class="mt-2 text-info text-end">メモ</div>
            <div class="col-sm-3">
                <label class="mt-2">{{ $kokyaku->memo }}</label>
            </div>
            <!-- ボタン -->
            <button type="button" class="col-sm-1 btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#memoModal">
                編集
            </button>
        </label>

        <!-- モーダルの設定 -->
        <!-- 名前 -->
        @if($errors->has('name'))
        <div class="modal show" id="nameModal" tabindex="-1" aria-labelledby="nameModalLabel" data-bs-backdrop="static">
        @else
        <div class="modal fade" id="nameModal" tabindex="-1" aria-labelledby="nameModalLabel" data-bs-backdrop="static">
        @endif
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    
                    <!-- モーダルのヘッダー -->
                    <div class="modal-header">
                        <!-- モーダルタイトル -->
                        <h1 class="modal-title h4" id="nameModalLabel">名前変更</h1>
                    </div>

                    <!-- フォームの開始 -->
                    {{ Form::open(['url' => url('/k/$kokyaku->id/namechange')]) }}
                    
                    <!-- モーダルの内容 -->
                    <div class="modal-body">

                        <!-- 名前 -->
                        <label class="row">

                            <!-- ラベルにエラーメッセージを出す -->
                            @if ($errors->has('name'))
                                <div class="mt-2 text-danger text-end">{{ $errors->first('name') }}</div>
                            @else
                                <div class="mt-2 text-info text-end">名前(カタカナ)</div>
                            @endif

                            <div class="col-sm-12">

                                <!-- 半角などのチェック -->
                                <!-- Form::タイプ('NAME', VALUE, ['class'=>'クラス']) -->
                                {{ Form::text('name', $kokyaku->name, ['class'=>'form-control', 'autocomplete'=>'off', 'required'=>'required', 'placeholder'=>'(例) ヤマダ']) }}
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
        @if ($errors->has('tel'))
        <div class="modal show" id="telModal" tabindex="-1" aria-labelledby="telModalLabel" data-bs-backdrop="static">
        @else
        <div class="modal fade" id="telModal" tabindex="-1" aria-labelledby="telModalLabel" data-bs-backdrop="static">
        @endif
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    
                    <!-- モーダルのヘッダー -->
                    <div class="modal-header">
                        <!-- モーダルタイトル -->
                        <h1 class="modal-title h4" id="telModalLabel">電話番号変更</h1>
                    </div>

                    <!-- フォームの開始 -->
                    {{ Form::open(['url' => url('/k/$kokyaku->id/telchange')]) }}
                    
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
                                {{ Form::number('tel', $kokyaku->tel, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'(例) 08021210007']) }}
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
        @if ($errors->has('mail'))
        <div class="modal show" id="mailModal" tabindex="-1" aria-labelledby="mailModalLabel" data-bs-backdrop="static">
        @else
        <div class="modal fade" id="mailModal" tabindex="-1" aria-labelledby="mailModalLabel" data-bs-backdrop="static">
        @endif
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    
                    <!-- モーダルのヘッダー -->
                    <div class="modal-header">
                        <!-- モーダルタイトル -->
                        <h1 class="modal-title h4" id="mailModalLabel">メールアドレス変更</h1>
                    </div>

                    <!-- フォームの開始 -->
                    {{ Form::open(['url' => url('/k/$kokyaku->id/mailchange')]) }}
                    
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
                                {{ Form::email('mail', $kokyaku->mail, ['class'=>'form-control', 'autocomplete'=>'off', 'placeholder'=>'(例) anya@gmail.com']) }}
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

        <!-- NGセラピスト -->
        @if($errors->has('ng'))
        <div class="modal show" id="ngModal" tabindex="-1" aria-labelledby="ngModalLabel" data-bs-backdrop="static">
        @else
        <div class="modal fade" id="ngModal" tabindex="-1" aria-labelledby="ngModalLabel" data-bs-backdrop="static">
        @endif
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    
                    <!-- モーダルのヘッダー -->
                    <div class="modal-header">
                        <!-- モーダルタイトル -->
                        <h1 class="modal-title h4" id="nameModalLabel">NGセラピスト選択</h1>
                    </div>

                    <!-- フォームの開始 -->
                    {{-- Form::open(['url' => url('/k/$kokyaku->id/ngchange')]) --}}
                    
                    <!-- モーダルの内容 -->
                    <div class="modal-body">

                        <!-- 名前 -->
                        <label class="row">

                            <!-- ラベルにエラーメッセージを出す -->
                            @if ($errors->has('ng'))
                                <div class="mt-2 text-danger text-end">{{ $errors->first('ng') }}</div>
                            @else
                                <div class="mt-2 text-info text-end">ng</div>
                            @endif

                            <div class="col-sm-12">

                                <!-- 半角などのチェック -->
                                {{ Form::select('age', ['ゆうこ','しょうこ','くにこ']) }}
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
                    {{-- Form::close() --}}

                </div>
            </div>
        </div>

        <!-- メモ -->
        @if($errors->has('memo'))
        <div class="modal show" id="memoModal" tabindex="-1" aria-labelledby="memoModalLabel" data-bs-backdrop="static">
        @else
        <div class="modal fade" id="memoModal" tabindex="-1" aria-labelledby="memoModalLabel" data-bs-backdrop="static">
        @endif
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    
                    <!-- モーダルのヘッダー -->
                    <div class="modal-header">
                        <!-- モーダルタイトル -->
                        <h1 class="modal-title h4" id="memoModalLabel">メモ編集</h1>
                    </div>

                    <!-- フォームの開始 -->
                    {{ Form::open(['url' => url('/k/$kokyaku->id/memochange')]) }}
                    
                    <!-- モーダルの内容 -->
                    <div class="modal-body">

                        <!-- 名前 -->
                        <label class="row">

                            <!-- ラベルにエラーメッセージを出す -->
                            @if ($errors->has('memo'))
                                <div class="mt-2 text-danger text-end">{{ $errors->first('memo') }}</div>
                            @else
                                <div class="mt-2 text-info text-end">メモ</div>
                            @endif

                            <div class="col-sm-12">

                                <!-- 半角などのチェック -->
                                {{ Form::text('memo', $kokyaku->memo, ['class'=>'form-control', 'autocomplete'=>'off']) }}
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

<!-- 来店一覧 -->
<div class="card my-4 col-12 col-xl-10 mb-lg-0">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">来店一覧</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        <!-- テーブル -->
        <table class="table table-hover">
            <thead>
                <!-- カテゴリ -->
                <tr>
                    <th scope="col"></th>
                    <th scope="col">セラピスト名</th>
                    <th scope="col">来店日時</th>
                    <th scope="col">メモ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($yoyakuList as $y)
                <tr>
                    <th>{{ $loop->index+1 }}</th>
                    <td>{{ $y->therapistName }}</td>
                    <td>{{ $y->visit_day }}</td>
                    <td>{{ $kokyaku->memo }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop