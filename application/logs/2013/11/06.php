<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-06 14:44:19 --- CRITICAL: Kohana_Exception [ 0 ]: The suma property does not exist in the Model_Orders class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-11-06 14:44:19 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('suma')
#1 C:\xampp\htdocs\application\views\pages\user\orders\status.php(51): Kohana_ORM->__get('suma')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\application\views\layout\main.php(18): Kohana_View->__toString()
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#10 C:\xampp\htdocs\application\classes\Controller\User.php(95): Kohana_Response->body(Object(View))
#11 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_status()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#14 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#17 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-11-06 15:29:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: done ~ APPPATH\views\pages\user\orders\status.php [ 49 ] in C:\xampp\htdocs\application\views\pages\user\orders\status.php:49
2013-11-06 15:29:31 --- DEBUG: #0 C:\xampp\htdocs\application\views\pages\user\orders\status.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 49, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\application\views\layout\main.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\application\classes\Controller\User.php(103): Kohana_Response->body(Object(View))
#10 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_status()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\application\views\pages\user\orders\status.php:49
2013-11-06 15:29:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: done ~ APPPATH\views\pages\user\orders\status.php [ 49 ] in C:\xampp\htdocs\application\views\pages\user\orders\status.php:49
2013-11-06 15:29:32 --- DEBUG: #0 C:\xampp\htdocs\application\views\pages\user\orders\status.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 49, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\application\views\layout\main.php(18): Kohana_View->__toString()
#5 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\application\classes\Controller\User.php(103): Kohana_Response->body(Object(View))
#10 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_status()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\application\views\pages\user\orders\status.php:49