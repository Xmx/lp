<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-08 12:26:09 --- CRITICAL: Kohana_Exception [ 0 ]: The tipas property does not exist in the Model_Assortment class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-11-08 12:26:09 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('tipas')
#1 C:\xampp\htdocs\application\classes\Model\assortment.php(20): Kohana_ORM->__get('tipas')
#2 C:\xampp\htdocs\application\classes\Controller\Ajax.php(197): Model_Assortment->get_assortment('ACME')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_companies()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-11-08 12:26:32 --- CRITICAL: Kohana_Exception [ 0 ]: The tipas property does not exist in the Model_Assortment class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-11-08 12:26:32 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('tipas')
#1 C:\xampp\htdocs\application\classes\Model\assortment.php(20): Kohana_ORM->__get('tipas')
#2 C:\xampp\htdocs\application\classes\Controller\Ajax.php(197): Model_Assortment->get_assortment('Bajor??')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_companies()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600