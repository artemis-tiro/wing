[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------price------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: 546  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------price------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: 555  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------price------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: 556  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------price------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: 559  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------price------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: 550  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------price------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: 551  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------adjust------------------------------------------  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.INFO: 3  
[2022-12-19 14:13:23] local.INFO: ------------------------------------------------------------------------------------  
[2022-12-19 14:13:23] local.ERROR: Property [adjust_many] does not exist on this collection instance. {"userId":1,"exception":"[object] (Exception(code: 0): Property [adjust_many] does not exist on this collection instance. at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Collections\\Traits\\EnumeratesValues.php:940)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\app\\Models\\Kyuryo.php(111): Illuminate\\Support\\Collection->__get('adjust_many')
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\app\\Models\\Kyuryo.php(60): App\\Models\\kyuryo::getDailyPrice(Array, Object(Illuminate\\Database\\Eloquent\\Collection))
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\app\\Http\\Controllers\\InputController.php(251): App\\Models\\kyuryo::dailyPriceCul(Object(Illuminate\\Database\\Eloquent\\Collection), Object(Illuminate\\Database\\Eloquent\\Collection))
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): App\\Http\\Controllers\\InputController->kyuryo('1', '16')
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(43): Illuminate\\Routing\\Controller->callAction('kyuryo', Array)
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(260): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\InputController), 'kyuryo')
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(205): Illuminate\\Routing\\Route->runController()
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Route->run()
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#53 {main}
"} 
[2022-12-19 14:16:27] local.ERROR: Call to undefined method App\Http\Controllers\TopController::work() {"view":{"view":"C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\resources\\views\\common\\sidemenu.blade.php","data":{"errors":"<pre class=sf-dump id=sf-dump-656111394 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Support\\ViewErrorBag</span> {<a class=sf-dump-ref>#567</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">bags</span>: []
</samp>}
</pre><script>Sfdump(\"sf-dump-656111394\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","teamList":"<pre class=sf-dump id=sf-dump-1409761095 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1558</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\User
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>User</span> {<a class=sf-dump-ref>#1559</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">users</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:19</span> [ &#8230;19]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:18</span> [ &#8230;18]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:2</span> [ &#8230;2]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: <span class=sf-dump-note>array:4</span> [ &#8230;4]
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: <span class=sf-dump-note>array:3</span> [ &#8230;3]
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">rememberTokenName</span>: \"<span class=sf-dump-str title=\"14 characters\">remember_token</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">accessToken</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-1409761095\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","error":"<pre class=sf-dump id=sf-dump-921621978 data-indent-pad=\"  \"><span class=sf-dump-const>null</span>
</pre><script>Sfdump(\"sf-dump-921621978\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
"}},"userId":1,"exception":"[object] (Spatie\\LaravelIgnition\\Exceptions\\ViewException(code: 0): Call to undefined method App\\Http\\Controllers\\TopController::work() at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\ec3dbe5c475363d23bfbbef8d788afc5c1cc0a5a.php:109)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require()
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\owner\\\\...', Array)
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(70): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(152): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(135): Illuminate\\View\\View->getContents()
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(104): Illuminate\\View\\View->renderContents()
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\4b561471c9ed169713d858e0595d98d59f19b8d4.php(4): Illuminate\\View\\View->render()
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\owner\\\\...')
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\owner\\\\...', Array)
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(70): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(152): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(135): Illuminate\\View\\View->getContents()
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(104): Illuminate\\View\\View->renderContents()
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(906): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(875): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#54 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#55 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#56 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#59 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#61 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#62 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#63 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#64 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#65 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#66 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#67 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#68 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#69 {main}

[previous exception] [object] (Error(code: 0): Call to undefined method App\\Http\\Controllers\\TopController::work() at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\ec3dbe5c475363d23bfbbef8d788afc5c1cc0a5a.php:109)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require()
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\owner\\\\...', Array)
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(70): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(152): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(135): Illuminate\\View\\View->getContents()
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(104): Illuminate\\View\\View->renderContents()
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\4b561471c9ed169713d858e0595d98d59f19b8d4.php(4): Illuminate\\View\\View->render()
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\owner\\\\...')
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\owner\\\\...', Array)
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(70): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(152): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(135): Illuminate\\View\\View->getContents()
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(104): Illuminate\\View\\View->renderContents()
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(906): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(875): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#54 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#55 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#56 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#59 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#61 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#62 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#63 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#64 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#65 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#66 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#67 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#68 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#69 {main}
"} 
[2022-12-19 14:47:17] local.ERROR: Property [adjust_many] does not exist on this collection instance. {"userId":1,"exception":"[object] (Exception(code: 0): Property [adjust_many] does not exist on this collection instance. at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Collections\\Traits\\EnumeratesValues.php:940)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\app\\Models\\Kyuryo.php(111): Illuminate\\Support\\Collection->__get('adjust_many')
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\app\\Models\\Kyuryo.php(60): App\\Models\\kyuryo::getDailyPrice(Array, Object(Illuminate\\Database\\Eloquent\\Collection))
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\app\\Http\\Controllers\\InputController.php(251): App\\Models\\kyuryo::dailyPriceCul(Object(Illuminate\\Database\\Eloquent\\Collection), Object(Illuminate\\Database\\Eloquent\\Collection))
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): App\\Http\\Controllers\\InputController->kyuryo('1', '16')
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(43): Illuminate\\Routing\\Controller->callAction('kyuryo', Array)
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(260): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\InputController), 'kyuryo')
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(205): Illuminate\\Routing\\Route->runController()
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Route->run()
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#53 {main}
"} 
[2022-12-19 15:06:33] local.ERROR: number_format(): Argument #1 ($num) must be of type float, string given {"view":{"view":"C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\resources\\views\\input_kyuryo.blade.php","data":{"errors":"<pre class=sf-dump id=sf-dump-1913170241 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Support\\ViewErrorBag</span> {<a class=sf-dump-ref>#584</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">bags</span>: []
</samp>}
</pre><script>Sfdump(\"sf-dump-1913170241\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","mise":"<pre class=sf-dump id=sf-dump-1410515742 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\mise</span> {<a class=sf-dump-ref>#1571</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"4 characters\">mise</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
  +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
  +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
  +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
  +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:14</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>client_id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>team_id</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">aroma&#12458;&#12464;</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>area</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#39640;&#23798;&#24179;</span>\"
    \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"6 characters\">090444</span>\"
    \"<span class=sf-dump-key>hp</span>\" => \"<span class=sf-dump-str title=\"4 characters\">http</span>\"
    \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>active</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>hearing_sheet</span>\" => \"<span class=sf-dump-str title=\"4 characters\">here</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-11-10 15:40:46</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-11-10 15:40:46</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:14</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>client_id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>team_id</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">aroma&#12458;&#12464;</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>area</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#39640;&#23798;&#24179;</span>\"
    \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"6 characters\">090444</span>\"
    \"<span class=sf-dump-key>hp</span>\" => \"<span class=sf-dump-str title=\"4 characters\">http</span>\"
    \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>active</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>hearing_sheet</span>\" => \"<span class=sf-dump-str title=\"4 characters\">here</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-11-10 15:40:46</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-11-10 15:40:46</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>deleted_at</span>\" => \"<span class=sf-dump-str title=\"8 characters\">datetime</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
  #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
  +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => \"\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-1410515742\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","therapist":"<pre class=sf-dump id=sf-dump-544709085 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\Therapist</span> {<a class=sf-dump-ref>#1574</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"9 characters\">therapist</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
  +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
  +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
  +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
  +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:20</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>16</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>business_name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#12383;&#12365;&#12371;</span>\"
    \"<span class=sf-dump-key>business_age</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>size</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>cup</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>name</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>address</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>tel</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>line</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>birthday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>joinday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>kyc</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 15:56:39</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 15:56:39</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:20</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>16</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>business_name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#12383;&#12365;&#12371;</span>\"
    \"<span class=sf-dump-key>business_age</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>size</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>cup</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>name</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>address</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>tel</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>line</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>birthday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>joinday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>kyc</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 15:56:39</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 15:56:39</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>deleted_at</span>\" => \"<span class=sf-dump-str title=\"8 characters\">datetime</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
  #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
  +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => \"\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-544709085\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","kokyakuList":"<pre class=sf-dump id=sf-dump-1226003538 data-indent-pad=\"  \"><span class=sf-dump-note>array:2</span> [<samp data-depth=1 class=sf-dump-expanded>
  <span class=sf-dump-key>46</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1578</a><samp data-depth=2 class=sf-dump-compact>
    #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
    #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"7 characters\">kokyaku</span>\"
    #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
    #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
    +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
    #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
    +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
    #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
    +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
    +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
    #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
    #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>46</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#39135;&#12497;&#12531;</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"10 characters\">0312345678</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-16 08:57:19</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-16 08:57:19</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>46</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#39135;&#12497;&#12531;</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"10 characters\">0312345678</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-16 08:57:19</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-16 08:57:19</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>deleted_at</span>\" => \"<span class=sf-dump-str title=\"8 characters\">datetime</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
    #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
    +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
    #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=3 class=sf-dump-compact>
      <span class=sf-dump-index>0</span> => \"\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
  </samp>}
  <span class=sf-dump-key>47</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1579</a><samp data-depth=2 class=sf-dump-compact>
    #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
    #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"7 characters\">kokyaku</span>\"
    #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
    #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
    +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
    #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
    +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
    #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
    +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
    +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
    #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
    #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>47</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"6 characters\">&#12463;&#12525;&#12527;&#12483;&#12469;&#12531;</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">08012345678</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-16 08:57:58</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-16 08:57:58</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>47</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"6 characters\">&#12463;&#12525;&#12527;&#12483;&#12469;&#12531;</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">08012345678</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-16 08:57:58</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-16 08:57:58</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>deleted_at</span>\" => \"<span class=sf-dump-str title=\"8 characters\">datetime</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
    #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
    +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
    #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=3 class=sf-dump-compact>
      <span class=sf-dump-index>0</span> => \"\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
  </samp>}
</samp>]
</pre><script>Sfdump(\"sf-dump-1226003538\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","yoyakuList":"<pre class=sf-dump id=sf-dump-28455269 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1580</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\Yoyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Yoyaku</span> {<a class=sf-dump-ref>#1581</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"6 characters\">yoyaku</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:22</span> [ &#8230;22]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:13</span> [ &#8230;13]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-28455269\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","adjustList":"<pre class=sf-dump id=sf-dump-752549953 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1582</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-752549953\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","otyaList":"<pre class=sf-dump id=sf-dump-793952891 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1588</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:2</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1589</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [ &#8230;12]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [ &#8230;12]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>1</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1590</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [ &#8230;12]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [ &#8230;12]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-793952891\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","yoyakuListCnt":"<pre class=sf-dump id=sf-dump-1281735686 data-indent-pad=\"  \"><span class=sf-dump-num>1</span>
</pre><script>Sfdump(\"sf-dump-1281735686\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","error":"<pre class=sf-dump id=sf-dump-1224637295 data-indent-pad=\"  \"><span class=sf-dump-const>null</span>
</pre><script>Sfdump(\"sf-dump-1224637295\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
"}},"userId":1,"exception":"[object] (Spatie\\LaravelIgnition\\Exceptions\\ViewException(code: 0): number_format(): Argument #1 ($num) must be of type float, string given at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\810fd84d719b9d05a428f05c81009e04c4d5fb20.php:108)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\810fd84d719b9d05a428f05c81009e04c4d5fb20.php(108): number_format('\\xE3\\x81\\x9F\\xE3\\x81\\x8D\\xE3\\x81\\x93')
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\owner\\\\...')
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\owner\\\\...', Array)
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(70): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(152): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(135): Illuminate\\View\\View->getContents()
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(104): Illuminate\\View\\View->renderContents()
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(906): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(875): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#53 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#54 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#55 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#56 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#57 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#58 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#59 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#60 {main}

[previous exception] [object] (TypeError(code: 0): number_format(): Argument #1 ($num) must be of type float, string given at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\810fd84d719b9d05a428f05c81009e04c4d5fb20.php:108)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\810fd84d719b9d05a428f05c81009e04c4d5fb20.php(108): number_format('\\xE3\\x81\\x9F\\xE3\\x81\\x8D\\xE3\\x81\\x93')
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\owner\\\\...')
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\owner\\\\...', Array)
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(70): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(152): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(135): Illuminate\\View\\View->getContents()
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(104): Illuminate\\View\\View->renderContents()
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(906): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(875): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#53 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#54 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#55 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#56 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#57 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#58 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#59 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#60 {main}
"} 
[2022-12-19 15:09:00] local.INFO: {"id":47,"name":"\u30af\u30ed\u30ef\u30c3\u30b5\u30f3","tel":"08012345678","mail":null,"ng":null,"memo":null,"deleted_at":null,"created_at":"2022-12-15T23:57:58.000000Z","updated_at":"2022-12-15T23:57:58.000000Z"}  
[2022-12-19 15:19:06] local.ERROR: number_format(): Argument #1 ($num) must be of type float, string given {"view":{"view":"C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\resources\\views\\input_kyuryo.blade.php","data":{"errors":"<pre class=sf-dump id=sf-dump-1974109419 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Support\\ViewErrorBag</span> {<a class=sf-dump-ref>#584</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">bags</span>: []
</samp>}
</pre><script>Sfdump(\"sf-dump-1974109419\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","mise":"<pre class=sf-dump id=sf-dump-1775831645 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\mise</span> {<a class=sf-dump-ref>#1571</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"4 characters\">mise</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
  +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
  +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
  +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
  +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:14</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>client_id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>team_id</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">aroma&#12458;&#12464;</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>area</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#39640;&#23798;&#24179;</span>\"
    \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"6 characters\">090444</span>\"
    \"<span class=sf-dump-key>hp</span>\" => \"<span class=sf-dump-str title=\"4 characters\">http</span>\"
    \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>active</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>hearing_sheet</span>\" => \"<span class=sf-dump-str title=\"4 characters\">here</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-11-10 15:40:46</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-11-10 15:40:46</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:14</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>client_id</span>\" => <span class=sf-dump-num>3</span>
    \"<span class=sf-dump-key>team_id</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">aroma&#12458;&#12464;</span>\"
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>area</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#39640;&#23798;&#24179;</span>\"
    \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"6 characters\">090444</span>\"
    \"<span class=sf-dump-key>hp</span>\" => \"<span class=sf-dump-str title=\"4 characters\">http</span>\"
    \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>active</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>hearing_sheet</span>\" => \"<span class=sf-dump-str title=\"4 characters\">here</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-11-10 15:40:46</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-11-10 15:40:46</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>deleted_at</span>\" => \"<span class=sf-dump-str title=\"8 characters\">datetime</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
  #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
  +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => \"\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-1775831645\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","therapist":"<pre class=sf-dump id=sf-dump-1434585132 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\Therapist</span> {<a class=sf-dump-ref>#1574</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"9 characters\">therapist</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
  #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
  +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
  +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
  +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
  +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:20</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>16</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>business_name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#12383;&#12365;&#12371;</span>\"
    \"<span class=sf-dump-key>business_age</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>size</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>cup</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>name</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>address</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>tel</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>line</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>birthday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>joinday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>kyc</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 15:56:39</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 15:56:39</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:20</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>16</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>business_name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#12383;&#12365;&#12371;</span>\"
    \"<span class=sf-dump-key>business_age</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>size</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>cup</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>name</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>yomi</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>address</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>tel</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>line</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>birthday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>joinday</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>kyc</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 15:56:39</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 15:56:39</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>deleted_at</span>\" => \"<span class=sf-dump-str title=\"8 characters\">datetime</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
  #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
  +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
  #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => \"\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-1434585132\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","kokyakuList":"<pre class=sf-dump id=sf-dump-328559938 data-indent-pad=\"  \"><span class=sf-dump-note>array:2</span> [<samp data-depth=1 class=sf-dump-expanded>
  <span class=sf-dump-key>46</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1578</a><samp data-depth=2 class=sf-dump-compact>
    #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
    #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"7 characters\">kokyaku</span>\"
    #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
    #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
    +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
    #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
    +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
    #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
    +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
    +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
    #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
    #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>46</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#39135;&#12497;&#12531;</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"10 characters\">0312345678</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-16 08:57:19</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-16 08:57:19</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>46</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">&#39135;&#12497;&#12531;</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"10 characters\">0312345678</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-16 08:57:19</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-16 08:57:19</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>deleted_at</span>\" => \"<span class=sf-dump-str title=\"8 characters\">datetime</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
    #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
    +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
    #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=3 class=sf-dump-compact>
      <span class=sf-dump-index>0</span> => \"\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
  </samp>}
  <span class=sf-dump-key>47</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1579</a><samp data-depth=2 class=sf-dump-compact>
    #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
    #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"7 characters\">kokyaku</span>\"
    #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
    #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
    +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
    #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
    +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
    #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
    +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
    +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
    #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
    #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>47</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"6 characters\">&#12463;&#12525;&#12527;&#12483;&#12469;&#12531;</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">08012345678</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-16 08:57:58</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-16 08:57:58</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>47</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"6 characters\">&#12463;&#12525;&#12527;&#12483;&#12469;&#12531;</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">08012345678</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-16 08:57:58</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-16 08:57:58</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>deleted_at</span>\" => \"<span class=sf-dump-str title=\"8 characters\">datetime</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
    #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
    +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
    #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
    #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=3 class=sf-dump-compact>
      <span class=sf-dump-index>0</span> => \"\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
  </samp>}
</samp>]
</pre><script>Sfdump(\"sf-dump-328559938\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","yoyakuList":"<pre class=sf-dump id=sf-dump-1315948918 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1581</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:2</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\Yoyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Yoyaku</span> {<a class=sf-dump-ref>#1582</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"6 characters\">yoyaku</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:22</span> [ &#8230;22]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:13</span> [ &#8230;13]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>1</span> => <span class=sf-dump-note title=\"App\\Models\\Yoyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Yoyaku</span> {<a class=sf-dump-ref>#1583</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"6 characters\">yoyaku</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:22</span> [ &#8230;22]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:13</span> [ &#8230;13]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-1315948918\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","adjustList":"<pre class=sf-dump id=sf-dump-2102062752 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1586</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:2</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\kyuryo
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>kyuryo</span> {<a class=sf-dump-ref>#1587</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"6 characters\">kyuryo</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:11</span> [ &#8230;11]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:11</span> [ &#8230;11]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>1</span> => <span class=sf-dump-note title=\"App\\Models\\kyuryo
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>kyuryo</span> {<a class=sf-dump-ref>#1588</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"6 characters\">kyuryo</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:11</span> [ &#8230;11]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:11</span> [ &#8230;11]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-2102062752\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","otyaList":"<pre class=sf-dump id=sf-dump-47460452 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1591</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:2</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1592</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [ &#8230;12]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [ &#8230;12]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
    <span class=sf-dump-index>1</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1593</a><samp data-depth=3 class=sf-dump-compact>
      #<span class=sf-dump-protected title=\"Protected property\">connection</span>: \"<span class=sf-dump-str title=\"5 characters\">mysql</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">table</span>: \"<span class=sf-dump-str title=\"5 characters\">price</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">primaryKey</span>: \"<span class=sf-dump-str title=\"2 characters\">id</span>\"
      #<span class=sf-dump-protected title=\"Protected property\">keyType</span>: \"<span class=sf-dump-str title=\"3 characters\">int</span>\"
      +<span class=sf-dump-public title=\"Public property\">incrementing</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">with</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">withCount</span>: []
      +<span class=sf-dump-public title=\"Public property\">preventsLazyLoading</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">perPage</span>: <span class=sf-dump-num>15</span>
      +<span class=sf-dump-public title=\"Public property\">exists</span>: <span class=sf-dump-const>true</span>
      +<span class=sf-dump-public title=\"Public property\">wasRecentlyCreated</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [ &#8230;12]
      #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [ &#8230;12]
      #<span class=sf-dump-protected title=\"Protected property\">changes</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">casts</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">classCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">attributeCastCache</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dates</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dateFormat</span>: <span class=sf-dump-const>null</span>
      #<span class=sf-dump-protected title=\"Protected property\">appends</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">dispatchesEvents</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">observables</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">relations</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">touches</span>: []
      +<span class=sf-dump-public title=\"Public property\">timestamps</span>: <span class=sf-dump-const>true</span>
      #<span class=sf-dump-protected title=\"Protected property\">hidden</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">visible</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">fillable</span>: []
      #<span class=sf-dump-protected title=\"Protected property\">guarded</span>: <span class=sf-dump-note>array:1</span> [ &#8230;1]
      #<span class=sf-dump-protected title=\"Protected property\">forceDeleting</span>: <span class=sf-dump-const>false</span>
    </samp>}
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-47460452\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","yoyakuListCnt":"<pre class=sf-dump id=sf-dump-1077742755 data-indent-pad=\"  \"><span class=sf-dump-num>2</span>
</pre><script>Sfdump(\"sf-dump-1077742755\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","error":"<pre class=sf-dump id=sf-dump-1157492864 data-indent-pad=\"  \"><span class=sf-dump-const>null</span>
</pre><script>Sfdump(\"sf-dump-1157492864\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
"}},"userId":1,"exception":"[object] (Spatie\\LaravelIgnition\\Exceptions\\ViewException(code: 0): number_format(): Argument #1 ($num) must be of type float, string given at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\810fd84d719b9d05a428f05c81009e04c4d5fb20.php:129)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\810fd84d719b9d05a428f05c81009e04c4d5fb20.php(129): number_format('\\xE3\\x82\\x82\\xE3\\x82\\x89\\xE3\\x81\\x84\\xE5\\xBF\\x98\\xE3\\x82\\x8C')
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\owner\\\\...')
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\owner\\\\...', Array)
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(70): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(152): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(135): Illuminate\\View\\View->getContents()
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(104): Illuminate\\View\\View->renderContents()
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(906): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(875): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#53 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#54 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#55 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#56 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#57 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#58 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#59 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#60 {main}

[previous exception] [object] (TypeError(code: 0): number_format(): Argument #1 ($num) must be of type float, string given at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\810fd84d719b9d05a428f05c81009e04c4d5fb20.php:129)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\810fd84d719b9d05a428f05c81009e04c4d5fb20.php(129): number_format('\\xE3\\x82\\x82\\xE3\\x82\\x89\\xE3\\x81\\x84\\xE5\\xBF\\x98\\xE3\\x82\\x8C')
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\owner\\\\...')
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\owner\\\\...', Array)
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(70): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(152): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(135): Illuminate\\View\\View->getContents()
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(104): Illuminate\\View\\View->renderContents()
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(906): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(875): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#53 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#54 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#55 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#56 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#57 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#58 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#59 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#60 {main}
"} 
[2022-12-19 15:31:29] local.INFO: {"id":47,"name":"\u30af\u30ed\u30ef\u30c3\u30b5\u30f3","tel":"08012345678","mail":null,"ng":null,"memo":null,"deleted_at":null,"created_at":"2022-12-15T23:57:58.000000Z","updated_at":"2022-12-15T23:57:58.000000Z"}  
[2022-12-19 15:41:02] local.INFO: {"id":46,"name":"\u98df\u30d1\u30f3","tel":"0312345678","mail":null,"ng":null,"memo":null,"deleted_at":null,"created_at":"2022-12-15T23:57:19.000000Z","updated_at":"2022-12-15T23:57:19.000000Z"}  
[2022-12-19 16:12:48] local.ERROR: Method Illuminate\Database\Eloquent\Collection::delete does not exist. {"userId":1,"exception":"[object] (BadMethodCallException(code: 0): Method Illuminate\\Database\\Eloquent\\Collection::delete does not exist. at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Macroable\\Traits\\Macroable.php:113)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\app\\Models\\Kyuryo.php(24): Illuminate\\Support\\Collection->__call('delete', Array)
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\app\\Http\\Controllers\\InputController.php(292): App\\Models\\kyuryo::kyuryoCreate(Array, '1', '16', '2022-12-19 16:1...')
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): App\\Http\\Controllers\\InputController->calculation(Object(Illuminate\\Http\\Request), '1', '16')
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(43): Illuminate\\Routing\\Controller->callAction('calculation', Array)
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(260): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\InputController), 'calculation')
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(205): Illuminate\\Routing\\Route->runController()
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Route->run()
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#52 {main}
"} 
[2022-12-19 16:15:41] local.ERROR: SQLSTATE[22007]: Invalid datetime format: 1292 Truncated incorrect datetime value: '2022-12-19 16:15:41 06:00:00' (SQL: update `kyuryo` set `deleted_at` = 2022-12-19 16:15:41, `kyuryo`.`updated_at` = 2022-12-19 16:15:41 where `working_day` between 2022-12-19 16:15:41 06:00:00 and 2022-12-20 05:59:59 and `kyuryo`.`deleted_at` is null) {"userId":1,"exception":"[object] (Illuminate\\Database\\QueryException(code: 22007): SQLSTATE[22007]: Invalid datetime format: 1292 Truncated incorrect datetime value: '2022-12-19 16:15:41 06:00:00' (SQL: update `kyuryo` set `deleted_at` = 2022-12-19 16:15:41, `kyuryo`.`updated_at` = 2022-12-19 16:15:41 where `working_day` between 2022-12-19 16:15:41 06:00:00 and 2022-12-20 05:59:59 and `kyuryo`.`deleted_at` is null) at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php:760)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(720): Illuminate\\Database\\Connection->runQueryCallback('update `kyuryo`...', Array, Object(Closure))
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(577): Illuminate\\Database\\Connection->run('update `kyuryo`...', Array, Object(Closure))
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(510): Illuminate\\Database\\Connection->affectingStatement('update `kyuryo`...', Array)
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php(3301): Illuminate\\Database\\Connection->update('update `kyuryo`...', Array)
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(1003): Illuminate\\Database\\Query\\Builder->update(Array)
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\SoftDeletingScope.php(42): Illuminate\\Database\\Eloquent\\Builder->update(Array)
#6 [internal function]: Illuminate\\Database\\Eloquent\\SoftDeletingScope->Illuminate\\Database\\Eloquent\\{closure}(Object(Illuminate\\Database\\Eloquent\\Builder))
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(1178): call_user_func(Object(Closure), Object(Illuminate\\Database\\Eloquent\\Builder))
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\app\\Models\\Kyuryo.php(23): Illuminate\\Database\\Eloquent\\Builder->delete()
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\app\\Http\\Controllers\\InputController.php(292): App\\Models\\kyuryo::kyuryoCreate(Array, '1', '16', '2022-12-19 16:1...')
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): App\\Http\\Controllers\\InputController->calculation(Object(Illuminate\\Http\\Request), '1', '16')
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(43): Illuminate\\Routing\\Controller->callAction('calculation', Array)
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(260): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\InputController), 'calculation')
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(205): Illuminate\\Routing\\Route->runController()
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Route->run()
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#53 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#54 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#55 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#56 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#57 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#58 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#59 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#60 {main}

[previous exception] [object] (PDOException(code: 22007): SQLSTATE[22007]: Invalid datetime format: 1292 Truncated incorrect datetime value: '2022-12-19 16:15:41 06:00:00' at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php:570)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(570): PDOStatement->execute()
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(753): Illuminate\\Database\\Connection->Illuminate\\Database\\{closure}('update `kyuryo`...', Array)
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(720): Illuminate\\Database\\Connection->runQueryCallback('update `kyuryo`...', Array, Object(Closure))
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(577): Illuminate\\Database\\Connection->run('update `kyuryo`...', Array, Object(Closure))
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(510): Illuminate\\Database\\Connection->affectingStatement('update `kyuryo`...', Array)
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php(3301): Illuminate\\Database\\Connection->update('update `kyuryo`...', Array)
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(1003): Illuminate\\Database\\Query\\Builder->update(Array)
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\SoftDeletingScope.php(42): Illuminate\\Database\\Eloquent\\Builder->update(Array)
#8 [internal function]: Illuminate\\Database\\Eloquent\\SoftDeletingScope->Illuminate\\Database\\Eloquent\\{closure}(Object(Illuminate\\Database\\Eloquent\\Builder))
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php(1178): call_user_func(Object(Closure), Object(Illuminate\\Database\\Eloquent\\Builder))
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\app\\Models\\Kyuryo.php(23): Illuminate\\Database\\Eloquent\\Builder->delete()
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\app\\Http\\Controllers\\InputController.php(292): App\\Models\\kyuryo::kyuryoCreate(Array, '1', '16', '2022-12-19 16:1...')
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): App\\Http\\Controllers\\InputController->calculation(Object(Illuminate\\Http\\Request), '1', '16')
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(43): Illuminate\\Routing\\Controller->callAction('calculation', Array)
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(260): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\InputController), 'calculation')
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(205): Illuminate\\Routing\\Route->runController()
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Route->run()
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#53 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#54 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#55 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#56 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#57 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#58 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#59 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#60 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#61 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#62 {main}
"} 
