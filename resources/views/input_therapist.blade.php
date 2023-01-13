@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{url("/i")}}">店舗選択</a></li>
<li class="breadcrumb-item active">{{$mise->name}}</li>

@stop

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

                <h1 class="h2">{{$mise->name}}</h1>

                <!-- セラピスト一覧 -->
                <div class="card my-4">
                    <!-- カードのタイトル -->
                    <h2 class="card-header h5">セラピストを選択してください。</h2>
                    <!-- カードの要素 -->
                    <div class="card-body table-responsive text-nowrap">
                        <!-- テーブル -->
                        <table class="table table-hover">
                            <thead>
                                <!-- カテゴリ -->
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">アクティブ</th>
                                    <th scope="col">セラピスト名</th>
                                    <th scope="col">年齢</th>
                                    <th scope="col">バスト</th>
                                    <th scope="col">身長</th>
                                    <th scope="col">給料形態</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($zenTherapistList as $t)
                                    @foreach($shifutoList as $s)
                                    {{--
                                    @php $active = $t->id === $shifutoList->therapist_id? $shifutoList->time: '-' ; @endphp
                                    --}}
                                    
                                    @php $active = $t->id === $s->therapist_id? $s->time: '-' ; @endphp
                                    
                                    {{-- @endforeach --}}
                                    <tr>
                                        <th>{{ $loop->index+1 }}</th>
                                        <!-- <th> active </th> -->
                                        <th>{{ $active }}</th>
                                        <td><a href="{{url('/i/'.$mise->id.'/'.$t->id.'/')}}">{{$t->business_name }}</a></td>
                                        <td>{{ $t->business_age }}</td>
                                        <td>{{ $t->cup }}</td>
                                        <td>{{ $t->tall }}</td>
                                        <td>{{ $t->back_name }}</td>
                                    </tr>
                                    @endforeach
                                    {{-- @endforeach --}}
                                @endforeach
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
                        {!! nl2br(e($mise->hearing_sheet)) !!}
                    </div>
                </div>
@stop