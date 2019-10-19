<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-09-17 04:17:08 --> Connect Error: SQLSTATE[HY000] [2002] Impossibile stabilire la connessione. Rifiuto persistente del computer di destinazione.

#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\zendframework\zend-db\src\Adapter\Driver\Pdo\Connection.php(108): Zend\Db\Adapter\Driver\Pdo\Connection->connect()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\Model.php(98): Zend\Db\Adapter\Driver\Pdo\Connection->getCurrentSchema()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\Model.php(106): GroceryCrud\Core\Model->getDatabaseName()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(939): GroceryCrud\Core\Model->getDbUniqueId()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(864): GroceryCrud\Core\State\StateAbstract->getUniqueCacheName(1)
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(1408): GroceryCrud\Core\State\StateAbstract->getColumnNames()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(1243): GroceryCrud\Core\State\StateAbstract->transformFieldsList(Array, Array)
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\InitialState.php(66): GroceryCrud\Core\State\StateAbstract->getAddFields()
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\InitialState.php(29): GroceryCrud\Core\State\InitialState->showInitData()
#9 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\GroceryCrud.php(2404): GroceryCrud\Core\State\InitialState->render()
#10 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(31): GroceryCrud\Core\GroceryCrud->render()
#11 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#12 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#13 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#14 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#15 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#16 {main}
CRITICAL - 2019-09-17 04:17:13 --> Connect Error: SQLSTATE[HY000] [2002] Impossibile stabilire la connessione. Rifiuto persistente del computer di destinazione.

#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\zendframework\zend-db\src\Adapter\Driver\Pdo\Connection.php(108): Zend\Db\Adapter\Driver\Pdo\Connection->connect()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\Model.php(98): Zend\Db\Adapter\Driver\Pdo\Connection->getCurrentSchema()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\Model.php(106): GroceryCrud\Core\Model->getDatabaseName()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(939): GroceryCrud\Core\Model->getDbUniqueId()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(864): GroceryCrud\Core\State\StateAbstract->getUniqueCacheName(1)
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(1408): GroceryCrud\Core\State\StateAbstract->getColumnNames()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(1243): GroceryCrud\Core\State\StateAbstract->transformFieldsList(Array, Array)
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\InitialState.php(66): GroceryCrud\Core\State\StateAbstract->getAddFields()
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\InitialState.php(29): GroceryCrud\Core\State\InitialState->showInitData()
#9 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\GroceryCrud.php(2404): GroceryCrud\Core\State\InitialState->render()
#10 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(31): GroceryCrud\Core\GroceryCrud->render()
#11 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#12 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#13 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#14 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#15 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#16 {main}
CRITICAL - 2019-09-17 04:17:17 --> Connect Error: SQLSTATE[HY000] [2002] Impossibile stabilire la connessione. Rifiuto persistente del computer di destinazione.

#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\zendframework\zend-db\src\Adapter\Driver\Pdo\Connection.php(108): Zend\Db\Adapter\Driver\Pdo\Connection->connect()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\Model.php(98): Zend\Db\Adapter\Driver\Pdo\Connection->getCurrentSchema()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\Model.php(106): GroceryCrud\Core\Model->getDatabaseName()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(939): GroceryCrud\Core\Model->getDbUniqueId()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(864): GroceryCrud\Core\State\StateAbstract->getUniqueCacheName(1)
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(1408): GroceryCrud\Core\State\StateAbstract->getColumnNames()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(1243): GroceryCrud\Core\State\StateAbstract->transformFieldsList(Array, Array)
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\InitialState.php(66): GroceryCrud\Core\State\StateAbstract->getAddFields()
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\InitialState.php(29): GroceryCrud\Core\State\InitialState->showInitData()
#9 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\GroceryCrud.php(2404): GroceryCrud\Core\State\InitialState->render()
#10 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(31): GroceryCrud\Core\GroceryCrud->render()
#11 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#12 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#13 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#14 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#15 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#16 {main}
CRITICAL - 2019-09-17 04:22:00 --> Connect Error: SQLSTATE[HY000] [2002] Impossibile stabilire la connessione. Rifiuto persistente del computer di destinazione.

#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\zendframework\zend-db\src\Adapter\Driver\Pdo\Connection.php(108): Zend\Db\Adapter\Driver\Pdo\Connection->connect()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\Model.php(98): Zend\Db\Adapter\Driver\Pdo\Connection->getCurrentSchema()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\Model.php(106): GroceryCrud\Core\Model->getDatabaseName()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(939): GroceryCrud\Core\Model->getDbUniqueId()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(864): GroceryCrud\Core\State\StateAbstract->getUniqueCacheName(1)
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(1408): GroceryCrud\Core\State\StateAbstract->getColumnNames()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(1243): GroceryCrud\Core\State\StateAbstract->transformFieldsList(Array, Array)
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\InitialState.php(66): GroceryCrud\Core\State\StateAbstract->getAddFields()
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\InitialState.php(29): GroceryCrud\Core\State\InitialState->showInitData()
#9 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\GroceryCrud.php(2404): GroceryCrud\Core\State\InitialState->render()
#10 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(31): GroceryCrud\Core\GroceryCrud->render()
#11 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#12 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#13 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#14 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#15 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#16 {main}
CRITICAL - 2019-09-17 04:22:15 --> Connect Error: SQLSTATE[HY000] [2002] Impossibile stabilire la connessione. Rifiuto persistente del computer di destinazione.

#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\zendframework\zend-db\src\Adapter\Driver\Pdo\Connection.php(108): Zend\Db\Adapter\Driver\Pdo\Connection->connect()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\Model.php(98): Zend\Db\Adapter\Driver\Pdo\Connection->getCurrentSchema()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\Model.php(106): GroceryCrud\Core\Model->getDatabaseName()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(939): GroceryCrud\Core\Model->getDbUniqueId()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(864): GroceryCrud\Core\State\StateAbstract->getUniqueCacheName(1)
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(1408): GroceryCrud\Core\State\StateAbstract->getColumnNames()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(1243): GroceryCrud\Core\State\StateAbstract->transformFieldsList(Array, Array)
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\InitialState.php(66): GroceryCrud\Core\State\StateAbstract->getAddFields()
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\State\InitialState.php(29): GroceryCrud\Core\State\InitialState->showInitData()
#9 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\GroceryCrudEnterprise\Libraries\GroceryCrudEnterprise\grocerycrud\enterprise\src\GroceryCrud\Core\GroceryCrud.php(2404): GroceryCrud\Core\State\InitialState->render()
#10 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(31): GroceryCrud\Core\GroceryCrud->render()
#11 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#12 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#13 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#14 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#15 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#16 {main}
CRITICAL - 2019-09-17 04:25:42 --> syntax error, unexpected '$output' (T_VARIABLE)
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\Users\\Antoni...')
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Violet\\Controll...')
#2 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Violet\\Controll...')
#3 [internal function]: spl_autoload_call('Violet\\Controll...')
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(798): class_exists('\\Violet\\Control...', true)
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#9 {main}
CRITICAL - 2019-09-17 04:29:55 --> Controller or its method is not found: {0}::{1}
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(908): CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Controller or i...')
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(259): CodeIgniter\CodeIgniter->display404errors(Object(CodeIgniter\Exceptions\PageNotFoundException))
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#4 {main}
CRITICAL - 2019-09-17 04:29:58 --> Controller or its method is not found: {0}::{1}
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(908): CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Controller or i...')
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(259): CodeIgniter\CodeIgniter->display404errors(Object(CodeIgniter\Exceptions\PageNotFoundException))
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#4 {main}
CRITICAL - 2019-09-17 05:15:44 --> Class 'GroceryCrud\Core\GroceryCrud' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(24): Violet\Controllers\BaseController->_getGroceryCrudEnterprise()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#6 {main}
CRITICAL - 2019-09-17 05:16:33 --> Class 'GroceryCrud\Core\GroceryCrud' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(24): Violet\Controllers\BaseController->_getGroceryCrudEnterprise()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#6 {main}
CRITICAL - 2019-09-17 05:16:35 --> Class 'GroceryCrud\Core\GroceryCrud' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(24): Violet\Controllers\BaseController->_getGroceryCrudEnterprise()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#6 {main}
CRITICAL - 2019-09-17 05:17:35 --> Class 'GroceryCrud\Core\GroceryCrud' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(24): Violet\Controllers\BaseController->_getGroceryCrudEnterprise()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#6 {main}
CRITICAL - 2019-09-17 05:17:37 --> Class 'GroceryCrud\Core\GroceryCrud' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(24): Violet\Controllers\BaseController->_getGroceryCrudEnterprise()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#6 {main}
CRITICAL - 2019-09-17 05:18:27 --> include(C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\vendor/grocerycrud/enterprise/src/GroceryCrud/Core/GroceryCrud): failed to open stream: No such file or directory
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\BaseController.php(16): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(C:\\User...', 'C:\\Users\\Antoni...', 16, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\BaseController.php(16): include()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(364): require_once('C:\\Users\\Antoni...')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\Users\\Antoni...')
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Violet\\Controll...')
#5 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Violet\\Controll...')
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(4): spl_autoload_call('Violet\\Controll...')
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(364): require_once('C:\\Users\\Antoni...')
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\Users\\Antoni...')
#9 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Violet\\Controll...')
#10 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Violet\\Controll...')
#11 [internal function]: spl_autoload_call('Violet\\Controll...')
#12 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(798): class_exists('\\Violet\\Control...', true)
#13 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#14 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#15 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#16 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#17 {main}
CRITICAL - 2019-09-17 05:18:52 --> include(C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\grocerycrud\enterprise\src\GroceryCrud\Core\GroceryCrud): failed to open stream: Permission denied
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\BaseController.php(16): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(C:\\User...', 'C:\\Users\\Antoni...', 16, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\BaseController.php(16): include()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(364): require_once('C:\\Users\\Antoni...')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\Users\\Antoni...')
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Violet\\Controll...')
#5 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Violet\\Controll...')
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(4): spl_autoload_call('Violet\\Controll...')
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(364): require_once('C:\\Users\\Antoni...')
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\Users\\Antoni...')
#9 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Violet\\Controll...')
#10 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Violet\\Controll...')
#11 [internal function]: spl_autoload_call('Violet\\Controll...')
#12 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(798): class_exists('\\Violet\\Control...', true)
#13 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#14 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#15 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#16 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#17 {main}
CRITICAL - 2019-09-17 05:19:14 --> Interface 'GroceryCrud\Core\GroceryCrud\GroceryCrudInterface' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-17 05:20:33 --> Class 'GroceryCrud\Core\Layout' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\BaseController.php(86): GroceryCrud\Core\GroceryCrud->__construct(Array, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(24): Violet\Controllers\BaseController->_getGroceryCrudEnterprise()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#7 {main}
CRITICAL - 2019-09-17 05:22:27 --> Class 'GroceryCrud\Core\Cache' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\BaseController.php(90): GroceryCrud\Core\GroceryCrud->__construct(Array, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(24): Violet\Controllers\BaseController->_getGroceryCrudEnterprise()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#7 {main}
CRITICAL - 2019-09-17 05:22:46 --> Class 'GroceryCrud\Core\Validate' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\BaseController.php(91): GroceryCrud\Core\GroceryCrud->__construct(Array, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(24): Violet\Controllers\BaseController->_getGroceryCrudEnterprise()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#7 {main}
CRITICAL - 2019-09-17 05:23:01 --> Interface 'GroceryCrud\Core\Validate\ValidateInterface' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-17 05:23:19 --> Class 'GroceryCrud\Core\State' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(28): GroceryCrud\Core\GroceryCrud->render()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#6 {main}
CRITICAL - 2019-09-17 05:23:30 --> Class 'GroceryCrud\Core\State\StateFactory' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(28): GroceryCrud\Core\GroceryCrud->render()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#6 {main}
CRITICAL - 2019-09-17 05:24:05 --> Class 'GroceryCrud\Core\State\MainState' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\grocerycrud\enterprise\src\GroceryCrud\Core\GroceryCrud.php(2402): GroceryCrud\Core\State\StateFactory->getStateClass('Main', Object(GroceryCrud\Core\GroceryCrud))
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(28): GroceryCrud\Core\GroceryCrud->render()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#7 {main}
CRITICAL - 2019-09-17 05:24:20 --> Class 'GroceryCrud\Core\State\StateAbstract' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\BaseController.php(22): include()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(364): require_once('C:\\Users\\Antoni...')
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\Users\\Antoni...')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Violet\\Controll...')
#4 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Violet\\Controll...')
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(4): spl_autoload_call('Violet\\Controll...')
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(364): require_once('C:\\Users\\Antoni...')
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\Users\\Antoni...')
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Violet\\Controll...')
#9 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Violet\\Controll...')
#10 [internal function]: spl_autoload_call('Violet\\Controll...')
#11 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(798): class_exists('\\Violet\\Control...', true)
#12 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#13 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#14 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#15 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#16 {main}
CRITICAL - 2019-09-17 05:24:37 --> Interface 'GroceryCrud\Core\State\StateInterface' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-17 05:24:55 --> Class 'GroceryCrud\Core\Render\RenderAbstract' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\grocerycrud\enterprise\src\GroceryCrud\Core\GroceryCrud.php(2404): GroceryCrud\Core\State\MainState->render()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(28): GroceryCrud\Core\GroceryCrud->render()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#7 {main}
CRITICAL - 2019-09-17 05:25:21 --> Class 'GroceryCrud\Core\State\InitialState' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\grocerycrud\enterprise\src\GroceryCrud\Core\GroceryCrud.php(2402): GroceryCrud\Core\State\StateFactory->getStateClass('Initial', Object(GroceryCrud\Core\GroceryCrud))
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(28): GroceryCrud\Core\GroceryCrud->render()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#7 {main}
CRITICAL - 2019-09-17 05:25:35 --> Class 'GroceryCrud\Core\State\InitialState' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\grocerycrud\enterprise\src\GroceryCrud\Core\GroceryCrud.php(2402): GroceryCrud\Core\State\StateFactory->getStateClass('Initial', Object(GroceryCrud\Core\GroceryCrud))
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(28): GroceryCrud\Core\GroceryCrud->render()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#7 {main}
CRITICAL - 2019-09-17 05:25:52 --> Class 'GroceryCrud\Core\State\StateAbstract' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\BaseController.php(22): include()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(364): require_once('C:\\Users\\Antoni...')
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\Users\\Antoni...')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Violet\\Controll...')
#4 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Violet\\Controll...')
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(4): spl_autoload_call('Violet\\Controll...')
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(364): require_once('C:\\Users\\Antoni...')
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\Users\\Antoni...')
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Violet\\Controll...')
#9 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Violet\\Controll...')
#10 [internal function]: spl_autoload_call('Violet\\Controll...')
#11 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(798): class_exists('\\Violet\\Control...', true)
#12 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#13 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#14 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#15 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#16 {main}
CRITICAL - 2019-09-17 05:26:04 --> Class 'GroceryCrud\Core\Model' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(159): GroceryCrud\Core\State\StateAbstract->setModel()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\grocerycrud\enterprise\src\GroceryCrud\Core\State\InitialState.php(27): GroceryCrud\Core\State\StateAbstract->setInitialData()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\grocerycrud\enterprise\src\GroceryCrud\Core\GroceryCrud.php(2404): GroceryCrud\Core\State\InitialState->render()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(28): GroceryCrud\Core\GroceryCrud->render()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#9 {main}
CRITICAL - 2019-09-17 05:26:28 --> Interface 'GroceryCrud\Core\Model\ModelInterface' not found
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-17 05:26:43 --> Class 'GroceryCrud\Core\Model\ModelFieldType' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\grocerycrud\enterprise\src\GroceryCrud\Core\Model.php(176): GroceryCrud\Core\Model->getFieldTypes('tbl_account')
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(868): GroceryCrud\Core\Model->getColumnNames()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\grocerycrud\enterprise\src\GroceryCrud\Core\State\StateAbstract.php(1408): GroceryCrud\Core\State\StateAbstract->getColumnNames()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\grocerycrud\enterprise\src\GroceryCrud\Core\State\InitialState.php(65): GroceryCrud\Core\State\StateAbstract->transformFieldsList(Array, Array)
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\grocerycrud\enterprise\src\GroceryCrud\Core\State\InitialState.php(29): GroceryCrud\Core\State\InitialState->showInitData()
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\grocerycrud\enterprise\src\GroceryCrud\Core\GroceryCrud.php(2404): GroceryCrud\Core\State\InitialState->render()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(28): GroceryCrud\Core\GroceryCrud->render()
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#9 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#10 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#11 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#12 {main}
CRITICAL - 2019-09-17 05:35:43 --> Cannot modify header information - headers already sent by (output started at C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Config\Events.php:25)
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'Cannot modify h...', 'C:\\Users\\Antoni...', 31, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(31): header('Content-Type: a...')
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#7 {main}
CRITICAL - 2019-09-17 05:35:43 --> Uncaught ErrorException: Cannot modify header information - headers already sent by (output started at C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Config\Events.php:25) in C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php:160
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'Cannot modify h...', 'C:\\Users\\Antoni...', 160, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php(160): header('HTTP/1.1 500 In...', true, 500)
#2 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(ErrorException))
#3 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-17 05:35:52 --> Cannot modify header information - headers already sent by (output started at C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Config\Events.php:25)
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'Cannot modify h...', 'C:\\Users\\Antoni...', 31, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(31): header('Content-Type: a...')
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#7 {main}
CRITICAL - 2019-09-17 05:35:52 --> Uncaught ErrorException: Cannot modify header information - headers already sent by (output started at C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Config\Events.php:25) in C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php:160
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'Cannot modify h...', 'C:\\Users\\Antoni...', 160, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php(160): header('HTTP/1.1 500 In...', true, 500)
#2 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(ErrorException))
#3 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-17 05:35:54 --> Cannot modify header information - headers already sent by (output started at C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Config\Events.php:25)
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'Cannot modify h...', 'C:\\Users\\Antoni...', 31, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(31): header('Content-Type: a...')
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#7 {main}
CRITICAL - 2019-09-17 05:35:54 --> Uncaught ErrorException: Cannot modify header information - headers already sent by (output started at C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Config\Events.php:25) in C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php:160
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'Cannot modify h...', 'C:\\Users\\Antoni...', 160, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php(160): header('HTTP/1.1 500 In...', true, 500)
#2 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(ErrorException))
#3 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-17 05:45:28 --> Class 'GroceryCrud\Core\GroceryCrud' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(24): Violet\Controllers\BaseController->_getGroceryCrudEnterprise()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#6 {main}
CRITICAL - 2019-09-17 05:46:16 --> Class 'GroceryCrud\Core\GroceryCrud' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(24): Violet\Controllers\BaseController->_getGroceryCrudEnterprise()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#6 {main}
CRITICAL - 2019-09-17 05:46:18 --> Class 'GroceryCrud\Core\GroceryCrud' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(24): Violet\Controllers\BaseController->_getGroceryCrudEnterprise()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#6 {main}
CRITICAL - 2019-09-17 05:46:23 --> Class 'GroceryCrud\Core\GroceryCrud' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(24): Violet\Controllers\BaseController->_getGroceryCrudEnterprise()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#6 {main}
CRITICAL - 2019-09-17 05:47:32 --> Class 'GroceryCrud\Core\GroceryCrud' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(24): Violet\Controllers\BaseController->_getGroceryCrudEnterprise()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#6 {main}
CRITICAL - 2019-09-17 05:47:40 --> Class 'GroceryCrud\Core\GroceryCrud' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(24): Violet\Controllers\BaseController->_getGroceryCrudEnterprise()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#6 {main}
CRITICAL - 2019-09-17 05:50:13 --> include(C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\vendor/autoload.php): failed to open stream: No such file or directory
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\BaseController.php(17): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(C:\\User...', 'C:\\Users\\Antoni...', 17, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\BaseController.php(17): include()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(364): require_once('C:\\Users\\Antoni...')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\Users\\Antoni...')
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Violet\\Controll...')
#5 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Violet\\Controll...')
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(4): spl_autoload_call('Violet\\Controll...')
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(364): require_once('C:\\Users\\Antoni...')
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\Users\\Antoni...')
#9 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Violet\\Controll...')
#10 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Violet\\Controll...')
#11 [internal function]: spl_autoload_call('Violet\\Controll...')
#12 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(798): class_exists('\\Violet\\Control...', true)
#13 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#14 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#15 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#16 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#17 {main}
CRITICAL - 2019-09-17 05:50:30 --> Class 'GroceryCrud\Core\GroceryCrud' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(24): Violet\Controllers\BaseController->_getGroceryCrudEnterprise()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#6 {main}
