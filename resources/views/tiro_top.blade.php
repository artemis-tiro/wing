@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')

@section('content')

                <!-- タイトル -->
                <h1 class="h2">tiroトップページ</h1>

                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">チーム一覧</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        {{--
                        {{bcrypt('tiro2222')}}
                        <p>{{password_verify($nowpassword,'dbのpassword')}}</p>
                        --}}
                        <!-- テーブル -->
                        <table class="table table-hover">
                            <thead>
                                <!-- カテゴリ -->
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">ID</th>
                                    <th scope="col">代表者</th>
                                    <th scope="col">状態</th>
                                    {{--<th scope="col">メモ</th>--}}
                                    <!-- ボタンのための空白 -->
                                    <!-- 一般ユーザでは表示しない -->
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($teamList as $a)
                                <?php 
                                    $active = $a->active?'アクティブ':'停止中'; 
                                    $action = $a->active?'stop':'go'; 
                                    $actionComment = $a->active?'停止':'再開'; 
                                ?>

                                <tr>
                                    <td>{{$loop->index+1}}</td>
                                    <td><a href="{{url('/tiro/nari/'.$a->team)}}">{{$a->name}}</a></td>
                                    <td>〇〇さん</td>
                                    <td>{{$active}}</td>
                                    <!--  
                                    <td>
                                        {{ Form::open(['url' => url('/tiro/editadmin/'.$a->id.'/memo')]) }}
                                        {{ Form::text('memo'.$a->id, $a->memo)}}
                                        {{ Form::submit('メモ')}}
                                        {{ Form::close() }}
                                    </td>
                                    -->
                                    <td><a class="btn btn-sm btn-info" href="{{url('/tiro/editadmin')}}/{{$a->id}}/{{$action}}">{{$actionComment}}</a></td>
                                    <td><a class="btn btn-sm btn-danger" href="{{url('/tiro/editadmin')}}/{{$a->id}}/del">削除</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">チーム新規作成</h2>
                    <!-- カードの要素 -->
                    <div class="card-body">
                        @include('common.error')
                        {{ Form::open(['url' => url('/tiro/newadmin'),'class'=>'form-horizontal']) }}
                        {{ Form::hidden('action','insert')}}
                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">ログインID *</div>
                            <div class="col-sm-10">
                                {{ Form::text('login_id', null, ['class'=>'form-control jq_idToPass', 'required'=>'required'])}}
                                <div class="form-text">半角英数字。ユニーク。</div>
                            </div>
                        </label>

                        <label class="row text-nowrap mb-4">
                            <span class="col-sm-2 lh2">パスワード *</span>
                            <div class="col-sm-10">
                                {{ Form::text('pass', null, ['class'=>'form-control pass', 'required'=>'required', 'disabled'=>'disabled'])}}
                                <div class="form-text">初期値はログインIDと同じ。</div>
                            </div>
                        </label>

                        {{ Form::submit('新規作成',["class"=>"m-2 btn btn-info"])}}
                        {{ Form::close() }}
                    </div>
                </div>

                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">laravelログ参照</h2>
                    <!-- カードの要素 -->
                    <div class="card-body">
                        <a  class="m-2 btn btn-info" href="{{url('log')}}">ログ</a>　　<a class="m-2 btn btn-info" href="{{url('log?action=del')}}">ログ削除</a>

                    </div>
                </div>


@stop
@include('common.footer')