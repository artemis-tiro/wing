@php
        $minus = isset($minus)&&$minus=='on'? 'M': null;
        $max = 1000000;
        $min = -100000;
        $time = isset($time)&&$time=='on'? 'on': null;
        $add = isset($add)&&$add=='on'? 'on': null;
        $name = isset($name)? $name: null;
        $nonPrice = isset($nonPrice)&&$nonPrice=='on'? 'on': null;
        
@endphp



        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="width:50%;font-size:1.4em;">{{$th[0]}}</th>
                    <th>{{$th[1]}}</th>
                    @if($nonPrice!='on') <th>{{$th[2]}}</th> @endif
                    @if($time=='on') <th>{{$th[3]}}</th> @endif
                </tr>
            </thead>
            <tbody class="courceTbody">
                @if(empty($formData[$type]))
                    @foreach($placeholder as $d)
                        <tr>
                            @if(!$name) <td>{{ Form::text($type.'_name_'.$loop->index+1, null, ['class'=>'form-control', 'placeholder'=>$d[0]])}}</td>
                            @else <td>{{$name[$loop->index]}}{{Form::hidden($type.'_name_'.$loop->index+1, $name[$loop->index])}}</td>
                            @endif
                            @if($time=='on') <td><div class="input-group">{{ Form::number($type.'_time_'.$loop->index+1, null, ['class'=>'form-control ml3', 'placeholder'=>$d[1], 'max'=>999, 'min'=>0])}}<span class="input-group-text">分</span></div></td> @endif
                            @if($nonPrice!='on') <td><div class="input-group number-container">{{ Form::number($type.'_price_'.$loop->index+1, null, ['class'=>'form-control number-input'.$minus.' canma'.$minus, 'placeholder'=>$d[2], 'max'=>$max, 'min'=>$min])}}<span class="number-overlap form-control {{$minus}}"></span><span class="input-group-text">円</span></div></td> @endif
                            <td><div class="input-group number-container">{{ Form::number($type.'_back_'.$loop->index+1, null, ['class'=>'form-control number-input'.$minus.' canma'.$minus, 'placeholder'=>$d[3], 'max'=>$max, 'min'=>$min])}}<span class="number-overlap form-control {{$minus}}"></span><span class="input-group-text">円</span></div></td>
                        </tr>
                    @endforeach
                @else
                    @foreach($formData[$type] as $f)
                        <tr>
                            @if(!$name) <td>{{ Form::text($f['name_title'], $f['name_data'], ['class'=>'form-control'])}}</td>
                            @else <td>{{$name[$loop->index]}}{{Form::hidden($type.'_name_'.$loop->index+1, $name[$loop->index])}}</td>
                            @endif
                            @if($time=='on') <td><div class="input-group">{{ Form::number($f['time_title'], $f['time_data'], ['class'=>'form-control ml3', 'max'=>999, 'min'=>0])}}<span class="input-group-text">分</span></div></td> @endif
                            @if($nonPrice!='on') <td><div class="input-group number-container">{{ Form::number($f['price_title'], $f['price_data'], ['class'=>'form-control number-input'.$minus.' canma'.$minus, 'max'=>$max, 'min'=>$min])}}<span class="number-overlap form-control {{$minus}}">{{number_format($f['price_data'])}}</span><span class="input-group-text">円</span></div></td> @endif
                            <td><div class="input-group number-container">{{ Form::number($f['back_title'], $f['back_data'], ['class'=>'form-control number-input'.$minus.' canma'.$minus, 'max'=>$max, 'min'=>$min])}}<span class="number-overlap form-control {{$minus}}">{{number_format($f['back_data'])}}</span><span class="input-group-text">円</span></div></td>
                        </tr>
                    @endforeach
                @endif
                @if($add=='on') <tr><td id="{{$type}}" colspan='100%' class="text-center form-text add_input" minus="{{$minus}}">+ 行追加 +</td></tr> @endif
            </tbody>
        </table>
