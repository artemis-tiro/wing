[2022-12-09 19:09:01] local.INFO: tiroトップへアクセス  
[2022-12-09 19:09:38] local.INFO: 458  
[2022-12-09 19:09:38] local.INFO: 3  
[2022-12-09 19:09:38] local.INFO: 458  
[2022-12-09 19:09:38] local.INFO: 458  
[2022-12-09 19:09:38] local.INFO: 458  
[2022-12-12 10:09:02] local.INFO: tiroトップへアクセス  
[2022-12-12 13:41:08] local.ERROR: Undefined array key "adjust_name1" {"userId":1,"exception":"[object] (ErrorException(code: 0): Undefined array key \"adjust_name1\" at C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\app\\Models\\Kyuryo.php:23)
[stacktrace]
#0 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(259): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, 'Undefined array...', 'C:\\\\Users\\\\81903....', 23)
#1 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\app\\Models\\Kyuryo.php(23): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, 'Undefined array...', 'C:\\\\Users\\\\81903....', 23)
#2 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\app\\Http\\Controllers\\InputController.php(288): App\\Models\\kyuryo::kyuryoCreate(Array, '11', '49', '2022-12-12 13:4...')
#3 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php(54): App\\Http\\Controllers\\InputController->calculation(Object(Illuminate\\Http\\Request), '11', '49')
#4 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php(45): Illuminate\\Routing\\Controller->callAction('calculation', Array)
#5 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(261): Illuminate\\Routing\\ControllerDispatcher->dispatch(Object(Illuminate\\Routing\\Route), Object(App\\Http\\Controllers\\InputController), 'calculation')
#6 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php(204): Illuminate\\Routing\\Route->runController()
#7 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(725): Illuminate\\Routing\\Route->run()
#8 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#9 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#10 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#11 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#12 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#13 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#14 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#15 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#16 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#17 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#21 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#22 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#23 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#24 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#25 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#26 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#27 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(726): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#28 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(703): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#29 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(667): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#30 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(656): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(189): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#32 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#34 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#35 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#36 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#37 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#38 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#40 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#41 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#46 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#48 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(164): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#51 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(133): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\81903.DESKTOP-GBA336J.000\\tiro Dropbox\\Next DB\\project\\wing\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#53 {main}
"} 
