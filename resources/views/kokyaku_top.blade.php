@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item active">店舗一覧</li>

@stop

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

<!-- 店舗一覧 -->
<div class="card my-4 col-12 col-xl-10 mb-lg-0">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">店舗一覧</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        <!-- テーブル -->
        <table class="table table-hover">
            <thead>
                <!-- カテゴリ -->
                <tr>
                    <th scope="col"></th>
                    <th scope="col">店名</th>
                    <th scope="col">地域</th>
                    <th scope="col">部屋数</th>
                    <th scope="col">在籍</th>
                </tr>
            </thead>
            <tbody>
                @foreach($zenMiseList as $z)
                <?php 
                    $active = $z->active?'アクティブ':'停止中'; 
                    $action = $z->active?'stop':'go'; 
                    $actionComment = $z->active?'停止':'再開'; 
                ?>

                <tr class="account_{{ $action }}">
                    <th>{{ $loop->index+1 }}</th>
                    <td><a href="{{ url('/k/'.$z->id) }}">{{ $z->name }}</a></td>
                    <td>{{ $z->area }}</td>
                    <td>{{ $z->room->count() }}</td>
                    <td>{{ $z->therapistCount }}名</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop