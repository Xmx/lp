<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-27 16:22:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$invoices' (T_VARIABLE) ~ APPPATH\classes\Controller\User.php [ 173 ] in :
2013-09-27 16:22:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-27 16:22:37 --- CRITICAL: Kohana_Exception [ 0 ]: The uzsakymas property does not exist in the Model_Invoices class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-27 16:22:37 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('uzsakymas')
#1 C:\xampp\htdocs\application\classes\Controller\User.php(178): Kohana_ORM->__get('uzsakymas')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_invoices()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-27 16:24:09 --- CRITICAL: Kohana_Exception [ 0 ]: The uzsakymas property does not exist in the Model_Invoices class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-27 16:24:09 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('uzsakymas')
#1 C:\xampp\htdocs\application\classes\Controller\User.php(178): Kohana_ORM->__get('uzsakymas')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_invoices()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-27 16:30:34 --- CRITICAL: Kohana_Exception [ 0 ]: The kaina property does not exist in the Model_Invoices class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-27 16:30:34 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('kaina')
#1 C:\xampp\htdocs\application\classes\Controller\User.php(178): Kohana_ORM->__get('kaina')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_invoices()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-27 16:30:59 --- CRITICAL: Kohana_Exception [ 0 ]: The klientas property does not exist in the Model_Invoices class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-27 16:30:59 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('klientas')
#1 C:\xampp\htdocs\application\classes\Controller\User.php(178): Kohana_ORM->__get('klientas')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_invoices()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600