<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-15 18:23:12 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\Kohana\HTML.php [ 71 ] in C:\xampp\htdocs\system\classes\Kohana\HTML.php:71
2013-08-15 18:23:12 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\HTML.php(71): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 71, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\HTML.php(338): Kohana_HTML::chars(Array)
#2 C:\xampp\htdocs\system\classes\Kohana\Form.php(107): Kohana_HTML::attributes(Array)
#3 C:\xampp\htdocs\application\views\pages\admin\orders\orders.php(8): Kohana_Form::input('company_name', Array)
#4 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\application\views\layout\main.php(15): Kohana_View->__toString()
#8 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#9 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#10 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#11 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#12 C:\xampp\htdocs\application\classes\Controller\Admin.php(48): Kohana_Response->body(Object(View))
#13 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Admin->action_orders()
#14 [internal function]: Kohana_Controller->execute()
#15 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#16 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#18 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#19 {main} in C:\xampp\htdocs\system\classes\Kohana\HTML.php:71