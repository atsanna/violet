<?php defined('SYSTEMPATH') || exit('No direct script access allowed'); ?>

CRITICAL - 2019-09-12 08:08:07 --> Uncaught ErrorException: include(C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Views/errors/html/error_404.php): failed to open stream: No such file or directory in C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php:299
Stack trace:
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php(299): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(C:\\User...', 'C:\\Users\\Antoni...', 299, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php(299): include()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php(170): CodeIgniter\Debug\Exceptions->render(Object(CodeIgniter\Exceptions\PageN
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-12 08:08:36 --> Uncaught ErrorException: include(C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Views/errors/html/error_404.php): failed to open stream: No such file or directory in C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php:299
Stack trace:
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php(299): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(C:\\User...', 'C:\\Users\\Antoni...', 299, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php(299): include()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php(170): CodeIgniter\Debug\Exceptions->render(Object(CodeIgniter\Exceptions\PageN
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-12 08:10:35 --> Uncaught ErrorException: include(C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Views/errors/html/error_404.php): failed to open stream: No such file or directory in C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php:299
Stack trace:
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php(299): CodeIgniter\Debug\Exceptions->errorHandler(2, 'include(C:\\User...', 'C:\\Users\\Antoni...', 299, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php(299): include()
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Debug\Exceptions.php(170): CodeIgniter\Debug\Exceptions->render(Object(CodeIgniter\Exceptions\PageN
#0 [internal function]: CodeIgniter\Debug\Exceptions->shutdownHandler()
#1 {main}
CRITICAL - 2019-09-12 09:47:35 --> Class 'App\Controllers\BaseController' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(364): require_once()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\Users\\Antoni...')
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Auth\\Co...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Auth\\Co...')
#4 [internal function]: spl_autoload_call('Modules\\Auth\\Co...')
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(798): class_exists('\\Modules\\Auth\\C...', true)
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#10 {main}
CRITICAL - 2019-09-12 09:47:52 --> Class 'App\Controllers\BaseController' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(364): require_once()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\Users\\Antoni...')
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Auth\\Co...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Auth\\Co...')
#4 [internal function]: spl_autoload_call('Modules\\Auth\\Co...')
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(798): class_exists('\\Modules\\Auth\\C...', true)
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#10 {main}
CRITICAL - 2019-09-12 09:49:36 --> Class 'App\Controllers\BaseController' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(364): require_once()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(295): CodeIgniter\Autoloader\Autoloader->requireFile('C:\\Users\\Antoni...')
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Autoloader\Autoloader.php(257): CodeIgniter\Autoloader\Autoloader->loadInNamespace('Modules\\Auth\\Co...')
#3 [internal function]: CodeIgniter\Autoloader\Autoloader->loadClass('Modules\\Auth\\Co...')
#4 [internal function]: spl_autoload_call('Modules\\Auth\\Co...')
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(798): class_exists('\\Modules\\Auth\\C...', true)
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(325): CodeIgniter\CodeIgniter->startController()
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(45): CodeIgniter\CodeIgniter->run()
#9 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#10 {main}
CRITICAL - 2019-09-12 17:06:47 --> Call to undefined function headerTitle()
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\View\View.php(235): include()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Common.php(175): CodeIgniter\View\View->render('welcome_message', Array, NULL)
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(8): view('welcome_message')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#8 {main}
CRITICAL - 2019-09-12 17:07:01 --> Undefined variable: headerTitle
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Views\welcome_message.php(21): CodeIgniter\Debug\Exceptions->errorHandler(8, 'Undefined varia...', 'C:\\Users\\Antoni...', 21, Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\View\View.php(235): include('C:\\Users\\Antoni...')
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Common.php(175): CodeIgniter\View\View->render('welcome_message', Array, NULL)
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(8): view('welcome_message')
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(45): CodeIgniter\CodeIgniter->run()
#8 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#9 {main}
CRITICAL - 2019-09-12 17:19:53 --> Call to undefined function Config\Themes()
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\View\View.php(235): include()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Common.php(175): CodeIgniter\View\View->render('welcome_message', Array, NULL)
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(8): view('welcome_message')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#8 {main}
CRITICAL - 2019-09-12 17:20:12 --> Class 'Config\Themes' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\View\View.php(235): include()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Common.php(175): CodeIgniter\View\View->render('welcome_message', Array, NULL)
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(8): view('welcome_message')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#8 {main}
CRITICAL - 2019-09-12 17:20:18 --> Class 'Config\Themes' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\View\View.php(235): include()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Common.php(175): CodeIgniter\View\View->render('welcome_message', Array, NULL)
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(8): view('welcome_message')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#8 {main}
CRITICAL - 2019-09-12 17:20:21 --> Class 'Config\Themes' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\View\View.php(235): include()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Common.php(175): CodeIgniter\View\View->render('welcome_message', Array, NULL)
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(8): view('welcome_message')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#8 {main}
CRITICAL - 2019-09-12 17:21:02 --> Class 'Config\Themes' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\View\View.php(235): include()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Common.php(175): CodeIgniter\View\View->render('welcome_message', Array, NULL)
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(8): view('welcome_message')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#8 {main}
CRITICAL - 2019-09-12 17:21:28 --> Class 'Config\Themes' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\View\View.php(235): include()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Common.php(175): CodeIgniter\View\View->render('welcome_message', Array, NULL)
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(8): view('welcome_message')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#8 {main}
CRITICAL - 2019-09-12 17:23:00 --> Class 'Config\Themes' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\View\View.php(235): include()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Common.php(175): CodeIgniter\View\View->render('welcome_message', Array, NULL)
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(8): view('welcome_message')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#8 {main}
CRITICAL - 2019-09-12 17:26:34 --> Class 'ThemesConfig' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\View\View.php(235): include()
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Common.php(175): CodeIgniter\View\View->render('welcome_message', Array, NULL)
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\violet\Controllers\Home.php(8): view('welcome_message')
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(844): Violet\Controllers\Home->index()
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(Violet\Controllers\Home))
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\public\index.php(45): CodeIgniter\CodeIgniter->run()
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\Commands\Server\rewrite.php(34): require_once('C:\\Users\\Antoni...')
#8 {main}
CRITICAL - 2019-09-12 18:49:57 --> Class 'Psy\Shell' not found
#0 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CLI\CommandRunner.php(136): Violet\Commands\Console->run(Array)
#1 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CLI\CommandRunner.php(109): CodeIgniter\CLI\CommandRunner->runCommand('console', Array)
#2 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CLI\CommandRunner.php(85): CodeIgniter\CLI\CommandRunner->index(Array)
#3 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(840): CodeIgniter\CLI\CommandRunner->_remap('index', 'console')
#4 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(335): CodeIgniter\CodeIgniter->runController(Object(CodeIgniter\CLI\CommandRunner))
#5 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CodeIgniter.php(245): CodeIgniter\CodeIgniter->handleRequest(NULL, Object(Config\Cache), false)
#6 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\vendor\codeigniter4\framework\system\CLI\Console.php(85): CodeIgniter\CodeIgniter->run()
#7 C:\Users\Antonio\Desktop\Portable\PortableApps\XAMPP\App\xampp\htdocs\violet-framework\spark(57): CodeIgniter\CLI\Console->run()
#8 {main}
