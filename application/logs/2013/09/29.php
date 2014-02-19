<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-29 15:07:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Ajax.php [ 514 ] in :
2013-09-29 15:07:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-29 15:43:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\classes\Controller\Ajax.php [ 525 ] in :
2013-09-29 15:43:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-29 15:43:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\classes\Controller\Ajax.php [ 525 ] in :
2013-09-29 15:43:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-29 20:10:56 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\classes\Controller\Export.php [ 38 ] in :
2013-09-29 20:10:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-29 21:11:56 --- CRITICAL: Kohana_Exception [ 0 ]: The maketo_nr property does not exist in the Model_Orders class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-29 21:11:56 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('maketo_nr')
#1 C:\xampp\htdocs\application\views\export\orders.php(125): Kohana_ORM->__get('maketo_nr')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\application\classes\Controller\Export.php(45): Kohana_Response->body(Object(View))
#7 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Export->action_orders()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Export))
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-29 21:13:45 --- CRITICAL: Kohana_Exception [ 0 ]: The pavadinimass property does not exist in the Model_Orders class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-29 21:13:45 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('pavadinimass')
#1 C:\xampp\htdocs\application\views\export\orders.php(126): Kohana_ORM->__get('pavadinimass')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\application\classes\Controller\Export.php(45): Kohana_Response->body(Object(View))
#7 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Export->action_orders()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Export))
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-29 22:04:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: order ~ APPPATH\views\export\orders.php [ 46 ] in C:\xampp\htdocs\application\views\export\orders.php:46
2013-09-29 22:04:54 --- DEBUG: #0 C:\xampp\htdocs\application\views\export\orders.php(46): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 46, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\application\classes\Controller\Export.php(45): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Export->action_orders()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Export))
#9 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\application\views\export\orders.php:46
2013-09-29 22:33:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '!' ~ APPPATH\classes\Controller\Export.php [ 34 ] in :
2013-09-29 22:33:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-29 23:50:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'HTTP' (T_STRING) ~ APPPATH\classes\Controller\Ajax.php [ 160 ] in :
2013-09-29 23:50:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-29 23:50:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'HTTP' (T_STRING) ~ APPPATH\classes\Controller\Ajax.php [ 160 ] in :
2013-09-29 23:50:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :