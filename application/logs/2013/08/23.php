<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-23 13:14:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user_photo ~ APPPATH\classes\Controller\Ajax.php [ 110 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:110
2013-08-23 13:14:22 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(110): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 110, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:110