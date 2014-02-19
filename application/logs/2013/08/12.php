<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-12 17:07:59 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_Form::button(), called in C:\xampp\htdocs\application\views\pages\admin\users\users.php on line 68 and defined ~ SYSPATH\classes\Kohana\Form.php [ 401 ] in C:\xampp\htdocs\system\classes\Kohana\Form.php:401
2013-08-12 17:07:59 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\Form.php(401): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 401, Array)
#1 C:\xampp\htdocs\application\views\pages\admin\users\users.php(68): Kohana_Form::button('Taip')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\application\views\layout\main.php(15): Kohana_View->__toString()
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#10 C:\xampp\htdocs\application\classes\Controller\Admin.php(33): Kohana_Response->body(Object(View))
#11 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin->action_users()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#14 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#17 {main} in C:\xampp\htdocs\system\classes\Kohana\Form.php:401