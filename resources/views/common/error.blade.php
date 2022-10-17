                        @if (isset($error))
                            <div class="alert alert-danger">
				<p>{!! nl2br(e($error)) !!}</p>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
				----- エラー -----
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

