@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item active" aria-current="page">{{$client->name}}様</li>
@stop

@section('content')

                <h1 class="h2">{{$client->name}}様トップページ</h1>

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
                                     $level = $i->access_level=='admin'?'管理者':'メンバー'; 
                                     $action2 = $i->access_level=='admin'?'toInputer':'toAdmin'; 
                                     $active = $i->active?'アクティブ':'停止中'; 
                                     $action = $i->active?'stop':'go'; 
                                     $actionComment = $i->active?'停止':'再開'; 
                                ?>

                                <tr>
                                    <th>{{$loop->index+1}}</th>
                                    <td><a href="{{url('/admin/inputer/'.$i->id)}}">{{$i->name}}</a></td>
                                    <td>{{$level}}</td>
                                    <td><a class="btn btn-sm btn-info" href="{{url('/admin/editinputer')}}/{{$i->id}}/{{$action2}}">権限切り替え</a></td>
                                    <td>{{$active}}</td>
                                    <!--
                                    <td>
                                        {{ Form::open(['url' => url('/admin/editinputer/'.$i->id.'/memo')]) }}
                                        {{ Form::text('memo'.$i->id, $i->memo)}}
                                        {{ Form::submit('メモ')}}
                                        {{ Form::close() }}
                                    </td>
                                    -->
                                    <td><a class="btn btn-sm btn-info" href="{{url('/admin/editinputer')}}/{{$i->id}}/{{$action}}">{{$actionComment}}</a></td>
                                    <td><a class="btn btn-sm btn-danger" href="{{url('/admin/editinputer')}}/{{$i->id}}/del">削除</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card my-4 mb-5">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">店舗新規作成</h2>
                    <!-- カードの要素 -->
                    <div class="card-body">
                        @include('common.error')
                        {{ Form::open(['url' => url('/client/newmise/'.$client->id),'class'=>'form-horizontal']) }}
                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">店名 *</div>
                            <div class="col-sm-10">
                                {{ Form::text('name', null, ['class'=>'form-control', 'required'=>'required'])}}
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">ヨミガナ</div>
                            <div class="col-sm-10">
                                {{ Form::text('yomi', null, ['class'=>'form-control'])}}
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">地域 *</div>
                            <div class="col-sm-10">
                                {{ Form::text('area', null, ['class'=>'form-control', 'required'=>'required'])}}
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">電話番号 *</div>
                            <div class="col-sm-10">
                                {{ Form::text('tel', null, ['class'=>'form-control', 'required'=>'required'])}}
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">ホームページ *</div>
                            <div class="col-sm-10">
                                {{ Form::text('hp', null, ['class'=>'form-control', 'required'=>'required'])}}
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4">
                            <span class="col-sm-2 lh2">ヒアリングシート *</span>
                            <div class="col-sm-10">
                                {{ Form::textarea('hearing_sheet', null, ['class'=>'form-control', 'required'=>'required'])}}
                            </div>
                        </label>

                        {{ Form::submit('新規作成',["class"=>"m-2 btn btn-info"])}}
                        {{ Form::close() }}
                    </div>
                </div>



@stop