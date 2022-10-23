@section('pan')
<?php 
	$level = auth()->user()->access_level;
	$path = request()->path();
	$teamName = App\Models\user::teamName(auth()->user()->team);
?>

@if($level == "tiro")
						@if($path == "tiro") <li class="breadcrumb-item active" aria-current="page">Tiro</li>
						@elseif($path == "admin") <li class="breadcrumb-item"><a href="{{url("/")}}">Tiro</a></li><li class="breadcrumb-item active" aria-current="page">{{$teamName}}</li>
						@else <li class="breadcrumb-item"><a href="{{url("/")}}">Tiro</a></li><li class="breadcrumb-item"><a href="{{url("/admin")}}">{{$teamName}}</a></li>
						@endif
@elseif($level == "admin")
						@if($path == "admin") <li class="breadcrumb-item active" aria-current="page">{{$teamName}}</li>
						@else <li class="breadcrumb-item"><a href="{{url("/")}}">{{$teamName}}</a></li>
						@endif
@endif

@if($level == "tiro" || $level == "admin")
						@if(strpos($path,'admin/inputer/') !== false) <li class="breadcrumb-item"><a href="{{url("/admin/inputer")}}">メンバー一覧</a></li>@endif
						@if(strpos($path,'client/') !== false) <li class="breadcrumb-item"><a href="{{url("/admin/client")}}">クライアント一覧</a></li>@endif
@endif

@stop

