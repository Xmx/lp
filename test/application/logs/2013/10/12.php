<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-12 06:36:27 --- CRITICAL: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ INSERT INTO `objects` (`points`) VALUES (('', '', '', '', '')) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\prototype\modules\database\classes\Kohana\Database\Query.php:251
2013-10-12 06:36:27 --- DEBUG: #0 E:\prototype\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ob...', false, Array)
#1 E:\prototype\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\prototype\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 E:\prototype\application\classes\Controller\Manage.php(33): Kohana_ORM->save()
#4 E:\prototype\system\classes\Kohana\Controller.php(84): Controller_Manage->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\prototype\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#7 E:\prototype\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\prototype\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 E:\prototype\index.php(118): Kohana_Request->execute()
#10 {main} in E:\prototype\modules\database\classes\Kohana\Database\Query.php:251
2013-10-12 06:40:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$main' (T_VARIABLE) ~ APPPATH\classes\Controller\Inspections.php [ 30 ] in file:line
2013-10-12 06:40:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-12 06:59:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Controller\Inspections.php [ 30 ] in file:line
2013-10-12 06:59:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-12 08:21:22 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Inspections.php [ 40 ] in file:line
2013-10-12 08:21:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-12 08:25:09 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function size_of() ~ APPPATH\classes\Controller\Inspections.php [ 55 ] in file:line
2013-10-12 08:25:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-12 08:25:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Inspections.php [ 55 ] in file:line
2013-10-12 08:25:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-12 11:12:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Inspections.php [ 58 ] in file:line
2013-10-12 11:12:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-12 11:15:03 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Inspections.php [ 57 ] in file:line
2013-10-12 11:15:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-12 11:15:18 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$status ~ APPPATH\classes\Controller\Inspections.php [ 57 ] in E:\prototype\application\classes\Controller\Inspections.php:57
2013-10-12 11:15:18 --- DEBUG: #0 E:\prototype\application\classes\Controller\Inspections.php(57): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\prototype\ap...', 57, Array)
#1 E:\prototype\system\classes\Kohana\Controller.php(84): Controller_Inspections->action_check()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\prototype\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Inspections))
#4 E:\prototype\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\prototype\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 E:\prototype\index.php(118): Kohana_Request->execute()
#7 {main} in E:\prototype\application\classes\Controller\Inspections.php:57
2013-10-12 11:56:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: point ~ APPPATH\views\core\inspection\confirm.php [ 9 ] in E:\prototype\application\views\core\inspection\confirm.php:9
2013-10-12 11:56:03 --- DEBUG: #0 E:\prototype\application\views\core\inspection\confirm.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\prototype\ap...', 9, Array)
#1 E:\prototype\system\classes\Kohana\View.php(61): include('E:\prototype\ap...')
#2 E:\prototype\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\prototype\ap...', Array)
#3 E:\prototype\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 E:\prototype\application\views\layout\mobile\index.php(13): Kohana_View->__toString()
#5 E:\prototype\system\classes\Kohana\View.php(61): include('E:\prototype\ap...')
#6 E:\prototype\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\prototype\ap...', Array)
#7 E:\prototype\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 E:\prototype\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 E:\prototype\application\classes\Controller\Inspections.php(15): Kohana_Response->body(Object(View))
#10 E:\prototype\system\classes\Kohana\Controller.php(84): Controller_Inspections->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 E:\prototype\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Inspections))
#13 E:\prototype\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 E:\prototype\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 E:\prototype\index.php(118): Kohana_Request->execute()
#16 {main} in E:\prototype\application\views\core\inspection\confirm.php:9
2013-10-12 13:11:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\views\core\inspection\confirm.php [ 12 ] in file:line
2013-10-12 13:11:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-12 14:04:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: assortment ~ APPPATH\views\core\manage\manage.php [ 18 ] in E:\prototype\application\views\core\manage\manage.php:18
2013-10-12 14:04:32 --- DEBUG: #0 E:\prototype\application\views\core\manage\manage.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\prototype\ap...', 18, Array)
#1 E:\prototype\system\classes\Kohana\View.php(61): include('E:\prototype\ap...')
#2 E:\prototype\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\prototype\ap...', Array)
#3 E:\prototype\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 E:\prototype\application\views\layout\web\index.php(14): Kohana_View->__toString()
#5 E:\prototype\system\classes\Kohana\View.php(61): include('E:\prototype\ap...')
#6 E:\prototype\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\prototype\ap...', Array)
#7 E:\prototype\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 E:\prototype\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 E:\prototype\application\classes\Controller\Manage.php(16): Kohana_Response->body(Object(View))
#10 E:\prototype\system\classes\Kohana\Controller.php(84): Controller_Manage->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 E:\prototype\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#13 E:\prototype\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 E:\prototype\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 E:\prototype\index.php(118): Kohana_Request->execute()
#16 {main} in E:\prototype\application\views\core\manage\manage.php:18
2013-10-12 14:13:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\core\manage\manage.php [ 20 ] in file:line
2013-10-12 14:13:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-12 16:28:55 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$status ~ APPPATH\views\core\manage\manage.php [ 27 ] in E:\prototype\application\views\core\manage\manage.php:27
2013-10-12 16:28:55 --- DEBUG: #0 E:\prototype\application\views\core\manage\manage.php(27): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\prototype\ap...', 27, Array)
#1 E:\prototype\system\classes\Kohana\View.php(61): include('E:\prototype\ap...')
#2 E:\prototype\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\prototype\ap...', Array)
#3 E:\prototype\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 E:\prototype\application\views\layout\web\index.php(14): Kohana_View->__toString()
#5 E:\prototype\system\classes\Kohana\View.php(61): include('E:\prototype\ap...')
#6 E:\prototype\system\classes\Kohana\View.php(348): Kohana_View::capture('E:\prototype\ap...', Array)
#7 E:\prototype\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 E:\prototype\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 E:\prototype\application\classes\Controller\Manage.php(17): Kohana_Response->body(Object(View))
#10 E:\prototype\system\classes\Kohana\Controller.php(84): Controller_Manage->action_index()
#11 [internal function]: Kohana_Controller->execute()
#12 E:\prototype\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Manage))
#13 E:\prototype\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 E:\prototype\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 E:\prototype\index.php(118): Kohana_Request->execute()
#16 {main} in E:\prototype\application\views\core\manage\manage.php:27
2013-10-12 17:00:21 --- CRITICAL: View_Exception [ 0 ]: The requested view core/inpsection/qr could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in E:\prototype\system\classes\Kohana\View.php:137
2013-10-12 17:00:21 --- DEBUG: #0 E:\prototype\system\classes\Kohana\View.php(137): Kohana_View->set_filename('core/inpsection...')
#1 E:\prototype\system\classes\Kohana\View.php(30): Kohana_View->__construct('core/inpsection...', NULL)
#2 E:\prototype\application\classes\Controller\Inspections.php(80): Kohana_View::factory('core/inpsection...')
#3 E:\prototype\system\classes\Kohana\Controller.php(84): Controller_Inspections->action_qr()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\prototype\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Inspections))
#6 E:\prototype\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\prototype\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 E:\prototype\index.php(118): Kohana_Request->execute()
#9 {main} in E:\prototype\system\classes\Kohana\View.php:137
2013-10-12 17:00:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\core\inspection\qr.php [ 3 ] in file:line
2013-10-12 17:00:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-12 17:53:51 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/elgooglt/domains/elgoog.lt/public_html/test/system/classes/Kohana/Cookie.php:67
2013-10-12 17:53:51 --- DEBUG: #0 /home/elgooglt/domains/elgoog.lt/public_html/test/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /home/elgooglt/domains/elgoog.lt/public_html/test/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 /home/elgooglt/domains/elgoog.lt/public_html/test/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/elgooglt/domains/elgoog.lt/public_html/test/system/classes/Kohana/Cookie.php:67
2013-10-12 17:53:51 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/elgooglt/domains/elgoog.lt/public_html/test/system/classes/Kohana/Cookie.php:67
2013-10-12 17:53:51 --- DEBUG: #0 /home/elgooglt/domains/elgoog.lt/public_html/test/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /home/elgooglt/domains/elgoog.lt/public_html/test/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 /home/elgooglt/domains/elgoog.lt/public_html/test/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/elgooglt/domains/elgoog.lt/public_html/test/system/classes/Kohana/Cookie.php:67
2013-10-12 17:54:55 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /home/elgooglt/domains/elgoog.lt/public_html/test/system/classes/Kohana/Cookie.php:67
2013-10-12 17:54:55 --- DEBUG: #0 /home/elgooglt/domains/elgoog.lt/public_html/test/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /home/elgooglt/domains/elgoog.lt/public_html/test/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 /home/elgooglt/domains/elgoog.lt/public_html/test/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/elgooglt/domains/elgoog.lt/public_html/test/system/classes/Kohana/Cookie.php:67
2013-10-12 17:56:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_points' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-12 17:56:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-12 17:56:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_points' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-12 17:56:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-12 17:56:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_points' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-12 17:56:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line