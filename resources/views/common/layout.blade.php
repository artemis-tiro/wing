<!DOCTYPE html>
<html lang="ja">
<head>
    @yield('header')
</head>
<body>
    @yield('topbar')
    <div class="container-fluid">
        <div class="row">
            @yield('sidemenu')
            <!-- メイン -->
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                <!-- パンくず -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
						@yield('pan')
                        @yield('pan2')
                    </ol>
                </nav>
                @yield('content')
            </main>
        </div>
    </div>
<script src="{{url("js/main.js")}}"></script>
<script src="{{ url("js/displayMany.js") }}"></script>
</body>
</html>


