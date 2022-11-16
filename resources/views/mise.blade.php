@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{url("/c/".$client->id)}}">{{$client->name}}様</a></li>
<li class="breadcrumb-item active">{{$mise->name}}</li>
@stop

@section('content')

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
                                    <th scope="col">ID</th>
                                    <th scope="col">源氏名</th>
                                    <th scope="col">給料形態</th>
                                    <th scope="col">前回出勤</th>
                                    <th scope="col">当欠率</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($therapistList as $i)
                                <?php 
                                     $level = $i->access_level=='admin'?'管理者':'メンバー'; 
                                     $action2 = $i->access_level=='admin'?'toInputer':'toAdmin'; 
                                     $active = $i->active?'アクティブ':'停止中'; 
                                     $action = $i->active?'stop':'go'; 
                                     $actionComment = $i->active?'停止':'再開'; 
                                ?>

                                <tr>
                                    <th>{{$loop->index+1}}</th>
                                    <td>{{$i->loginId}}</td>
                                    <td><a href="{{url('/c/'.$client->id.'/'.$mise->id.'/'.$i->id)}}">{{$i->business_name}}</a></td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td><a class="btn btn-sm btn-info" href="#">{{$actionComment}}</a></td>
                                    <td><a class="btn btn-sm btn-danger" href="#">削除</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        ※フェーズ2以降追加機能
                        <ul>
                            <li>順番の入れ替え</li>
                            <li>シフト管理</li>
                        </ul>

                    </div>
                </div>

                <div class="card my-4 mb-5">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">セラピスト新規作成</h2>
                    <!-- カードの要素 -->
                    <div class="card-body">
                        @include('common.error')
                        {{ Form::open(['url' => url('/c/'.$client->id.'/'.$mise->id.'/newtherapist'),'class'=>'form-horizontal']) }}
                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">源氏名 *</div>
                            <div class="col-sm-10">
                                {{ Form::text('business_name', null, ['class'=>'form-control jq_idToPass', 'required'=>'required'])}}
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">ログインID *</div>
                            <div class="col-sm-10">
                                {{ Form::text('login_id', null, ['class'=>'form-control jq_idToPass', 'required'=>'required'])}}
                                <div class="form-text">「店名_源氏名」半角英数字、ユニーク。</div>
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4">
                            <span class="col-sm-2 lh2">パスワード *</span>
                            <div class="col-sm-10">
                                {{ Form::text('pass', null, ['class'=>'form-control pass', 'required'=>'required', 'disabled'=>'disabled'])}}
                                <div class="form-text">初期値はログインIDと同じ。</div>
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4">
                            <span class="col-sm-2 lh2">給料形態 *</span>
                            <div class="col-sm-10">
                                {{ Form::text('back_name', 'default', ['class'=>'form-control pass', 'required'=>'required'])}}
                                <div class="form-text">まずはdefault固定です。</div>
                            </div>
                        </label>

                        {{ Form::submit('セラピスト作成',["class"=>"m-2 btn btn-info"])}}
                        {{ Form::close() }}
                    </div>
                </div>

                <div class="card">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">料金システム</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        <div><a class="btn btn-info" href="{{ url()->current() }}/price">料金システム登録</a></div>
                    </div>
                </div>

                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">給料形態一覧</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        
                        <div class="row">
                            <div class="mt-2 col-sm-1 text-end">default</div>
                            <div class="col-sm-1"><a class="btn btn-info" href="{{ url()->current() }}/back/default">編集</a></div>
                        </div>

                        <div class="mt-2 row">
                            @foreach($backList as $b)
                                <div class="mt-2 col-sm-1 text-end">{{ $b }}</div>
                                <div class="col-sm-1"><a class="btn btn-info" href="{{ url()->current() }}/back/{{ $b }}">編集</a></div>
                                <div class="col-sm-1"><a class="btn btn-danger" href="{{ url()->current() }}/back/{{ $b }}/del">削除</a></div>
                            @endforeach
                        </div>
                    
                    </div>
                </div>

                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">給料形態新規作成</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        @if ( !empty($newBackMessage) )
                        <div class="alert alert-info d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                            </svg>
                            <ul>
                                <li>{{$newBackMessage}}</li>
                            </ul>
                        </div>
                        @endif
                        {{ Form::open(['url' => url('/c/'.$client->id.'/'.$mise->id.'/newback'),'class'=>'form-horizontal']) }}
                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">バック名 *</div>
                            <div class="col-sm-10">
                                {{ Form::text('back_name', null, ['class'=>'form-control jq_idToPass', 'required'=>'required'])}}
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">defaultをコピーする</div>
                            <div class="col-sm-10">
                                {{ Form::checkbox('copy', null, true, ['class'=>'form-check-input'])}}
                            </div>
                        </label>
                        {{ Form::submit('バック作成',["class"=>"m-2 btn btn-info"])}}
                        {{ Form::close() }}
                    </div>
                </div>

                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">ルーム一覧</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        ※実装はフェーズ2以降
                        <ul>
                            <li>ポーチ朝一、最終の管理</li>
                            <li>部屋の清掃状況の管理</li>
                            <li>備品管理</li>
                            <li>案内文言の登録</li>
                        </ul>
                    </div>
                </div>

                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">ルーム新規作成</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                    </div>
                </div>



@stop