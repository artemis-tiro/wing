@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')

@section('pan2')
<?php $inputerName = $inputerDetail->name?$inputerDetail->name:$user->name; ?>
<li class="breadcrumb-item active" aria-current="page">{{ $inputerName }}さん詳細</li>
@stop

@section('content')
 
<!-- タイトル -->
<h1 class="h2">{{ $inputerName }}さん詳細</h1>

<!-- 成績 -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">成績</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        <!-- テーブル -->
        <table class="table table-hover">
            <thead>
                <!-- カテゴリ -->
                <tr>
                    <th scope="col"></th>
                    <th scope="col">月</th>
                    <th scope="col">制約件数</th>
                    <th scope="col">出勤回数</th>
                    <th scope="col">出勤時間</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>10月</td>
                    <td>500件</td>
                    <td>20日</td>
                    <td>160時間</td>
                </tr>
                <tr>
                    <th>2</th>
                    <td>9月</td>
                    <td>400件</td>
                    <td>18日</td>
                    <td>150時間</td>
                </tr>
                <tr>
                    <th>3</th>
                    <td>8月</td>
                    <td>520件</td>
                    <td>23日</td>
                    <td>190時間</td>
                </tr>
                <tr>
                    <th>4</th>
                    <td>7月</td>
                    <td>480件</td>
                    <td>19日</td>
                    <td>180時間</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- 本人情報 -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">本人情報</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        <!-- ユーザーID -->
        <label class="row">
            <!-- ラベル -->
            <div class="text-info text-end">ユーザーID</div>
            <div class="col-sm-3">
                <label >{{ $user->id }}</label>
            </div>
        </label>

        <!-- ログインID -->
        <label class="row">
            <!-- ラベル -->
            <div class="text-info text-end">ログインID</div>
            <div class="col-sm-3">
                <label>{{ $user->name }}</label>
            </div>
        </label>

        <!-- 名前 -->
        <label class="row">
            <!-- ラベル -->
            <div class="text-info text-end">名前</div>
            <div class="col-sm-3">
                <label >{{ $inputerDetail->name }}</label>
            </div>
        </label>

        <!-- 電話番号 -->
        <label class="row">
            <!-- ラベル -->
            <div class="mt-2 text-info text-end">電話番号</div>
            <div class="col-sm-3">
                <label >
                    @if($inputerDetail->tel)
                        {{ 
                            substr($inputerDetail->tel, 0, 3).'-'.
                            substr($inputerDetail->tel, 3, 4).'-'.
                            substr($inputerDetail->tel, -4, 4)
                        }}
                    @endif
                </label>
            </div>
        </label>

        <!-- 住所 -->
        <label class="row">
            <!-- ラベル -->
            <div class="mt-2 text-info text-end">住所</div>
            <div class="col-sm-3">
                <label >{{ $inputerDetail->address }}</label>
            </div>
        </label>

        <!-- メールアドレス -->
        <label class="row">
            <!-- ラベル -->
            <div class="mt-2 text-info text-end">メールアドレス</div>
            <div class="col-sm-3">
                <label >{{ $inputerDetail->mail }}</label>
            </div>
        </label>

        <!-- 生年月日 -->
        <label class="row">
            <!-- ラベル -->
            <div class="mt-2 text-info text-end">生年月日</div>
            <div class="col-sm-3">
                <label >
                    @if($inputerDetail->birthday)
                        {{ 
                            substr(str_replace('-', '', $inputerDetail->birthday), 0, 4).'年'.
                            substr(str_replace('-', '', $inputerDetail->birthday), 4, 2).'月'.
                            substr(str_replace('-', '', $inputerDetail->birthday), -2, 2).'日'
                        }}
                    @endif

                </label>
            </div>
        </label>

        <!-- 入社日 -->
        <label class="row">
            <!-- ラベル -->
            <div class="mt-2 text-info text-end">入社日</div>
            <div class="col-sm-3">
                <label >
                    @if($inputerDetail->joinday)
                        {{ 
                            substr(str_replace('-', '', $inputerDetail->joinday), 0, 4).'年'.
                            substr(str_replace('-', '', $inputerDetail->joinday), 4, 2).'月'.
                            substr(str_replace('-', '', $inputerDetail->joinday), -2, 2).'日'
                        }}
                    @endif

                </label>
            </div>
        </label>

        <!-- 身分証提出 -->
        <label class="row">
            <!-- ラベル -->
            <div class="mt-2 text-info text-end">身分証提出</div>
            <div class="col-sm-3">
                <label >{{ $inputerDetail->kyc }}</label>
            </div>
        </label>
    </div>
</div>

@stop