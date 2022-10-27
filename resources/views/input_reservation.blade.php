@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{url("/i")}}">店舗一覧</a></li>
@stop

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

                <h1 class="h2">予約一覧</h1>

                <!-- 予約リスト -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">予約一覧</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        <!-- テーブル -->
                        <table class="table table-hover">
                            <thead>
                                <!-- カテゴリ -->
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">ステータス</th>
                                    <th scope="col">時間</th>
                                    <th scope="col">コース</th>
                                    <th scope="col">指名</th>
                                    <th scope="col">顧客名</th>
                                    <th scope="col">電話番号</th>
                                    <th scope="col">顧客名</th>
                                    <th scope="col">顧客名</th>
                                </tr>
                            </thead>
                            <!-- <tbody>
                                {{-- @foreach($zenMiseList as $i) --}}
                                <tr>
                                    {{-- <th>{{$loop->index+1}}</th> --}}
                                    {{-- <td><a href="{{url('/admin/inputer/'.$i->id)}}">{{$i->name}}</a></td> --}}
                                    {{-- <td>{{$i->area}}</td> --}}
                                    <td>5人</a></td>
                                    <td>3人</a></td>
                                    <td>2人</a></td>
                                </tr>
                                {{-- @endforeach --}}
                            </tbody> -->

                            <tbody>
                                <tr>
                                <th scope="row">接客終了</th>
                                <td>13:00~15:30</td>
                                <td>90分</td>
                                <td>本指名</td>
                                <td>吉田様</td>
                                <td>09087459966</td>
                                <td><a href="#" class="btn btn-sm btn-info">修正</a></td>
                                <td><a href="#" class="btn btn-sm btn-danger">削除</a></td>
                                </tr>
                                <tr>
                                <th scope="row">接客終了</th>
                                <td>15:50~17:20</td>
                                <td>90分</td>
                                <td>本指名</td>
                                <td>吉田様</td>
                                <td>09087459966</td>
                                <td><a href="#" class="btn btn-sm btn-info">修正</a></td>
                                <td><a href="#" class="btn btn-sm btn-danger">削除</a></td>
                                </tr>
                                <tr>
                                <th scope="row">接客中</th>
                                <td>17:40~18:40</td>
                                <td>60分</td>
                                <td>本指名</td>
                                <td>吉田様</td>
                                <td>09087459966</td>
                                <td><a href="#" class="btn btn-sm btn-info">修正</a></td>
                                <td><a href="#" class="btn btn-sm btn-danger">削除</a></td>
                                </tr>
                            </tbody>


                        </table>
                    </div>
                </div>

                <!-- コピペ用 -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">コピペ用</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        {{-- {{ Form::textarea('copy', ['class'=>'form-style'])}} --}}
                    </div>
                </div>

                <!-- 予約フォーム -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">予約フォーム</h2>

                    <!-- カードの要素 -->
                    <div class="card-body">

                    <!-- フォームの開始 -->
                    {{ Form::open(['url' => url('/mypage/reservation')]) }}

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- 開始時間 -->
                    <div class="row">
                        <div class="col-auto">
                            <h6 class="ml-3">開始日時</h6>
                        </div>
                        <div class="col-auto form-check">
                            {{-- {{ Form::radio('todaytime', ['class'=>'form-check-input'])}} --}}

                            <label for="">本日</label>
                        </div>
                        <div class="col-auto form-check">
                            {{-- {{ Form::radio('anytime', ['class'=>'form-check-input'])}} --}}
                            
                            {{-- {{ Form::text('anydays', ['class'=>'form-check-input'])}} --}}
                            

                        </div>
                        <div class="col-auto form-check">
                            <label for="">時間</label>
                            {{-- {{ Form::text('time', ['class'=>'form-check-input'])}} --}}
                            
                        </div>
                    </div>

                    <!-- 顧客名 -->
                    <div class="row">
                        <div class="col-auto">
                            <h6 class="ml-3">顧客名</h6>
                        </div>
                        <div class="col-auto form-check">                      
                            {{-- {{ Form::text('clientname', ['class'=>'form-check-input' , 'placeholder'=>'山田太郎'])}} --}}
                            
                            
                        </div>
                    </div>

                    <!-- 電話番号 -->
                    <div class="row">
                        <div class="col-auto">
                            <h6 class="ml-3">電話番号</h6>
                        </div>
                        <div class="col-auto form-check">    
                            {{-- {{ Form::text('name', ['class'=>'form-style', 'placeholder'=>'09077973244'])}} --}}
                            

                        </div>
                    </div>

                    <!-- メール -->
                    <div class="row">
                        <div class="col-auto">
                            <h6 class="ml-3">Email</h6>
                        </div>
                        <div class="ml-4 col-auto form-check">
                            {{-- {{ Form::text('Email', ['class'=>'form-style', 'placeholder'=>'oooo@pppp'])}} --}}
                            

                        </div>
                    </div>

                    <!-- 来店 -->
                    <div class="row">
                        <div class="col-auto">
                            <h6 class="ml-3">来店</h6>
                        </div>
                        <div class="col-auto form-check">
                            {{-- {{ Form::radio('newguest', ['class'=>'form-style']) }} --}}
                            

                            <label for="">新規</label>
                        </div>
                        <div class="col-auto form-check">
                            {{-- {{ Form::radio('repeater', ['class'=>'form-style']) }} --}}
                            

                            <label for="">リピーター</label>
                        </div>
                    </div>

                    <!-- コース -->
                    <div class="row">
                        <div class="col-auto">
                            <h6 class="ml-3">コース</h6>
                        </div>
                        <div class="ml-3 col-auto form-check">
                            {{-- {{ Form::radio('normal', ['class'=>'form-style']) }} --}}
                            

                            <label for="">ノーマル</label>
                        </div>
                        <div class="col-auto form-check">
                            {{-- {{ Form::radio('executive', ['class'=>'form-style']) }} --}}
                            

                            <label for="">エグゼクティブ</label>
                        </div>
                    </div>

                    <!-- 時間 -->
                    <div class="row">
                        <div class="col-auto">
                            <h6 class="ml-3">時間</h6>
                        </div>
                        <div class="col-auto form-check">
                            {{-- {{ Form::radio('course1', ['class'=>'form-style']) }} --}}
                            

                            <label for="">60分</label>
                        </div>
                        <div class="col-auto form-check">
                            {{-- {{ Form::radio('course2', ['class'=>'form-style']) }} --}}
                            

                            <label for="">90分</label>
                        </div>
                        <div class="col-auto form-check">
                            {{-- {{ Form::radio('course3', ['class'=>'form-style']) }} --}}
                            

                            <label for="">120分</label>
                        </div>
                        <div class="col-auto form-check">
                            {{-- {{ Form::radio('course4', ['class'=>'form-style']) }} --}}
                            

                            <label for="">150分</label>
                        </div>
                        <div class="col-auto form-check">
                            {{-- {{ Form::radio('course5', ['class'=>'form-style']) }} --}}
                            

                            <label for="">180分</label>
                        </div>
                    </div>

                    <!-- 自動割引 -->
                    <div class="row">
                        <div class="col-auto">
                            <h6 class="ml-3">自動割引</h6>
                        </div>
                        <div class="col-auto">
                            <label for="">-2000円(全コース2000円オフ)</label>
                        </div>
                    </div>

                    <!-- 指名 -->
                    <div class="row">
                        <div class="col-auto">
                            <h6 class="ml-3">指名</h6>
                        </div>
                        <div class="col-auto form-check">
                            {{-- {{ Form::radio('choose', ['class'=>'form-style']) }} --}}

                            <label for="">本指名</label>
                        </div>
                        <div class="col-auto form-check">
                            {{-- {{ Form::radio('netchoose', ['class'=>'form-style']) }} --}}
                            

                            <label for="">ネット指名</label>
                        </div>
                        <div class="col-auto form-check">
                            {{-- {{ Form::radio('free', ['class'=>'form-style']) }} --}}
                            

                            <label for="">フリー</label>
                        </div>
                    </div>

                    <!-- オプション -->
                    <div class="row">
                        <div class="col-auto">
                            <h6 class="ml-3">オプション</h6>
                        </div>
                        <div class="ml-3 col-auto form-check">
                            {{-- {{ Form::radio('option1', ['class'=>'form-style']) }} --}}
                            

                            <label for="">DR</label>
                        </div>
                        <div class="col-auto form-check">
                            {{-- {{ Form::radio('option2', ['class'=>'form-style']) }} --}}
                            

                            <label for="">衣装</label>
                        </div> 
                        <div class="ml-3 col-auto form-check">
                            {{-- {{ Form::radio('option3', ['class'=>'form-style']) }} --}}
                            

                            <label for="">MB</label>
                        </div>
                        <div class="col-auto form-check">
                            {{-- {{ Form::radio('option4', ['class'=>'form-style']) }} --}}
                            

                            <label for="">オイル</label>
                        </div>
                        <div class="ml-3 col-auto form-check">
                            {{-- {{ Form::radio('option5', ['class'=>'form-style']) }} --}}
                            

                            <label for="">ヘッドスパ</label>
                        </div>

                    </div>

                    <!-- 追加割引 -->
                    <div class="row">
                        <div class="col-auto">
                            <h6 class="ml-3">追加割引</h6>
                        </div>
                        <div class="col-auto form-check">
                            {{-- {{ Form::text('maney', ['class'=>'form-style', 'placeholder'=>'金額']) }} -- }}

                            <label for="">円</label>

                            {{-- {{ Form::text('cause', ['class'=>'form-style', 'placeholder'=>'理由']) }} -- }}

                        </div>
                    </div>

                    <!-- メモ -->
                    <div class="row">
                        <div class="col-auto">
                            <h6 class="ml-3">メモ</h6>
                        </div>
                        <div class="ml-4 col-auto">
                            {{-- {{ Form::text('memo', ['class'=>'form-style', 'placeholder'=>'その他']) }} --}}

                        </div>
                    </div>

                    <!-- 送信ボタン -->
                    {{ Form::submit('新規予約',["class"=>"m-2 btn btn-info"])}}

                    <!-- フォームの終わり -->
                    {{ Form::close() }}
                    </div>
                </div>
                



@stop