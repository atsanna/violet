<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-09-15 04:59:44 --> Invalid file: wizard.php
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\View\View.php(223): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('wizard.php')
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Common.php(175): CodeIgniter\View\View->render('wizard', Array, NULL)
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\Appinstaller\Controllers\Home.php(12): view('wizard')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Modules\Appinstaller\Controllers\Home->index()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Modules\Appinstaller\Controllers\Home))
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#8 {main}
CRITICAL - 2019-09-15 05:00:54 --> Invalid file: ../Modules/Module/Views/wizard.php
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\View\View.php(223): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('../Modules/Modu...')
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Common.php(175): CodeIgniter\View\View->render('../Modules/Modu...', Array, NULL)
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\Appinstaller\Controllers\Home.php(12): view('../Modules/Modu...')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Modules\Appinstaller\Controllers\Home->index()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Modules\Appinstaller\Controllers\Home))
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#8 {main}
CRITICAL - 2019-09-15 05:02:17 --> Invalid file: ../Modules/Appinstaller/Views/Appinstaller/wizard.php
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\View\View.php(223): CodeIgniter\Exceptions\FrameworkException::forInvalidFile('../Modules/Appi...')
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Common.php(175): CodeIgniter\View\View->render('../Modules/Appi...', Array, NULL)
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\Appinstaller\Controllers\Home.php(16): view('../Modules/Appi...')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Modules\Appinstaller\Controllers\Home->index()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Modules\Appinstaller\Controllers\Home))
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#8 {main}
CRITICAL - 2019-09-15 05:05:09 --> CodeIgniter\View\View::main(): Failed opening required 'libs/checker.php' (include_path='\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-15 05:05:41 --> CodeIgniter\View\View::main(): Failed opening required '../libs/checker.php' (include_path='\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-15 05:07:15 --> CodeIgniter\View\View::main(): Failed opening required 'C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\../libs/checker.php' (include_path='\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-15 05:10:39 --> include_once(pages/start.php): failed to open stream: No such file or directory
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\Appinstaller\Views\wizard.php(42): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include_once(pa...', 'C:\\Users\\Antoni...', 42, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\Appinstaller\Views\wizard.php(42): include_once()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\View\View.php(235): include('C:\\Users\\Antoni...')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Common.php(175): CodeIgniter\View\View->render('../Modules/Appi...', Array, NULL)
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\Appinstaller\Controllers\Home.php(16): view('../Modules/Appi...')
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Modules\Appinstaller\Controllers\Home->index()
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Modules\Appinstaller\Controllers\Home))
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#9 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#10 {main}
CRITICAL - 2019-09-15 05:24:38 --> CodeIgniter\View\View::main(): Failed opening required 'libs/checker.php' (include_path='\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-15 05:25:16 --> CodeIgniter\View\View::main(): Failed opening required 'libs/checker.php' (include_path='\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-15 05:27:13 --> CodeIgniter\View\View::main(): Failed opening required 'libs/checker.php' (include_path='\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\php\PEAR')
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-15 05:34:43 --> Call to undefined function mysql_connect()
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\Appinstaller\pages\step2.php(36): fnCheckMysqlConnection('', '', '', '')
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\Appinstaller\Views\wizard.php(48): include_once('C:\\Users\\Antoni...')
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\View\View.php(235): include('C:\\Users\\Antoni...')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Common.php(175): CodeIgniter\View\View->render('../Modules/Appi...', Array, NULL)
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Modules\Appinstaller\Controllers\Home.php(21): view('../Modules/Appi...', Array)
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Modules\Appinstaller\Controllers\Home->step('2')
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Modules\Appinstaller\Controllers\Home))
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(46): CodeIgniter\CodeIgniter->run()
#9 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#10 {main}
CRITICAL - 2019-09-15 05:36:24 --> Uncaught ErrorException: Cannot modify header information - headers already sent by (output started at C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\violet_init.php:9) in C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php:160
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'Cannot modify h...', 'C:\\Users\\Antoni...', 160, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php(160): header('HTTP/1.1 404 No...', true, 404)
#2 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\Exceptions\PageNotFoundException))
#3 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-15 05:38:29 --> Uncaught ErrorException: Cannot modify header information - headers already sent by (output started at C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\violet_init.php:9) in C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php:160
Stack trace:
#0 [internal function]: CodeIgniter\Debug\Exceptions->errorHandler(2, 'Cannot modify h...', 'C:\\Users\\Antoni...', 160, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php(160): header('HTTP/1.1 404 No...', true, 404)
#2 [internal function]: CodeIgniter\Debug\Exceptions->exceptionHandler(Object(CodeIgniter\Exceptions\PageNotFoundException))
#3 {main}
  thrown
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
