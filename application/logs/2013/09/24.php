<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-24 09:39:42 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'company' in 'where clause' [ SELECT `assortment`.`id` AS `id`, `assortment`.`tagai` AS `tagai`, `assortment`.`pavadinimas` AS `pavadinimas`, `assortment`.`medziaga` AS `medziaga`, `assortment`.`x` AS `x`, `assortment`.`y` AS `y`, `assortment`.`spauda` AS `spauda`, `assortment`.`folija` AS `folija`, `assortment`.`lakas` AS `lakas`, `assortment`.`perforacija` AS `perforacija`, `assortment`.`klijai` AS `klijai`, `assortment`.`atvezti` AS `atvezti`, `assortment`.`i_sandeli` AS `i_sandeli`, `assortment`.`suvyniojimas` AS `suvyniojimas`, `assortment`.`padetis_rulone` AS `padetis_rulone`, `assortment`.`Odd` AS `Odd`, `assortment`.`OD` AS `OD`, `assortment`.`h1` AS `h1`, `assortment`.`B1` AS `B1`, `assortment`.`kiekis` AS `kiekis`, `assortment`.`imone` AS `imone`, `assortment`.`data` AS `data`, `assortment`.`busena` AS `busena`, `assortment`.`aprasymas` AS `aprasymas` FROM `assortment` AS `assortment` WHERE `pavadinimas` LIKE '%pava%' AND `company` IN ('Įmonė', 'UAB', 'Imone', 'firma 1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-24 09:39:42 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `assortm...', 'Model_Assortmen...', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Model\assortment.php(132): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\application\classes\Controller\Ajax.php(287): Model_Assortment->search('pava', 'testas@testas.l...')
#5 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-24 10:22:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: companies ~ APPPATH\classes\Controller\Ajax.php [ 47 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:47
2013-09-24 10:22:22 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 47, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:47
2013-09-24 10:22:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: companies ~ APPPATH\classes\Controller\Ajax.php [ 47 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:47
2013-09-24 10:22:26 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 47, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:47
2013-09-24 10:22:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: companies ~ APPPATH\classes\Controller\Ajax.php [ 47 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:47
2013-09-24 10:22:27 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 47, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:47
2013-09-24 10:22:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: companies ~ APPPATH\classes\Controller\Ajax.php [ 47 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:47
2013-09-24 10:22:28 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 47, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:47
2013-09-24 10:22:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: companies ~ APPPATH\classes\Controller\Ajax.php [ 47 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:47
2013-09-24 10:22:32 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(47): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 47, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_user()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:47
2013-09-24 10:27:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user_photo ~ APPPATH\classes\Controller\Ajax.php [ 113 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:113
2013-09-24 10:27:40 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(113): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 113, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:113