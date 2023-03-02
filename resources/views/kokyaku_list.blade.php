@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{url("/k")}}">店舗一覧</a></li>
<li class="breadcrumb-item active">顧客一覧</li>

@stop

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

<h1 class="h2">{{ $mise->name }} 顧客一覧</h1>

<!-- 顧客一覧 -->
<div class="card my-4 col-12 col-xl-10 mb-lg-0">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">顧客を選択してください。</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        <!-- テーブル -->
        <table class="table table-hover">
            <thead>
                <!-- カテゴリ -->
                <tr>
                    <th scope="col"></th>
                    <th scope="col">顧客名</th>
                    <th scope="col">電話番号</th>
                    <th scope="col">メールアドレス</th>
                    <th scope="col">NGセラピスト</th>
                    <th scope="col">メモ</th>
                </tr>
            </thead>
            <tbody>
                @foreach($yoyakuList as $y)
                <tr>
                    <th>{{ $loop->index+1 }}</th>
                    <td><a href="{{ url('/k/'.$mise->id.'/'.$y->kokyaku_id) }}">{{ $y->kokyakuName }}</a> 様</td>
                    <td>
                        <!-- mb_strlen()文字数カウント -->
                        @if(mb_strlen($y->kokyakuTel) === 11)
                        {{ 
                            substr($y->kokyakuTel, 0, 3).'-'.
                            substr($y->kokyakuTel, 3, 4).'-'.
                            substr($y->kokyakuTel, -4, 4)
                        }}
                        @else
                        {{ 
                            substr($y->kokyakuTel, 0, 2).'-'.
                            substr($y->kokyakuTel, 3, 4).'-'.
                            substr($y->kokyakuTel, -4, 4)
                        }}
                        @endif
                    </td>
                    <td>{{ $y->kokyakuMail }}</td>
                    <td>{{ $y->kokyakuNg }}</td>
                    <td>{{ $y->kokyakuMemo }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a class="btn btn-dark" href="{{ url("/k/") }}" >戻る</a>

    </div>
</div>
@stop