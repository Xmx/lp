<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-01 13:53:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: admin ~ APPPATH\classes\Controller\User.php [ 25 ] in C:\xampp\htdocs\application\classes\Controller\User.php:25
2013-10-01 13:53:33 --- DEBUG: #0 C:\xampp\htdocs\application\classes\Controller\User.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 25, Array)
#1 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\application\classes\Controller\User.php:25
2013-10-01 13:54:38 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `assortment`.`id` AS `id`, `assortment`.`tagai` AS `tagai`, `assortment`.`pavadinimas` AS `pavadinimas`, `assortment`.`medziaga` AS `medziaga`, `assortment`.`x` AS `x`, `assortment`.`y` AS `y`, `assortment`.`spauda` AS `spauda`, `assortment`.`folija` AS `folija`, `assortment`.`lakas` AS `lakas`, `assortment`.`perforacija` AS `perforacija`, `assortment`.`klijai` AS `klijai`, `assortment`.`atvezti` AS `atvezti`, `assortment`.`i_sandeli` AS `i_sandeli`, `assortment`.`suvyniojimas` AS `suvyniojimas`, `assortment`.`padetis_rulone` AS `padetis_rulone`, `assortment`.`Odd` AS `Odd`, `assortment`.`OD` AS `OD`, `assortment`.`h1` AS `h1`, `assortment`.`B1` AS `B1`, `assortment`.`kiekis` AS `kiekis`, `assortment`.`imone` AS `imone`, `assortment`.`data` AS `data`, `assortment`.`busena` AS `busena`, `assortment`.`aprasymas` AS `aprasymas`, `assortment`.`rulone` AS `rulone` FROM `assortment` AS `assortment` WHERE `imone` IN () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-10-01 13:54:38 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `assortm...', 'Model_Assortmen...', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Controller\User.php(52): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_orders()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-10-01 13:56:07 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `assortment`.`id` AS `id`, `assortment`.`tagai` AS `tagai`, `assortment`.`pavadinimas` AS `pavadinimas`, `assortment`.`medziaga` AS `medziaga`, `assortment`.`x` AS `x`, `assortment`.`y` AS `y`, `assortment`.`spauda` AS `spauda`, `assortment`.`folija` AS `folija`, `assortment`.`lakas` AS `lakas`, `assortment`.`perforacija` AS `perforacija`, `assortment`.`klijai` AS `klijai`, `assortment`.`atvezti` AS `atvezti`, `assortment`.`i_sandeli` AS `i_sandeli`, `assortment`.`suvyniojimas` AS `suvyniojimas`, `assortment`.`padetis_rulone` AS `padetis_rulone`, `assortment`.`Odd` AS `Odd`, `assortment`.`OD` AS `OD`, `assortment`.`h1` AS `h1`, `assortment`.`B1` AS `B1`, `assortment`.`kiekis` AS `kiekis`, `assortment`.`imone` AS `imone`, `assortment`.`data` AS `data`, `assortment`.`busena` AS `busena`, `assortment`.`aprasymas` AS `aprasymas`, `assortment`.`rulone` AS `rulone` FROM `assortment` AS `assortment` WHERE `imone` IN () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-10-01 13:56:07 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `assortm...', 'Model_Assortmen...', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Controller\User.php(52): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_orders()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-10-01 13:56:13 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `assortment`.`id` AS `id`, `assortment`.`tagai` AS `tagai`, `assortment`.`pavadinimas` AS `pavadinimas`, `assortment`.`medziaga` AS `medziaga`, `assortment`.`x` AS `x`, `assortment`.`y` AS `y`, `assortment`.`spauda` AS `spauda`, `assortment`.`folija` AS `folija`, `assortment`.`lakas` AS `lakas`, `assortment`.`perforacija` AS `perforacija`, `assortment`.`klijai` AS `klijai`, `assortment`.`atvezti` AS `atvezti`, `assortment`.`i_sandeli` AS `i_sandeli`, `assortment`.`suvyniojimas` AS `suvyniojimas`, `assortment`.`padetis_rulone` AS `padetis_rulone`, `assortment`.`Odd` AS `Odd`, `assortment`.`OD` AS `OD`, `assortment`.`h1` AS `h1`, `assortment`.`B1` AS `B1`, `assortment`.`kiekis` AS `kiekis`, `assortment`.`imone` AS `imone`, `assortment`.`data` AS `data`, `assortment`.`busena` AS `busena`, `assortment`.`aprasymas` AS `aprasymas`, `assortment`.`rulone` AS `rulone` FROM `assortment` AS `assortment` WHERE `imone` IN () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-10-01 13:56:13 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `assortm...', 'Model_Assortmen...', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Controller\User.php(52): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_orders()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-10-01 13:56:17 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `assortment`.`id` AS `id`, `assortment`.`tagai` AS `tagai`, `assortment`.`pavadinimas` AS `pavadinimas`, `assortment`.`medziaga` AS `medziaga`, `assortment`.`x` AS `x`, `assortment`.`y` AS `y`, `assortment`.`spauda` AS `spauda`, `assortment`.`folija` AS `folija`, `assortment`.`lakas` AS `lakas`, `assortment`.`perforacija` AS `perforacija`, `assortment`.`klijai` AS `klijai`, `assortment`.`atvezti` AS `atvezti`, `assortment`.`i_sandeli` AS `i_sandeli`, `assortment`.`suvyniojimas` AS `suvyniojimas`, `assortment`.`padetis_rulone` AS `padetis_rulone`, `assortment`.`Odd` AS `Odd`, `assortment`.`OD` AS `OD`, `assortment`.`h1` AS `h1`, `assortment`.`B1` AS `B1`, `assortment`.`kiekis` AS `kiekis`, `assortment`.`imone` AS `imone`, `assortment`.`data` AS `data`, `assortment`.`busena` AS `busena`, `assortment`.`aprasymas` AS `aprasymas`, `assortment`.`rulone` AS `rulone` FROM `assortment` AS `assortment` WHERE `imone` IN () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-10-01 13:56:17 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `assortm...', 'Model_Assortmen...', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Controller\User.php(52): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_orders()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-10-01 14:01:43 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `assortment`.`id` AS `id`, `assortment`.`tagai` AS `tagai`, `assortment`.`pavadinimas` AS `pavadinimas`, `assortment`.`medziaga` AS `medziaga`, `assortment`.`x` AS `x`, `assortment`.`y` AS `y`, `assortment`.`spauda` AS `spauda`, `assortment`.`folija` AS `folija`, `assortment`.`lakas` AS `lakas`, `assortment`.`perforacija` AS `perforacija`, `assortment`.`klijai` AS `klijai`, `assortment`.`atvezti` AS `atvezti`, `assortment`.`i_sandeli` AS `i_sandeli`, `assortment`.`suvyniojimas` AS `suvyniojimas`, `assortment`.`padetis_rulone` AS `padetis_rulone`, `assortment`.`Odd` AS `Odd`, `assortment`.`OD` AS `OD`, `assortment`.`h1` AS `h1`, `assortment`.`B1` AS `B1`, `assortment`.`kiekis` AS `kiekis`, `assortment`.`imone` AS `imone`, `assortment`.`data` AS `data`, `assortment`.`busena` AS `busena`, `assortment`.`aprasymas` AS `aprasymas`, `assortment`.`rulone` AS `rulone` FROM `assortment` AS `assortment` WHERE `imone` IN () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-10-01 14:01:43 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `assortm...', 'Model_Assortmen...', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Controller\User.php(52): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_orders()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-10-01 15:44:33 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `assortment`.`id` AS `id`, `assortment`.`tagai` AS `tagai`, `assortment`.`pavadinimas` AS `pavadinimas`, `assortment`.`medziaga` AS `medziaga`, `assortment`.`x` AS `x`, `assortment`.`y` AS `y`, `assortment`.`spauda` AS `spauda`, `assortment`.`folija` AS `folija`, `assortment`.`lakas` AS `lakas`, `assortment`.`perforacija` AS `perforacija`, `assortment`.`klijai` AS `klijai`, `assortment`.`atvezti` AS `atvezti`, `assortment`.`i_sandeli` AS `i_sandeli`, `assortment`.`suvyniojimas` AS `suvyniojimas`, `assortment`.`padetis_rulone` AS `padetis_rulone`, `assortment`.`Odd` AS `Odd`, `assortment`.`OD` AS `OD`, `assortment`.`h1` AS `h1`, `assortment`.`B1` AS `B1`, `assortment`.`kiekis` AS `kiekis`, `assortment`.`imone` AS `imone`, `assortment`.`data` AS `data`, `assortment`.`busena` AS `busena`, `assortment`.`aprasymas` AS `aprasymas`, `assortment`.`rulone` AS `rulone` FROM `assortment` AS `assortment` WHERE `imone` IN () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-10-01 15:44:33 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `assortm...', 'Model_Assortmen...', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Controller\User.php(52): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_orders()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-10-01 16:02:11 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ')' at line 1 [ SELECT `assortment`.`id` AS `id`, `assortment`.`tagai` AS `tagai`, `assortment`.`pavadinimas` AS `pavadinimas`, `assortment`.`medziaga` AS `medziaga`, `assortment`.`x` AS `x`, `assortment`.`y` AS `y`, `assortment`.`spauda` AS `spauda`, `assortment`.`folija` AS `folija`, `assortment`.`lakas` AS `lakas`, `assortment`.`perforacija` AS `perforacija`, `assortment`.`klijai` AS `klijai`, `assortment`.`atvezti` AS `atvezti`, `assortment`.`i_sandeli` AS `i_sandeli`, `assortment`.`suvyniojimas` AS `suvyniojimas`, `assortment`.`padetis_rulone` AS `padetis_rulone`, `assortment`.`Odd` AS `Odd`, `assortment`.`OD` AS `OD`, `assortment`.`h1` AS `h1`, `assortment`.`B1` AS `B1`, `assortment`.`kiekis` AS `kiekis`, `assortment`.`imone` AS `imone`, `assortment`.`data` AS `data`, `assortment`.`busena` AS `busena`, `assortment`.`aprasymas` AS `aprasymas`, `assortment`.`rulone` AS `rulone` FROM `assortment` AS `assortment` WHERE `imone` IN () ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251
2013-10-01 16:02:11 --- DEBUG: #0 C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `assortm...', 'Model_Assortmen...', Array)
#1 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\xampp\htdocs\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\application\classes\Controller\User.php(52): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\system\classes\Kohana\Controller.php(84): Controller_User->action_orders()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\xampp\htdocs\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\modules\database\classes\Kohana\Database\Query.php:251