<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-03 09:45:02 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Ajax.php [ 364 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:364
2013-10-03 09:45:02 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(364): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 364, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:364