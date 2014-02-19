<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-22 21:21:39 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/user/orders/invoices could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\system\classes\Kohana\View.php:137
2013-09-22 21:21:39 --- DEBUG: #0 C:\xampp\htdocs\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/user/orde...')
#1 C:\xampp\htdocs\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/user/orde...', NULL)
#2 C:\xampp\htdocs\application\classes\Controller\User.php(162): Kohana_View::factory('pages/user/orde...')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_invoices()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\system\classes\Kohana\View.php:137
2013-09-22 21:25:35 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'imone' in 'where clause' [ SELECT `invoices`.`id` AS `id`, `invoices`.`uzsakymas` AS `uzsakymas`, `invoices`.`klientas` AS `klientas`, `invoices`.`israse` AS `israse`, `invoices`.`data` AS `data`, `invoices`.`vartotojas` AS `vartotojas` FROM `invoices` AS `invoices` WHERE date(data) BETWEEN '2013-09-21' AND '2013-09-22' AND `vartotojas` = '31' AND `imone` IN ('Įmonė', 'UAB', 'Imone', 'firma 1') AND `busena` = 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-22 21:25:35 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `invoice...', 'Model_Invoices', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Controller\User.php(174): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_invoices()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-22 21:51:37 --- CRITICAL: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH\classes\Controller\User.php [ 178 ] in :
2013-09-22 21:51:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', 'C:\xampp\htdocs...', 178, Array)
#1 C:\xampp\htdocs\application\classes\Controller\User.php(178): array_push(NULL, '2')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_invoices()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-09-22 22:24:06 --- CRITICAL: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH\classes\Controller\User.php [ 178 ] in :
2013-09-22 22:24:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', 'C:\xampp\htdocs...', 178, Array)
#1 C:\xampp\htdocs\application\classes\Controller\User.php(178): array_push(NULL, '2')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_invoices()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-09-22 22:24:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: invoices ~ APPPATH\classes\Controller\User.php [ 182 ] in C:\xampp\htdocs\application\classes\Controller\User.php:182
2013-09-22 22:24:36 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\User.php(182): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 182, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_invoices()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\User.php:182
2013-09-22 23:59:49 --- CRITICAL: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH\classes\Controller\User.php [ 178 ] in :
2013-09-22 23:59:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', 'C:\xampp\htdocs...', 178, Array)
#1 C:\xampp\htdocs\application\classes\Controller\User.php(178): array_push(NULL, '2')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_invoices()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in :