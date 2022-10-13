@section('pan')
<?php 
	$level = auth()->user()->access_level;
	$path = request()->path();
	$kugiri = " > ";
	$teamName = App\Models\user::teamName(auth()->user()->team);
?>

@if($level == "tiro")
	@if($path == "tiro") {{$kugiri}}tiro
	@elseif($path == "admin") {{$kugiri}}<a href="{{url("/tiro")}}">tiro</a>{{$kugiri}}{{$teamName}}
	@else {{$kugiri}}<a href="{{url("/tiro")}}">tiro</a>{{$kugiri}}<a href="{{url("/admin")}}">{{$teamName}}</a>
	@endif
@elseif($level == "admin")
	@if($path == "admin") {{$kugiri}}{{$teamName}}
	@else {{$kugiri}}<a href="{{url("/admin")}}">{{$teamName}}</a>
	@endif
@endif



@stop

