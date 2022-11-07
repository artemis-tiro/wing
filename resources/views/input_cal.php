@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')

@section('pan2')
<li class="breadcrumb-item active" aria-current="page">店舗一覧</li>
@stop

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

                <h1 class="h2">店舗一覧</h1>

                <div class="card my-4">
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
                                    <th scope="col">店舗名</th>
                                    <th scope="col">地域</th>
                                    <th scope="col">出勤人数</th>
                                    <th scope="col">待機中</th>
                                    <th scope="col">接客中</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($zenMiseList as $m)

                                <tr>
                                    <th>{{$loop->index+1}}</th>
                                    <td><a href="{{url('/i/'.$m->id)}}">{{$m->name}}</a></td>
                                    <td>{{$m->area}}</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>--</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>



@stop