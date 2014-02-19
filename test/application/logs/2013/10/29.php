<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-29 13:39:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$i' (T_VARIABLE) ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in file:line
2013-10-29 13:39:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-29 13:41:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: i ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in C:\xampp\htdocs\test\application\classes\Controller\Welcome.php:9
2013-10-29 13:41:41 --- DEBUG: #0 C:\xampp\htdocs\test\application\classes\Controller\Welcome.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\test\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\test\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\test\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\test\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\test\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\test\application\classes\Controller\Welcome.php:9