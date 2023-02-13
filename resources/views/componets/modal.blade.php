<!-- 削除 -->
@if($type=="del")
<button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#a{{$id}}">削除</button>
<div class="modal fade" id="a{{$id}}" tabindex="-1" aria-labelledby="a{{$id}}Label" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="a{{$id}}Label">{{$name}}を削除してもよろしいですか。</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
      </div>
      <div class="modal-body">
        {{$text}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
        <a class="btn btn-danger" href="{{$url}}">削除</a>
      </div>
    </div>
  </div>
</div>
@endif

<!-- ヒアリングシート -->
@if($type=="hearingSheet")
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#hearingSeet">編集</button>
<div class="modal fade" id="hearingSeet" tabindex="-1" aria-labelledby="hearingSeetLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hearingSeetLabel">ヒアリングシートを編集します</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="border: 1px solid;">×</button>
      </div>
      {{ Form::open(['url' => $url,'class'=>'form-horizontal']) }}
      <div class="modal-body">
        {{Form::textarea('hearing_sheet', $text, ['class'=>'form-control','style' => 'width:100%;'])}}

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
        {{ Form::submit('保存',["class"=>"m-2 btn btn-info"])}}
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
@endif

<!-- 店舗情報 -->
@if($type=="miseData")
<button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#miseData">編集</button>
<div class="modal fade" id="miseData" tabindex="-1" aria-labelledby="miseDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="hearingSeetLabel">店舗情報を編集します</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="border: 1px solid;">×</button>
      </div>
      {{ Form::open(['url' => $url,'class'=>'form-horizontal']) }}
      <div class="modal-body">
        <table>
        @foreach($miseData as $key=>$m)
          <tr>
            <th>{{$key}}　</th>
            <td style="width:100%;">{{Form::text($m, $mise->$m, ['class'=>'form-control','required' => 'required'])}}</td>
          </tr>
        @endforeach
        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">閉じる</button>
        {{ Form::submit('保存',["class"=>"m-2 btn btn-info"])}}
      </div>
      {{ Form::close() }}
    </div>
  </div>
</div>
@endif