@extends('common.layout')
@include('common.header')
@include('common.topbar')
@include('common.sidemenu')
@include('common.pan')
@section('pan2')
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

                    <td>未実装</td>

                    <!-- 終了時間を来店日時＋コース時間で表示 -->
                    <td>
                        {{ \Carbon\Carbon::createFromTimeString($y->visit_day)->format('m/d H:i') }} ~ 
                        {{ date('H:i',strtotime(" $y->visit_day +$y->courseTime min ")) }}
                    </td>

                    <!-- priceテーブル作成まで仮 -->
                    <td>{{ $y->courseName }}</td>
                        
                    <td>{{ $y->courseShimei }}</td>

                    <td>{{ $kokyakuList[$y->kokyaku_id]->name }} 様</td>
                    
                    <td>
                        {{ substr($kokyakuList[$y->kokyaku_id]->tel, -4, 4) }}
                    </td>
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
                <a class="m-2 btn btn-info" href="{{ url('/t/'.$mise->id.'/'.$therapist->id.'/kyuryo') }}" >給料計算へ</a>
                <a class="m-2 btn btn-secondary" href="{{ url('/t/'.$mise->id.'/'.$therapist->id.'/befor') }}" >過去の予約</a>
            @else
                <a class="m-2 btn btn-info disabled" href="{{ url('/t/'.$mise->id.'/'.$therapist->id.'/kyuryo') }}" disabled>給料計算へ</a>
                <a class="m-2 btn btn-secondary" href="{{ url('/t/'.$mise->id.'/'.$therapist->id.'/befor') }}" >過去の予約</a>
                <label class="text-danger">※オプションを選択してください</label>
            @endif
        @else
            <a class="m-2 btn btn-info" href="{{ url('/t/'.$mise->id.'/'.$therapist->id.'/kyuryo') }}" >給料計算へ</a>
            <a class="m-2 btn btn-secondary" href="{{ url('/t/'.$mise->id.'/'.$therapist->id.'/befor') }}" >過去の予約</a>
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
                        <th scope="col">ステータス</th>
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

                        <td>{{ $kokyakuList[$ya->kokyaku_id]->name }} 様</td>
                        
                        <td>{{ substr($kokyakuList[$y->kokyaku_id]->tel, -4, 4) }}
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
@stop