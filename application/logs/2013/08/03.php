<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-03 01:07:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\pages\admin\users\users.php [ 81 ] in C:\xampp\htdocs\application\views\pages\admin\users\users.php:81
2013-08-03 01:07:49 --- DEBUG: #0 C:\xampp\htdocs\application\views\pages\admin\users\users.php(81): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 81, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\application\views\layout\main.php(15): Kohana_View->__toString()
#5 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\application\classes\Controller\Admin.php(53): Kohana_Response->body(Object(View))
#10 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin->action_users()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#13 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\application\views\pages\admin\users\users.php:81
2013-08-03 10:19:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Admin.php [ 37 ] in :
2013-08-03 10:19:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 10:24:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Model\Users.php [ 95 ] in :
2013-08-03 10:24:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 10:24:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$errors' (T_VARIABLE) ~ APPPATH\classes\Model\Users.php [ 95 ] in :
2013-08-03 10:24:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 10:24:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$errors' (T_VARIABLE) ~ APPPATH\classes\Model\Users.php [ 95 ] in :
2013-08-03 10:24:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 10:24:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Model\Users.php [ 95 ] in :
2013-08-03 10:24:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 10:24:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Model\Users.php [ 95 ] in :
2013-08-03 10:24:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 11:49:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Admin.php [ 55 ] in C:\xampp\htdocs\application\classes\Controller\Admin.php:55
2013-08-03 11:49:40 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Admin.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 55, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin->action_users()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Admin.php:55
2013-08-03 11:50:08 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\application\classes\Model\Users.php:106
2013-08-03 11:50:08 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\Users.php(106): Kohana_ORM->find()
#1 C:\xampp\htdocs\application\classes\Model\Users.php(123): Model_Users->if_exists('tomas.stuina@gm...')
#2 C:\xampp\htdocs\application\classes\Controller\Admin.php(55): Model_Users->validate(Array, false, '7')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin->action_users()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\application\classes\Model\Users.php:106
2013-08-03 11:53:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Admin.php [ 55 ] in C:\xampp\htdocs\application\classes\Controller\Admin.php:55
2013-08-03 11:53:32 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Admin.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 55, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin->action_users()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Admin.php:55
2013-08-03 12:30:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: action ~ APPPATH\classes\Controller\Ajax.php [ 24 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:24
2013-08-03 12:30:35 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(24): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 24, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:24
2013-08-03 13:51:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*' ~ APPPATH\classes\Controller\Admin.php [ 18 ] in :
2013-08-03 13:51:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 14:32:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: ok ~ APPPATH\classes\Controller\Ajax.php [ 57 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:57
2013-08-03 14:32:26 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 57, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:57
2013-08-03 16:17:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''active'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\Ajax.php [ 33 ] in :
2013-08-03 16:17:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 16:17:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''active'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\Ajax.php [ 33 ] in :
2013-08-03 16:17:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 16:17:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''active'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\Ajax.php [ 33 ] in :
2013-08-03 16:17:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 16:17:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''active'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\Ajax.php [ 33 ] in :
2013-08-03 16:17:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 16:17:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''active'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\Ajax.php [ 33 ] in :
2013-08-03 16:17:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 16:17:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''active'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\Ajax.php [ 33 ] in :
2013-08-03 16:17:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 16:18:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''active'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\Ajax.php [ 33 ] in :
2013-08-03 16:18:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 16:18:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''active'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\Ajax.php [ 33 ] in :
2013-08-03 16:18:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 16:18:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''active'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\Ajax.php [ 33 ] in :
2013-08-03 16:18:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-03 16:18:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''active'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\Ajax.php [ 33 ] in :
2013-08-03 16:18:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :