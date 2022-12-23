@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')

@section('pan2')
<li class="breadcrumb-item"><a href="{{ url("/shift") }}">シフト入力クライアント一覧</a></li>
<li class="breadcrumb-item"><a href="{{ url('/shift/'.$client->id) }}">{{ $client->name }}様店舗一覧</a></li>

<li class="breadcrumb-item active" aria-current="page">{{ $mise->name }}</li>
@stop

@section('content')

<h1 class="h2">シフト入力</h1>

<!-- セラピスト一覧 -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">{{ date('Y-m') }}</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        <!-- テーブル -->
        <table class="table table-hover">
            <thead>
                <!-- カテゴリ -->
                @for(i = 0; i < 10; i++)
                    $week = date('d', strtotime("+i day"))
                    @switch($week)
                        @case 0
                            $text = "text-denger"
                        @case 6
                            $text = "text-primary"
                        @default
                            $text = "text-dark"
                    @endswitch   
                @endif
                <tr>
                    <th scope="col">源氏名</th>
                    <th scope="col">{{ date('d', strtotime("+1 day")) }}</th>
                    <th scope="col">{{ date('d', strtotime("+2 day")) }}</th>
                    <th scope="col">{{ date('d', strtotime("+3 day")) }}</th>
                    <th scope="col">{{ date('d', strtotime("+4 day")) }}</th>
                    <th scope="col">{{ date('d', strtotime("+5 day")) }}</th>
                    <th scope="col">{{ date('d', strtotime("+6 day")) }}</th>
                    <th scope="col">{{ date('d', strtotime("+7 day")) }}</th>
                    <th scope="col">{{ date('d', strtotime("+8 day")) }}</th>
                    <th scope="col"><div class="{{ $text }}">{{ date('d', strtotime("+9 day")) }}</div></th>
                    <th scope="col">{{ date('d', strtotime("+10 day")) }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($therapistList as $i)
                    <tr>
                        <td>{{ $i->business_name }}</td>
                        <td>
                            {{ Form::time('start_time', null, ['class'=>'form-control', 'required']) }}
                            {{ Form::time('start_time', null, ['class'=>'form-control', 'required']) }}
                        </td>
                        <td>
                            {{ Form::number('start_time', null, ['class'=>'form-control', 'required']) }}
                            {{ Form::number('start_time', null, ['class'=>'form-control', 'required']) }}
                        </td>
                        <td>
                            {{ Form::text('start_time', null, ['class'=>'form-control', 'required']) }}
                            {{ Form::text('start_time', null, ['class'=>'form-control', 'required']) }}
                        </td>
                        <td>{{ Form::time('start_time', null, ['class'=>'form-control', 'required']) }}</td>
                        <td>{{ Form::time('start_time', null, ['class'=>'form-control', 'required']) }}</td>
                        <td>{{ Form::time('start_time', null, ['class'=>'form-control', 'required']) }}</td>
                        <td>{{ Form::time('start_time', null, ['class'=>'form-control', 'required']) }}</td>
                        <td>{{ Form::time('start_time', null, ['class'=>'form-control', 'required']) }}</td>
                        <td>{{ Form::time('start_time', null, ['class'=>'form-control', 'required']) }}</td>
                        <td>{{ Form::time('start_time', null, ['class'=>'form-control', 'required']) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop