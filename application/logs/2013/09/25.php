<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-25 22:49:46 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\orders.php [ 105 ] in C:\xampp\htdocs\application\classes\Model\orders.php:105
2013-09-25 22:49:46 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\orders.php(105): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 105, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(432): Model_Orders->get_orders_by_id('??mon??', '2013-09-24', '2013-09-25', '')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_invoices()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\orders.php:105
2013-09-25 22:50:12 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\orders.php [ 105 ] in C:\xampp\htdocs\application\classes\Model\orders.php:105
2013-09-25 22:50:12 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\orders.php(105): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 105, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(432): Model_Orders->get_orders_by_id('UAB', '2013-09-24', '2013-09-25', '')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_invoices()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\orders.php:105