@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')

@section('pan2')
<li class="breadcrumb-item active" aria-current="page">セラピスト一覧</li>
@stop

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

                <h1 class="h2">セラピスト一覧</h1>

                <!-- セラピスト一覧 -->
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
                                    <th scope="col">セラピスト名</th>
                                    <th scope="col">給料形態</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <!-- <tbody>
                                {{-- @foreach($  List as $i) --}}
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
                                    <th scope="row"><a href="reservation.php"><span class="ml-2">片瀬えま</span></a></th>
                                    <td>VIP1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="#" class="btn btn-sm btn-info">修正</a></td>
                                    <td><a href="#" class="btn btn-sm btn-danger">削除</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#"><span class="ml-2">紫咲かほ</span></a></th>
                                    <td>VIP2</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="#" class="btn btn-sm btn-info">修正</a></td>
                                    <td><a href="#" class="btn btn-sm btn-danger">削除</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#"><span class="ml-2">酒井なつ</span></th>
                                    <td>デフォルト</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="#" class="btn btn-sm btn-info">修正</a></td>
                                    <td><a href="#" class="btn btn-sm btn-danger">削除</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#"><span class="ml-2">丸山かえで</span></th>
                                    <td>デフォルト</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="#" class="btn btn-sm btn-info">修正</a></td>
                                    <td><a href="#" class="btn btn-sm btn-danger">削除</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#"><span class="ml-2">設楽ひな</span></th>
                                    <td>VIP1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="#" class="btn btn-sm btn-info">修正</a></td>
                                    <td><a href="#" class="btn btn-sm btn-danger">削除</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#"><span class="ml-2">七瀬ありす</span></th>
                                    <td>デフォルト</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="#" class="btn btn-sm btn-info">修正</a></td>
                                    <td><a href="#" class="btn btn-sm btn-danger">削除</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#"><span class="ml-2">村上まい</span></th>
                                    <td>デフォルト</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="#" class="btn btn-sm btn-info">修正</a></td>
                                    <td><a href="#" class="btn btn-sm btn-danger">削除</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#"><span class="ml-2">立花きこ</span></th>
                                    <td>デフォルト</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="#" class="btn btn-sm btn-info">修正</a></td>
                                    <td><a href="#" class="btn btn-sm btn-danger">削除</a></td>
                                </tr>
                                <tr>
                                    <th scope="row"><a href="#"><span class="ml-2">本多さつき</span></th>
                                    <td>研修中</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><a href="#" class="btn btn-sm btn-info">修正</a></td>
                                    <td><a href="#" class="btn btn-sm btn-danger">削除</a></td>
                                </tr>
                                </tbody>


                        </table>
                    </div>
                </div>

                <!-- ヒアリングシート -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">ヒアリングシート</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                    {{-- {{ Form::textarea('copy', ['class'=>'form-style'])}} --}}
                    </div>
                </div>



@stop