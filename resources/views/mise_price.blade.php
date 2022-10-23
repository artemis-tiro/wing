@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{url("/c/".$client->id)}}">{{$client->name}}様</a></li>
<li class="breadcrumb-item"><a href="{{url("/c/".$client->id.'/'.$mise->id)}}">{{$mise->name}}</a></li>
<li class="breadcrumb-item active">料金システム登録</li>
@stop

@section('content')

                <h1 class="h2">料金システム登録</h1>

                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">料金システム登録</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                    </div>
                </div>



@stop