@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item active">パスワードリセット</li>
@stop

@section('content')

                <h1 class="h2">パスワードリセット</h1>

                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">パスワードリセット</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        ログインIDを入力して下さい。<br>
                        パスワードがログインIDにリセットされます。<br>
                        @if ( !empty($mes) )
                        <br><br>
                        <div class="alert alert-info d-flex align-items-center" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                            </svg>
                            {{$mes}}
                        </div>
                        @endif
                        <br><br>

                        {{ Form::open(['url' => url()->current(),'class'=>'form-horizontal']) }}
                        <label class="row text-nowrap mb-4 text-end">
                            <div class="col-sm-2 lh2 text-end">ログインID *</div>
                            <div class="col-sm-10">
                                {{ Form::text('login_id', null, ['class'=>'form-control', 'autocomplete'=>'off', 'required'=>'required']) }}
                            </div>
                        </label>

                        {{ Form::submit('パスワードリセット',["class"=>"m-2 btn btn-info"]) }}
                        {{ Form::close() }}

                    </div>
                </div>


@stop