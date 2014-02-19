<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-19 12:35:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'convert_state' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\orders.php [ 7 ] in :
2013-08-19 12:35:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-19 12:35:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'convert_state' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\orders.php [ 7 ] in :
2013-08-19 12:35:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-19 12:35:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'convert_state' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\orders.php [ 7 ] in :
2013-08-19 12:35:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-19 12:36:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'convert_state' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\orders.php [ 7 ] in :
2013-08-19 12:36:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-19 12:36:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'convert_state' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\orders.php [ 7 ] in :
2013-08-19 12:36:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-19 12:36:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'convert_state' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\orders.php [ 7 ] in :
2013-08-19 12:36:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-19 12:36:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'convert_state' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\orders.php [ 7 ] in :
2013-08-19 12:36:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-19 12:36:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'convert_state' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\orders.php [ 7 ] in :
2013-08-19 12:36:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-19 12:36:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'convert_state' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\orders.php [ 7 ] in :
2013-08-19 12:36:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-19 12:36:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'convert_state' (T_STRING), expecting variable (T_VARIABLE) ~ APPPATH\classes\Model\orders.php [ 7 ] in :
2013-08-19 12:36:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-19 14:13:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Form::number() ~ APPPATH\views\pages\admin\orders\orders.php [ 50 ] in :
2013-08-19 14:13:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-19 21:44:07 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in C:\xampp\htdocs\application\classes\Model\users.php:41
2013-08-19 21:44:07 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\users.php(41): Kohana_ORM->find()
#1 C:\xampp\htdocs\application\classes\Controller\User.php(21): Model_Users->active('kiaule@girl.lt')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\users.php:41