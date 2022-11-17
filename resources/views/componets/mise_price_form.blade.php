@switch($form)
    @case (1)
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>{{$th[0]}}</th>
                    <th>{{$th[1]}}</th>
                </tr>
            </thead>
            <tbody class="courceTbody">
                @if(empty($formData[$type]))
                    @foreach($placeholder as $k=>$d)
                        <tr>
                            <td>{{ Form::text($type.'_name_'.$loop->index+1, null, ['class'=>'form-control', 'placeholder'=>$k])}}</td>
                            <td class="input-group">{{ Form::number($type.'_price_'.$loop->index+1, null, ['class'=>'form-control', 'placeholder'=>$d])}}<span class="input-group-text">円</span></td>
                        </tr>
                    @endforeach
                @else
                    @foreach($formData[$type] as $f)
                        <tr>
                            <td>{{ Form::text($f['name_title'], $f['name_data'], ['class'=>'form-control'])}}</td>
                            <td class="input-group">{{ Form::number($f['price_title'], $f['price_data'], ['class'=>'form-control'])}}<span class="input-group-text">円</span></td>
                        </tr>
                    @endforeach
                @endif
                <tr><td id="{{$type}}" colspan='2' class="text-center form-text add_input">＋ 行追加 ＋</td></tr>
            </tbody>
        </table>
        @break
    @case (2)
        <label class="row text-nowrap mb-4 text-end">
            <div class="col-sm-2 lh2 text-end">{{$th}}</div>
            {{ form::hidden($type.'_name',$th)}}
            <div class="col-sm-10">
                <div class="input-group">
                    @php $price = isset($formData[$type][0]['price_data'])? $formData[$type][0]['price_data']: ''; @endphp
                    {{ Form::number($type.'_price', $price, ['class'=>'form-control', 'placeholder'=>$placeholder])}}
                    <span class="input-group-text">円</span>
                </div>
            </div>
        </label>
        @break
    @case (3)
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>{{$th[0]}}</th>
                    <th>{{$th[1]}}</th>
                </tr>
            </thead>
            <tbody class="courceTbody">
                @if(empty($formData[$type]))
                    @foreach($placeholder as $k=>$d)
                        <tr>
                            <td>{{ Form::text($type.'_name_'.$loop->index+1, null, ['class'=>'form-control', 'placeholder'=>$k])}}</td>
                            <td class="input-group">{{ Form::number($type.'_price_'.$loop->index+1, null, ['class'=>'form-control', 'placeholder'=>$d])}}<span class="input-group-text">円</span></td>
                        </tr>
                    @endforeach
                @else
                    @foreach($formData[$type] as $f)
                        <tr>
                            <td>{{ Form::text($f['name_title'], $f['name_data'], ['class'=>'form-control'])}}</td>
                            <td class="input-group">{{ Form::number($f['price_title'], $f['price_data'], ['class'=>'form-control'])}}<span class="input-group-text">円</span></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        @break
@endswitch