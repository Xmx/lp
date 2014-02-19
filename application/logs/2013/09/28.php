<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-28 11:57:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: card ~ APPPATH\classes\Controller\Ajax.php [ 233 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:233
2013-09-28 11:57:16 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(233): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 233, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_misc()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:233
2013-09-28 11:58:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: companies ~ APPPATH\classes\Model\orders.php [ 64 ] in C:\xampp\htdocs\application\classes\Model\orders.php:64
2013-09-28 11:58:44 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\orders.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 64, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(237): Model_Orders->get_done('', '31', '2013-09-28', '2013-08-27')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_misc()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\orders.php:64
2013-09-28 12:01:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: companies ~ APPPATH\classes\Model\orders.php [ 64 ] in C:\xampp\htdocs\application\classes\Model\orders.php:64
2013-09-28 12:01:08 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\orders.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 64, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Ajax.php(237): Model_Orders->get_done('', 'testas@testas.l...', '2013-09-28', '2013-08-27')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_misc()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\orders.php:64
2013-09-28 12:24:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$orders' (T_VARIABLE) ~ APPPATH\classes\Model\orders.php [ 67 ] in :
2013-09-28 12:24:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-28 17:41:36 --- CRITICAL: Kohana_Exception [ 0 ]: The adresas property does not exist in the Model_Invoices class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-28 17:41:36 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('adresas')
#1 C:\xampp\htdocs\application\views\export\invoices.php(40): Kohana_ORM->__get('adresas')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\application\classes\Controller\Export.php(18): Kohana_Response->body(Object(View))
#7 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Export->action_invoices()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Export))
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-28 17:47:51 --- CRITICAL: Kohana_Exception [ 0 ]: The kodas property does not exist in the Model_Companies class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-28 17:47:51 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('kodas')
#1 C:\xampp\htdocs\application\views\export\invoices.php(52): Kohana_ORM->__get('kodas')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\application\classes\Controller\Export.php(20): Kohana_Response->body(Object(View))
#7 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Export->action_invoices()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Export))
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-28 20:18:43 --- CRITICAL: Kohana_Exception [ 0 ]: The nr property does not exist in the Model_Companies class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-28 20:18:43 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('nr')
#1 C:\xampp\htdocs\application\views\export\invoices.php(90): Kohana_ORM->__get('nr')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\application\classes\Controller\Export.php(20): Kohana_Response->body(Object(View))
#7 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Export->action_invoices()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Export))
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-28 20:25:05 --- CRITICAL: Kohana_Exception [ 0 ]: The x property does not exist in the Model_Invoices class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-28 20:25:05 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('x')
#1 C:\xampp\htdocs\application\views\export\invoices.php(169): Kohana_ORM->__get('x')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\application\classes\Controller\Export.php(22): Kohana_Response->body(Object(View))
#7 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Export->action_invoices()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Export))
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-28 20:29:17 --- CRITICAL: Kohana_Exception [ 0 ]: The kaina property does not exist in the Model_Invoices class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-28 20:29:17 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('kaina')
#1 C:\xampp\htdocs\application\views\export\invoices.php(187): Kohana_ORM->__get('kaina')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\application\classes\Controller\Export.php(22): Kohana_Response->body(Object(View))
#7 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Export->action_invoices()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Export))
#10 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-28 20:32:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\export\invoices.php [ 174 ] in :
2013-09-28 20:32:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-28 20:54:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\views\export\invoices.php [ 174 ] in :
2013-09-28 20:54:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-28 21:34:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\views\pages\user\invoices\invoices.php [ 57 ] in C:\xampp\htdocs\application\views\pages\user\invoices\invoices.php:57
2013-09-28 21:34:59 --- DEBUG: #0 C:\xampp\htdocs\application\views\pages\user\invoices\invoices.php(57): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 57, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\application\views\layout\main.php(16): Kohana_View->__toString()
#5 C:\xampp\htdocs\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 C:\xampp\htdocs\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#9 C:\xampp\htdocs\application\classes\Controller\User.php(184): Kohana_Response->body(Object(View))
#10 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_invoices()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\application\views\pages\user\invoices\invoices.php:57