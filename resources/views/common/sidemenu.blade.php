@section('sidemenu')
<?php 
  $level = auth()->user()->access_level;
  $path = request()->path();
  $c1 = '';
  if($path=='tiro'||$path=='admin') $c1 = 'active';
  $c2 = strpos($path,'input') === 0?'active':'';
  $c3 = strpos($path,'admin/inputer') === 0?'active':'';
  $c4 = strpos($path,'admin/client') === 0?'active':'';
  $c5 = strpos($path,'mypage') === 0?'active':'';
?>

            <!-- サイドバー -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-md-5">
                    <ul class="nav flex-column">

                        <!-- カテゴリ1 -->
                        <li class="nav-item">
                          <a class="nav-link {{$c1}}" aria-current="page" href="{{url("/")}}">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24" 
                                viewBox="0 0 24 24" 
                                fill="none" 
                                stroke="currentColor" 
                                stroke-width="2" 
                                stroke-linecap="round" 
                                stroke-linejoin="round" 
                                class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span class="ml-2">Topページ</span>
                          </a>
                        </li>

                        <!-- カテゴリ2 -->
                        <li class="nav-item">
                          <a class="nav-link {{$c2}}" aria-current="page" href="{{url("/input")}}">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24" 
                                viewBox="0 0 24 24" 
                                fill="none" 
                                stroke="currentColor" 
                                stroke-width="2" 
                                stroke-linecap="round" 
                                stroke-linejoin="round" 
                                class="feather feather-home">
                                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                            </svg>
                            <span class="ml-2">店舗一覧</span>
                          </a>
                        </li>

                        <!-- カテゴリ3 -->
                        <li class="nav-item">
                          <a class="nav-link {{$c3}}" href="{{url("/admin/inputer")}}">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                width="24" 
                                height="24" 
                                viewBox="0 0 24 24" 
                                fill="none" 
                                stroke="currentColor" 
                                stroke-width="2" 
                                stroke-linecap="round" 
                                stroke-linejoin="round" 
                                class="feather feather-file">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                <polyline points="13 2 13 9 20 9"></polyline>
                            </svg>
                            <span class="ml-2">メンバー管理</span>
                          </a>
                        </li>

                        <!-- カテゴリ4 -->
                        <li class="nav-item">
                          <a class="nav-link {{$c4}}" href="{{url("/admin/client")}}">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                width="24" 
                                height="24" 
                                viewBox="0 0 24 24" 
                                fill="none" 
                                stroke="currentColor" 
                                stroke-width="2" 
                                stroke-linecap="round" 
                                stroke-linejoin="round" 
                                class="feather feather-file">
                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                <polyline points="13 2 13 9 20 9"></polyline>
                            </svg>
                            <span class="ml-2">クライアント管理</span>
                          </a>
                        </li>

                        <!-- カテゴリ5 -->
                        <li class="nav-item">
                          <a class="nav-link {{$c5}}" href="{{url("/mypage")}}">
                            <svg xmlns="http://www.w3.org/2000/svg" 
                                width="24" 
                                height="24" 
                                viewBox="0 0 24 24" 
                                fill="none" 
                                stroke="currentColor" 
                                stroke-width="2" 
                                stroke-linecap="round" 
                                stroke-linejoin="round" 
                                class="feather feather-users">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                            <span class="ml-2">マイページ</span>
                          </a>
                        </li>

                        <!-- カテゴリ5 {{-- memo https://iconsvg.xyz/ --}}-->
                        <li class="nav-item">
                          <a class="nav-link" href="{{url("/logout")}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 17l5-5-5-5M19.8 12H9M10 3H4v18h6"/></svg>
                            <span class="ml-2">ログアウト</span>
                          </a>
                        </li>

                      </ul>
                  </div>
            </nav>
@stop

