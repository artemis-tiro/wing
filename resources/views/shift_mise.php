@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')

@section('pan2')
<li class="breadcrumb-item active" aria-current="page">シフト入力クライアント一覧</li>
@stop

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

<h1 class="h2">{{ $client->name }}様 店舗一覧</h1>

<!-- 店舗一覧 -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">一覧</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        @component('componets.message')
            @slot('type', 'info')
            @slot('mes', $mes1)
        @endcomponent
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
                    <th scope="col">状態</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($myMiseList as $i)
                <?php 
                     $active = $i->active?'アクティブ':'停止中'; 
                     $action = $i->active?'stop':'go'; 
                     $actionComment = $i->active?'停止':'再開'; 
                ?>

                <tr class="account_{{ $action }}">
                    <th>{{ $loop->index+1 }}</th>
                    <td><a href="{{ url('/c/'.$client->id.'/'.$i->id) }}">{{ $i->name }}</a></td>
                    <td>{{ $i->area }}</td>
                    <td>{{ $i->room->count() }}</td>
                    <td>{{ $i->therapistCount }}</td>
                    <td>{{ $active }}</td>
                    <td><a class="btn btn-sm btn-info" href="{{ url()->current().'/'.$i->id.'/edit/'.$action }}">{{ $actionComment }}</a></td>
                    <td>
                    @if($i->therapist->count()==0)
                        @component('componets.modal')
                            @slot('type', 'del')
                            @slot('name', $i->name)
                            @slot('id', $i->name.$loop->index)
                            @slot('text', $i->name."はセラピストの登録がないので削除できます。")
                            @slot('url', url()->current().'/'.$i->id.'/edit/del')
                        @endcomponent
                    @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop