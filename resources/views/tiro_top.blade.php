@extends('common.layout')
@include('common.header')
@include('common.topmenu')
@include('common.pan')

@section('content')

        <h1>tiroトップページ</h1>
        <h2>チーム一覧</h2>
        <table>
            <tr>
                <td></td>
                <td>名前</td>
                <td>権限</td>
                <td>状態</td>
                <!-- <td>メモ</td> -->
        </tr>
            @foreach($teamList as $a)
            <?php 
                $active = $a->active?'アクティブ':'停止中'; 
                $action = $a->active?'stop':'go'; 
                $actionComment = $a->active?'停止':'再開'; 
            ?>
            <tr>
                <td>{{$loop->index+1}}</td>
                <td><a href="{{url('/tiro/nari/'.$a->team)}}">{{$a->name}}</a></td>
                <td>チームオーナー</td>
                <td>{{$active}}</td>
                <!--  
                <td>
                    {{ Form::open(['url' => url('/tiro/editadmin/'.$a->id.'/memo')]) }}
                    {{ Form::text('memo'.$a->id, $a->memo)}}
                    {{ Form::submit('メモ')}}
                    {{ Form::close() }}
                </td>
                -->
                <td><a href="{{url('/tiro/editadmin')}}/{{$a->id}}/{{$action}}">{{$actionComment}}</a></td>
                <td><a href="{{url('/tiro/editadmin')}}/{{$a->id}}/del">削除</a></td>
            </tr>
            @endforeach
        </table>


        <h2>チーム新規作成</h2>
        <p>{!! nl2br(e($error)) !!}</p>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{ Form::open(['url' => url('/tiro/newadmin')]) }}
        {{ Form::hidden('action','insert')}}
        <label>ログインID
        {{ Form::text('login_id', null)}}
        </label>
        </br></br>
        
        <label>パスワード
        {{ Form::text('pass', null)}}
        </label>
        
        </br></br>
        <label>メモ
        {{ Form::text('memo', null)}}
        </label>
        </br></br>

        {{ Form::submit('新規作成')}}
        {{ Form::close() }}

        </br></br>
        <h2>laravelログ参照</h2>
        <a href="{{url('log')}}">ログ</a>　　<a href="{{url('log?action=del')}}">ログ削除</a>




@stop
@include('common.footer')