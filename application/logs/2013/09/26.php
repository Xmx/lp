<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-26 17:19:16 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Ajax.php [ 451 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:451
2013-09-26 17:19:16 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(451): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 451, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_invoices()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:451