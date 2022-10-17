@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')

@section('pan2')
<?php $inputerName = $inputerDetail->name?$inputerDetail->name:$user->name; ?>
<li class="breadcrumb-item active" aria-current="page">{{$inputerName}}さん詳細</li>
@stop

@section('content')

                <h1 class="h2">{{$inputerName}}さん詳細</h1>

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

                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">本人情報</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        <!-- テーブル -->
                        <table class="table table-hover">
                           <tr><td>ユーザーID</td><td>{{$user->id}}</td></tr>
                           <tr><td>ログインID</td><td>{{$user->name}}</td></tr>
                           <tr><td>名前</td><td>{{$inputerDetail->name}}</td></tr>
                           <tr><td>電話番号</td><td>{{$inputerDetail->tel}}</td></tr>
                           <tr><td>住所</td><td>{{$inputerDetail->address}}</td></tr>
                           <tr><td>メールアドレス</td><td>{{$inputerDetail->mail}}</td></tr>
                           <tr><td>生年月日</td><td>{{$inputerDetail->birthday}}</td></tr>
                           <tr><td>入社日</td><td>{{$inputerDetail->joinday}}</td></tr>
                           <tr><td>身分証提出</td><td>{{$inputerDetail->kyc}}</td></tr>
                        </table>
                    </div>
                </div>

@stop