@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
<li class="breadcrumb-item"><a href="{{ url("/i") }}">店舗一覧</a></li>
<li class="breadcrumb-item"><a href="{{ url("/i/".$mise->id) }}">{{ $mise->name }}</a></li>
<li class="breadcrumb-item active">{{ $therapist->business_name }} さん</li>
@stop

@section('content')
<?php 
    $teamName = App\Models\user::teamName(auth()->user()->team);
?>

<h1 class="h2">{{ $therapist->business_name }}さんスケジュール</h1>


@include('common.validator')
@include('common.error')
@include('common.success')


<!-- 予約リスト -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">予約一覧</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        @if(count($yoyakuList) != 0)
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
                    <!-- 編集/削除ボタン -->
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($yoyakuList  as $y)
                <tr>
                    <th>{{ $loop->index+1 }}</th>

                    <!-- 現在時間がコース時間内の場合「施術中」 -->
                    <!-- 現在時間がコース時間後の場合「完了」 -->
                    <!-- 現在時間がコース時間前の場合「予約」 -->
                    @if(date('Y-m-d H:i:s') >= $y->visit_day && date('Y-m-d H:i:s') <= date('Y-m-d H:i:s',strtotime(" $y->visit_day +$y->courseTime min +5 min")))
                        <td class="text-info">施術中</td>
                    @elseif(date('Y-m-d H:i:s') > $y->visit_day)
                        <td class="text-black-50">完了</td>
                    @elseif(date('Y-m-d H:i:s') < $y->visit_day)
                        <td>予約</td>
                    @endif

                    <!-- 終了時間を来店日時＋コース時間で表示 -->
                    <td>
                        {{ \Carbon\Carbon::createFromTimeString($y->visit_day)->format('m/d H:i') }} ~ 
                        {{ date('H:i',strtotime(" $y->visit_day +$y->courseTime min")) }}
                    </td>

                    <!-- priceテーブル作成まで仮 -->
                    <td>{{ $y->courseName }}</td>
                        
                    <td>{{ $y->courseShimei }}</td>

                    <td><a href="{{ url('/k/'.$mise->id.'/'.$y->kokyaku_id.'/') }}">{{ $kokyakuList[$y->kokyaku_id]->name }}</a> 様</td>

                    <td>{{ $y->phone }}</td>

                    @php $kome = $y->option != null? '': '※'; @endphp
                    <td><a class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#yoyakuOptionModal{{ $y->id }}">オプション{{ $kome }}</a></td>
                    <td><a class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#yoyakuEditModal{{ $y->id }}">編集</a></td>
                    <td>
                        @component('componets.modal')
                            @slot('type', 'del')
                            @slot('name', '予約')
                            @slot('id', $y->id)
                            @slot('text', "本当に削除しますか。")
                            @slot('url', url('/i/'.$mise->id.'/'.$therapist->id.'/'.$y->id.'/del'))
                        @endcomponent
                    </td>
                    @if($enchoList)
                    <td><a class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#yoyakuEnchoModal{{ $y->id }}">延長</a></td>
                    @endif

                </tr>
                                
                <!-- モーダル設定 -->
                <!-- オプションボタン -->
                <div class="modal fade" id="yoyakuOptionModal{{ $y->id }}" tabindex="-1" aria-labelledby="yoyakuOptionModal{{ $y->id }}" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            
                            <!-- モーダルのヘッダー -->
                            <div class="modal-header">
                                <!-- モーダルタイトル -->
                                <h1 class="modal-title h4" id="yoyakuOptionModal{{ $y->id }}Label">オプション選択</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                            </div>

                            <!-- フォームの開始 -->
                            {{ Form::open(['url' => url('/i/'.$mise->id.'/'.$therapist->id.'/'.$y->id.'/yoyakuoption')]) }}
                            {{ Form::hidden('yoyakuId', $y->id) }}
                            
                            <!-- モーダルの内容 -->
                            <div class="modal-body">

                                <!-- オプション -->
                                <div class="row text-nowrap mb-2 text-end">
                                    <div class="col-sm-3 text-end">オプション<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                                    
                                    @foreach($optionList  as $o)
                                        @php $check = $y->optionId == $o->id? true: false; @endphp
                                        @if($loop->index != 0)
                                <div class="row text-nowrap mb-2 text-end">
                                            <!-- 項目の場所合わせ -->
                                            <div class="col-sm-3"></div>
                                        @endif
                                            <label class="col-sm-3">
                                                {{ Form::radio('optionEx', $o->id, $check, ['class'=>'form-check-input', 'required']) }}
                                                {{ $o->name }}
                                            </label>
                                            <label class="col-sm-2">
                                                <span class="mx-2 badge rounded-pill bg-info">{{ number_format($o->price) }}円</span>
                                            </label>
                                </div>
                                    @endforeach
                                <div class="row text-nowrap mt-2 text-end">
                                    <!-- 項目の場所合わせ -->
                                    <div class="col-sm-3"></div>

                                    <label class="col-sm-3">
                                        @php $OPnothing = $y->optionId? false: true; @endphp
                                        {{ Form::radio('optionEx', null, $OPnothing, ['class'=>'form-check-input', 'required']) }}
                                        オプション無し
                                    </label>
                                    <label class="col-sm-2">
                                        <span class="mx-2 badge rounded-pill bg-info">0円</span>
                                    </label>
                                </div>
                            </div>

                            <!-- モーダルのフッター -->
                            <div class="modal-footer">

                                <!-- 各ボタン -->
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                                {{ Form::submit('更新',["class"=>"btn btn-info"])}}

                            </div>

                            <!-- フォームの終わり -->
                            {{ Form::close() }}

                        </div>
                    </div>
                </div>

                <!-- 編集ボタン -->
                <div class="modal fade" id="yoyakuEditModal{{ $y->id }}" tabindex="-1" aria-labelledby="yoyakuEditModal{{ $y->id }}" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            
                            <!-- モーダルのヘッダー -->
                            <div class="modal-header">
                                <!-- モーダルタイトル -->
                                <h1 class="modal-title h4" id="yoyakuEditModal{{ $y->id }}Label">予約編集</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                            </div>

                            <!-- フォームの開始 -->
                            {{ Form::open(['url' => url('/i/'.$mise->id.'/'.$therapist->id.'/'.$y->id.'/yoyakuedit')]) }}
                            {{ Form::hidden('yoyakuId', $y->id) }}
                            
                            <!-- モーダルの内容 -->
                            <div class="modal-body">

                                <!-- コース -->
                                <div class="row text-nowrap mb-2 text-end">
                                    <div class="col-sm-3 text-end">コース<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                                    
                                    @foreach($courseList  as $c)
                                        @php $check = $y->courseId == $c->id? true: false; @endphp
                                        @if($loop->index != 0)
                                <div class="row text-nowrap mb-2 text-end">
                                            <!-- 項目の場所合わせ -->
                                            <div class="col-sm-3"></div>
                                        @endif
                                
                                            <label class="col-sm-3">
                                                {{ Form::radio('courseEx', $c->id, $check, ['class'=>'form-check-input', 'required']) }}
                                                {{ $c->name }}
                                            </label>
                                            <label class="col-sm-2">
                                                <span class="mx-2 badge rounded-pill bg-info">{{ number_format($c->price) }}円</span>
                                            </label>
                                </div>
                                    @endforeach

                                <!-- 指名 -->
                                <div class="row text-nowrap mb-2 text-end">
                                    <div class="col-sm-3 text-end">指名<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                                    
                                    @foreach($shimeiList  as $s)
                                        @php $check = $y->shimeiId == $s->id? true: false; @endphp
                                        @if($loop->index != 0)
                                <div class="row text-nowrap mb-2 text-end">
                                            <!-- 項目の場所合わせ -->
                                            <div class="col-sm-3"></div>
                                        @endif

                                            <label class="col-sm-3">
                                                {{ Form::radio('shimeiEx', $s->id, $check, ['class'=>'form-check-input', 'required']) }}
                                                {{ $s->name }}
                                            </label>
                                            <label class="col-sm-2">
                                                <span class="mx-2 badge rounded-pill bg-info">{{ number_format($s->price) }}円</span>
                                            </label>
                                </div>
                                    @endforeach

                                <!-- 追加割引 -->
                                <div class="row text-nowrap mb-2 text-end">
                                    <div class="col-sm-3 text-end">追加割引<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                                    @foreach($waribikiList  as $w)
                                        @php $check = $y->waribikiId == $w->id? true: false; @endphp
                                        @if($loop->index != 0)
                                    <div class="row text-nowrap mb-2 text-end">
                                            <!-- 項目の場所合わせ -->
                                            <div class="col-sm-3"></div>
                                        @endif
                                            <label class="col-sm-3">
                                                {{ Form::radio('waribikiEx', $w->id, $check, ['class'=>'form-check-input', 'required']) }}
                                                {{ $w->name }}
                                            </label>
                                            <label class="col-sm-2">
                                                <span class="mx-2 badge rounded-pill bg-danger">{{ number_format($w->price) }}円</span>
                                            </label>
                                </div>
                                    @endforeach
                                <div class="row text-nowrap mt-2 text-end">
                                    <!-- 項目の場所合わせ -->
                                    <div class="col-sm-3"></div>

                                    <label class="col-sm-3">
                                        @php $WAnothing = $y->waribikiId == $w->id? false: true; @endphp
                                        {{ Form::radio('waribikiEx', null, $WAnothing, ['class'=>'form-check-input', 'required']) }}
                                        割引無し
                                    </label>
                                    <label class="col-sm-2">
                                        <span class="mx-2 badge rounded-pill bg-danger">0円</span>
                                    </label>
                                </div>

                                <!-- メモ -->
                                <div class="row text-nowrap mt-2 text-end">
                                    <div class="col-sm-3 text-end">メモ<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                                    <label class="col-sm-6">
                                        {{ Form::textarea('memoEx', null, ['rows'=>4, 'class'=>'form-control']) }}
                                    </label>
                            </div>

                            <!-- モーダルのフッター -->
                            <div class="modal-footer">

                                <!-- 各ボタン -->
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                                {{ Form::submit('更新',["class"=>"btn btn-info"])}}

                            </div>

                            <!-- フォームの終わり -->
                            {{ Form::close() }}

                        </div>
                    </div>
                </div>

                <!-- 延長ボタン -->
                <div class="modal fade" id="yoyakuEnchoModal{{ $y->id }}" tabindex="-1" aria-labelledby="yoyakuEnchoModal{{ $y->id }}" data-bs-backdrop="static">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            
                            <!-- モーダルのヘッダー -->
                            <div class="modal-header">
                                <!-- モーダルタイトル -->
                                <h1 class="modal-title h4" id="yoyakuEnchoModal{{ $y->id }}Label">延長・オプション入力</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                            </div>

                            <!-- フォームの開始 -->
                            {{ Form::open(['url' => url('/i/'.$mise->id.'/'.$therapist->id.'/'.$y->id.'/yoyakuencho')]) }}
                            {{ Form::hidden('yoyakuId', $y->id) }}
                            
                            <!-- モーダルの内容 -->
                            <div class="modal-body">

                                <!-- 延長 -->
                                <div class="row text-nowrap text-end">
                                    <div class="col-sm-3 text-end">延長<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                                    
                                    @if($enchoList)
                                        @foreach($enchoList  as $e)
                                            @php $check = $y->enchoId == $e->id? true: false; @endphp
                                            @if($loop->index != 0)
                                <div class="row text-nowrap mt-2 text-end radio_course">
                                                <!-- 項目の場所合わせ -->
                                                <div class="col-sm-3"></div>
                                            @endif
                                    
                                                <label class="col-sm-3">
                                                    {{ Form::radio('courseEx', $e->id, $check, ['class'=>'form-check-input', 'required']) }}
                                                    {{ $e->name }}
                                                </label>
                                                <label class="col-sm-2">
                                                    <span class="mx-2 badge rounded-pill bg-info">{{ number_format($e->price) }}円</span>
                                                </label>
                                                ×
                                                <div class="col-sm-2">
                                                    @php $cnt = $y->enchoId == $e->id? $y->enchoCnt: null; @endphp
                                                    {{ Form::number('courseExCnt'.$e->id, $cnt, ['class'=>'form-control', "placeholder"=>"1", 'autocomplete'=>'off']) }}
                                                </div>
                                </div>
                                        @endforeach
                                    @endif
                                <div class="row text-nowrap mt-2 text-end radio_course">
                                    <!-- 項目の場所合わせ -->
                                    <div class="col-sm-3"></div>

                                    <label class="col-sm-3">
                                        @php $Enothing = $y->enchoId? false: true; @endphp
                                        {{ Form::radio('courseEx', null, $Enothing, ['class'=>'form-check-input', 'required']) }}
                                        延長無し
                                    </label>
                                    <label class="col-sm-2">
                                        <span class="mx-2 badge rounded-pill bg-info">0円</span>
                                    </label>
                                </div>
                            </div>

                            <!-- モーダルのフッター -->
                            <div class="modal-footer">

                                <!-- 各ボタン -->
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                                {{ Form::submit('更新',["class"=>"btn btn-info"])}}

                            </div>

                            <!-- フォームの終わり -->
                            {{ Form::close() }}

                        </div>
                    </div>
                </div>
                
                @if($y->memo != null)
                    <tr>
                        <td></td>
                        <td></td>
                        <td colspan="9"><span class="text-danger">{{ $y->memo }}</span></td>
                    </tr>
                @endif
                @endforeach
            </tbody>

            
        </table>   
        @else
            <h2>※予約がありません</h2>
        @endif                     

        <!-- 直接営業の場合 -->
        @if($getOption->name === 'therapist')
            @if($optionfind)
                <a class="m-2 btn btn-info" href="{{ url('/i/'.$mise->id.'/'.$therapist->id.'/kyuryo') }}" >給料計算へ</a>
                <a class="m-2 btn btn-secondary" href="{{ url('/i/'.$mise->id.'/'.$therapist->id.'/befor') }}" >過去の予約</a>
                <a class="m-2 btn btn-dark" href="{{ url('/i/'.$mise->id) }}" >戻る</a>
            @else
                <a class="m-2 btn btn-info disabled" href="{{ url('/i/'.$mise->id.'/'.$therapist->id.'/kyuryo') }}" disabled>給料計算へ</a>
                <a class="m-2 btn btn-secondary" href="{{ url('/i/'.$mise->id.'/'.$therapist->id.'/befor') }}" >過去の予約</a>
                <a class="m-2 btn btn-dark" href="{{ url('/i/'.$mise->id) }}" >戻る</a>
                <label class="text-danger">※オプションを選択してください</label>
            @endif
        @else
            <a class="m-2 btn btn-info" href="{{ url('/i/'.$mise->id.'/'.$therapist->id.'/kyuryo') }}" >給料計算へ</a>
            <a class="m-2 btn btn-secondary" href="{{ url('/i/'.$mise->id.'/'.$therapist->id.'/befor') }}" >過去の予約</a>
            <a class="m-2 btn btn-dark" href="{{ url('/i/'.$mise->id) }}" >戻る</a>
        @endif
        
    </div>
</div>

<!-- 先行予約リスト -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">予約一覧(翌日以降)</h2>
    <!-- カードの要素 -->
    <div class="card-body table-responsive text-nowrap">
        @if(count($yoyakuAfterList) != 0)
            <!-- テーブル -->
            <table class="table table-hover">
                <thead>
                    <!-- カテゴリ -->
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">時間</th>
                        <th scope="col">コース</th>
                        <th scope="col">指名</th>
                        <th scope="col">顧客名</th>
                        <th scope="col">電話番号</th>
                        <!-- 編集/削除ボタン -->
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($yoyakuAfterList  as $ya)
                    <tr>
                        <th>{{ $loop->index+1 }}</th>

                        <!-- 終了時間を来店日時＋コース時間で表示 -->
                        <td>
                            {{ \Carbon\Carbon::createFromTimeString($ya->visit_day)->format('m/d H:i') }} ~ 
                            {{ date('H:i',strtotime(" $ya->visit_day +$ya->courseTime min ")) }}
                        </td>

                        <!-- priceテーブル作成まで仮 -->
                        <td>{{ $ya->courseName }}</td>
                            
                        <td>{{ $ya->courseShimei }}</td>

                        @if($accesslevel != 'therapist')
                            <td><a href="{{ url('/k/'.$mise->id.'/'.$y->kokyaku_id.'/') }}">{{ $kokyakuList[$y->kokyaku_id]->name }}</a> 様</td>
                        @else
                            <td>{{ $kokyakuList[$y->kokyaku_id]->name }} 様</td>
                        @endif
                        
                        <td>
                            @if($accesslevel != 'therapist')
                                {{ $y->phone }}
                            @else
                                {{ substr($kokyakuList[$ya->kokyaku_id]->tel, -4, 4) }}
                            @endif
                        </td>
                        <td><a class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#yoyakuAfterEditModal{{ $ya->id }}">編集</a></td>
                        <td>
                            @component('componets.modal')
                                @slot('type', 'del')
                                @slot('name', '予約')
                                @slot('id', $ya->id)
                                @slot('text', "本当に削除しますか。")
                                @slot('url', url('/i/'.$mise->id.'/'.$therapist->id.'/'.$ya->id.'/del'))
                            @endcomponent
                        </td>
                    </tr>
                    
                    <!-- モーダル設定 -->
                    <!-- 編集ボタン -->
                    <div class="modal fade" id="yoyakuAfterEditModal{{ $ya->id }}" tabindex="-1" aria-labelledby="yoyakuAfterEditModal{{ $ya->id }}" data-bs-backdrop="static">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                
                                <!-- モーダルのヘッダー -->
                                <div class="modal-header">
                                    <!-- モーダルタイトル -->
                                    <h1 class="modal-title h4" id="yoyakuAfterEditModal{{ $ya->id }}Label">予約編集</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                                </div>

                                <!-- フォームの開始 -->
                                {{ Form::open(['url' => url('/i/'.$mise->id.'/'.$therapist->id.'/'.$ya->id.'/yoyakuedit')]) }}
                                {{ Form::hidden('yoyakuId', $ya->id) }}
                                
                                <!-- モーダルの内容 -->
                                <div class="modal-body">

                                    <!-- コース -->
                                    <div class="row text-nowrap mb-2 text-end">
                                        <div class="col-sm-3 text-end">コース<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                                        
                                        @foreach($courseList  as $c)
                                            @php $check = $ya->courseId == $c->id? true: false; @endphp
                                            @if($loop->index != 0)
                                    <div class="row text-nowrap mb-2 text-end">
                                                <!-- 項目の場所合わせ -->
                                                <div class="col-sm-3"></div>
                                            @endif
                                    
                                                <label class="col-sm-3">
                                                    {{ Form::radio('courseEx', $c->id, $check, ['class'=>'form-check-input', 'required']) }}
                                                    {{ $c->name }}
                                                </label>
                                                <label class="col-sm-2">
                                                    <span class="mx-2 badge rounded-pill bg-info">{{ number_format($c->price) }}円</span>
                                                </label>
                                    </div>
                                        @endforeach

                                    <!-- 指名 -->
                                    <div class="row text-nowrap mb-2 text-end">
                                        <div class="col-sm-3 text-end">指名<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                                        
                                        @foreach($shimeiList  as $s)
                                            @php $check = $ya->shimeiId == $s->id? true: false; @endphp
                                            @if($loop->index != 0)
                                    <div class="row text-nowrap mb-2 text-end">
                                                <!-- 項目の場所合わせ -->
                                                <div class="col-sm-3"></div>
                                            @endif

                                                <label class="col-sm-3">
                                                    {{ Form::radio('shimeiEx', $s->id, $check, ['class'=>'form-check-input', 'required']) }}
                                                    {{ $s->name }}
                                                </label>
                                                <label class="col-sm-2">
                                                    <span class="mx-2 badge rounded-pill bg-info">{{ number_format($s->price) }}円</span>
                                                </label>
                                    </div>
                                        @endforeach

                                    <!-- 追加割引 -->
                                    <div class="row text-nowrap mb-2 text-end">
                                        <div class="col-sm-3 text-end">追加割引<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
                                        @foreach($waribikiList  as $w)
                                            @php $check = $ya->waribikiId == $w->id? true: false; @endphp
                                            @if($loop->index != 0)
                                        <div class="row text-nowrap mb-2 text-end">
                                                <!-- 項目の場所合わせ -->
                                                <div class="col-sm-3"></div>
                                            @endif
                                                <label class="col-sm-3">
                                                    {{ Form::radio('waribikiEx', $w->id, $check, ['class'=>'form-check-input', 'required']) }}
                                                    {{ $w->name }}
                                                </label>
                                                <label class="col-sm-2">
                                                    <span class="mx-2 badge rounded-pill bg-danger">{{ number_format($w->price) }}円</span>
                                                </label>
                                    </div>
                                        @endforeach
                                    <div class="row text-nowrap mt-2 text-end">
                                        <!-- 項目の場所合わせ -->
                                        <div class="col-sm-3"></div>

                                        <label class="col-sm-3">
                                            @php $WAnothing = $ya->waribikiId == $w->id? false: true; @endphp
                                            {{ Form::radio('waribikiEx', null, $WAnothing, ['class'=>'form-check-input', 'required']) }}
                                            割引無し
                                        </label>
                                        <label class="col-sm-2">
                                            <span class="mx-2 badge rounded-pill bg-danger">0円</span>
                                        </label>
                                    </div>
                                </div>

                                <!-- モーダルのフッター -->
                                <div class="modal-footer">

                                    <!-- 各ボタン -->
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
                                    {{ Form::submit('更新',["class"=>"btn btn-info"])}}

                                </div>

                                <!-- フォームの終わり -->
                                {{ Form::close() }}

                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        @else
            <h2>※予約がありません</h2>
        @endif
    </div>
</div>

<!-- コピペ用 -->
@if(count($yoyakuList) != 0)
    <div class="card my-4">
        <!-- カードのタイトル -->
        <h2 class="card-header h5">コピペ用</h2>
        <!-- カードの要素 -->
        <div class="card-body table-responsive text-nowrap">
            @foreach($yoyakuList  as $y)
                <span>{{ $loop->index+1 }}</span>
                
                <!-- 指名 -->
                <span>{{ $y->courseShimei }}</span>

                <!-- コース -->
                <span>{{ $y->courseName }}</span>

                <!-- お客様名 -->
                <span>{{ $kokyakuList[$y->kokyaku_id]->name.' 様' }}</span>

                <!-- 発生料金 -->
                <span>合計 {{ $y->totalPrice }}円</span>

                <!-- 予約時間 -->
                <span>
                    {{ \Carbon\Carbon::createFromTimeString($y->visit_day)->format('H:i') }} ~ 
                    {{ date('H:i',strtotime(" $y->visit_day +$y->courseTime min ")) }}
                </span>

                <br>
                <br>
            @endforeach
        </div>
    </div>
@endif

<!-- 予約フォーム -->
<div class="card my-4">
    <!-- カードのタイトル -->
    <h2 class="card-header h5">予約フォーム <span class="text-danger">{{ $ng }}</span></h2>

    <!-- カードの要素 -->
    <div class="card-body">

    <!-- 電話検索フォーム -->
    @if($formflag == 0)
        {{ Form::open(['url' => url('/i/'.$mise->id.'/'.$therapist->id)]) }}
                    
        <!-- 電話番号 -->
        <label class="row text-nowrap text-end">
            <div class="mt-2 col-sm-2 text-end">電話番号<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
            <div class="col-sm-2">
                {{ Form::text('telsearch', null, ['class'=>'form-control', 'id'=>'telserch', 'autocomplete'=>'off', 'min'=>'10', 'max'=>'11', 'required']) }}
            </div>
            <div class="col-sm-1">{{ Form::submit('検索',["class"=>"btn btn-info"]) }}</div>
        </label>

        <!-- フォームの終わり -->
        {{ Form::close() }}
    @endif

    <!-- 新規予約入力フォーム -->
    @if($formflag == 1)

        {{ Form::open(['url' => url('/i/'.$mise->id.'/'.$therapist->id.'/reservation')]) }}

        <!-- 電話番号 -->
        <label class="row text-nowrap mb-4 text-end">
            <div class="mt-2 col-sm-2 text-end">電話番号<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
            <div class="col-sm-2">
                @php $tel=isset($kokyakuData->tel)? $kokyakuData->tel: $inputTel; @endphp
                {{ Form::hidden('tel', $tel) }}
                {{ Form::number('tel_display', $tel, ['class'=>'form-control', 'disabled'=>'disabled']) }}
            </div>

            <div class="col-sm-1"><a class="btn btn-info" href="{{url()->current()}}">変更</a></div>
        </label>
        
        <!-- 開始時間 -->
        <label class="row text-nowrap mb-4 text-end">
            <div class="col-sm-2 text-end">開始時間<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
            <div class="col-sm-2">
                {{ Form::date('start_day', date('Y-m-d'), ['class'=>'form-control', 'min'=>date('Y-m-d'), 'required']) }}
            </div>
            <div class="col-sm-2">
                {{ Form::time('start_time', null, ['class'=>'form-control', 'required']) }}
            </div>
        </label>

        <!-- 顧客名 -->
        <label class="row text-nowrap mb-4 text-end">
            <div class="col-sm-2 text-end">顧客名<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
            <div class="col-sm-10">
                @php $name=isset($kokyakuData->name)? $kokyakuData->name: null; @endphp
                {{ Form::text('name', $name, ['class'=>'form-control', 'autocomplete'=>'off', 'required']) }}
            </div>
        </label>

        <!-- メール -->
        <label class="row text-nowrap mb-4 text-end">
            <div class="col-sm-2 text-end">Email<span class="mx-2 badge rounded-pill bg-secondary">任意</span></div>
            <div class="col-sm-10">
                @php $mail=isset($kokyakuData->mail)? $kokyakuData->mail: null; @endphp
                {{ Form::text('mail', $mail, ['class'=>'form-control', 'autocomplete'=>'off']) }}
            </div>
        </label>

        <!-- 来店 -->
        <div class="row text-nowrap mb-4 text-end radio_visit">
            <div class="col-sm-2 text-end">来店<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>

            <div class="col-sm-1 btn bg-info text-white visitMany">-----円</div>
            @foreach($visitList  as $v)
                <label class="col-sm-1">
                    {{ Form::radio('visit', $v->id, false, ['class'=>'form-check-input', 'onclick'=>'displayMany()', 'price'=>$v->price, 'required']) }}
                    {{ $v->name }}
                </label>
            @endforeach

            <script>
                @if( isset($kokyakuData) ) 
                    displayRepeater();
                @else
                    displayFirst();
                @endif
            </script>
        </div>

        <!-- コース -->
        <div class="row text-nowrap text-end radio_course">
            <div class="col-sm-2 text-end">コース<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
            
            @foreach($courseList  as $c)
                @if($loop->index == 0)
                    <div class="col-sm-1 btn bg-info text-white courseMany">-----円</div>
                    <label class="col-sm-2">
                        {{ Form::radio('course', $c->id, false, ['class'=>'form-check-input', 'onclick'=>'displayMany()', 'price'=>$c->price, 'required']) }}
                        {{ $c->name }}
                    </label>
        <!-- 項目縦表示のためここで１つ目のdivをとじる -->
        </div>
                @else
        <div class="row text-nowrap mb-3 text-end radio_course">
                    <!-- 項目の場所合わせ -->
                    <div class="col-sm-3"></div>
                    <label class="col-sm-2">
                        {{ Form::radio('course', $c->id, false, ['class'=>'form-check-input', 'onclick'=>'displayMany()', 'price'=>$c->price, 'required']) }}
                        {{ $c->name }}
                    </label>
        </div>
                @endif
            @endforeach

        <!-- 指名 -->
        <div class="row text-nowrap text-end radio_shimei">
            <div class="col-sm-2 text-end">指名<span class="mx-2 badge rounded-pill bg-danger">必須</span></div>
            
            @foreach($shimeiList  as $s)
                @if($loop->index == 0)
                    <div class="col-sm-1 btn bg-info text-white shimeiMany">-----円</div>
                    <label class="col-sm-2">
                        {{ Form::radio('shimei', $s->id, false, ['class'=>'form-check-input', 'onclick'=>'displayMany()', 'price'=>$s->price, 'required']) }}
                        {{ $s->name }}
                    </label>
        <!-- 項目縦表示のためここで１つ目のdivをとじる -->
        </div>
                @else
        <div class="row text-nowrap mb-3 text-end radio_shimei">
                    <!-- 項目の場所合わせ -->
                    <div class="col-sm-3"></div>
                    <label class="col-sm-2">
                        {{ Form::radio('shimei', $s->id, false, ['class'=>'form-check-input', 'onclick'=>'displayMany()', 'price'=>$s->price, 'required']) }}
                        {{ $s->name }}
                    </label>
        </div>
                @endif
            @endforeach

        <!-- オプション -->
        <!-- priceDB->name = inputer のみ表示 -->
        @if(isset($getOption))
            @if($getOption->name === 'inputer')
                <div class="row text-nowrap text-end radio_option">
                    <div class="col-sm-2 text-end">オプション<span class="mx-2 badge rounded-pill bg-secondary">任意</span></div>
                    

                    @foreach($optionList  as $o)
                        @if($loop->index == 0)
                            <div class="col-sm-1 btn bg-info text-white optionMany">-----円</div>
                            <label class="col-sm-2">
                                {{ Form::radio('option', $o->id, false, ['class'=>'form-check-input radioOnOff', 'onclick'=>'displayMany()', 'price'=>$o->price]) }}
                                {{ $o->name }}
                            </label>
                <!-- 項目縦表示のためここで１つ目のdivをとじる -->
                </div>
                        @else
                <div class="row text-nowrap mb-3 text-end radio_option">
                            <!-- 項目の場所合わせ -->
                            <div class="col-sm-3"></div>
                            <label class="col-sm-2">
                                {{ Form::radio('option', $o->id, false, ['class'=>'form-check-input radioOnOff', 'onclick'=>'displayMany()', 'price'=>$o->price]) }}
                                {{ $o->name }}
                            </label>
                </div>
                        @endif
                    @endforeach
            @endif
        @endif

        <!-- 自動割引 -->
        <div class="row text-nowrap mb-4 text-end">
            <div class="col-sm-2 text-end">自動割引<span class="mx-2 badge rounded-pill bg-secondary">自動選択</span></div>
            
            <div class="col-sm-1 btn bg-danger text-white waribikiAutoMany">{{ $waribikiAutoList->price }}円</div>

            <label class="col-sm-1">
                {{ Form::radio('waribikiAuto_display', $waribikiAutoList->id, true, ['class'=>'form-check-input', 'disabled'=>'disabled']) }}
                {{ Form::hidden('waribikiAuto', $waribikiAutoList->id) }}
                {{ $waribikiAutoList->name }}
            </label>

        </div>

        <!-- 追加割引 -->
        <div class="row text-nowrap text-end radio_waribiki">
            <div class="col-sm-2 text-end">追加割引<span class="mx-2 badge rounded-pill bg-secondary">任意</span></div>
                                        
            @foreach($waribikiList  as $w)
                @if($loop->index == 0)
                    <div class="col-sm-1 btn bg-danger text-white waribikiMany ">-----円</div>
                    <label class="col-sm-2">
                        {{ Form::radio('waribiki', $w->id, false, ['class'=>'form-check-input radioOnOff', 'onclick'=>'displayMany()', 'price'=>$w->price]) }}
                        {{ $w->name }}
                    </label>
        </div>
                @else
        <div class="row text-nowrap mb-3 text-end radio_waribiki">
                    <!-- 項目の場所合わせ -->
                    <div class="col-sm-3"></div>
                    <label class="col-sm-2">
                        {{ Form::radio('waribiki', $w->id, false, ['class'=>'form-check-input radioOnOff', 'onclick'=>'displayMany()', 'price'=>$w->price]) }}
                        {{ $w->name }}
                    </label>
        </div>
                @endif
            @endforeach

        @if(count($claimList) != 0)
        <!-- クレーム対応 -->
        <div class="row text-nowrap text-end radio_claim">
            <div class="col-sm-2 text-end">クレーム対応<span class="mx-2 badge rounded-pill bg-secondary">任意</span></div>
                                        
            @foreach($claimList  as $cl)
                @if($loop->index == 0)
                    <div class="col-sm-1 btn bg-danger text-white claimMany ">-----円</div>
                    <label class="col-sm-2">
                        {{ Form::radio('claim', $cl->id, false, ['class'=>'form-check-input radioOnOff', 'onclick'=>'displayMany()', 'price'=>$cl->price]) }}
                        {{ $cl->name }}
                    </label>
        </div>
                @else
        <div class="row text-nowrap mb-3 text-end radio_claim">
                    <!-- 項目の場所合わせ -->
                    <div class="col-sm-3"></div>
                    <label class="col-sm-2">
                        {{ Form::radio('claim', $cl->id, false, ['class'=>'form-check-input radioOnOff', 'onclick'=>'displayMany()', 'price'=>$cl->price]) }}
                        {{ $cl->name }}
                    </label>
        </div>
                @endif
            @endforeach
        @endif

        <!-- メモ -->
        <label class="row text-nowrap mb-4">
            <span class="col-sm-2">メモ<span class="mx-2 badge rounded-pill bg-secondary">任意</span></span>
            <div class="col-sm-10">
                {{ Form::textarea('memo', null, ['class'=>'form-control']) }}
            </div>
        </label>

        <!-- 合計金額 -->
        <label class="row text-nowrap mb-4">
            <span class="col-sm-2">合計金額</span>
            <div class="col-sm-3 btn btn-lg bg-info text-white totalMany">-----円</div>
        </label>
        
        <!-- 送信ボタン -->
        {{ Form::submit('新規予約',["class"=>"m-2 btn btn-info"]) }}

        <!-- フォームの終わり -->
        {{ Form::close() }}
    @endif
    </div>
</div>

@stop