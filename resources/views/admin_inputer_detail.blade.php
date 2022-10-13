@extends('common.layout')
@include('common.header')
@include('common.topmenu')
@include('common.pan')
@section('content')
{{--pan--}}
@if($inputerDetail->name)  > {{$inputerDetail->name}}
@else  > {{$user->name}}
@endif

        <h1>従業員詳細</h1>
        <h2>■成績</h2>
        <table>
               <tr><td>10月</td><td>〇〇〇件成約</td></tr>
               <tr><td>9月</td><td>〇〇〇件成約</td></tr>
               <tr><td>8月</td><td>〇〇〇件成約</td></tr>
               <tr><td>7月</td><td>〇〇〇件成約</td></tr>
               <tr><td>6月</td><td>〇〇〇件成約</td></tr>
        </table>
        <h2>■本人情報</h2>
        <table>
               <tr><td>ユーザーID</td><td>{{$user->id}}</td></tr>
               <tr><td>ログイン名</td><td>{{$user->name}}</td></tr>
               <tr><td>名前</td><td>{{$inputerDetail->name}}</td></tr>
               <tr><td>電話番号</td><td>{{$inputerDetail->tel}}</td></tr>
               <tr><td>住所</td><td>{{$inputerDetail->address}}</td></tr>
               <tr><td>メールアドレス</td><td>{{$inputerDetail->mail}}</td></tr>
               <tr><td>生年月日</td><td>{{$inputerDetail->birthday}}</td></tr>
               <tr><td>入社日</td><td>{{$inputerDetail->joinday}}</td></tr>
               <tr><td>身分証提出</td><td>{{$inputerDetail->kyc}}</td></tr>
        </table>
        <button>編集</button>
        <br><br>
        <button>身分証アップロード</button>


@stop
@include('common.footer')