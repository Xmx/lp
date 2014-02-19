<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-14 00:02:26 --- CRITICAL: Kohana_Exception [ 0 ]: The loaded property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-14 00:02:26 --- DEBUG: #0 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('loaded')
#1 C:\xampp\htdocs\application\classes\Model\companies.php(31): Kohana_ORM->__get('loaded')
#2 C:\xampp\htdocs\application\classes\Controller\Index.php(14): Model_Companies->toStringArray('tomas.stuina@gm...')
#3 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_debug()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php:600
2013-09-14 00:02:51 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Model\companies.php [ 35 ] in C:\xampp\htdocs\application\classes\Model\companies.php:35
2013-09-14 00:02:51 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Model\companies.php(35): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 35, Array)
#1 C:\xampp\htdocs\application\classes\Controller\Index.php(14): Model_Companies->toStringArray('tomas.stuina@gm...')
#2 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Index->action_debug()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\application\classes\Model\companies.php:35
2013-09-14 10:24:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\assortment.php [ 144 ] in :
2013-09-14 10:24:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-14 15:36:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\Controller\Ajax.php [ 256 ] in C:\xampp\htdocs\application\classes\Controller\Ajax.php:256
2013-09-14 15:36:52 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\Ajax.php(256): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 256, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\Ajax.php:256
2013-09-14 15:38:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function toStringArray() ~ APPPATH\classes\Model\assortment.php [ 132 ] in :
2013-09-14 15:38:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-14 15:40:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function toStringArray() ~ APPPATH\classes\Model\assortment.php [ 132 ] in :
2013-09-14 15:40:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-14 15:41:43 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'company' in 'where clause' [ SELECT `assortment`.`id` AS `id`, `assortment`.`tagai` AS `tagai`, `assortment`.`pavadinimas` AS `pavadinimas`, `assortment`.`medziaga` AS `medziaga`, `assortment`.`x` AS `x`, `assortment`.`y` AS `y`, `assortment`.`spauda` AS `spauda`, `assortment`.`folija` AS `folija`, `assortment`.`lakas` AS `lakas`, `assortment`.`perforacija` AS `perforacija`, `assortment`.`klijai` AS `klijai`, `assortment`.`atvezti` AS `atvezti`, `assortment`.`i_sandeli` AS `i_sandeli`, `assortment`.`suvyniojimas` AS `suvyniojimas`, `assortment`.`padetis_rulone` AS `padetis_rulone`, `assortment`.`Odd` AS `Odd`, `assortment`.`OD` AS `OD`, `assortment`.`h1` AS `h1`, `assortment`.`B1` AS `B1`, `assortment`.`kiekis` AS `kiekis`, `assortment`.`imone` AS `imone`, `assortment`.`data` AS `data`, `assortment`.`busena` AS `busena`, `assortment`.`aprasymas` AS `aprasymas` FROM `assortment` AS `assortment` WHERE `pavadinimas` LIKE '%%' AND `company` IN ('Įmonė', 'UAB', 'Imone', 'firma 1', 'gvv', 'cvcv', 'fggf', 'company') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-14 15:41:43 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `assortm...', 'Model_Assortmen...', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Model\assortment.php(132): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\application\classes\Controller\Ajax.php(257): Model_Assortment->search('', 'testas@testas.l...')
#5 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_assortment()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#8 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-09-14 18:00:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\views\pages\user\orders\orders.php [ 24 ] in :
2013-09-14 18:00:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :