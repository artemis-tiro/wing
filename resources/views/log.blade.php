[2022-12-09 19:09:01] local.INFO: tiroトップへアクセス  
[2022-12-09 19:09:38] local.INFO: 458  
[2022-12-09 19:09:38] local.INFO: 3  
[2022-12-09 19:09:38] local.INFO: 458  
[2022-12-09 19:09:38] local.INFO: 458  
[2022-12-09 19:09:38] local.INFO: 458  
[2022-12-12 13:48:47] local.ERROR: SQLSTATE[HY000] [2002] 対象のコンピューターによって拒否されたため、接続できませんでした。 (SQL: select * from information_schema.tables where table_schema = wing and table_name = migrations and table_type = 'BASE TABLE') {"exception":"[object] (Illuminate\\Database\\QueryException(code: 2002): SQLSTATE[HY000] [2002] 対象のコンピューターによって拒否されたため、接続できませんでした。 (SQL: select * from information_schema.tables where table_schema = wing and table_name = migrations and table_type = 'BASE TABLE') at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php:760)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(720): Illuminate\\Database\\Connection->runQueryCallback('select * from i...', Array, Object(Closure))
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(422): Illuminate\\Database\\Connection->run('select * from i...', Array, Object(Closure))
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(392): Illuminate\\Database\\Connection->select('select * from i...', Array, false)
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Schema\\MySqlBuilder.php(44): Illuminate\\Database\\Connection->selectFromWriteConnection('select * from i...', Array)
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Migrations\\DatabaseMigrationRepository.php(169): Illuminate\\Database\\Schema\\MySqlBuilder->hasTable('migrations')
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Migrations\\Migrator.php(682): Illuminate\\Database\\Migrations\\DatabaseMigrationRepository->repositoryExists()
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(138): Illuminate\\Database\\Migrations\\Migrator->repositoryExists()
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\helpers.php(247): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->Illuminate\\Database\\Console\\Migrations\\{closure}(1)
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(157): retry(1, Object(Closure), 0, Object(Closure))
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(114): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->repositoryExists()
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(82): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->prepareDatabase()
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Migrations\\Migrator.php(615): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->Illuminate\\Database\\Console\\Migrations\\{closure}()
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(102): Illuminate\\Database\\Migrations\\Migrator->usingConnection(NULL, Object(Closure))
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->handle()
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(651): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Illuminate\\Container\\Container->call(Array)
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\symfony\\console\\Command\\Command.php(312): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(152): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\symfony\\console\\Application.php(1020): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\symfony\\console\\Application.php(312): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Database\\Console\\Migrations\\MigrateCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\symfony\\console\\Application.php(168): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(102): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(155): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#27 {main}

[previous exception] [object] (PDOException(code: 2002): SQLSTATE[HY000] [2002] 対象のコンピューターによって拒否されたため、接続できませんでした。 at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connectors\\Connector.php:70)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connectors\\Connector.php(70): PDO->__construct('mysql:host=127....', 'root', '', Array)
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connectors\\Connector.php(46): Illuminate\\Database\\Connectors\\Connector->createPdoConnection('mysql:host=127....', 'root', '', Array)
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connectors\\MySqlConnector.php(24): Illuminate\\Database\\Connectors\\Connector->createConnection('mysql:host=127....', Array, Array)
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connectors\\ConnectionFactory.php(184): Illuminate\\Database\\Connectors\\MySqlConnector->connect(Array)
#4 [internal function]: Illuminate\\Database\\Connectors\\ConnectionFactory->Illuminate\\Database\\Connectors\\{closure}()
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(1171): call_user_func(Object(Closure))
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(486): Illuminate\\Database\\Connection->getPdo()
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(414): Illuminate\\Database\\Connection->getPdoForSelect(false)
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(753): Illuminate\\Database\\Connection->Illuminate\\Database\\{closure}('select * from i...', Array)
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(720): Illuminate\\Database\\Connection->runQueryCallback('select * from i...', Array, Object(Closure))
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(422): Illuminate\\Database\\Connection->run('select * from i...', Array, Object(Closure))
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(392): Illuminate\\Database\\Connection->select('select * from i...', Array, false)
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Schema\\MySqlBuilder.php(44): Illuminate\\Database\\Connection->selectFromWriteConnection('select * from i...', Array)
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Migrations\\DatabaseMigrationRepository.php(169): Illuminate\\Database\\Schema\\MySqlBuilder->hasTable('migrations')
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Migrations\\Migrator.php(682): Illuminate\\Database\\Migrations\\DatabaseMigrationRepository->repositoryExists()
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(138): Illuminate\\Database\\Migrations\\Migrator->repositoryExists()
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\helpers.php(247): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->Illuminate\\Database\\Console\\Migrations\\{closure}(1)
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(157): retry(1, Object(Closure), 0, Object(Closure))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(114): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->repositoryExists()
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(82): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->prepareDatabase()
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Migrations\\Migrator.php(615): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->Illuminate\\Database\\Console\\Migrations\\{closure}()
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(102): Illuminate\\Database\\Migrations\\Migrator->usingConnection(NULL, Object(Closure))
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->handle()
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(651): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Illuminate\\Container\\Container->call(Array)
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\symfony\\console\\Command\\Command.php(312): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(152): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\symfony\\console\\Application.php(1020): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\symfony\\console\\Application.php(312): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Database\\Console\\Migrations\\MigrateCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\symfony\\console\\Application.php(168): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(102): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(155): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 {main}
"} 
[2022-12-12 13:50:15] local.ERROR: SQLSTATE[HY000] [2002] 対象のコンピューターによって拒否されたため、接続できませんでした。 (SQL: select * from information_schema.tables where table_schema = wing and table_name = migrations and table_type = 'BASE TABLE') {"exception":"[object] (Illuminate\\Database\\QueryException(code: 2002): SQLSTATE[HY000] [2002] 対象のコンピューターによって拒否されたため、接続できませんでした。 (SQL: select * from information_schema.tables where table_schema = wing and table_name = migrations and table_type = 'BASE TABLE') at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php:760)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(720): Illuminate\\Database\\Connection->runQueryCallback('select * from i...', Array, Object(Closure))
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(422): Illuminate\\Database\\Connection->run('select * from i...', Array, Object(Closure))
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(392): Illuminate\\Database\\Connection->select('select * from i...', Array, false)
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Schema\\MySqlBuilder.php(44): Illuminate\\Database\\Connection->selectFromWriteConnection('select * from i...', Array)
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Migrations\\DatabaseMigrationRepository.php(169): Illuminate\\Database\\Schema\\MySqlBuilder->hasTable('migrations')
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Migrations\\Migrator.php(682): Illuminate\\Database\\Migrations\\DatabaseMigrationRepository->repositoryExists()
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(138): Illuminate\\Database\\Migrations\\Migrator->repositoryExists()
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\helpers.php(247): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->Illuminate\\Database\\Console\\Migrations\\{closure}(1)
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(157): retry(1, Object(Closure), 0, Object(Closure))
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(114): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->repositoryExists()
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(82): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->prepareDatabase()
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Migrations\\Migrator.php(615): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->Illuminate\\Database\\Console\\Migrations\\{closure}()
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(102): Illuminate\\Database\\Migrations\\Migrator->usingConnection(NULL, Object(Closure))
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->handle()
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(651): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Illuminate\\Container\\Container->call(Array)
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\symfony\\console\\Command\\Command.php(312): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(152): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\symfony\\console\\Application.php(1020): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\symfony\\console\\Application.php(312): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Database\\Console\\Migrations\\MigrateCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\symfony\\console\\Application.php(168): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(102): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(155): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#27 {main}

[previous exception] [object] (PDOException(code: 2002): SQLSTATE[HY000] [2002] 対象のコンピューターによって拒否されたため、接続できませんでした。 at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connectors\\Connector.php:70)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connectors\\Connector.php(70): PDO->__construct('mysql:host=127....', 'root', '', Array)
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connectors\\Connector.php(46): Illuminate\\Database\\Connectors\\Connector->createPdoConnection('mysql:host=127....', 'root', '', Array)
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connectors\\MySqlConnector.php(24): Illuminate\\Database\\Connectors\\Connector->createConnection('mysql:host=127....', Array, Array)
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connectors\\ConnectionFactory.php(184): Illuminate\\Database\\Connectors\\MySqlConnector->connect(Array)
#4 [internal function]: Illuminate\\Database\\Connectors\\ConnectionFactory->Illuminate\\Database\\Connectors\\{closure}()
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(1171): call_user_func(Object(Closure))
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(486): Illuminate\\Database\\Connection->getPdo()
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(414): Illuminate\\Database\\Connection->getPdoForSelect(false)
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(753): Illuminate\\Database\\Connection->Illuminate\\Database\\{closure}('select * from i...', Array)
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(720): Illuminate\\Database\\Connection->runQueryCallback('select * from i...', Array, Object(Closure))
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(422): Illuminate\\Database\\Connection->run('select * from i...', Array, Object(Closure))
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php(392): Illuminate\\Database\\Connection->select('select * from i...', Array, false)
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Schema\\MySqlBuilder.php(44): Illuminate\\Database\\Connection->selectFromWriteConnection('select * from i...', Array)
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Migrations\\DatabaseMigrationRepository.php(169): Illuminate\\Database\\Schema\\MySqlBuilder->hasTable('migrations')
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Migrations\\Migrator.php(682): Illuminate\\Database\\Migrations\\DatabaseMigrationRepository->repositoryExists()
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(138): Illuminate\\Database\\Migrations\\Migrator->repositoryExists()
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Support\\helpers.php(247): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->Illuminate\\Database\\Console\\Migrations\\{closure}(1)
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(157): retry(1, Object(Closure), 0, Object(Closure))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(114): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->repositoryExists()
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(82): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->prepareDatabase()
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Migrations\\Migrator.php(615): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->Illuminate\\Database\\Console\\Migrations\\{closure}()
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Console\\Migrations\\MigrateCommand.php(102): Illuminate\\Database\\Migrations\\Migrator->usingConnection(NULL, Object(Closure))
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Database\\Console\\Migrations\\MigrateCommand->handle()
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(37): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(651): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(182): Illuminate\\Container\\Container->call(Array)
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\symfony\\console\\Command\\Command.php(312): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(152): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\symfony\\console\\Application.php(1020): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\symfony\\console\\Application.php(312): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Database\\Console\\Migrations\\MigrateCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\symfony\\console\\Application.php(168): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php(102): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(155): Illuminate\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\artisan(37): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))
#36 {main}
"} 
[2022-12-12 14:00:01] local.INFO: tiroトップへアクセス  
[2022-12-12 14:31:17] local.INFO: tiroトップへアクセス  
[2022-12-12 16:29:17] local.ERROR: Undefined variable $c {"view":{"view":"C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\resources\\views\\input_reservation.blade.php","data":{"errors":"<pre class=sf-dump id=sf-dump-649388861 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Support\\ViewErrorBag</span> {<a class=sf-dump-ref>#575</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">bags</span>: []
</samp>}
</pre><script>Sfdump(\"sf-dump-649388861\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","mise":"<pre class=sf-dump id=sf-dump-688015271 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\mise</span> {<a class=sf-dump-ref>#1562</a><samp data-depth=1 class=sf-dump-expanded>
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
</pre><script>Sfdump(\"sf-dump-688015271\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","therapist":"<pre class=sf-dump id=sf-dump-567681505 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\Therapist</span> {<a class=sf-dump-ref>#1565</a><samp data-depth=1 class=sf-dump-expanded>
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
</pre><script>Sfdump(\"sf-dump-567681505\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","kokyakuList":"<pre class=sf-dump id=sf-dump-2124389064 data-indent-pad=\"  \"><span class=sf-dump-note>array:4</span> [<samp data-depth=1 class=sf-dump-expanded>
  <span class=sf-dump-key>41</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1571</a><samp data-depth=2 class=sf-dump-compact>
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
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>41</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"6 characters\">oooooo</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"8 characters\">03056589</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:39:29</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:39:29</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>41</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"6 characters\">oooooo</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"8 characters\">03056589</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:39:29</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:39:29</span>\"
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
  <span class=sf-dump-key>42</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1572</a><samp data-depth=2 class=sf-dump-compact>
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
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>42</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">aaa</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">19012354789</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:16:10</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:16:10</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>42</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">aaa</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">19012354789</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:16:10</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:16:10</span>\"
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
  <span class=sf-dump-key>43</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1573</a><samp data-depth=2 class=sf-dump-compact>
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
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>43</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">test</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"10 characters\">0828581234</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:34:41</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:34:41</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>43</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">test</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"10 characters\">0828581234</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:34:41</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:34:41</span>\"
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
  <span class=sf-dump-key>44</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1574</a><samp data-depth=2 class=sf-dump-compact>
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
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>44</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">333</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"3 characters\">929</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:45:42</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:45:42</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>44</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">333</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"3 characters\">929</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:45:42</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:45:42</span>\"
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
</pre><script>Sfdump(\"sf-dump-2124389064\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","yoyakuList":"<pre class=sf-dump id=sf-dump-798390027 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1551</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\Yoyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Yoyaku</span> {<a class=sf-dump-ref>#1569</a><samp data-depth=3 class=sf-dump-compact>
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
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:20</span> [ &#8230;20]
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
</pre><script>Sfdump(\"sf-dump-798390027\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","yoyakuAfterList":"<pre class=sf-dump id=sf-dump-1676950318 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1566</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-1676950318\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","kokyakuData":"<pre class=sf-dump id=sf-dump-508074748 data-indent-pad=\"  \"><span class=sf-dump-const>null</span>
</pre><script>Sfdump(\"sf-dump-508074748\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","formflag":"<pre class=sf-dump id=sf-dump-842825676 data-indent-pad=\"  \"><span class=sf-dump-num>0</span>
</pre><script>Sfdump(\"sf-dump-842825676\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","inputTel":"<pre class=sf-dump id=sf-dump-20689661 data-indent-pad=\"  \"><span class=sf-dump-const>null</span>
</pre><script>Sfdump(\"sf-dump-20689661\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","courseList":"<pre class=sf-dump id=sf-dump-619758842 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1608</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:4</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1609</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1610</a><samp data-depth=3 class=sf-dump-compact>
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
    <span class=sf-dump-index>2</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1611</a><samp data-depth=3 class=sf-dump-compact>
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
    <span class=sf-dump-index>3</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1612</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-619758842\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","visitList":"<pre class=sf-dump id=sf-dump-1717226467 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1581</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:2</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1613</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1614</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-1717226467\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","shimeiList":"<pre class=sf-dump id=sf-dump-895360971 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1617</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:3</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1618</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1619</a><samp data-depth=3 class=sf-dump-compact>
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
    <span class=sf-dump-index>2</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1620</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-895360971\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","optionList":"<pre class=sf-dump id=sf-dump-788767339 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1621</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:2</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1622</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1623</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-788767339\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","waribikiAutoList":"<pre class=sf-dump id=sf-dump-2091825838 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\price</span> {<a class=sf-dump-ref>#1625</a><samp data-depth=1 class=sf-dump-expanded>
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
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>327</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">&#33258;&#21205;&#21106;&#24341;</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>-2000</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"12 characters\">waribikiAuto</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>327</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">&#33258;&#21205;&#21106;&#24341;</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>-2000</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"12 characters\">waribikiAuto</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
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
</pre><script>Sfdump(\"sf-dump-2091825838\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","waribikiList":"<pre class=sf-dump id=sf-dump-898291839 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1626</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1627</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-898291839\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","claimList":"<pre class=sf-dump id=sf-dump-1653711337 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1630</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:2</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1631</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1632</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-1653711337\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","enchoList":"<pre class=sf-dump id=sf-dump-1597939757 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1639</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:3</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1640</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1641</a><samp data-depth=3 class=sf-dump-compact>
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
    <span class=sf-dump-index>2</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1642</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-1597939757\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","getOption":"<pre class=sf-dump id=sf-dump-200755863 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\price</span> {<a class=sf-dump-ref>#1634</a><samp data-depth=1 class=sf-dump-expanded>
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
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>338</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">inputer</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"9 characters\">optionGet</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>338</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">inputer</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"9 characters\">optionGet</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
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
</pre><script>Sfdump(\"sf-dump-200755863\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","getRepeater":"<pre class=sf-dump id=sf-dump-397212669 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\price</span> {<a class=sf-dump-ref>#1636</a><samp data-depth=1 class=sf-dump-expanded>
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
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>332</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"5 characters\">&#12522;&#12500;&#12540;&#12479;&#12540;</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"5 characters\">visit</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>332</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"5 characters\">&#12522;&#12500;&#12540;&#12479;&#12540;</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"5 characters\">visit</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
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
</pre><script>Sfdump(\"sf-dump-397212669\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","error":"<pre class=sf-dump id=sf-dump-68798216 data-indent-pad=\"  \"><span class=sf-dump-const>null</span>
</pre><script>Sfdump(\"sf-dump-68798216\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
"}},"userId":1,"exception":"[object] (Spatie\\LaravelIgnition\\Exceptions\\ViewException(code: 0): Undefined variable $c at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\642451c1968bd1bd50fd8bc62bcbffd18a20183c.php:113)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(259): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, 'Undefined varia...', 'C:\\\\Users\\\\owner\\\\...', 113)
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\642451c1968bd1bd50fd8bc62bcbffd18a20183c.php(113): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, 'Undefined varia...', 'C:\\\\Users\\\\owner\\\\...', 113)
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\owner\\\\...')
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\owner\\\\...', Array)
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(70): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(152): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(135): Illuminate\\View\\View->getContents()
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(104): Illuminate\\View\\View->renderContents()
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(906): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(875): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 {main}

[previous exception] [object] (ErrorException(code: 0): Undefined variable $c at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\642451c1968bd1bd50fd8bc62bcbffd18a20183c.php:113)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(259): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, 'Undefined varia...', 'C:\\\\Users\\\\owner\\\\...', 113)
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\642451c1968bd1bd50fd8bc62bcbffd18a20183c.php(113): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, 'Undefined varia...', 'C:\\\\Users\\\\owner\\\\...', 113)
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\owner\\\\...')
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\owner\\\\...', Array)
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(70): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(152): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(135): Illuminate\\View\\View->getContents()
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(104): Illuminate\\View\\View->renderContents()
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(906): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(875): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 {main}
"} 
[2022-12-12 16:29:29] local.ERROR: Undefined variable $e {"view":{"view":"C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\resources\\views\\input_reservation.blade.php","data":{"errors":"<pre class=sf-dump id=sf-dump-1621855187 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Support\\ViewErrorBag</span> {<a class=sf-dump-ref>#575</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">bags</span>: []
</samp>}
</pre><script>Sfdump(\"sf-dump-1621855187\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","mise":"<pre class=sf-dump id=sf-dump-2046828987 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\mise</span> {<a class=sf-dump-ref>#1562</a><samp data-depth=1 class=sf-dump-expanded>
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
</pre><script>Sfdump(\"sf-dump-2046828987\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","therapist":"<pre class=sf-dump id=sf-dump-1546551874 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\Therapist</span> {<a class=sf-dump-ref>#1565</a><samp data-depth=1 class=sf-dump-expanded>
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
</pre><script>Sfdump(\"sf-dump-1546551874\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","kokyakuList":"<pre class=sf-dump id=sf-dump-1942304476 data-indent-pad=\"  \"><span class=sf-dump-note>array:4</span> [<samp data-depth=1 class=sf-dump-expanded>
  <span class=sf-dump-key>41</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1571</a><samp data-depth=2 class=sf-dump-compact>
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
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>41</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"6 characters\">oooooo</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"8 characters\">03056589</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:39:29</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:39:29</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>41</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"6 characters\">oooooo</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"8 characters\">03056589</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:39:29</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:39:29</span>\"
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
  <span class=sf-dump-key>42</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1572</a><samp data-depth=2 class=sf-dump-compact>
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
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>42</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">aaa</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">19012354789</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:16:10</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:16:10</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>42</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">aaa</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">19012354789</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:16:10</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:16:10</span>\"
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
  <span class=sf-dump-key>43</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1573</a><samp data-depth=2 class=sf-dump-compact>
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
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>43</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">test</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"10 characters\">0828581234</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:34:41</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:34:41</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>43</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">test</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"10 characters\">0828581234</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:34:41</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:34:41</span>\"
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
  <span class=sf-dump-key>44</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1574</a><samp data-depth=2 class=sf-dump-compact>
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
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>44</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">333</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"3 characters\">929</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:45:42</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:45:42</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>44</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">333</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"3 characters\">929</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:45:42</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:45:42</span>\"
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
</pre><script>Sfdump(\"sf-dump-1942304476\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","yoyakuList":"<pre class=sf-dump id=sf-dump-1054400621 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1551</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\Yoyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Yoyaku</span> {<a class=sf-dump-ref>#1569</a><samp data-depth=3 class=sf-dump-compact>
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
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:20</span> [ &#8230;20]
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
</pre><script>Sfdump(\"sf-dump-1054400621\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","yoyakuAfterList":"<pre class=sf-dump id=sf-dump-325171251 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1566</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-325171251\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","kokyakuData":"<pre class=sf-dump id=sf-dump-1049600959 data-indent-pad=\"  \"><span class=sf-dump-const>null</span>
</pre><script>Sfdump(\"sf-dump-1049600959\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","formflag":"<pre class=sf-dump id=sf-dump-2118714679 data-indent-pad=\"  \"><span class=sf-dump-num>0</span>
</pre><script>Sfdump(\"sf-dump-2118714679\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","inputTel":"<pre class=sf-dump id=sf-dump-408520027 data-indent-pad=\"  \"><span class=sf-dump-const>null</span>
</pre><script>Sfdump(\"sf-dump-408520027\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","courseList":"<pre class=sf-dump id=sf-dump-2018145297 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1608</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:4</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1609</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1610</a><samp data-depth=3 class=sf-dump-compact>
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
    <span class=sf-dump-index>2</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1611</a><samp data-depth=3 class=sf-dump-compact>
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
    <span class=sf-dump-index>3</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1612</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-2018145297\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","visitList":"<pre class=sf-dump id=sf-dump-666603351 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1581</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:2</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1613</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1614</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-666603351\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","shimeiList":"<pre class=sf-dump id=sf-dump-1436014069 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1617</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:3</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1618</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1619</a><samp data-depth=3 class=sf-dump-compact>
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
    <span class=sf-dump-index>2</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1620</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-1436014069\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","optionList":"<pre class=sf-dump id=sf-dump-1690473260 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1621</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:2</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1622</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1623</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-1690473260\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","waribikiAutoList":"<pre class=sf-dump id=sf-dump-1137467687 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\price</span> {<a class=sf-dump-ref>#1625</a><samp data-depth=1 class=sf-dump-expanded>
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
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>327</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">&#33258;&#21205;&#21106;&#24341;</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>-2000</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"12 characters\">waribikiAuto</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>327</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">&#33258;&#21205;&#21106;&#24341;</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>-2000</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"12 characters\">waribikiAuto</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
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
</pre><script>Sfdump(\"sf-dump-1137467687\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","waribikiList":"<pre class=sf-dump id=sf-dump-1421766650 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1626</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1627</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-1421766650\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","claimList":"<pre class=sf-dump id=sf-dump-1477969828 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1630</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:2</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1631</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1632</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-1477969828\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","enchoList":"<pre class=sf-dump id=sf-dump-1027486602 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1639</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:3</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1640</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1641</a><samp data-depth=3 class=sf-dump-compact>
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
    <span class=sf-dump-index>2</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1642</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-1027486602\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","getOption":"<pre class=sf-dump id=sf-dump-337896772 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\price</span> {<a class=sf-dump-ref>#1634</a><samp data-depth=1 class=sf-dump-expanded>
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
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>338</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">inputer</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"9 characters\">optionGet</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>338</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">inputer</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"9 characters\">optionGet</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
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
</pre><script>Sfdump(\"sf-dump-337896772\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","getRepeater":"<pre class=sf-dump id=sf-dump-2098565718 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\price</span> {<a class=sf-dump-ref>#1636</a><samp data-depth=1 class=sf-dump-expanded>
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
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>332</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"5 characters\">&#12522;&#12500;&#12540;&#12479;&#12540;</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"5 characters\">visit</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>332</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"5 characters\">&#12522;&#12500;&#12540;&#12479;&#12540;</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"5 characters\">visit</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
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
</pre><script>Sfdump(\"sf-dump-2098565718\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","error":"<pre class=sf-dump id=sf-dump-250253156 data-indent-pad=\"  \"><span class=sf-dump-const>null</span>
</pre><script>Sfdump(\"sf-dump-250253156\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
"}},"userId":1,"exception":"[object] (Spatie\\LaravelIgnition\\Exceptions\\ViewException(code: 0): Undefined variable $e at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\642451c1968bd1bd50fd8bc62bcbffd18a20183c.php:115)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(259): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, 'Undefined varia...', 'C:\\\\Users\\\\owner\\\\...', 115)
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\642451c1968bd1bd50fd8bc62bcbffd18a20183c.php(115): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, 'Undefined varia...', 'C:\\\\Users\\\\owner\\\\...', 115)
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\owner\\\\...')
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\owner\\\\...', Array)
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(70): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(152): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(135): Illuminate\\View\\View->getContents()
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(104): Illuminate\\View\\View->renderContents()
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(906): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(875): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 {main}

[previous exception] [object] (ErrorException(code: 0): Undefined variable $e at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\642451c1968bd1bd50fd8bc62bcbffd18a20183c.php:115)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(259): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, 'Undefined varia...', 'C:\\\\Users\\\\owner\\\\...', 115)
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\642451c1968bd1bd50fd8bc62bcbffd18a20183c.php(115): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, 'Undefined varia...', 'C:\\\\Users\\\\owner\\\\...', 115)
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\owner\\\\...')
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\owner\\\\...', Array)
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(70): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(152): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(135): Illuminate\\View\\View->getContents()
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(104): Illuminate\\View\\View->renderContents()
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(906): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(875): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 {main}
"} 
[2022-12-12 16:29:41] local.ERROR: Undefined variable $e {"view":{"view":"C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\resources\\views\\input_reservation.blade.php","data":{"errors":"<pre class=sf-dump id=sf-dump-573509578 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Support\\ViewErrorBag</span> {<a class=sf-dump-ref>#575</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">bags</span>: []
</samp>}
</pre><script>Sfdump(\"sf-dump-573509578\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","mise":"<pre class=sf-dump id=sf-dump-2122813122 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\mise</span> {<a class=sf-dump-ref>#1562</a><samp data-depth=1 class=sf-dump-expanded>
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
</pre><script>Sfdump(\"sf-dump-2122813122\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","therapist":"<pre class=sf-dump id=sf-dump-1003645902 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\Therapist</span> {<a class=sf-dump-ref>#1565</a><samp data-depth=1 class=sf-dump-expanded>
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
</pre><script>Sfdump(\"sf-dump-1003645902\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","kokyakuList":"<pre class=sf-dump id=sf-dump-271590863 data-indent-pad=\"  \"><span class=sf-dump-note>array:4</span> [<samp data-depth=1 class=sf-dump-expanded>
  <span class=sf-dump-key>41</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1571</a><samp data-depth=2 class=sf-dump-compact>
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
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>41</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"6 characters\">oooooo</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"8 characters\">03056589</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:39:29</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:39:29</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>41</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"6 characters\">oooooo</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"8 characters\">03056589</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:39:29</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:39:29</span>\"
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
  <span class=sf-dump-key>42</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1572</a><samp data-depth=2 class=sf-dump-compact>
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
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>42</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">aaa</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">19012354789</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:16:10</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:16:10</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>42</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">aaa</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">19012354789</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:16:10</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:16:10</span>\"
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
  <span class=sf-dump-key>43</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1573</a><samp data-depth=2 class=sf-dump-compact>
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
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>43</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">test</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"10 characters\">0828581234</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:34:41</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:34:41</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>43</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">test</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"10 characters\">0828581234</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:34:41</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:34:41</span>\"
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
  <span class=sf-dump-key>44</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1574</a><samp data-depth=2 class=sf-dump-compact>
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
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>44</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">333</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"3 characters\">929</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:45:42</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:45:42</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>44</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">333</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"3 characters\">929</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:45:42</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:45:42</span>\"
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
</pre><script>Sfdump(\"sf-dump-271590863\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","yoyakuList":"<pre class=sf-dump id=sf-dump-372669224 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1551</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\Yoyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Yoyaku</span> {<a class=sf-dump-ref>#1569</a><samp data-depth=3 class=sf-dump-compact>
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
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:20</span> [ &#8230;20]
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
</pre><script>Sfdump(\"sf-dump-372669224\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","yoyakuAfterList":"<pre class=sf-dump id=sf-dump-1461284333 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1566</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-1461284333\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","kokyakuData":"<pre class=sf-dump id=sf-dump-381173901 data-indent-pad=\"  \"><span class=sf-dump-const>null</span>
</pre><script>Sfdump(\"sf-dump-381173901\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","formflag":"<pre class=sf-dump id=sf-dump-1754567295 data-indent-pad=\"  \"><span class=sf-dump-num>0</span>
</pre><script>Sfdump(\"sf-dump-1754567295\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","inputTel":"<pre class=sf-dump id=sf-dump-1991716553 data-indent-pad=\"  \"><span class=sf-dump-const>null</span>
</pre><script>Sfdump(\"sf-dump-1991716553\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","courseList":"<pre class=sf-dump id=sf-dump-48630409 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1608</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:4</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1609</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1610</a><samp data-depth=3 class=sf-dump-compact>
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
    <span class=sf-dump-index>2</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1611</a><samp data-depth=3 class=sf-dump-compact>
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
    <span class=sf-dump-index>3</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1612</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-48630409\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","visitList":"<pre class=sf-dump id=sf-dump-1291966869 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1581</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:2</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1613</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1614</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-1291966869\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","shimeiList":"<pre class=sf-dump id=sf-dump-2069270336 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1617</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:3</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1618</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1619</a><samp data-depth=3 class=sf-dump-compact>
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
    <span class=sf-dump-index>2</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1620</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-2069270336\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","optionList":"<pre class=sf-dump id=sf-dump-997156508 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1621</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:2</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1622</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1623</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-997156508\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","waribikiAutoList":"<pre class=sf-dump id=sf-dump-292818900 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\price</span> {<a class=sf-dump-ref>#1625</a><samp data-depth=1 class=sf-dump-expanded>
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
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>327</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">&#33258;&#21205;&#21106;&#24341;</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>-2000</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"12 characters\">waribikiAuto</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>327</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">&#33258;&#21205;&#21106;&#24341;</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>-2000</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"12 characters\">waribikiAuto</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
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
</pre><script>Sfdump(\"sf-dump-292818900\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","waribikiList":"<pre class=sf-dump id=sf-dump-485161083 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1626</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1627</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-485161083\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","claimList":"<pre class=sf-dump id=sf-dump-1278226147 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1630</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:2</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1631</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1632</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-1278226147\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","enchoList":"<pre class=sf-dump id=sf-dump-1467531928 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1639</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:3</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1640</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1641</a><samp data-depth=3 class=sf-dump-compact>
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
    <span class=sf-dump-index>2</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1642</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-1467531928\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","getOption":"<pre class=sf-dump id=sf-dump-1509754701 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\price</span> {<a class=sf-dump-ref>#1634</a><samp data-depth=1 class=sf-dump-expanded>
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
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>338</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">inputer</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"9 characters\">optionGet</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>338</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">inputer</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"9 characters\">optionGet</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
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
</pre><script>Sfdump(\"sf-dump-1509754701\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","getRepeater":"<pre class=sf-dump id=sf-dump-1113084598 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\price</span> {<a class=sf-dump-ref>#1636</a><samp data-depth=1 class=sf-dump-expanded>
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
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>332</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"5 characters\">&#12522;&#12500;&#12540;&#12479;&#12540;</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"5 characters\">visit</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>332</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"5 characters\">&#12522;&#12500;&#12540;&#12479;&#12540;</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"5 characters\">visit</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
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
</pre><script>Sfdump(\"sf-dump-1113084598\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","error":"<pre class=sf-dump id=sf-dump-252804209 data-indent-pad=\"  \"><span class=sf-dump-const>null</span>
</pre><script>Sfdump(\"sf-dump-252804209\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
"}},"userId":1,"exception":"[object] (Spatie\\LaravelIgnition\\Exceptions\\ViewException(code: 0): Undefined variable $e at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\642451c1968bd1bd50fd8bc62bcbffd18a20183c.php:117)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(259): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, 'Undefined varia...', 'C:\\\\Users\\\\owner\\\\...', 117)
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\642451c1968bd1bd50fd8bc62bcbffd18a20183c.php(117): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, 'Undefined varia...', 'C:\\\\Users\\\\owner\\\\...', 117)
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\owner\\\\...')
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\owner\\\\...', Array)
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(70): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(152): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(135): Illuminate\\View\\View->getContents()
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(104): Illuminate\\View\\View->renderContents()
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(906): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(875): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 {main}

[previous exception] [object] (ErrorException(code: 0): Undefined variable $e at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\642451c1968bd1bd50fd8bc62bcbffd18a20183c.php:117)
[stacktrace]
#0 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Bootstrap\\HandleExceptions.php(259): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->handleError(2, 'Undefined varia...', 'C:\\\\Users\\\\owner\\\\...', 117)
#1 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\642451c1968bd1bd50fd8bc62bcbffd18a20183c.php(117): Illuminate\\Foundation\\Bootstrap\\HandleExceptions->Illuminate\\Foundation\\Bootstrap\\{closure}(2, 'Undefined varia...', 'C:\\\\Users\\\\owner\\\\...', 117)
#2 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(109): require('C:\\\\Users\\\\owner\\\\...')
#3 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php(110): Illuminate\\Filesystem\\Filesystem::Illuminate\\Filesystem\\{closure}()
#4 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\PhpEngine.php(58): Illuminate\\Filesystem\\Filesystem->getRequire('C:\\\\Users\\\\owner\\\\...', Array)
#5 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(69): Illuminate\\View\\Engines\\PhpEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#6 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Engines\\CompilerEngine.php(70): Livewire\\LivewireViewCompilerEngine->evaluatePath('C:\\\\Users\\\\owner\\\\...', Array)
#7 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\ComponentConcerns\\RendersLivewireComponents.php(35): Illuminate\\View\\Engines\\CompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#8 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(152): Livewire\\LivewireViewCompilerEngine->get('C:\\\\Users\\\\owner\\\\...', Array)
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(135): Illuminate\\View\\View->getContents()
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\View.php(104): Illuminate\\View\\View->renderContents()
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(906): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(875): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#57 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#59 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#60 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#61 {main}
"} 
[2022-12-12 17:09:12] local.ERROR: Undefined constant "String" {"view":{"view":"C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\resources\\views\\input_reservation.blade.php","data":{"errors":"<pre class=sf-dump id=sf-dump-1768654788 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Support\\ViewErrorBag</span> {<a class=sf-dump-ref>#568</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">bags</span>: []
</samp>}
</pre><script>Sfdump(\"sf-dump-1768654788\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","mise":"<pre class=sf-dump id=sf-dump-1864578893 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\mise</span> {<a class=sf-dump-ref>#1555</a><samp data-depth=1 class=sf-dump-expanded>
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
</pre><script>Sfdump(\"sf-dump-1864578893\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","therapist":"<pre class=sf-dump id=sf-dump-407203434 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\Therapist</span> {<a class=sf-dump-ref>#1558</a><samp data-depth=1 class=sf-dump-expanded>
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
</pre><script>Sfdump(\"sf-dump-407203434\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","kokyakuList":"<pre class=sf-dump id=sf-dump-2016984890 data-indent-pad=\"  \"><span class=sf-dump-note>array:4</span> [<samp data-depth=1 class=sf-dump-expanded>
  <span class=sf-dump-key>41</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1564</a><samp data-depth=2 class=sf-dump-compact>
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
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>41</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"6 characters\">oooooo</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"8 characters\">03056589</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:39:29</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:39:29</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>41</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"6 characters\">oooooo</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"8 characters\">03056589</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:39:29</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:39:29</span>\"
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
  <span class=sf-dump-key>42</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1565</a><samp data-depth=2 class=sf-dump-compact>
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
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>42</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">aaa</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">19012354789</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:16:10</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:16:10</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>42</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">aaa</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"11 characters\">19012354789</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:16:10</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:16:10</span>\"
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
  <span class=sf-dump-key>43</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1566</a><samp data-depth=2 class=sf-dump-compact>
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
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>43</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">test</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"10 characters\">0828581234</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:34:41</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:34:41</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>43</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">test</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"10 characters\">0828581234</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:34:41</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:34:41</span>\"
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
  <span class=sf-dump-key>44</span> => <span class=sf-dump-note title=\"App\\Models\\Kokyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Kokyaku</span> {<a class=sf-dump-ref>#1567</a><samp data-depth=2 class=sf-dump-compact>
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
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>44</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">333</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"3 characters\">929</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:45:42</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:45:42</span>\"
    </samp>]
    #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:9</span> [<samp data-depth=3 class=sf-dump-compact>
      \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>44</span>
      \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"3 characters\">333</span>\"
      \"<span class=sf-dump-key>tel</span>\" => \"<span class=sf-dump-str title=\"3 characters\">929</span>\"
      \"<span class=sf-dump-key>mail</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>ng</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>memo</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
      \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:45:42</span>\"
      \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 16:45:42</span>\"
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
</pre><script>Sfdump(\"sf-dump-2016984890\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","yoyakuList":"<pre class=sf-dump id=sf-dump-1737843215 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1544</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\Yoyaku
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>Yoyaku</span> {<a class=sf-dump-ref>#1562</a><samp data-depth=3 class=sf-dump-compact>
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
      #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:20</span> [ &#8230;20]
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
</pre><script>Sfdump(\"sf-dump-1737843215\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","yoyakuAfterList":"<pre class=sf-dump id=sf-dump-554249339 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1559</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: []
  #<span class=sf-dump-protected title=\"Protected property\">escapeWhenCastingToString</span>: <span class=sf-dump-const>false</span>
</samp>}
</pre><script>Sfdump(\"sf-dump-554249339\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","kokyakuData":"<pre class=sf-dump id=sf-dump-2013527910 data-indent-pad=\"  \"><span class=sf-dump-const>null</span>
</pre><script>Sfdump(\"sf-dump-2013527910\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","formflag":"<pre class=sf-dump id=sf-dump-1212143960 data-indent-pad=\"  \"><span class=sf-dump-num>1</span>
</pre><script>Sfdump(\"sf-dump-1212143960\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","inputTel":"<pre class=sf-dump id=sf-dump-2064121722 data-indent-pad=\"  \">\"<span class=sf-dump-str title=\"3 characters\">090</span>\"
</pre><script>Sfdump(\"sf-dump-2064121722\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","courseList":"<pre class=sf-dump id=sf-dump-890053288 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1602</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:4</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1603</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1604</a><samp data-depth=3 class=sf-dump-compact>
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
    <span class=sf-dump-index>2</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1605</a><samp data-depth=3 class=sf-dump-compact>
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
    <span class=sf-dump-index>3</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1606</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-890053288\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","visitList":"<pre class=sf-dump id=sf-dump-185157742 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1575</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:2</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1607</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1608</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-185157742\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","shimeiList":"<pre class=sf-dump id=sf-dump-1120974244 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1611</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:3</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1612</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1613</a><samp data-depth=3 class=sf-dump-compact>
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
    <span class=sf-dump-index>2</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1614</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-1120974244\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","optionList":"<pre class=sf-dump id=sf-dump-425840757 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1615</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:2</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1616</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1617</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-425840757\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","waribikiAutoList":"<pre class=sf-dump id=sf-dump-197092725 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\price</span> {<a class=sf-dump-ref>#1619</a><samp data-depth=1 class=sf-dump-expanded>
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
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>327</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">&#33258;&#21205;&#21106;&#24341;</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>-2000</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"12 characters\">waribikiAuto</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>327</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"4 characters\">&#33258;&#21205;&#21106;&#24341;</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>-2000</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"12 characters\">waribikiAuto</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
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
</pre><script>Sfdump(\"sf-dump-197092725\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","waribikiList":"<pre class=sf-dump id=sf-dump-685212343 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1620</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:1</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1621</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-685212343\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","claimList":"<pre class=sf-dump id=sf-dump-1326564056 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1624</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:2</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1625</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1626</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-1326564056\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","enchoList":"<pre class=sf-dump id=sf-dump-1012479761 data-indent-pad=\"  \"><span class=sf-dump-note>Illuminate\\Database\\Eloquent\\Collection</span> {<a class=sf-dump-ref>#1633</a><samp data-depth=1 class=sf-dump-expanded>
  #<span class=sf-dump-protected title=\"Protected property\">items</span>: <span class=sf-dump-note>array:3</span> [<samp data-depth=2 class=sf-dump-compact>
    <span class=sf-dump-index>0</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1634</a><samp data-depth=3 class=sf-dump-compact>
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
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1635</a><samp data-depth=3 class=sf-dump-compact>
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
    <span class=sf-dump-index>2</span> => <span class=sf-dump-note title=\"App\\Models\\price
\"><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">App\\Models</span><span class=\"sf-dump-ellipsis sf-dump-ellipsis-note\">\\</span>price</span> {<a class=sf-dump-ref>#1636</a><samp data-depth=3 class=sf-dump-compact>
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
</pre><script>Sfdump(\"sf-dump-1012479761\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","getOption":"<pre class=sf-dump id=sf-dump-200789051 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\price</span> {<a class=sf-dump-ref>#1628</a><samp data-depth=1 class=sf-dump-expanded>
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
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>338</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">inputer</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"9 characters\">optionGet</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>338</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">inputer</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"9 characters\">optionGet</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
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
</pre><script>Sfdump(\"sf-dump-200789051\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","getRepeater":"<pre class=sf-dump id=sf-dump-425709772 data-indent-pad=\"  \"><span class=sf-dump-note>App\\Models\\price</span> {<a class=sf-dump-ref>#1630</a><samp data-depth=1 class=sf-dump-expanded>
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
  #<span class=sf-dump-protected title=\"Protected property\">attributes</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>332</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"5 characters\">&#12522;&#12500;&#12540;&#12479;&#12540;</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"5 characters\">visit</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
  </samp>]
  #<span class=sf-dump-protected title=\"Protected property\">original</span>: <span class=sf-dump-note>array:12</span> [<samp data-depth=2 class=sf-dump-compact>
    \"<span class=sf-dump-key>id</span>\" => <span class=sf-dump-num>332</span>
    \"<span class=sf-dump-key>mise_id</span>\" => <span class=sf-dump-num>1</span>
    \"<span class=sf-dump-key>name</span>\" => \"<span class=sf-dump-str title=\"5 characters\">&#12522;&#12500;&#12540;&#12479;&#12540;</span>\"
    \"<span class=sf-dump-key>time</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>price</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>order</span>\" => <span class=sf-dump-num>2</span>
    \"<span class=sf-dump-key>type</span>\" => \"<span class=sf-dump-str title=\"5 characters\">visit</span>\"
    \"<span class=sf-dump-key>back</span>\" => <span class=sf-dump-num>0</span>
    \"<span class=sf-dump-key>back_name</span>\" => \"<span class=sf-dump-str title=\"7 characters\">default</span>\"
    \"<span class=sf-dump-key>deleted_at</span>\" => <span class=sf-dump-const>null</span>
    \"<span class=sf-dump-key>created_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
    \"<span class=sf-dump-key>updated_at</span>\" => \"<span class=sf-dump-str title=\"19 characters\">2022-12-08 14:09:27</span>\"
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
</pre><script>Sfdump(\"sf-dump-425709772\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
","error":"<pre class=sf-dump id=sf-dump-943226634 data-indent-pad=\"  \"><span class=sf-dump-const>null</span>
</pre><script>Sfdump(\"sf-dump-943226634\", {\"maxDepth\":3,\"maxStringLength\":160})</script>
"}},"userId":1,"exception":"[object] (Spatie\\LaravelIgnition\\Exceptions\\ViewException(code: 0): Undefined constant \"String\" at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\642451c1968bd1bd50fd8bc62bcbffd18a20183c.php:187)
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
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(906): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(875): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#57 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#59 {main}

[previous exception] [object] (Error(code: 0): Undefined constant \"String\" at C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\storage\\framework\\views\\642451c1968bd1bd50fd8bc62bcbffd18a20183c.php:187)
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
#9 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(69): Illuminate\\View\\View->render()
#10 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Response.php(35): Illuminate\\Http\\Response->setContent(Object(Illuminate\\View\\View))
#11 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(906): Illuminate\\Http\\Response->__construct(Object(Illuminate\\View\\View), 200, Array)
#12 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(875): Illuminate\\Routing\\Router::toResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#13 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(798): Illuminate\\Routing\\Router->prepareResponse(Object(Illuminate\\Http\\Request), Object(Illuminate\\View\\View))
#14 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Routing\\Router->Illuminate\\Routing\\{closure}(Object(Illuminate\\Http\\Request))
#15 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified.php(30): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#16 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#17 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php(50): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#18 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Routing\\Middleware\\SubstituteBindings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#19 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\Middleware\\Authenticate.php(44): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#20 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Auth\\Middleware\\Authenticate->handle(Object(Illuminate\\Http\\Request), Object(Closure), 'sanctum')
#21 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken.php(78): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#22 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\VerifyCsrfToken->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#23 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\View\\Middleware\\ShareErrorsFromSession.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#24 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\View\\Middleware\\ShareErrorsFromSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#25 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(121): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#26 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Session\\Middleware\\StartSession.php(64): Illuminate\\Session\\Middleware\\StartSession->handleStatefulRequest(Object(Illuminate\\Http\\Request), Object(Illuminate\\Session\\Store), Object(Closure))
#27 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Session\\Middleware\\StartSession->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#28 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse.php(37): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#29 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#30 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Cookie\\Middleware\\EncryptCookies.php(67): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#31 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Cookie\\Middleware\\EncryptCookies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#32 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#33 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(799): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#34 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(776): Illuminate\\Routing\\Router->runRouteWithinStack(Object(Illuminate\\Routing\\Route), Object(Illuminate\\Http\\Request))
#35 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(740): Illuminate\\Routing\\Router->runRoute(Object(Illuminate\\Http\\Request), Object(Illuminate\\Routing\\Route))
#36 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php(729): Illuminate\\Routing\\Router->dispatchToRoute(Object(Illuminate\\Http\\Request))
#37 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(190): Illuminate\\Routing\\Router->dispatch(Object(Illuminate\\Http\\Request))
#38 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(141): Illuminate\\Foundation\\Http\\Kernel->Illuminate\\Foundation\\Http\\{closure}(Object(Illuminate\\Http\\Request))
#39 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\livewire\\livewire\\src\\DisableBrowserCache.php(19): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#40 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Livewire\\DisableBrowserCache->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#41 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#42 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull.php(31): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#43 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#44 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php(21): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#45 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TrimStrings.php(40): Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#46 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\TrimStrings->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#47 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php(27): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#48 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#49 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance.php(86): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#50 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#51 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\HandleCors.php(49): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#52 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\HandleCors->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#53 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Http\\Middleware\\TrustProxies.php(39): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#54 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(180): Illuminate\\Http\\Middleware\\TrustProxies->handle(Object(Illuminate\\Http\\Request), Object(Closure))
#55 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php(116): Illuminate\\Pipeline\\Pipeline->Illuminate\\Pipeline\\{closure}(Object(Illuminate\\Http\\Request))
#56 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(165): Illuminate\\Pipeline\\Pipeline->then(Object(Closure))
#57 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php(134): Illuminate\\Foundation\\Http\\Kernel->sendRequestThroughRouter(Object(Illuminate\\Http\\Request))
#58 C:\\Users\\owner\\Dropbox\\project\\wing\\ogura\\laravel\\wing\\public\\index.php(52): Illuminate\\Foundation\\Http\\Kernel->handle(Object(Illuminate\\Http\\Request))
#59 {main}
"} 
