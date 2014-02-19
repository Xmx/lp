<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-19 15:40:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cards ~ APPPATH\classes\Controller\User.php [ 129 ] in C:\xampp\htdocs\application\classes\Controller\User.php:129
2013-09-19 15:40:24 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\User.php(129): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 129, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_history()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\User.php:129
2013-09-19 15:40:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cards ~ APPPATH\views\pages\user\orders\history.php [ 30 ] in C:\xampp\htdocs\application\views\pages\user\orders\history.php:30
2013-09-19 15:40:36 --- DEBUG: #0 C:\xampp\htdocs\application\views\pages\user\orders\history.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\application\views\layout\main.php(16): Kohana_View->__toString()
#5 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\application\classes\Controller\User.php(140): Kohana_Response->body(Object(View))
#10 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_history()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\application\views\pages\user\orders\history.php:30
2013-09-19 16:06:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\User.php [ 135 ] in C:\xampp\htdocs\application\classes\Controller\User.php:135
2013-09-19 16:06:34 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\User.php(135): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 135, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_history()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\User.php:135
2013-09-19 21:31:39 --- CRITICAL: ErrorException [ 8 ]: Undefined index: orders ~ APPPATH\classes\Controller\Ajax.php [ 291 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 21:31:39 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 21:31:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: orders ~ APPPATH\classes\Controller\Ajax.php [ 291 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 21:31:40 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 21:31:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: orders ~ APPPATH\classes\Controller\Ajax.php [ 291 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 21:31:42 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 21:31:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: orders ~ APPPATH\classes\Controller\Ajax.php [ 291 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 21:31:43 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 21:34:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: orders ~ APPPATH\classes\Controller\Ajax.php [ 291 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 21:34:10 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 21:34:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: orders ~ APPPATH\classes\Controller\Ajax.php [ 291 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 21:34:45 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 21:40:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: orders ~ APPPATH\classes\Controller\Ajax.php [ 291 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 21:40:46 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 21:57:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: orders ~ APPPATH\classes\Controller\Ajax.php [ 291 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 21:57:42 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 22:19:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: orders ~ APPPATH\classes\Controller\Ajax.php [ 291 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 22:19:33 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 22:19:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: orders ~ APPPATH\classes\Controller\Ajax.php [ 291 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 22:19:34 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 22:19:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: orders ~ APPPATH\classes\Controller\Ajax.php [ 291 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 22:19:34 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 22:19:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: orders ~ APPPATH\classes\Controller\Ajax.php [ 291 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 22:19:35 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 22:19:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: orders ~ APPPATH\classes\Controller\Ajax.php [ 291 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 22:19:35 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 22:19:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: orders ~ APPPATH\classes\Controller\Ajax.php [ 291 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 22:19:35 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 22:53:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: orders ~ APPPATH\classes\Controller\Ajax.php [ 291 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 22:53:45 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 22:53:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: orders ~ APPPATH\classes\Controller\Ajax.php [ 291 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291
2013-09-19 22:53:47 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(291): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 291, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:291