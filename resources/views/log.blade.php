[2023-01-10 17:18:00] local.INFO:   
[2023-01-10 17:18:00] local.INFO:   
[2023-01-10 17:18:07] local.INFO:   
[2023-01-10 17:18:07] local.INFO:   
[2023-01-10 17:18:07] local.INFO:   
[2023-01-10 17:18:07] local.INFO:   
[2023-01-10 17:18:07] local.INFO:   
[2023-01-10 17:18:07] local.INFO:   
[2023-01-10 17:18:10] local.INFO:   
[2023-01-10 17:18:10] local.INFO:   
[2023-01-10 17:18:10] local.INFO:   
[2023-01-10 17:18:10] local.INFO:   
[2023-01-10 17:18:10] local.INFO:   
[2023-01-10 17:18:10] local.INFO:   
[2023-01-10 17:18:10] local.INFO:   
[2023-01-10 17:18:10] local.INFO:   
[2023-01-10 17:18:10] local.INFO:   
[2023-01-10 17:18:10] local.INFO:   
[2023-01-10 17:18:16] local.INFO:   
[2023-01-10 17:18:16] local.INFO:   
[2023-01-10 17:18:16] local.INFO:   
[2023-01-10 17:18:16] local.INFO:   
[2023-01-10 17:18:16] local.INFO:   
[2023-01-10 17:18:16] local.INFO:   
[2023-01-10 17:18:16] local.INFO:   
[2023-01-10 17:18:16] local.INFO:   
[2023-01-10 17:18:16] local.INFO:   
[2023-01-10 17:18:16] local.INFO:   
[2023-01-10 17:18:16] local.INFO:   
[2023-01-10 17:18:16] local.INFO:   
[2023-01-10 17:18:16] local.INFO:   
[2023-01-10 17:18:16] local.INFO:   
[2023-01-10 17:18:22] local.INFO:   
[2023-01-10 17:18:22] local.INFO:   
[2023-01-10 17:18:22] local.INFO:   
[2023-01-10 17:18:22] local.INFO:   
[2023-01-10 17:18:22] local.INFO:   
[2023-01-10 17:18:22] local.INFO:   
[2023-01-10 17:18:22] local.INFO:   
[2023-01-10 17:18:22] local.INFO:   
[2023-01-10 17:18:31] local.INFO:   
[2023-01-10 17:18:31] local.INFO:   
[2023-01-10 17:18:31] local.INFO:   
[2023-01-10 17:18:31] local.INFO:   
[2023-01-10 17:18:31] local.INFO:   
[2023-01-10 17:18:31] local.INFO:   
[2023-01-10 17:18:31] local.INFO:   
[2023-01-10 17:18:31] local.INFO:   
[2023-01-10 17:18:31] local.INFO:   
[2023-01-10 17:18:31] local.INFO:   
[2023-01-10 17:18:31] local.INFO:   
[2023-01-10 17:18:31] local.INFO:   
[2023-01-10 17:20:15] local.ERROR: syntax error, unexpected token "<<" {"exception":"[object] (ParseError(code: 0): syntax error, unexpected token \"<<\" at C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\app\\Http\\Controllers\\InputController.php:293)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\composer\\ClassLoader.php(428): Composer\\Autoload\\includeFile('C:\\\\Users\\\\81903....')
#1 [internal function]: Composer\\Autoload\\ClassLoader->loadClass('App\\\\Http\\\\Contro...')
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(1091): is_a('App\\\\Http\\\\Contro...', 'Illuminate\\\\Rout...', true)
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(1030): Illuminate\\Routing\\Route->controllerMiddleware()
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(810): Illuminate\\Routing\\Route->gatherMiddleware()
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(792): Illuminate\\Routing\\Router->gatherRouteMiddleware(Object(Illuminate\\Routing\\Route))
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#10 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#11 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#12 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#13 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#14 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#15 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#16 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#18 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#23 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#29 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#30 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#31 {main}
"} 
[2023-01-10 18:01:36] local.ERROR: syntax error, unexpected token "<<" {"exception":"[object] (ParseError(code: 0): syntax error, unexpected token \"<<\" at C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\app\\Http\\Controllers\\InputController.php:293)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\composer\\ClassLoader.php(428): Composer\\Autoload\\includeFile('C:\\\\Users\\\\81903....')
#1 [internal function]: Composer\\Autoload\\ClassLoader->loadClass('App\\\\Http\\\\Contro...')
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(1091): is_a('App\\\\Http\\\\Contro...', 'Illuminate\\\\Rout...', true)
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(1030): Illuminate\\Routing\\Route->controllerMiddleware()
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(810): Illuminate\\Routing\\Route->gatherMiddleware()
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(792): Illuminate\\Routing\\Router->gatherRouteMiddleware(Object(Illuminate\\Routing\\Route))
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#10 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#11 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#12 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#13 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#14 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#15 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#16 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#18 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#23 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#29 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#30 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#31 {main}
"} 
[2023-01-11 11:41:06] local.ERROR: preg_match(): Allocation of JIT memory failed, PCRE JIT will be disabled. This is likely caused by security restrictions. Either grant PHP permission to allocate executable memory, or set pcre.jit=0 {"exception":"[object] (ErrorException(code: 0): preg_match(): Allocation of JIT memory failed, PCRE JIT will be disabled. This is likely caused by security restrictions. Either grant PHP permission to allocate executable memory, or set pcre.jit=0 at C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Str.php:386)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(268): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, 'preg_match(): A...', 'C:\\\\Users\\\\81903....', 386)
#1 [internal function]: Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, 'preg_match(): A...', 'C:\\\\Users\\\\81903....', 386)
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\Str.php(386): preg_match('#^testing\\\\z#u', 'local')
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(578): Illuminate\\Support\\Str::is('testing', 'local')
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(51): Illuminate\\Foundation\\Application->environment('testing')
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php(242): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->bootstrap(Object(Illuminate\\Foundation\\Application))
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(176): Illuminate\\Foundation\\Application->bootstrapWith(Array)
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(160): Illuminate\\Foundation\\Http\\Kernel->bootstrap()
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#10 {main}
"} 
[2023-01-11 11:41:25] local.ERROR: syntax error, unexpected token "<<" {"exception":"[object] (ParseError(code: 0): syntax error, unexpected token \"<<\" at C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\app\\Http\\Controllers\\InputController.php:293)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\composer\\ClassLoader.php(428): Composer\\Autoload\\includeFile('C:\\\\Users\\\\81903....')
#1 [internal function]: Composer\\Autoload\\ClassLoader->loadClass('App\\\\Http\\\\Contro...')
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(1091): is_a('App\\\\Http\\\\Contro...', 'Illuminate\\\\Rout...', true)
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(1030): Illuminate\\Routing\\Route->controllerMiddleware()
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(810): Illuminate\\Routing\\Route->gatherMiddleware()
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(792): Illuminate\\Routing\\Router->gatherRouteMiddleware(Object(Illuminate\\Routing\\Route))
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#10 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#11 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#12 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#13 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#14 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#15 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#16 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#18 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#23 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#29 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#30 C:\\Users\\81903.DESKTOP-GBA336J.000\\Dropbox\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#31 {main}
"} 
