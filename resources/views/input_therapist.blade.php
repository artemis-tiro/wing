@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{url("/i")}}">店舗編集</a></li>
<li class="breadcrumb-item active">{{$mise->name}}</li>

@stop

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

                <h1 class="h2">{{$mise->name}}詳細</h1>

                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">セラピスト一覧</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        <!-- テーブル -->
                        <table class="table table-hover">
                            <thead>
                                <!-- カテゴリ -->
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">セラピスト名</th>
                                    <th scope="col">給料形態</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($zenTherapistList as $t)
                                <tr>
                                    <th>{{$loop->index+1}}</th>
                                    <td><a href="{{url('/i/'.$mise->id.'/'.$t->id.'/')}}">{{$t->business_name}}</a></td>
                                    <td>{{$t->back_name}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- ヒアリングシート -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">ヒアリングシート</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        {{$mise->hearing_sheet}}
                    </div>
                </div>
@stop