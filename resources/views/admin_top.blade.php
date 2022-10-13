@extends('common.layout')
@include('common.header')
@include('common.topmenu')
@include('common.pan')

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

        <h1>{{$teamName}}トップページ</h1>
        <h2>メンバー一覧</h2>
        <table>
            <tr>
                <td></td>
                <td>名前</td>
                <td>権限</td>
                <td>状態</td>
                <!-- <td>メモ</td> -->
            </tr>
            @foreach($inputerList as $i)
            <?php 
                 $level = $i->access_level=='admin'?'管理者':'メンバー'; 
                 $action2 = $i->access_level=='admin'?'toInputer':'toAdmin'; 
                 $active = $i->active?'アクティブ':'停止中'; 
                 $action = $i->active?'stop':'go'; 
                 $actionComment = $i->active?'停止':'再開'; 
            ?>
            <tr>
                <td>{{$loop->index+1}}</td>
                <td><a href="{{url('/admin/inputer/'.$i->id)}}">{{$i->name}}</a></td>
                <td>{{$level}}</td>
                <td>{{$active}}</td>
                <!--
                <td>
                    {{ Form::open(['url' => url('/admin/editinputer/'.$i->id.'/memo')]) }}
                    {{ Form::text('memo'.$i->id, $i->memo)}}
                    {{ Form::submit('メモ')}}
                    {{ Form::close() }}
                </td>
                -->
                <td><a href="{{url('/admin/editinputer')}}/{{$i->id}}/{{$action}}">{{$actionComment}}</a></td>
                <td><a href="{{url('/admin/editinputer')}}/{{$i->id}}/{{$action2}}">権限切り替え</a></td>
                <td><a href="{{url('/admin/editinputer')}}/{{$i->id}}/del">削除</a></td>
            </tr>
            @endforeach
        </table>


        <h2>メンバー新規作成</h2>
        <p>{!! nl2br(e($newInputerError)) !!}</p>
        {{ Form::open(['url' => url('/admin/newinputer')]) }}
        <label>ログインID
        {{ Form::text('login_id', null)}}
        </label></br>
        
        <label>パスワード
        {{ Form::text('pass', null)}}
        </label></br>

        <label>本名
        {{ Form::text('name', null)}}
        </label></br>
        
        {{ Form::submit('新規作成')}}
        {{ Form::close() }}


        <h2>クライアント一覧</h2>
        <table>
            <tr>
                <td></td>
                <td>代表者</td>
                <td>状態</td>
                <td>店舗数</td>
                <td>メイン店舗</td>
            </tr>
            @foreach($clientList as $c)
            <?php 
                 $level = $c->access_level=='admin'?'管理者':'メンバー'; 
                 $active = $c->active?'アクティブ':'停止中'; 
                 $action = $c->active?'stop':'go'; 
                 $actionComment = $c->active?'停止':'再開'; 
            ?>
            <tr>
                <td>{{$loop->index+1}}</td>
                <td><a href="{{url('/admin/client/'.$i->id)}}">{{$c->name}}</a></td>
                <td>{{$active}}</td>
                <td><a href="{{url('/admin/editclient')}}/{{$c->id}}/{{$action}}">{{$actionComment}}</a></td>
                <td><a href="{{url('/admin/editclient')}}/{{$c->id}}/del">削除</a></td>
            </tr>
            @endforeach
        </table>


        <h2>クライアント新規作成</h2>
        <p>{!! nl2br(e($newClientError)) !!}</p>
        {{ Form::open(['url' => url('/admin/newclient')]) }}
        <label>ログインID
        {{ Form::text('login_id', null)}}
        </label></br>
        
        <label>パスワード
        {{ Form::text('pass', null)}}
        </label></br>

        <label>代表者指名
        {{ Form::text('name', null)}}
        </label></br>
        
        {{ Form::submit('新規作成')}}
        {{ Form::close() }}



@stop
@include('common.footer')